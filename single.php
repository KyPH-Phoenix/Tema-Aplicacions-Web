<?php 
    get_header()
?>
<br>
<div class="container bg trans">
    <br>
    <h1><?-wp_title($sep = '')?></h1>
    <br>
    <?php the_content()?>
    <hr>
    <footer class="">
    <p>&copy; Cybergarden 2077</p>
    </footer>
</div>

<?php 
    get_footer()
?>