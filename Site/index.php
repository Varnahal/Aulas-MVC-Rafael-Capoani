<?php
require_once 'app/Core/Core.php';
require_once 'app/Controller/HomeController.php';
require_once 'app/Controller/ErroController.php';
$template = file_get_contents('app/template/estrutura.php');
ob_start();
    $core = new Core();
    $core->start($_GET);

    $saida = ob_get_contents();
ob_end_clean();
$tpl_pronto = str_replace('{{area_dinamica}}',$saida,$template);
echo $tpl_pronto;
?>