<?php
    if (isset($_POST['nome'])) {
            $nome = (string) htmlspecialchars($_POST['nome']);
    };
    if (isset($_POST['nota1'])) {
            $nota1 = (int) htmlspecialchars($_POST['nota1']);
    };
    if (isset($_POST['nota2'])) {
            $nota2 = (int) htmlspecialchars($_POST['nota2']);
    };
    if (isset($_POST['nota3'])) {
            $nota3 = (int) htmlspecialchars($_POST['nota3']);
    };
    if (isset($_POST['nota4'])) {
            $nota4 = (int) htmlspecialchars($_POST['nota4']);
    };

    $alunos = [
        'nome' => $nome,
        'nota1' => $nota1,
        'nota2' => $nota2,
        'nota3' => $nota3,
        'nota4' => $nota4,
        'media' => $media
    ];

    function media($alunos){
        $soma = $nota1 + $nota2 + $nota3 + $nota4;
        $media = $soma / 4;

        echo "$alunos";

        if($nome as $alunos => 'nome'){
            echo "esse aluno já recebeu a media final do bimestre, não se pode mais fazer alterações"
        }
    }
?>