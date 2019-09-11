create database  if not exists  Contador;
use Contador; 
CREATE TABLE if not exists contador
(
codigo int (11) NOT NUll auto_increment,
nome varchar(10),
numero int (20),
primary key (codigo)
);

select * from contador;

