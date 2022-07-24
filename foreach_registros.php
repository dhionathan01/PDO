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
        select * from tb_usuarios where id
       ';
        // Pegando os registros direto na recuperação

        foreach($conexao->query($query) as $chave => $valor){
            echo '<pre>';
            print_r($valor[1]);
            echo '</pre>';   
        } 

       /* $stm = $conexao->query($query);
        $lista_usuario = $stm->fetchAll(PDO::FETCH_ASSOC);

        foreach($lista_usuario as $key => $value){
            echo $value['nome'];
            echo '<hr>';
            
        } */

    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage() ;
        
     }
?>