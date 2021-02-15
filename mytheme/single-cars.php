<!-- the single default php template for a single blog post -->

<?php get_header();?>

<div class="container">

    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url("blog-small");?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>

    <h1>
        <?php the_title();?>
    </h1>

    <?php get_template_part( "includes/section", "cars");?>

    <!-- Link for the page break -->
    <?php wp_link_pages();?>

    <ul>
        <li>
            Color: <?php echo get_post_meta($post->ID, 'Color', true );?>
        </li>
        <?php if(get_post_meta($post->ID, 'Registration', true )):?>
        <li>
            Registration: <?php echo get_post_meta($post->ID, 'Registration', true );?>
        </li>
        <?php endif;?>
    </ul>
    
</div>

 <?php get_footer();?>