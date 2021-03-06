<?php

/*
Template Name: Contact
*/
?>

<?php get_header();?>

<div class="container">
    <h1>
        <?php the_title();?>
    </h1>

    <!-- In this example we split the contact page in 2 sides -->
<div class="row">
    <div class="col-lg-6">
        The left side of the content
    </div>

    <div class="col-lg-6">
         <?php get_template_part( "includes/section", "content");?>
    </div>
</div>


</div>

 <?php get_footer();?>