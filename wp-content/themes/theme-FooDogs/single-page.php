<div class="content">
<?php get_header();
  if(have_posts()) :
  while(have_posts()) : the_post();
  the_content();
?>
  <div class="comments-template"> <?php comments_template(); ?> </div>
<?php
  endwhile;
?>
<?php else : ?> <p>Désolé, aucun article ne correspond à vos critères.</p>
<?php
  endif;
?>
</div>
<div class= "post" id="post-<?php the_ID(); ?>">
  <div class= "post_content">
  </div>
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
</div>
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="postmetadata">
  <?php the_time('j F Y') ?> par <?php the_author() ?> |
  Cat&eacute;gorie: <?php the_category(', ') ?> |
</p>
  </body>
</html>
