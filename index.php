<?php 
    get_header()
?>

<div class="container bg">
    <br>
    <h1><?-wp_title($sep = '')?></h1>
    <br>
    <?php 
        ;
        while(have_posts()){
            the_post();
            ?>
            <h2><a href="<?-the_permalink()?>"><?-the_title()?></a></h2>
            <p><?-the_excerpt()?></p>
            <?php
        } 
    ?>
</div>

<hr class="container bg">

<?php 
    get_footer()
?>
