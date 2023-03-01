<?php

    get_header();

?>

<main id="primary" class="site-main">

<?php if ( have_posts() ) : ?>

    <header class="page-header">
        <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
    </header><!-- .page-header -->

    <?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();

        echo "<h2>" . get_the_title() . "</h2>";
        echo "<p>" . get_the_content() . "</p>";
        echo "<img src='" . get_the_post_thumbnail_url() . "' width='200' height='150'>";

        //get_template_part( 'template-parts/content', get_post_type() );

    endwhile;

    the_posts_navigation();

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->



<?php
    get_footer();


