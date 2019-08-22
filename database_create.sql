create database blogn2y DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
use blogn2y;
create table temas(
    id_temas int not null primary key auto_increment,
    titulo_tema varchar(255)
)ENGINE=InnoDB;

create table conteudo_posts(
    id_conteudo int not null primary key auto_increment,
    conteudo_post varchar(500)
)ENGINE=InnoDB;

create table autores(
    id_autores int not null primary key auto_increment,
    nome_autor varchar(255),
    idade int(2),
    turma varchar(255),
    horario varchar(255)
)ENGINE=InnoDB;

create table posts(
    id_post int(5) not null primary key auto_increment,
    tema_post int(2),
    titulo_post varchar(100),
    img_capa varchar(255),
    conteudo_post int(2),
    autor_post int(2),
    img1 varchar(255),
    img2 varchar(255),
    img3 varchar(255),
    foreign key(tema_post) references temas(id_temas),
    foreign key(conteudo_post) references conteudo_posts(id_conteudo),
    foreign key(autor_post) references autores(id_autores)
)ENGINE=InnoDB;