Direction = {
    LEFT : 'left',
    RIGHT : 'right'
}

Shoji = function(element) {
    this.offset = 0;
    var shoji = $(element)
    var door = shoji.find('.shoji-door');
    this.getDoor = function() { return door; };
    var leftPanel = shoji.find('.shoji-panel-left');
    this.getLeftPanel = function() { return leftPanel; };
    var rightPanel = shoji.find('.shoji-panel-right');
    this.getRightPanel = function() { return rightPanel; };
};

Shoji.prototype.slide = function(direction, width, duration, complete) {
    var operator;
    var offset;
    switch (direction) {
    case Direction.LEFT:
        operator = '-=';
        offset = -width;
        break;
    case Direction.RIGHT:
        operator = '+=';
        offset = width;
        break;
    default:
        return;
    }
    this.getDoor().animate({ left: operator + width }, duration, 'linear', complete);
    this.offset += offset;
};

Shoji.prototype.toggle = function(direction, duration) {
    var offset = this.offset;
    var leftPanel = this.getLeftPanel();
    var rightPanel = this.getRightPanel();
    switch (direction) {
    case Direction.LEFT:
        if (offset < 0) { // left
            this.slide(Direction.RIGHT, -offset, duration, function() { rightPanel.hide(); });
        } else if (offset == 0) { // docked
            rightPanel.show();
            this.slide(Direction.LEFT, rightPanel.width(), duration);
        } else if (offset > 0) { // right
            this.slide(Direction.LEFT, offset, duration, function() {
                leftPanel.hide();
                rightPanel.show();
                this.slide(Direction.LEFT, rightPanel.width(), duration);
            });
        }
        break;
    case Direction.RIGHT:
        if (offset < 0) { // left
            this.slide(Direction.RIGHT, -offset, duration, function() {
                rightPanel.hide();
                leftPanel.show();
                this.slide(Direction.RIGHT, leftPanel.width(), duration);
            });
        } else if (offset == 0) { // docked
            leftPanel.show();
            this.slide(Direction.RIGHT, leftPanel.width(), duration);
        } else if (offset > 0) { // right
            this.slide(Direction.LEFT, offset, duration, function() { leftPanel.hide(); });
        }
        break;
    }
};

$(function() {
    var shoji = new Shoji('#shoji');
    $('[data-slide]').click(function() { shoji.toggle($(this).data('slide'), 130); });
});

$({ someValue: 0 }).animate({ someValue: Math.floor(Math.random() * 3000) }, {
    duration: 3000,
    easing: 'swing', // can be anything
    step: function () { // called on every step
        // Update the element's text with rounded-up value:
        $('.count').text(commaSeparateNumber(Math.round(this.someValue)));
    }
});

function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
}