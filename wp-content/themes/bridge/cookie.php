<?php
/*
Template Name: Cookie
*/
?>
<?php global $post, $product;?>
<div id="fm_primary" class="content-area">
    <main id="fm_main" class="site-main" role="main">
        <?php
        while ( have_posts() ) : the_post();

            // Include the page content template.
            the_content();
        endwhile;
        ?>

    </main>


</div>
<style>

    #fm_main{max-width: 1170px; margin: 0 auto}
    #fm_cookie{text-align: left;padding-top: 65px;	padding-bottom: 65px;font-size: 18px;line-height: 21px;     color: #333; font-family: 'PF DinDisplay Pro';}
    #fm_main h3 { font-size: 24px; font-weight: 500; padding-bottom: 38px;}
    #fm_main h4 {font-size: 18px; font-weight: 300; padding-bottom: 30px;}
</style>