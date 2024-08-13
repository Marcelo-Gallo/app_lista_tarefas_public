<?php

    //estes requires serão executados no contexto de "tarefa_controller.php" no diretório publico, havendo a necessidade de especificar o caminho relativo à aquele arquivo, ficando desta forma:
    require "../../app_lista_tarefas/tarefa.model.php";
    require "../../app_lista_tarefas/tarefa.service.php";
    require "../../app_lista_tarefas/conexao.php";

    //se houver um indice acao setado na superglobal get, ele é atribuido à variavel $acao, caso contrario a aplicação vai esperar uma variavel chamada $acao
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    
    if( $acao == 'inserir') {
        //nova instancia do objeto tarefa
        $tarefa = new Tarefa();

        //set mágico (tarefa.model.php)
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();
        
        //está no contexto publico, então não há necessidade de formatar o caminho
        header('Location: nova_tarefa.php?inclusao=1');
    } else if($acao == 'recuperar'){
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);

        $tarefas = $tarefaService->recuperar();

    }
?>