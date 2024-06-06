<?php

// Incluir conexão com banco de dados
include_once './settings/conexao.php';

// Receber o nome que será pesquisado no BD
// Receber o nome que será pesquisado no BD
$nome_produto = filter_input(INPUT_GET, "nome", FILTER_DEFAULT);

// Acessa o IF quando a variável $nome_produto possui valor
if(!empty($nome_produto)) {

    // Adicione o operador % ao redor do nome para corresponder a qualquer parte da palavra
    $nome_produto = "%" . $nome_produto . "%";

    // QUERY para pesquisa no banco de dados por correspondência parcial
    $query_produtos = "SELECT id, nome 
                FROM casos
                WHERE nome LIKE :nome 
                LIMIT 10";

    // Preparar a QUERY
    $result_produtos = $conn->prepare($query_produtos);

    // Substituir o link :nome pelo valor que deve ser pesquisado
    $result_produtos->bindParam(':nome', $nome_produto, PDO::PARAM_STR); // Certifique-se de definir o tipo de parâmetro como string

    // Executar a QUERY
    $result_produtos->execute();

    // Acessa o IF quando encontrar registro no banco de dados
    if(($result_produtos) and ($result_produtos->rowCount() != 0)) {

        // Ler os registros retornados do banco de dados
        while($row_produto = $result_produtos->fetch(PDO::FETCH_ASSOC)){

            // Criar o array de dados
            $dados[] = [
                "id" => $row_produto['id'],
                "nome" => $row_produto['nome']
            ];
        }

        // Retornar os dados retornados do banco de dados
        $retorna = ['status' => true, 'dados' => $dados];
    } else {
        $retorna = ['status' => false, 'msg' => "Erro: Nenhum produto encontrado!"];
    }
} else {
    $retorna = ['status' => false, 'msg' => "Erro: Nenhum produto encontrado!"];
}

// Retornar os dados em formato de objeto
echo json_encode($retorna);
