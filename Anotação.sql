-- Retornar se o filtro for atendido
select u.* from usuario as u 
inner join pessoa_fisica as pf
ON u.id = pf.usuario_alteracao;

-- Retornar tudo(usuario = Pessoa_fisica) se encontar
-- senao retorna os dados do usuario
select u.* from usuario as u 
left join pessoa_fisica as pf
ON u.id = pf.usuario_alteracao;

-- Retornar tudo(Pessoa_fisica + usuario) se encontar
-- senao retorna os dados da Pessoa_fisica
select u.* from usuario as u 
right join pessoa_fisica as pf
ON u.id = pf.usuario_alteracao;

--C Create (1 usuario)
INSERT INTO usuario (nome, email, status, cadastro_preenchido)
VALUES ("Ribery", "Maisfeidelafance@yahoo.com.br", false, false)

--C Create (1 usuario)
INSERT INTO usuario (nome, email, status, cadastro_preenchido)
VALUES ('Ribery', 'Maisfeidelafance@yahoo.com.br', false, false)
    ('Thierry', 'neguindafance@yahoo.com.br', false, false);

--R Read (Todos os usuários)
select * from usuario;

--R Read Only (Apenas 1)
select * from usuario WHERE id = 3;

-- U Update Only (Apenas 1)
update usuario SET email="xaolinmatadordeporco@gmail.com" WHERE id = 9;

-- U Update (Mais de 1)
update usuario SET status=true, cadastro_preenchido=true WHERE id IN (1, 2);

--D Delete (Excluir 1 usuario)
delete from usuario WHERE id = 3;

--D Delete (Excluir mais usuarios)
delete from usuario WHERE id IN (3, 7);

-- ALTER TABLE
ALTER TABLE usuario add column cadastro_preenchido bool default false;

-- ALTER TABLE (atualizar/modificar)
ALTER TABLE usuario modify column cadastro_preenchido bool NOT NULL default false;

-- ALTER TABLE (Excluir)
ALTER TABLE usuario drop column cadastro_preenchido;

-- DATAS AUTOMATICAS 

ALTER TABLE usuario drop column criado_em; -- Excluir

ALTER TABLE usuario add column criado_em timestamp default null on update current_timestamp; -- Criar Criado Em...

ALTER TABLE usuario drop column atualizado_em; -- Excluir

ALTER TABLE usuario add column atualizado_em datetime default null on update current_timestamp; -- Criar Atualizado em...