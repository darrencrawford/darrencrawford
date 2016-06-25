<?php
 /*
 Template Name Posts: Full Width With Hero Shot 
 */


get_header(); ?>

<div class="row-fluid">
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

    <div class="hero-mask row-fluid" style="background: url(<?php echo $src[0]; ?>)">
        <div class="entry-content">
                <div class="breadcrumbs-mask">
                    <div class="breadcrumbs-container">
                        <?php full_post_theme_breadcrumbs(); ?>
                    </div>
                </div>
            <div class="headline">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <ul class="entry-meta">
                    <?php
                        $theme = wp_get_theme(); // gets the current theme

                        if ('Beaver Builder Theme' == $theme->name || 'Beaver Builder Theme' == $theme->parent_theme) { ?>
                                <li class="entry-category"><?php FLTheme::post_top_meta(); ?> </li>
                        <?php } else { ?>
                                <li class="entry-category"><?php the_category( ', ' ); ?></li>
                                <li><a href="#<?php echo $settings->comments; ?>"> <?php comments_number( 'No Responses', 'One Response', '% Responses' ); ?></a></li>
                                <li><?php the_date( 'F j, Y' ); ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="fl-content-full container">

	<div class="row">
		<div class="fl-content col-md-12">
 			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
 				<?php get_template_part('content', 'single'); ?>
 			<?php endwhile; endif; ?>
 		</div>



 	</div>
 </div>
 <?php get_footer(); ?>
