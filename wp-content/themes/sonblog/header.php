<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo("name");?></title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/assets/css/bootstrap.min.css";?>">-->
    <?php wp_head();?>
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
                            $pages=get_pages(["parent"=>0]);
                            foreach ($pages as $page):
                                $childPages = get_pages(["child_of" => $page->ID]);
                                if(!count($childPages)){
                                $link=get_page_link($page->ID);
                                $title=$page->post_title;
                        ?>
                     <li>
                        <a href="<?php $link?>"><?php echo $title;?></a>
                    </li>
                        <?php
                                }else{
                         ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           <?php echo $page->post_title;?>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php foreach ($childPages as $child):
                                                ?>
                                                    <a class="dropdown-item" href="<?php echo get_page_link($child->ID);?>"><?php echo $child->post_title?></a>
                                            <?php endforeach;?>
                                        </div>
                                    </li>
                        <?php
                                }
                            endforeach;
                        ?>
                </ul>
            </div>
    </nav>
</header>