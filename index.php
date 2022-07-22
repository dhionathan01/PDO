<?php 
    // Criando uma conexão entre o PHP e o MySQL com PDO:
    /* 
     - Primeiro parâmetro o DSN = Data source name, informa qual extensão de sgbd vai ser usado no caso o mysql.
     - Em seguida o host o local onde o banco de dados está alocado no caso ele é localhost pois
      está na mesma máquina em que o servidor apache.(:host=localhost;).
     - Passamos o nome do banco (dbname=php_com_pdo).
     - e informamos o nome e senha do banco em questão
     */

     $dsn = 'mysql:host=localhost;dbname=xphp_com_pdo';
     $usuario = 'root';
     $senha = '';
     try{
        $conexao = new PDO($dsn, $usuario, $senha);

     }catch(PDOException $e){
        echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage() ; // Utilizandos o methodos do PDOException para extrair o erro
        
     }
    


?>