<?php get_header(); ?>

<div class="row">
<div class="span5 visible-desktop"><?php get_sidebar(left); ?></div>
<div class="span19 side">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-header">
  <h1><?php the_title(); ?></h1>
</div>

<?php the_content(); ?>


<?php endwhile; else: ?>
	<p>Fant ingenting her.</p>
<?php endif; ?>

</div>
</div>

<?php get_footer(); ?>