create database Norma;
use Norma;

drop database Norma;

show table status;

-- Create inicial:  

CREATE table if not exists Tabela_1(
        ID_nome              int primary key not null auto_increment,
        nome                 varchar(50) not null,
        CPF                  char(11) not null,
        Telefone             varchar(50),
        ID_trabalho          int not null,
        Trabalho             varchar(50)
        )default charset = utf8;

-- Insert inicial:  

INSERT into Tabela_1 values
(default, "Enzo Schiavo", "12345678910", "5511123456789 5511987654321", "1", "Físico"),
(default, "Eduardo Sim", "10987654321", "0121975312468", "2", "Entragador"), 
(default, "Giovanni Bassetti", "666he", "sim", "3", "Geneticista"),
(default, "Guilherme Wendel e Augustus Divinus Máximus", "12312312300", "550111386871", "1", "HEHE"),
(default, "Augusto Conti", "00321321321", "5511123456789 5511987654321 789997867087", "325365", "Cientista de gênero");

-- Aba de teste:

update Tabela_1 set Trabalho = "Geneticista" where ID_nome = 3;

-- Respostas:  

 alter table Tabela_1 add column Telefone2 varchar(50) default 0000000000000 after Trabalho; 
 update Tabela_1 set Telefone2 = 5511987654321 where nome = 'Enzo Schiavo';
 update Tabela_1 set Telefone = 5511123456789 where ID_nome = 1;
 update Tabela_1 set Telefone2 = 5511987654321 where nome = 'Augusto Conti';
 update Tabela_1 set Telefone = 55123456789 where ID_nome = 5;
 alter table Tabela_1 add column Telefone3 varchar(50) default 0000000000000 after Telefone2;
 update Tabela_1 set Telefone3 =  789997867087 where nome = 'Augusto Conti';
 alter table Tabela_1 add column Nome2 varchar(50) default null after nome;
 update Tabela_1 set Nome2 = 'Augustus Divinus Máximus' where nome = 'Guilherme Wendel e Augustus Divinus Máximus';
 update Tabela_1 set nome = 'Guilherme Wendel' where ID_nome = 4;
 update Tabela_1 set Nome2= "" where ID_nome != 4;
 alter table Tabela_1 change column Telefone Telefone1 varchar(50) default 0000000000000 after CPF;
 alter table Tabela_1 change column nome Nome1 varchar(50);
 
 desc Tabela_1;
 
 select * from Tabela_1;