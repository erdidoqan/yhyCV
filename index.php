<!DOCTYPE html>

<?php include 'setting.php'; ?>
<html class="no-js"> 
    <head>
      <?php require_once("header.php"); ?>
    </head>
    <body>
      <?php require_once("navbar.php"); ?>
    <section id="page-welcome" class="page-welcome">
      <div>
          <ul class="slider-controls">
              <li><a id="vegas-next" class="next" href="#"></a></li>
              <li><a id="vegas-prev" class="prev" href="#"></a></li>
          </ul>
        </div>
        <div class="container">
            <div class="row">
                <header class="centered">
                    <h1>Yahya Kanibol</h1>
                    <p>Architect</p>
                </header>
                <div class="social-icons">
                        <a href="https://twitter.com/" target="_blank" class="btn btn-round btn-clear btn-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/CHRKSS" target="_blank" class="btn btn-round btn-clear btn-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.dribbble.com/" target="_blank" class="btn btn-round btn-clear btn-dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-round btn-clear btn-instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank" class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                         <a href="https://www.pinterest.com/" target="_blank" class="btn btn-round btn-clear btn-pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="https://www.google.com/" target="_blank" class="btn btn-round btn-clear btn-google"><i class="fa fa-google-plus"></i></a>
                    
                </div>
                <a href="#page-contact" class="btn btn-default hire-me">Contact Me</a>
            </div>
        </div>
    </section><!-- welcome ends -->
    <!-- profile begins -->
    <section id="page-profile" class="page-profile">
      <div class="container">
      <?php $sql1 = ("SELECT * FROM tbl_personal_profile ORDER BY id DESC LIMIT 0,1");
                     $result = mysql_query($sql1);
                     while ($per_pro = mysql_fetch_array($result)) { ?>
                <header class="section-header">
                    <h2 class="section-title">Personal Profile</h2>
                    <div class="spacer"></div>
                       
                    <p class="section-subtitle"><?php echo ($per_pro['subtitle']) ?> </p>
                </header>
            <div class="row">
              <div class="col-md-3">
                 <div class="profile"><img src="img/profile.png" alt="profile"/></div> 
              </div>

               <div class="col-md-9">
                <?php echo ($per_pro['article']) ?> 
              </div>
            </div><?php }?>
      </div> 
    </section><!-- profile ends -->
    <!-- skills begins -->
     <section id="page-skills" class="page-skills">
       <div class="container">
           <?php $sql1 = ("SELECT * FROM tbl_skills ORDER BY id DESC LIMIT 0,1");
                     $result = mysql_query($sql1);
                     while ($skills = mysql_fetch_array($result)) { ?>
                 <header class="section-header">
                    <h2 class="section-title"><span>Skills</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle"><?php echo ($skills['subtitle']) ?> </p>
                </header>
            <div class="row">
              <div class="col-md-2">
               <span class="chart" data-percent="<?php echo ($skills['percentages_1']) ?>">
                      <span class="percent"></span>
                      <h3><?php echo ($skills['skill_1']) ?></h3>
               </span>
            </div>
               <div class="col-md-2 ">
               <span class="chart" data-percent="<?php echo ($skills['percentages_2']) ?>">
                      <span class="percent"></span>
                      <h3><?php echo ($skills['skill_2']) ?></h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="<?php echo ($skills['percentages_3']) ?>">
                      <span class="percent"></span>
                       <h3><?php echo ($skills['skill_3']) ?></h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="<?php echo ($skills['percentages_4']) ?>">
                      <span class="percent"></span>
                      <h3><?php echo ($skills['skill_4']) ?></h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="<?php echo ($skills['percentages_5']) ?>">
                      <span class="percent"></span>
                      <h3><?php echo ($skills['skill_5']) ?></h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="<?php echo ($skills['percentages_6']) ?>">
                      <span class="percent"></span>
                       <h3><?php echo ($skills['skill_6']) ?></h3>
               </span>
            </div>
          </div><?php } ?>
        </div>
    </section><!-- skills ends -->
    <!-- education begins -->
     <section id="page-education" class="page-education">
       <div class="container">
       <?php $sql1 = ("SELECT * FROM tbl_education ORDER BY id DESC LIMIT 0,1");
                     $result = mysql_query($sql1);
                     while ($education = mysql_fetch_array($result)) { ?>
                <header class="section-header">
                    <h2 class="section-title"><span>Education</span></h2>
                     <div class="spacer"></div>
                    <p class="section-subtitle"><?php echo ($education['subtitle']) ?> </p>
                </header>
                <div class="row">
                 <div class="col-md-6">
                  <article class="education">
                    <header>
                      <h3><?php echo ($education['header_1']) ?></h3>
                      
                    </header>
                      <p><?php echo ($education['article_1']) ?></p>
                  </article>
                </div>
                <div class="col-md-6">
                <article class="education">
                  <header>
                    <h3><?php echo ($education['header_2']) ?></h3>
                    
                  </header>
                    <p><?php echo ($education['article_2']) ?></p>
                </article>
                </div>
            </div><?php } ?>
       </div>
    </section><!-- education ends -->
    <!-- experience begins -->
     <section id="page-experience" class="page-experience">
       <div class="container">
        <?php $sql1 = ("SELECT * FROM tbl_experience ORDER BY id DESC LIMIT 0,1");
                     $result = mysql_query($sql1);
                     while ($experience = mysql_fetch_array($result)) { ?>
                <header class="section-header">
                    <h2 class="section-title"><span>Experience</span></h2>
                     <div class="spacer"></div>
                    <p class="section-subtitle"><?php echo ($experience['subtitle']) ?></p>
                </header>
                <div class="row">
                 <div class="col-md-4">
                  <article class="experience">
                    <header>
                      <h3><?php echo ($experience['header_1']) ?></h3>
                      
                    </header>
                      <p><?php echo ($experience['article_1']) ?></p>
                  </article>
                </div>
                  <div class="col-md-4">
                  <article class="experience">
                    <header>
                      <h3><?php echo ($experience['header_2']) ?></h3>
                       
                    </header>
                      <p><?php echo ($experience['article_2']) ?></p>
                  </article>
                </div>
                <div class="col-md-4">
                <article class="experience">
                  <header>
                    <h3><?php echo ($experience['header_3']) ?></h3>
                     
                  </header>
                    <p><?php echo ($experience['article_3']) ?></p>
                </article>
                </div>
            </div><?php } ?>
        </div>
    </section><!-- experience ends -->
    <!-- portfolio begins -->
     <section id="page-portfolio" class="page-portfolio">
          <div class="container">
          <?php $sql1 = ("SELECT * FROM tbl_portfolio ORDER BY id DESC LIMIT 0,1");
                     $result = mysql_query($sql1);
                     while ($portfolio = mysql_fetch_array($result)) { ?>
            <div class="row">
                <header class="section-header">
                    <h2 class="section-title"><span>Portfolio</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle"><?php echo ($portfolio['subtitle']) ?> </p>
                </header>
           
                <div id="grid-controls-wrapper">
                <ul class="nav nav-pills center-pills grid-controls">
                  <li class="active filter"><a href="javascript:void(0)" data-filter="*">All</a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".branding"><?php echo ($portfolio['filter_1']) ?></a></li>   
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".design"><?php echo ($portfolio['filter_2']) ?></a></li>            
                  <li class="filter"><a href="javascript:void(0)"  data-filter=".photography"><?php echo ($portfolio['filter_3']) ?></a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".web"><?php echo ($portfolio['filter_4']) ?></a></li>
                </ul>
              </div>
<<<<<<< Updated upstream

              <?php require_once("portifolio.php"); ?>

=======
              <?php require_once("portifolio.php"); ?>
>>>>>>> Stashed changes
            </div><?php } ?>
        </div>
    </section><!-- portfolio ends -->
    <!-- contact begins -->
     <section id="page-contact" class="page-contact">
          <div class="container">
              <header class="section-header">
                  <h2 class="section-title"><span>Contact</span></h2>
                    <div class="spacer"></div>
                       <p class="section-subtitle">Contact Information </p>
              </header>
        <div class="row">
          <div class="col-sm-5 contact-info">
            <h3>Contact Info</h3>
            <p><i class="fa fa-map-marker"></i> Istanbul </p>
            <p><i class="fa fa-phone"></i> +90 (553) 586 98 08</p>
            <p><i class="fa fa-envelope-o"></i> <a style="color:white;" href="mailto:info@yhyknbl.com?Subject=Hello%20again" target="_top">
info@yhyknbl.com</a> </p>
          </div>
          
          <div class="col-sm-7">
          <h3>Get in Touch</h3>
              <form action="getintouch.php" method="post" class="form-horizontal" id="contact-form">
        <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
                <input type="text" name="name" id="name" placeholder="Your name" class="form-control input-lg ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Email Address</label>
            <div class="controls">
                <input type="text" name="email" id="email" placeholder="Your email address" class="form-control input-lg">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="message">Message</label>
            <div class="controls">
                <textarea name="message" id="message" rows="8" class="form-control input-lg"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-default btn-lg btn-block">Submit Message</button>
        </div>
    </form><!-- End contact-form -->
          </div>
        </div><!-- End row -->

        </div>
    </section> <!-- contact ends -->

<div class="footer">
  <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright ©  2015. All right reserved. Created by, <a href="https://www.facebook.com/erdi.doqan">Erdi Dogan</a></p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                  <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
</div>
        
    </body>
</html>
