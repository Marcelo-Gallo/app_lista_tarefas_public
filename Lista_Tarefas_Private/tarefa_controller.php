<?php

    //estes requires serão executados no contexto de "tarefa_controller.php" no diretório publico, havendo a necessidade de especificar o caminho relativo à aquele arquivo, ficando desta forma:
    require "../../app_lista_tarefas/tarefa.model.php";
    require "../../app_lista_tarefas/tarefa.service.php";
    require "../../app_lista_tarefas/conexao.php";
    
    //para debug:
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //nova instancia do objeto tarefa
    $tarefa = new Tarefa();

    //set mágico (tarefa.model.php)
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();
    //para debug:
    echo '<pre>';
    print_r($tarefaService);
    echo '</pre>';
    
?>