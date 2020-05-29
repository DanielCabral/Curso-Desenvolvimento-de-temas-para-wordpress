<?php get_header();?>
<?php get_header("personalizado");?>
<div class="container">
    <h1><?php single_post_title()?></h1>
    <div class="row">

        <div class="col-md-10 ">
            <?php
            if (have_posts() ) : the_post();
                the_post_thumbnail("medium");
                the_content();
            endif; ?>
        </div>
        <div class="col-md-2">
            <?php get_sidebar(); ?>
        </div>
    </div>


    <?php get_footer("personalizado");?>
    <?php get_footer();?>
