use Contador;
select * from contador;
insert contador values (4,'aulas_assistidas',24);
update contador set nome = "alassistidas" where codigo = 4;
update contador set numero = (numero+1) where codigo = 4;
update contador set numero = (numero-1) where codigo = 4;
