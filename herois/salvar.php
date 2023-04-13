<?php
// Verifica se o formulário foi enviado
if (isset($_POST['hero'])) {
    // Obtém o herói selecionado pelo usuário
    $hero = $_POST['hero'];

    // Cria a classe CSS correspondente ao herói selecionado
    $class = str_replace('-', ' ', $hero);
    $class = ucwords($class);
    echo '<div class="hero-image" id="" . $hero . ""></div>';
    echo '<h2>' . $class . '</h2>';
}








?>