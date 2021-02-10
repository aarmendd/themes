<?php if(have_posts(  )): while(have_posts(  )): the_post(  );?>

<div class="card mb-3">
    <div class="card-body">   
        <h3>
            <?php the_title();?>
        </h3>
    
        <!-- shows only a fraction of the post in the archive -->
        <?php the_excerpt()?>

        <a href="<?php the_permalink();?>">Read more</a>
    </div>    
</div>

<?php endwhile; else: ?> 
    there are no results found
<?php endif;?>