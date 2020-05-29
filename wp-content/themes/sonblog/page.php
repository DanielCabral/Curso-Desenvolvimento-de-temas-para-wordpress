<?php get_header();?>
<?php get_header("personalizado");?>
<div class="container">
    <h1><?php single_post_title()?></h1>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10 ">
            <?php
            if (have_posts() ) : the_post();
                the_content();
            endif; ?>
        </div>
    </div>


    <?php get_footer("personalizado");?>
    <?php get_footer();?>
