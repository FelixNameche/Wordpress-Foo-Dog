<div class="content">

<?php get_header();
  if(have_posts()) :
  while(have_posts()) : the_post();
  the_excerpt();
  endwhile;
?>
<?php else : ?> <h2 class="center">Aucun article trouvé. Essayer une autre recherche ?</h2>
  <?php include ("404.php"); ?>
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
<p class="postmetadata">   <?php the_time('j F Y') ?> par <?php the_author() ?> |
  Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
  <?php edit_post_link('Editer', ' &#124; ', ''); ?> </p>
  </body>
</html>
