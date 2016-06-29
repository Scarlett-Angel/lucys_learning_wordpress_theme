<?php
get_header();

if (have_posts()):
	while (have_posts()): the_post(); ?>
    
    <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  <!-- get the title of all posts -->
        <h3><?php the_content(); ?></h3>  <!-- get the title of all posts -->
    </article>
    
    
    <?php endwhile;
	else :
        echo '<p>No content found</p>';
endif;

get_footer();

?>
