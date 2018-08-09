<?php get_header();?>
  <section class="wrapper">
  <div class="content">
<?php if(have_posts()) :
    while(have_posts()) : the_post();
    the_content();
  endwhile;
  ?>
<?php else : ?>
  <?php include ("error.php"); ?>
  <?php
endif;
?>
<div class= "post" id="post-<?php the_ID(); ?>">
  <div class= "post_content">
  </div>

</div>
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="postmetadata">
  <?php the_time('j F Y'); ?> par <?php the_author(); ?> |
  Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
  <?php edit_post_link('Editer', ' &#124; ', ''); ?>
</p>
</div>
<?php get_sidebar(); ?>
</section>
 <?php include('footer.php'); ?>
