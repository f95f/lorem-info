

<?php
    $title = 'Painel de Serviços';
    include('header.php');
?>

<main>        
    <?php
    
        for($i = 0; $i < 8; $i++){
            echo '<div class = "card" id = "action-'.$i.'">'. $i + 1 .'</div>';
        }
    
    ?>
</main>

<?php include('footer.php')?>
