<?php 
    // Criando uma conexão entre o PHP e o MySQL com PDO:
    /* 
     - Primeiro parâmetro o DSN = Data source name, informa qual extensão de sgbd vai ser usado no caso o mysql.
     - Em seguida o host o local onde o banco de dados está alocado no caso ele é localhost pois
      está na mesma máquina em que o servidor apache.(:host=localhost;).
     - Passamos o nome do banco (dbname=php_com_pdo).
     - e informamos o nome e senha do banco em questão
     */

     $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
     $usuario = 'root';
     $senha = '';
     try{
        $conexao = new PDO($dsn, $usuario, $senha);
        
        // Executando  intruções SQL:
        // Comandos sql:
        // Criando a tabela tb_usuarios
       
        /*
          $query = '
            CREATE TABLE if not exists tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            )
        ';

       // executa o conteúdo da variavel query no respectivo banco de dados informado na variável conexão 
        $retorno = $conexao->exec($query);
        echo $retorno;

        // Inserindo um usuario
        $query = '
            insert into tb_usuarios(
                nome, email, senha
            ) values(
                "Dhionathan Lanzoni Jobim", "dhionathan01@hotmail.com", "000000"
            )
        ';
        
        $retorno = $conexao->exec($query);
        echo $retorno;
        */

        // Deletando usuarios:
        /*  $query = '
        delete from tb_usuarios
    '; */
        
    
    // Recuperando Dados:
    
    $query = '
    INSERT INTO tb_usuarios( 
        nome, email, senha
    )VALUES( 
        "Lucas Nascimento", "lucastest@teste.com", "000000"
    )
    ';

    
    $retorno = $conexao->exec($query);
    echo $retorno;
     }catch(PDOException $e){
        echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage() ; // Utilizandos o methodos do PDOException para extrair o erro
        
     }
    


?>