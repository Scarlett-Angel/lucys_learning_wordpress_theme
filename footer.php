<footer class="site-footer">
    
    <?php
        $args = array(
            'theme_location' => 'footer'
        )
    ?>
    <nav class="site-nav">
        <?php wp_nav_menu( $args ); ?>
    </nav>

<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

</div><!--container-->

<?php wp_footer(); ?>

</body>

<footer><?php wp_footer(); ?></footer>
</html>

