<?php get_header(); ?>

    <main class="site-content site-width-content">
	    <?php
	    if (have_posts()) {
		    while (have_posts()) {
			    the_post();
                the_title('<h1>', '</h1>');
			    the_content();
		    }
	    }
	    ?>
    </main>

<?php get_footer(); ?>
