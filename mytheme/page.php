<?php get_header();?>

<div class="container">
    <h1>
        <?php the_title();?>
    </h1>

    <?php if(is_active_sidebar('id-sidebar')):?>
        <?php dynamic_sidebar('id-sidebar');?>
    <?php endif;?>    

    <?php get_template_part( "includes/section", "content");?>
</div>

 <?php get_footer();?>