<!-- the single default php template for a single blog post -->

<?php get_header();?>

<div class="container">
    <h1>
        <?php the_title();?>
    </h1>

    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url("blog-small");?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>

    <?php get_template_part( "includes/section", "blogcontent");?>

    <!-- Link for the page break -->
    <?php wp_link_pages();?>
    
</div>

 <?php get_footer();?>