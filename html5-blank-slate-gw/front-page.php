<?php
/**
 * Template: Homepage
 *
 */

get_header(); ?>

<div class="content-wrap single-content" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'group' ); ?> role="article">
        
	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>



        
	<section class="banner-front-page" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(<?php echo $backgroundImg[0]; ?>);">
	            <h1>Callout text</h1>
   
    <div class="banner-sub-nav">

    	<div class="grid-container full">
		  <div class="grid-x grid-margin-x">
		    <div class="cell small-auto"><h2>Take Action: </h2></div>
		    <div class="cell small-auto"><a href="#" class="button">Donate</a>
		    <a href="#" class="button secondary">Contact</a></div>
		  </div>
		</div>

    </div>
</section>

        <?php the_content(); ?>




    </article>

    <?php endwhile; ?>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
