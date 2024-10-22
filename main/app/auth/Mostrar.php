<!DOCTYPE html>
<html lang="en">
<head>
    <title>Respostas</title>
</head>
<body>
    <a href='' class='button'> Voltar </a>


    <center>
        Resposta:<br>  

        alter table Tabela_1 <br>
        add column Telefone2 int(13) after Trabalho;

        
        
        update Tabela_1 set Telefone2 = 5511987654321 
        where nome = 'Enzo Schiavo';

        update Tabela_1 set Telefone = 5511123456789
        where ID_nome = 1;
        <br>
        <br>
        <br>
        update Tabela_1 set Telefone2 = 5511987654321<br>
        where nome = 'Augusto Conti';<br>
        <br>
        update Tabela_1 set Telefone = 55123456789<br>
        where ID_nome = 5;<br>
        <br>
        <br>
        <br>
        alter table Tabela_1<br>
        add column Telefone3 int (13) after Telefone2<br>
        <br>
        update Tabela_1 set Telefone3 =  789997867087<br>
        where nome = 'Augusto Conti';<br>
        <br>
        <br>
        <br>
        alter table Tabela_1<br>
        add column Nome_Extra varchar(50) after nome;<br>
        <br>
        update Tabela_1 set Nome_Extra = 'Augustus Divinus Máximus'<br>
        where nome = 'Guilherme Wendel e Augustus Divinus Máximus';<br>
        <br>
        update Tabela_1 set nome = 'Guilherme Wendel'<br>
        where ID_nome = 4;<br>
        <br>
        update Tabela_1 set Nome_Extra = ""<br>
        where ID_nome != 4;<br>
        <br>
        alter table Tabela_1<br>
        change column Telefone Telefone1 int(13) after CPF;<br>
</body>
</html>