<?php get_header(); ?>
<?php get_header("personalizado"); ?>
<div class="container">
    <h3>Resultados da busca por: <?php echo get_search_query();?></h3>
    <div class="row">
        <div class="col-md-10 ">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
                <p>
                    <?php
                    if (have_posts()) :
                    while (have_posts()):
                    the_post();
                    ?>
                    <div class="card" style="width: 18rem;">
                        <?php
                        if (has_post_thumbnail()):
                            ?>
                            <img class="card-img-top" src="<?php echo get_the_post_thumbnail(); ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                <p class="card-text"><?php echo $post->post_content; ?></p>
                <a href="<?php echo get_the_permalink() ?>" class="btn btn-primary">Leia mais...</a>
            </div>
        </div>
        <?php
        endwhile;
        else:
            echo "<p>Não há noticias</p>";
            ?>
        <?php endif; ?>
        </p>
    </div>
</div>


<div class="col-md-2">
    <?php get_sidebar(); ?>
</div>
</div>

</div>


<?php get_footer("personalizado"); ?>
<?php get_footer(); ?>
