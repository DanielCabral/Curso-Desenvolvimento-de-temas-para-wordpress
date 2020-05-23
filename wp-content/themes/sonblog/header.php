<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo("name");?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="<?php bloginfo("url");?>"><?php bloginfo("name");?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav">
                        <?php
                            $pages=get_pages();
                            foreach ($pages as $page):
                            $link=get_page_link($page->ID);
                            $title=$page->post_title;
                        ?>
                     <li>
                        <a href="<?php $link?>"><?php echo $title;?></a>
                    </li>
                        <?php
                            endforeach;
                        ?>
                </ul>
            </div>
    </nav>
</header>