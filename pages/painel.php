

<?php
    $title = 'Painel de Serviços';
    include('header.php');
?>

<main>        
    <?php

        $cardInfo = 
        [
            [
                'img' => 'icon_orçamento.png',
                'title' => 'Simular Orçamento', 
                'desc' => 'Simula uma ordem de serviço antes de criá-la.'
            ],
            [
                'img' => 'icon_criarOS.png',
                'title' => 'Criar OS', 
                'desc' => 'Cria uma nova ordem de serviço.'
            ],
            [
                'img' => 'icon_consultarOS.png',
                'title' => 'Consultar OS', 
                'desc' => 'Pesquisar, alterar ou excluir ordens de serviço.'
            ],
            [
                'img' => 'icon_cadastrarServ.png',
                'title' => 'Cadastrar Serviços', 
                'desc' => 'Cadastra um novo serviço.'
            ],
            [
                'img' => 'icon_consultarServ.png',
                'title' => 'Consultar Serviços', 
                'desc' => 'Pesquisar, alterar ou excluir serviço cadastrados.'
            ],
            [
                'img' => 'icon_cadastrarLogin.png',
                'title' => 'Cadastrar Login', 
                'desc' => 'Cadastrar um novo acesso ao sistema.'
            ],
            [
                'img' => 'icon_alterarLogin.png',
                'title' => 'Alterar Login', 
                'desc' => 'Alterar acesso de funcionários.'
            ],
            [
                'img' => 'icon_sobre.png',
                'title' => 'Sobre', 
                'desc' => 'Mais informações sobre o sistema.'
            ],
        ];

        for($i = 0; $i < 8; $i++){
            echo '<div class = "card" id = "action-'.$i.'">';
            
            echo '<img class = "icons" src = "images/'.$cardInfo[$i]['img'].'">';
            echo '<h3>'.$cardInfo[$i]['title'].'</h3>';
            echo '<p>'.$cardInfo[$i]['desc'].'</p>';

            echo '</div>';
        }
        
    ?>
</main>

<?php include('footer.php')?>
