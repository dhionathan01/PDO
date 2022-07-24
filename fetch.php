<?php 
    /* 
    Fetch retorna apenas um registro
    */

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
    try{
       $conexao = new PDO($dsn, $usuario, $senha);
        
       $query = '
        select * from tb_usuarios where id = 7
       ';

       $stm = $conexao->query($query);
        $usuario = $stm->fetch(PDO::FETCH_OBJ); // Recuperando apenas um registro

        echo '<pre>';
        print_r($usuario);
        echo '</pre>';
        echo '<hr>';

        echo $usuario->nome;

    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage() ;
        
     }
?>