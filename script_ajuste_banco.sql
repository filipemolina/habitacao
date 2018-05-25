update enderecos set bairro = "ALTO URUGUAI" 	where BINARY bairro = "Alto Uruguai";
update enderecos set bairro = "AREIA BRANCA" 	where BINARY bairro = "Areia Branca";
update enderecos set bairro = "BANCO DE AREIA" 	where BINARY bairro = "Banco de Areia";
update enderecos set bairro = "BANCO DE AREIA" 	where BINARY bairro = "banco de areia ";
update enderecos set bairro = "ROCHA SOBRINHO" 	where BINARY bairro = "BELFORD ROXO";
update enderecos set bairro = "ROCHA SOBRINHO" 	where BINARY bairro = "BELFORT ROXO";
update enderecos set bairro = "ROCHA SOBRINHO" 	where BINARY bairro = "rOCHA SOBRINHO";
update enderecos set bairro = "CENTRO" 			where BINARY bairro = "Centro";
update enderecos set bairro = "PRES. JUSCELINO" where BINARY bairro = "JUSCELINO";
update enderecos set bairro = "PRES. JUSCELINO" where BINARY bairro = "Juscelino";
update enderecos set bairro = "VILA NORMA" 		where BINARY bairro = "Vila Norma";
update enderecos set bairro = "JACUTINGA" 		where BINARY bairro = "MESQUITA";
COMMIT

/*
update enderecos set bairro = "ERRO" where BINARY bairro = "AGOSTINHO PORTO";
update enderecos set bairro = "ERRO" where BINARY bairro = "BOA ESPERANÇA";
update enderecos set bairro = "ERRO" where BINARY bairro = "CABRAL";
update enderecos set bairro = "ERRO" where BINARY bairro = "CAONZE";
update enderecos set bairro = "ERRO" where BINARY bairro = "ÉDEN";
update enderecos set bairro = "ERRO" where BINARY bairro = "GRANDE RIO";
update enderecos set bairro = "ERRO" where BINARY bairro = "JARDIM ALVORADA";
update enderecos set bairro = "ERRO" where BINARY bairro = "JARDIM PERNAMBUCO";
update enderecos set bairro = "ERRO" where BINARY bairro = "PALHADA";
update enderecos set bairro = "ERRO" where BINARY bairro = "POSSE";
update enderecos set bairro = "ERRO" where BINARY bairro = "SANTO CRISTO";
update enderecos set bairro = "ERRO" where BINARY bairro = "SÃO JOSÉ";
update enderecos set bairro = "ERRO" where BINARY bairro = "NOSSA SENHORA DE FÁT";
update enderecos set bairro = "ERRO" where BINARY bairro = "SANTA TEREZINHA";
update enderecos set bairro = "ERRO" where BINARY bairro = "VILA CENTENÁRIO";
update enderecos set bairro = "ERRO" where BINARY bairro = "VILA PALMEIRAS";
update enderecos set bairro = "ERRO" where BINARY bairro = "VILA SÃO LUIS";
update enderecos set bairro = "ERRO" where BINARY bairro = "AREIA BRANCA";
update enderecos set bairro = "ERRO" where BINARY bairro = "COELHO NETO";
*/

update enderecos set bairro = "JARDIM DELAMARE" where BINARY bairro = "Jardim Delamare";
update enderecos set bairro = "JARDIM IMPÉRIO" 	where BINARY bairro = "Jardim Império";
update enderecos set bairro = "SÃO BENEDITO" 	where BINARY bairro = "São Benedito";
update enderecos set bairro = "SÃO JOSÉ" 		where BINARY bairro = "São José";
update enderecos set bairro = "VALDARIOSA" 		where BINARY bairro = "Valdariosa";
update enderecos set bairro = "SANTA TEREZINHA" where BINARY bairro = "Santa Terezinha";
update enderecos set bairro = "VILA NOVA" 		where BINARY bairro = "Vila Nova";
update enderecos set bairro = "COELHO NETO" 	where BINARY bairro = "Coelho Neto";
COMMIT


update enderecos set bairro = "ALTO URUAGUAI"      where bairro = "ALTO URUAGUAI";
update enderecos set bairro = "CENTRO"             where bairro = "CENTRO";
update enderecos set bairro = "CHATUBA"            where bairro = "CHATUBA";
update enderecos set bairro = "COREIA"             where bairro = "COREIA";
update enderecos set bairro = "SANTA TERESINHA"    where bairro = "SANTA TERESINHA";
update enderecos set bairro = "COSMOROMA"          where bairro = "COSMOROMA";
update enderecos set bairro = "CRUZEIRO DO SUL"    where bairro = "CRUZEIRO DO SUL";
update enderecos set bairro = "EDSON PASSOS"       where bairro = "EDSON PASSOS";
update enderecos set bairro = "PRES. JUSCELINO"    where bairro = "PRES. JUSCELINO";
update enderecos set bairro = "VILA EMIL"          where bairro = "VILA EMIL";
update enderecos set bairro = "BAIRRO INDUSTRIAL"  where bairro = "BAIRRO INDUSTRIAL";
update enderecos set bairro = "BANCO DE AREIA"     where bairro = "BANCO DE AREIA";
update enderecos set bairro = "BNH"                where bairro = "BNH";
update enderecos set bairro = "JACUTINGA"          where bairro = "JACUTINGA";
update enderecos set bairro = "ROCHA SOBRINHO"     where bairro = "ROCHA SOBRINHO";
update enderecos set bairro = "SANTO ELIAS"        where bairro = "SANTO ELIAS";
update enderecos set bairro = "VILA NORMA"         where bairro = "VILA NORMA";
update enderecos set bairro = "COSMORAMA"          where bairro = "COSMORAMA";
update enderecos set municipio = "MESQUITA"        where BINARY bairro != "ERRO";
COMMIT

/*update enderecos set municipio = "ERRO" where BINARY bairro = "ERRO";
COMMIT
*/


update enderecos set municipio = "MESQUITA" where bairro = "ALTO URUAGUAI";
update enderecos set municipio = "MESQUITA" where bairro = "CENTRO";
update enderecos set municipio = "MESQUITA" where bairro = "CHATUBA";
update enderecos set municipio = "MESQUITA" where bairro = "COREIA";
update enderecos set municipio = "MESQUITA" where bairro = "SANTA TERESINHA";
update enderecos set municipio = "MESQUITA" where bairro = "COSMOROMA";
update enderecos set municipio = "MESQUITA" where bairro = "CRUZEIRO DO SUL";
update enderecos set municipio = "MESQUITA" where bairro = "EDSON PASSOS";
update enderecos set municipio = "MESQUITA" where bairro = "PRES. JUSCELINO";
update enderecos set municipio = "MESQUITA" where bairro = "VILA EMIL";
update enderecos set municipio = "MESQUITA" where bairro = "BAIRRO INDUSTRIAL";
update enderecos set municipio = "MESQUITA" where bairro = "BANCO DE AREIA";
update enderecos set municipio = "MESQUITA" where bairro = "BNH";
update enderecos set municipio = "MESQUITA" where bairro = "JACUTINGA";
update enderecos set municipio = "MESQUITA" where bairro = "ROCHA SOBRINHO";
update enderecos set municipio = "MESQUITA" where bairro = "SANTO ELIAS";
update enderecos set municipio = "MESQUITA" where bairro = "VILA NORMA";
update enderecos set municipio = "MESQUITA" where bairro = "COSMORAMA";
COMMIT


update participantes set nome                = upper(nome);
update participantes set orgao_emissor_rg    = upper(orgao_emissor_rg);
update participantes set bairro_preferencial = upper(bairro_preferencial);

update coparticipantes set nome              = upper(nome);
update coparticipantes set orgao_emissor_rg  = upper(orgao_emissor_rg);

update enderecos set logradouro              = upper(logradouro);
update enderecos set complemento             = upper(complemento);

update dependentes set nome                  = upper(nome);
