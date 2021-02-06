<?php 
    get_header()
?>

<div class="container bg">
    <br>
    <h1><?-wp_title($sep = '')?></h1>
    <br>
    <?php the_content()?>
</div>

<hr class="container bg">

<?php 
    get_footer()
?>