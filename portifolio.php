<div>

  <ul id="grid" class="grid-wrapper">
  <?php 
    $sql = ("SELECT * from tbl_images where filter_1='$portfolio['filter_1']' order by id");
      $result = mysql_query($sql);
      while ($filter_1 = mysql_fetch_array($result)) {
  ?>
      <li class="mix branding" >
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
          <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a> 
      </li><?php } ?>
      <?php 
      $sql = ("SELECT * from tbl_images where filter_1='design' order by id");
        $result = mysql_query($sql);
        while ($filter_1 = mysql_fetch_array($result)) {
    ?>
      <li class="mix desing">
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
           <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a>
      </li><?php } ?>
      <?php 
      $sql = ("SELECT * from tbl_images where filter_1='photography' order by id");
        $result = mysql_query($sql);
        while ($filter_1 = mysql_fetch_array($result)) {
    ?>
      <li class="mix photography">
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
           <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a>
      </li><?php } ?>
      <?php 
      $sql = ("SELECT * from tbl_images where filter_1='website' order by id");
        $result = mysql_query($sql);
        while ($filter_1 = mysql_fetch_array($result)) {
    ?>
      <li class="mix web">
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
          <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a>
      </li><?php } ?>
  </ul>
</div>