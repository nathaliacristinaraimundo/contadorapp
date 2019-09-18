use Contador;
select * from contador;
insert contador values (4,'aulas_assistidas',24);
update contador set nome = "alassistidas" where codigo = 4;
update contador set numero = (numero+1) where codigo = 4;
update contador set numero = (numero-1) where codigo = 4;
insert contador values(9,'xixi',2);
update contador set nome = "numero_xixi" where codigo = 9;
update contador set numero = (numero+1) where codigo = 9;
update contador set numero = (numero-1) where codigo = 9;
insert contador values(2,'beber_água',5);
update contador set nome = "copos d'água" where codigo = 2;
update contador set numero = (numero+1) where codigo = 2;
update contador set numero = (numero-1) where codigo = 2;



