<?php 
    // Trabalhando com consultas no PDO:

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
    try{
       $conexao = new PDO($dsn, $usuario, $senha);
        
       $query = '
        select * from tb_usuarios
       ';

       $stm = $conexao->query($query);
        print_r($stm);
        $resultado_da_busca = $stm->fetchAll();
        echo '<pre>';
        print_r($resultado_da_busca);
        echo '</pre>';
        echo '<hr>';
        echo $resultado_da_busca[0]['nome'];
        echo $resultado_da_busca[0]['email'];
        echo '<br>';
        echo $resultado_da_busca[1][1];
        echo $resultado_da_busca[1][2];
        echo '<br>';
        echo $resultado_da_busca[2]['1'];
        echo $resultado_da_busca[2]['2'];
        


    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage() ;
        
     }
?>