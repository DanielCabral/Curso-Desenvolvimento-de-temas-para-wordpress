<?php get_header(); ?>
<?php get_header("personalizado"); ?>
<style>
    .error-template {padding: 40px 15px;text-align: center;}
    .error-actions {margin-top:15px;margin-bottom:15px;}
    .error-actions .btn { margin-right:10px; }
</style>
<div class="container">
    <h1>Erro 404</h1>
    <div class="row">
        <div class="col-md-12 ">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
                <div class="error-actions">
                    <a href="http://www.jquery2dotnet.com" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="http://www.jquery2dotnet.com" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>



        <div class="col-md-2">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>


<?php get_footer("personalizado"); ?>
<?php get_footer(); ?>
