<div>

  <ul id="grid" class="grid-wrapper">
  <?php 
  $por_fil = $portfolio['filter_1'];
  $sql = ("SELECT * from tbl_images where filter_1='$por_fil' order by id");
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
      $por_fil2 = $portfolio['filter_2'];
      $sql = ("SELECT * from tbl_images where filter_1='$por_fil2' order by id");
        $result = mysql_query($sql);
        while ($filter_1 = mysql_fetch_array($result)) {
    ?>
      <li class="mix design">
        <a href="<?php echo ($filter_1['url']) ?>">
          <div class="overlay">
            <i class="fa fa-search-plus"></i>
          </div>
           <img src="<?php echo ($filter_1['url']) ?>"  alt="<?php echo ($filter_1['filter_1']) ?>" >
        </a>
      </li><?php } ?>
      <?php 
      $por_fil3 = $portfolio['filter_3'];
      $sql = ("SELECT * from tbl_images where filter_1='$por_fil3' order by id");
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
      $por_fil4 = $portfolio['filter_4'];
      $sql = ("SELECT * from tbl_images where filter_1='$por_fil4' order by id");
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