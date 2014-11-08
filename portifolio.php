<div>

  <ul id="grid" class="grid-wrapper">
  <?php 
<<<<<<< HEAD
    $sql = ("SELECT * from tbl_images  order by id");
=======
    $sql = ("SELECT * from tbl_images where filter_1='branding' order by id");
>>>>>>> origin/master
      $result = mysql_query($sql);
      while ($filter_1 = mysql_fetch_array($result)) {
  ?>
      <li class="mix web" >
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
          <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a> 
      </li><?php } ?>

      <li class="mix branding">
        <a href="img/portfolio/large/05.png">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
          <img src="img/portfolio/small/05.png" alt="" >
        </a>
      </li>
      <li class="mix photography">
        <a href="img/portfolio/large/09.png">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
          <img src="img/portfolio/small/09.png" alt="" >
        </a>
      </li>
      <li class="mix design">
        <a href="img/portfolio/large/11.jpg">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
          <img src="img/portfolio/small/11.jpg" alt="" >
        </a>
      </li>
  </ul>
</div>