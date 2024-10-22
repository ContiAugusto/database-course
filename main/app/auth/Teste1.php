<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teste De Pagina</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Protest+Strike&family=Roboto+Slab:wght@100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lilita+One&family=Protest+Strike&family=Roboto+Slab:wght@100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

* {
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
body{
    
    font-family: Montserrat;
    color: black;
}
.navbar-layer{
    background-color:#081224;
    height: 100px;    
    display: flex;
    align-items: center;
    font-family:  Roboto Slab;
    color: white;
    font-size: 16px;
    letter-spacing: 8px;
    width: 100%;
    padding-left: 5%;
    
}

.navbar-layer h1{
    font-family: Roboto Slab;
    font-size: 30px;
    color: white;
    letter-spacing: 5px;
    padding-left: 5%;
}

.navbar-layer ul{
    display: flex;
    justify-content: space-evenly;
    width: 100%;
    list-style: none;
    padding-left: 20%;
    
}
a:link{
    text-decoration: none;
    color: white;
    font-size: 17px;
    font-family: Montserrat;
    list-style: none;
}
a:hover{
   opacity: 0.4;
}
a:visited{
    text-decoration: none;
    color: white;
    font-size: 17px;
    font-family: Montserrat;
    list-style: none;
}
a:active{
    text-decoration: none;
    color: rgb(46, 236, 217);
    font-size: 17px;
    font-family: Montserrat;
    list-style: none;
    opacity: 1;
}
.main-layer{
    background:linear-gradient(90deg, rgba(8, 18, 36, 1) 0%, rgb(16, 38, 80) 50%, rgb(26, 57, 116) 100%);
    align-items: center ;
    display: flex;
    height: 500px;
   
}
.main-layer h1{
    font-family:   lato;
    font-size: 38px;
    color: rgb(46, 236, 217);
   padding-left: 5%;
    padding-bottom: 2%;
    
}
.main-layer p{
    font-family: Montserrat;
    font-size: 17px;
    color: white;
    width: 80%;
    padding-left: 6%;
    
}
.img-layer{
   padding-right: 7%;
   padding-top: 5%;
   padding-bottom: 5%;
}
#image-layer{
  height: 250px;
    width: 250px;
}
.footer-layer2{
display: flex;
align-items: center;
justify-content: center;
align-content: space-around;
height: 300px;
font-size: 10px;
}
#fot1{
    height: 300px;
    width: 33.3%;
    background-color: antiquewhite;
}#fot2{
    height: 300px;
    width: 33.3%;
    background-color: antiquewhite;
}
#fot3{
    height: 300px;
    width: 33.3%;
    background-color: antiquewhite;
}
.footer-layer1{
    background-color: antiquewhite;
    font-family: Montserrat;
    font-size: 17px;
    letter-spacing: 2px;
}




    </style>
</head>
<body>




    <?php
    require ("Conex2.php");

//Tabela_1 ---------------------------------------------------------------------------------------

    /*
        $sql1_1 = "CREATE table if not exists Tabela_1(ID_nome int not null primary key auto_increment);";
        $SQL1_2 = "ALTER table Tabela_1 add column nome varchar(50) not null;";
        $SQL1_3 = "ALTER table Tabela_1 add column CPF char(11) not null;";
        $SQL1_4 = "ALTER table Tabela_1 add column Telefone varchar(50);";
        $SQL1_5 = "ALTER table Tabela_1 add column ID_Trabalho int not null;";
        $SQL1_6 = "ALTER table Tabela_1 add column Trabalho varchar(50);";
*/

        // Tabela 1


        $sql1 = "CREATE table if not exists Tabela_1(
            ID_nome              int primary key not null auto_increment,
            nome                 varchar(50) not null,
            CPF                  char(11) not null,
            Telefone             varchar(50),
            ID_trabalho          int not null,
            Trabalho             varchar(50)
            );";

        $res1 = mysqli_query($conexao, $sql1);

/*
        $res1_1 = mysqli_query($conexao, $SQL1_1);
        $res1_2 = mysqli_query($conexao, $SQL1_2);
        $res1_3 = mysqli_query($conexao, $SQL1_3);
        $res1_4 = mysqli_query($conexao, $SQL1_4);
        $res1_5 = mysqli_query($conexao, $SQL1_5);
        $res1_6 = mysqli_query($conexao, $SQL1_6);
  */ 

        // Inserts


        $SQL2_1 = 'INSERT into Tabela_1 value (default, "Enzo Schiavo", "12345678910", "5511123456789 5511987654321", "1", "Físico");';
        $SQL2_2 = 'INSERT into Tabela_1 value (default, "Eduardo Sim", "10987654321", "0121975312468", "2", "Entragador");';
        $SQL2_3 = 'INSERT into Tabela_1 value (default, "Giovanni Bassetti", "666he", "sim", "3", "Geneticista");';
        $SQL2_4 = 'INSERT into Tabela_1 value (default, "Guilherme Wendel e Augustus Divinus Máximus", "12312312300", "55 01 11386871", "1", "HEHE");';
        $SQL2_5 = 'INSERT into Tabela_1 value (default, "Augusto Conti", "00321321321", "5511123456789 5511987654321 789997867087", "325365", "Cientista de dados genômicos");';
    
        $sql3 = "SELECT * from Tabela_1;";

        $sql4_1 = "SELECT * from Tabela_1 where ID_nome = 1";
        $SLQ4_2 = "SELECT * from Tabela_1 where ID_nome = 2";
        $SLQ4_3 = "SELECT * from Tabela_1 where ID_nome = 3";
        $SLQ4_4 = "SELECT * from Tabela_1 where ID_nome = 4";
        $SLQ4_5 = "SELECT * from Tabela_1 where ID_nome = 5";
        
/*
        $res4_1 = mysqli_query($conexao, $SQL4_1);
        $res4_2 = mysqli_query($conexao, $SQL4_2);
        $res4_3 = mysqli_query($conexao, $SQL4_3);
        $res4_4 = mysqli_query($conexao, $SQL4_4);
        $res4_5 = mysqli_query($conexao, $SQL4_5);
*/

        // Saber se  já foram inseridos os valores

        if (mysqli_num_rows(mysqli_query($conexao, $sql3)) == 0) {
            $res2_1 = mysqli_query($conexao, $SQL2_1);
            $res2_2 = mysqli_query($conexao, $SQL2_2);
            $res2_3 = mysqli_query($conexao, $SQL2_3);
            $res2_4 = mysqli_query($conexao, $SQL2_4);
            $res2_5 = mysqli_query($conexao, $SQL2_5);
        }
        

        

//Form inicial do enunciado: 

    echo "<form>
          <div>
          <h2> Teste </h2><br><br><br>
          <h3> Exercício 1 </h3>
          <h4> 
           Faça com que a tabela_1 concorde com a primeira norma a partir
           da caixa de texto abaixo de maneira a não deixá-los nulos (caso se-
           ja nescessário, altere o campo que não estiver atomatizado adicio-
           nando outro com o mesmo nome porém com um número crescente depois
           da última variável sem espaços e alterando o nome primário para o
           seu nome adjunto de '1': 1, 2, 3, 4, 5, ...), utilizando comandos de MySQL:
           </h4> <br><br><br><br>
           </div>
           </form>";


        // If para saber se o formulário "dig" (Digite aqui) já recebeu algum valor

       if (isset($_POST["dig"])) {


        // Form após o comando inicial

            echo "<form method='post' action='Teste1.php'> <div>";

            $digo = $_POST["dig"];

            // IF para saber se o "dig" é nulo ou setado como ""

            if ($digo != null && $digo != ""){

            $res1 = mysqli_query($conexao, $digo);

            // Selecionar tudo da tabela 1

            $res = mysqli_query($conexao, $sql3);

            // Passagem da tabela 1 para o HTML

            echo "<h1> Tabela de cadastro </h1>";
            echo "<table border='1'>";

            echo"<tr><th>ID_Nome (int PK NN AI)</th>";
        
            //Nome das variáveis e suas características

while ($row = mysqli_fetch_assoc($res)) {
            
        if (isset($row["nome"])) {
            echo "<td>Nome (varchar(50 NN))</td>";
        }

        if (isset($row["Nome1"])) {
            echo "<td>Nome1 (varchar(50 NN))</td>";
        }

        if (isset($row["Nome2"])) {
            echo "<th>Nome2 (varchar(50 NN))</th>";
        }

            echo "<th>CPF (char(11) NN)</th>";

        if (isset($row["Telefone"])) {
            echo "<th>Telefone (varchar(50))</th>";
        }

        if (isset($row["Telefone1"])) {
            echo "<th>Telefone1 (varchar(50))</th>";

            
        }
        
        if (isset($row["Telefone2"])) {
            echo "<th>Telefone2 (varchar(50))</th>";
        }
 
        if (isset($row["Telefone3"])) {
            echo "<th>Telefone3 (varchar(50))</th>";
        }

            echo "<th>ID_Trabalho (int NN)</th><th>Trabalho varchar(50)</th>";



        break;
    }
        echo "</tr>";
           
        // Mostrar o valores agora alterados

   while($row = mysqli_fetch_assoc($res)) {
       
       echo "<tr>";
       
       echo "<td>". $row["ID_nome"] ."</td>";
       
       if (isset($row["nome"])) {
        echo "<td>". $row["nome"] ."</td>";
       }
       
       if (isset($row["Nome1"])) {
        echo "<td>". $row["Nome1"] ."</td>";
       }
       
       if (isset($row["Nome2"])) {
        echo "<td>". $row["Nome2"] ."</td>";
       }

       echo "<td>". $row["CPF"] ."</td>";
       
       if (isset($row["Telefone"])) {
        echo "<td>". $row["Telefone"] ."</td>";
       }
       
       if (isset($row["Telefone1"])) {
        echo "<td>". $row["Telefone1"] ."</td>";
       }
       
       if (isset($row["Telefone2"])) {
        echo "<td>". $row["Telefone2"] ."</td>";
       }
       
       if (isset($row["Telefone3"])) {
        echo "<td>". $row["Telefone3"] ."</td>";
       }
       
       echo "<td>". $row["ID_trabalho"] . "</td>";

       echo "<td>". $row["Trabalho"] ."</td>";
       
       echo "</tr>";
}
       echo "</table><br><br>";

       // Mostrando a respota anterior

       echo '<h3> Resposta anterior:  </h3><br><br><h5>' . $digo . '</h5><br><br><br>';

    
}

else {

    // Caso o "indiota" não coloque nada

    echo '<script> alert ("Escreva na caixa de texto!!")</script>';
}

    // O possível novo dig:

       echo "<center><input type='text' id='dig' name='dig' placeholder='Digite aqui'><br><br>";

       //Botões de para cálculo, limpar e para mostrar respostas:

       echo "<input type='submit' value='Enviar'><input type='reset' value='Limpar'><input type='button' onclick="; echo '"window.location.href='; echo "'Mostrar.php'"; echo '" value="Mostrar Respostas"></center>';

       // Botão de ir ao próximo módulo caso o resultado final for correto

       
        
       

    
        
       
       // Mostrar certos alerts de aviso e mostrar a resposta dada caso o "dig" não seja nulo ou "",
       // caso tenhamos como selecionar sem dar erros, com o npumero de resultados maior que zero e 
       // se de fato afetou alguma linha:

       if ($digo != null && $digo != "") {

       if ($res){

        if (mysqli_num_rows($res) > 0) {
            
         if (mysqli_affected_rows($conexao) > 0) {

            $res4_1 = mysqli_query($conexao, $sql4_1);
            
            $row = mysqli_fetch_assoc($res4_1);

if (isset($row["Nome1"]) && isset($row["Nome2"]) && isset($row["Telefone1"]) && isset($row["Telefone2"]) && isset($row["Telefone3"])) {
    if ($row["Nome1"] == "Enzo Schiavo" && $row["Nome2"] == null && $row["CPF"] == "12345678910" && $row["Telefone"] == "5511123456789" && $row["ID_Trabalho"] == "1" && $row["Trabalho"] == "Físico" && $row["Telefone2"] == "5511987654321" && $row["Telefone3"] == "0") {
        if () {
        $res4_2 = mysqli_query($conexao, $SQL4_2);
            
            $row = mysqli_fetch_assoc($res4_2);

        if ($row["Nome1"] == "Eduardo Sim" && $row["Nome2"] == null && $row["CPF"] == "10987654321" && $row["Telefone"] == "0121975312468" && $row["ID_Trabalho"] == "2" && $row["Trabalho"] == "Entragador" && $row["Telefone2"] == "0" && $row["Telefone 3"] == "0") {

            $res4_3 = mysqli_query($conexao, $SQL4_3);
            
            $row = mysqli_fetch_assoc($res4_3);

            if ($row["Nome1"] == "Giovanni Bassetti" && $row["Nome2"] == null && $row["CPF"] == "666he" && $row["Telefone"] == "sim" && $row["ID_Trabalho"] == "3" && $row["Trabalho"] == "Geneticista" && $row["Telefone2"] == "0" && $row["Telefone 3"] == "0") {

                $res4_4 = mysqli_query($conexao, $SQL4_4);
            
                $row = mysqli_fetch_assoc($res4_4);

                if ($row["Nome1"] == "Guilherme Wendel" && $row["Nome2"] == "Augustus Divinus Máximus" && $row["CPF"] == "12312312300" && $row["Telefone"] == "550111386871" && $row["ID_Trabalho"] == "1" && $row["Trabalho"] == "HEHE" && $row["Telefone2"] == "0" && $row["Telefone 3"] == "0") {

                    $res4_5 = mysqli_query($conexao, $SQL4_5);
            
                    $row = mysqli_fetch_assoc($res4_5);

                    if ($row["Nome1"] == "Augusto Conti" && $row["Nome2"] == null && $row["CPF"] == "00321321321" && $row["Telefone"] == "55123456789" && $row["ID_Trabalho"] == "325365" && $row["Trabalho"] == "Cientista de gênero" && $row["Telefone2"] == "5511987654321" && $row["Telefone 3"] == "789997867087") {

            //if ($row["Nome1"] == "" && $row["Nome2"] == "" && $row["CPF"] == "" && $row["Telefone"] == "" && $row["ID_Trabalho"] == "" && $row["Trabalho"] == "" && $row["Telefone2"] == "" && $row["Telefone 3"] == "") {

            echo "<input type='button' onclick="; echo '"window.location.href='; echo "'Mostrar.php'"; echo '" value="Passar ao próximo módulo"></center>';


                    }
                    else
                    {
                        echo '<script> alert ("Alterado com sucesso!! Mas o resultado pode estar incorreto e incompleto. Por isso, caso queira, veja a melhor respota para o problema no botão abaixo até que esteja completamente correto."); </script>';
                        echo '<script> alert ("Sua resposta foi:  " + "' . $digo .'"); </script>';
                    }
                }
                else
                {
                    echo '<script> alert ("Alterado com sucesso!! Mas o resultado pode estar incorreto e incompleto. Por isso, caso queira, veja a melhor respota para o problema no botão abaixo até que esteja completamente correto."); </script>';
                    echo '<script> alert ("Sua resposta foi:  " + "' . $digo .'"); </script>';
                }
            }
            else
            echo '<script> alert ("Alterado com sucesso!! Mas o resultado pode estar incorreto e incompleto. Por isso, caso queira, veja a melhor respota para o problema no botão abaixo até que esteja completamente correto."); </script>';
            echo '<script> alert ("Sua resposta foi:  " + "' . $digo .'"); </script>';
        }
        else
        {
            echo '<script> alert ("Alterado com sucesso!! Mas o resultado pode estar incorreto e incompleto. Por isso, caso queira, veja a melhor respota para o problema no botão abaixo até que esteja completamente correto."); </script>';
            echo '<script> alert ("Sua resposta foi:  " + "' . $digo .'"); </script>';
        }
    }
    else
    {
        echo '<script> alert ("Alterado com sucesso!! Mas o resultado pode estar incorreto e incompleto. Por isso, caso queira, veja a melhor respota para o problema no botão abaixo até que esteja completamente correto."); </script>';
        echo '<script> alert ("Sua resposta foi:  " + "' . $digo .'"); </script>';
    }
        else
    {
        echo '<script> alert ("Alterado com sucesso!! Mas o resultado pode estar incorreto e incompleto. Por isso, caso queira, veja a melhor respota para o problema no botão abaixo até que esteja completamente correto."); </script>';
        echo '<script> alert ("Sua resposta foi:  " + "' . $digo .'"); </script>';
    }
}
else
{
    echo '<script> alert ("Alterado com sucesso!! Mas o resultado pode estar incorreto e incompleto. Por isso, caso queira, veja a melhor respota para o problema no botão abaixo até que esteja completamente correto."); </script>';
    echo '<script> alert ("Sua resposta foi:  " + "' . $digo .'"); </script>';
}
}
             
         }
        }
     }
    }
       echo '</div></form>';




                //--------------\      -----------      |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
           }    //--------------|    ---------------    \---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
           else{//--------------\  -- - Separação - --  |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                //--------------|    ----------------   \--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                //--------------\     -------------     |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


                //$sql3 = "SELECT * from Tabela_1;";

                //Verificando se o primeiro comando funciona e, se sim, selecionar todas as linhas da tabela

            if (mysqli_query($conexao, $sql1)){

                $res = mysqli_query($conexao, $sql3);

               // if (mysqli_num_rows($res) > 0) {

                //$res2 = mysqli_query($conexao, $sql2); ;
                
               // }
            }

        //

       
       
        //Passando a tabela 1 para o HTML

        echo "<form method='post' action='Teste1.php'><div>     
             <h1>Tabela de cadastro</h1>";
        echo "<table border='1'>";

        //Variáveis e suas características

        echo"<tr><th>ID_Nome (int PK NN AI)</th><th>Nome (varchar(50) NN)</th><th>CPF (char(11) NN)</th><th>Telefone (varchar(50))</th><th>ID_Trabalho (int NN)</th><th>Trabalho varchar(50)</th></tr>";

        // Mostrando os valores da tabela 1:

    while($row = mysqli_fetch_assoc($res) ) {

        echo "<tr>";
        echo "<td>". $row["ID_nome"] ."</td>";
        echo "<td>". $row["nome"] ."</td>";
        echo "<td>". $row["CPF"] ."</td>";
        echo "<td>". $row["Telefone"] ."</td>";
        echo "<td>". $row["ID_trabalho"] . "</td>";
        echo "<td>". $row["Trabalho"] ."</td>";
        echo "</tr>";
        
}
        echo "</table><br><br>";

        // Input para pegar o "dig" (Digite aqui) e usá-lo no MySQL:

        echo "<center><input type='text' id='dig' name='dig' style='height: 300px; width: 300px;' id='dig' placeholder='Digite aqui'>";

        //Botão para enviar as respostas e limpar o "dig"

        echo "<br><br><input type='submit' value='Enviar'><input type='reset' value='Limpar'>";

        //FIM -----------------------------------------------------------------

            echo "</center></div>";
            echo "</form>";
           }



    ?>
</body>
</html>