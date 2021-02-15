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
            Color: <?php the_field('color');?>
        </li>
        <li>
            Registration: <?php the_field('registration');?>
        </li>
    </ul>

    <?php if( get_field('gallery') ): ?>
    <img src="<?php the_field('gallery'); ?>" />
    <?php endif; ?>
    
</div>

 <?php get_footer();?>

 <!-- //Loop for the repeater in ACF Pro -->
 <!-- <h3>Features</h3>
    <ul>
         <!-- <?php if(have_rows('id of the field')):?> -->
            <!-- <?php while(have_rows('id of the field')): the_row(); $feature = get_sub_field('id of the subfield');?> -->
                <!-- <li> -->
                    <!-- <?php echo $feature;?> -->
                <!-- </li> -->
            <!-- <?php endwhile;?> -->
        <!-- <?php endif;?> --> 
    <!-- </ul>        -->
