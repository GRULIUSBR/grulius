<?php
//camihno do arquivo json
$arquivo = __DIR__ . "/dados/crud.json";

//1 ler json
$conteudo = file_get_contents($arquivo);

//2 transf json en array php
$alunos = json_decode($conteudo, true);

//3 percorrer todos os alunos
foreach($alunos as $aluno){

//4 procurar
    if($aluno["nome"] == "maria"){
        //5 alterar dado
        $aluno["idade"] = 15;
    }
}

//6 array to json
$json = json_encode($alunos,
JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

//7 salvar no arquivo
file_put_contents($arquivo, $json);

echo "aluno atualizado"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    
</body>
</html>