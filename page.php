<?php
get_header();

if (have_posts()):
	while (have_posts()): the_post(); ?>
    
    <article class="post page">
        <h2><?php the_title(); ?></h2>  <!-- get the title of all posts -->
        <h3><?php the_content(); ?></h3>  <!-- get the content of all posts -->
    </article>
    
    
    <?php endwhile;
	else :
        echo '<p>No content found</p>';
endif;

get_footer();

?>
