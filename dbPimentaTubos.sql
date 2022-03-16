drop database dbPimentaTubos; -- apaga o database
CREATE DATABASE dbPimentaTubos
default character set utf8
default collate utf8_general_ci;
USE dbPimentaTubos;

CREATE TABLE tblCliente (
	cpf VARCHAR(40) primary key NOT NULL,
	nome VARCHAR(40) NOT NULL,
	telefone VARCHAR(40) NOT NULL,
	dtNasc VARCHAR(11) NOT NULL,
	endereco VARCHAR(40) NOT NULL,
	cep VARCHAR(40) NOT NULL,
	bairro VARCHAR(40) NOT NULL,
	uf VARCHAR(40) NOT NULL,
	cidade VARCHAR(40) NOT NULL,
	email VARCHAR(40) NOT NULL 
)default charset utf8;
select * from tblCliente;

CREATE TABLE tblFornecedor (
	cpf VARCHAR(40) primary key NOT NULL,
	nome VARCHAR(40) NOT NULL,
	telefone VARCHAR(40) NOT NULL,
	dtNasc VARCHAR(11) NOT NULL,
	endereco VARCHAR(40) NOT NULL,
	cep VARCHAR(40) NOT NULL,
	bairro VARCHAR(40) NOT NULL,
	uf VARCHAR(40) NOT NULL,
	cidade VARCHAR(40) NOT NULL,
	email VARCHAR(40) NOT NULL 
)default charset utf8;
select * from tblFornecedor;

-- View para imprimir contatos (une as duas tabelas como uma e exibe os dados + importantes)
create view vw_imprimirContatos
as SELECT  f.nome, f.cpf, f.telefone, f.cep FROM tblFornecedor as f
UNION ALL
SELECT  c.nome, c.cpf, c.telefone, c.cep FROM tblCliente as c;

drop view if exists vw_imprimirContatos; -- apaga a view
select * from vw_imprimirContatos;
