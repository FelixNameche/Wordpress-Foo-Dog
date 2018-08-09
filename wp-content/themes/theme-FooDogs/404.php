<?php include ('header-article.php'); ?>
<section class="wrapper-singular">
    <div class="content">
     <section class="container-404">
       <div class="title-404">
     <h1>404</h1>
     <p>It looks like nothing was found at this location. Maybe try a search?</p>
      </div>
        <div class="form-404">
          <form class="search-form" action="index.php" method="post">
            <div class="inputs-404">
            <input class="text" type="text" name="search" value="" placeholder="Search and hit enter">
            <input class="submit" type="submit" name="submit" value="">
          </div>
          </form>
        </div>
        </section>
      </div>
   <?php include ('sidebar-article.php'); ?>
 </section>
   <?php get_footer(); ?>
