/*Produto-> id, nome, descricao, faixa_etaria, preco_dia, qnt, id_categoria
Cliente-> id, nome, data_nasc, e-mail, senha, endereco
Categoria-> id, nome
Aluguel-> id, id_cliente, id_produto, data_inicio, data_fim, preco_aluguel*/


create table Categoria(
	id integer auto_increment, 
	nome varchar(255) not null,
    PRIMARY KEY(id)
);

create table Produto(
	id integer auto_increment, 
	nome varchar(255) not null,
	descricao text,
	faixa_etaria varchar(32),
	preco_dia decimal(6,3),
	qnt integer,
	id_categoria integer references Categoria(id),
    PRIMARY KEY (id)

);

create table Cliente(
	id integer auto_increment, 
	nome varchar(255) not null,
	data_nasc timestamp not null,
	email varchar(255) not null,
	senha varchar(255) not null,
	endereco text not null,
    PRIMARY KEY (id)
);

create table Aluguel(
	id integer auto_increment,
	id_cliente integer references Cliente(id),
	id_produto integer references Produto(id),
	data_inicio timestamp DEFAULT CURRENT_TIMESTAMP,
	data_fim timestamp,
	preco_aluguel decimal(6,3),
    PRIMARY KEY (id)
);