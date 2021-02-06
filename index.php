<?php 
    get_header()
?>

<br>
<div class="container bg trans">
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

<hr>
<footer class="">
<p>&copy; Cybergarden 2077</p>
</footer>
</div>

<?php 
    get_footer()
?>
