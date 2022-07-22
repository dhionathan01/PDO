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
        //$resultado_da_busca = $stm->fetchAll(PDO::FETCH_ASSOC); // Trás somentes os retornos associativos
        //$resultado_da_busca = $stm->fetchAll(PDO::FETCH_NUM); // Trás somentes os retornos Númericos
        $resultado_da_busca = $stm->fetchAll(PDO::FETCH_OBJ); // Trás os retornos como um objeto

        echo '<pre>';
        print_r($resultado_da_busca);
        echo '</pre>';
        echo '<hr>';

        echo $resultado_da_busca[1]->nome; // Acessando valores ao se tratar de objetos

    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage() ;
        
     }
?>