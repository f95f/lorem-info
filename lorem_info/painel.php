

<?php
    $title = 'Painel de Serviços';
    include('header.php');
?>

<main>        
    <?php

        $cardInfo = [
            ['img' => '',
             'title' => 'simular orçamento', 
             'desc' => 'Simula uma ordem de serviço antes de criá-la.']
            ];

        for($i = 0; $i < 8; $i++){
            echo '<div class = "card" id = "action-'.$i.'">';
            #if($i == 0){
                echo '<img class = "icons" src = "'.$cardInfo[0]['img'].'">';
                echo '<h3>'.$cardInfo[0]['title'].'</h3>';
                echo '<p>'.$cardInfo[0]['desc'].'</p>';
            #}
            echo '</div>';
        }
        
    ?>
</main>

<?php include('footer.php')?>
