<?php get_search_form();?>
<h3>Categorias da SON</h3>

<ul class="list-group">
    <?php
        $categories=get_categories();
        foreach ($categories as $category):
    ?>
        <li class="list-group-item"><a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name?></a></li>
    <?php
        endforeach;
    ?>
</ul>

<h3>Tags da SON</h3>
<ul class="list-group">
    <?php
    $tags=get_tags();
    foreach ($tags as $tag):
        ?>
        <li class="list-group-item"><a href="<?php get_tag_link($tag->term_id)?>"><?php echo $tag->name?></a></li>
    <?php
    endforeach;
    ?>
</ul>