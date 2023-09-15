
DROP TABLE IF EXISTS tamanos;
DROP TABLE IF EXISTS raza;
DROP TABLE IF EXISTS tipo_animal;
DROP TABLE IF EXISTS animal;
DROP TABLE IF EXISTS tipo_hogar;
DROP TABLE IF EXISTS hogar_temporal;
DROP TABLE IF EXISTS hogar_animal;
DROP TABLE IF EXISTS persona;
DROP TABLE IF EXISTS tipo_persona;
DROP TABLE IF EXISTS involucrate;
DROP TABLE IF EXISTS adopcion;
DROP TABLE IF EXISTS adopciones;
DROP TABLE IF EXISTS tipo_notificacion;
DROP TABLE IF EXISTS notificacion;

create table tamanos(
	id_tamano int auto_increment,
	tamano_animal varchar(255),
	primary key(id_tamano)
);

create table raza(
	id_raza int auto_increment,
	nombre varchar(255),	
primary key(id_raza));

create table tipo_animal(
	id_tipo_animal int auto_increment,
	tipo_animal varchar(255),
	primary key(id_tipo_animal)
);

create table animal(
	id_animal int auto_increment,
	nombre varchar(255),
	edad int,
	color varchar(255),
	id_raza int,
	tipo_id int comment 'tipo animal perro o gato',
	peso float,
	altura float,
	id_tamano int,
	personalidad varchar(255),
	num_identificacion varchar(255),
    url_imagen varchar(255),
    fecha date,
    primary key(id_animal),
    foreign key(id_raza) references raza(id_raza),
    foreign key(tipo_id) references tipo_animal(id_tipo_animal),
    foreign key(id_tamano) references tamanos(id_tamano)
);
create table persona(
    id_persona int auto_increment,
    nombre varchar(255),
    direccion varchar(255),
    telefono int,
    email varchar(255),
    fecha_inscripcion date,
    primary key(id_persona)
);

create table tipo_hogar (
    id_tipo_hogar int auto_increment,
    nombre varchar(255),
    primary key(id_tipo_hogar) 
);

create table hogar_temporal(
    id_hogar int auto_increment,
    nombre varchar(255),
    direccion varchar(255),
    responsable_id_persona int,
    telefono int,
    email varchar(255),
    id_tipo_hogar int comment 'indica si el hogar es para perro o gatos',
    capacidad int,
    fecha date,
    primary key(id_hogar),
    foreign key (responsable_id_persona) references persona(id_persona),
    foreign key (id_tipo_hogar) references tipo_hogar(id_tipo_hogar)
);

create table hogar_animal(
    id_hogar_animal int auto_increment,
    id_hogar_temporal int,
    id_animal int,
    fecha_llegada date,
    fecha_termino date,
    fecha_extension date,
    primary key (id_hogar_animal),
    foreign key (id_animal) references animal(id_animal),
    foreign key (id_hogar_temporal) references hogar_temporal(id_hogar)
);

create table tipo_persona(
    id_tipo_persona int auto_increment,
    tipo_persona varchar(255),
    primary key(id_tipo_persona)    
);

create table involucrate(
    id_involucrate int auto_increment,
    id_tipo_persona int,
    id_persona int,
    primary key (id_involucrate),
    foreign key (id_tipo_persona) references tipo_persona(id_tipo_persona),
    foreign key (id_persona) references persona(id_persona)
);

create table adopcion(
    id_adopcion int auto_increment,
    id_animal int unique,
    fecha_adopcion date,
    estado varchar(20),
    primary key(id_adopcion)
);

create table adopciones(
    id_adopciones int auto_increment,
    id_persona int,
    id_animal int,
    fecha_adopcion date,
    primary key(id_adopciones),
    foreign key(id_persona) references persona(id_persona),
    foreign key(id_animal) references animal(id_animal)
);

create table tipo_notificacion(
    id_tipo_notificacion int auto_increment,
    tipo_notif varchar(255),
    primary key(id_tipo_notificacion)
);
create table notificaciones(
    id_notificaciones int auto_increment,
    nombre varchar(255),
    email varchar(255),
    asunto varchar(255),
    mensaje varchar(255),
    id_tipo_notificacion int,
    fecha_notif date,
    primary key(id_notificaciones),
    foreign key (id_tipo_notificacion) references tipo_notificacion(id_tipo_notificacion)
);