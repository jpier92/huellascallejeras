insert into animal()







-- Registro 1
-- Registro 1
-- Registro 1 (Max es un macho)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Max', 3, 'Marrón y blanco', 'M', 1, 1, 60, 3, 1, 'Amigable y juguetón', 1, '2023-08-15', '2000-01-01', '/assets/huellas/img/adopcion/perro-max.jpg', 'S');

-- Registro 2 (Luna es un gato Siamesa)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Luna', 2, 'Gris', 'H', 7, 2, 25, 1, 'Independiente pero cariñosa', 2, '2023-07-20', '2000-01-01', '/assets/huellas/img/adopcion/gata-luna.jpg', 'S');

-- Registro 3 (Rocky es un perro Labrador Retriever)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Rocky', 4, 'Negro', 'M', 1, 1, 45, 65, 3, 'Protector y leal', 3, '2023-09-01', '2000-01-01', '/assets/huellas/img/adopcion/perr-rocky.jpg', 'S');

-- Registro 4 (Bella es un gato Siamesa)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Bella', 1, 'Blanco', 'H', 7, 2, 22, 1, 'Juguetona y curiosa', 4, '2023-08-25', '2000-01-01', '/assets/huellas/img/adopcion/gato-bella.jpg', 'S');

-- Registro 5 (Coco es un perro Labrador Retriever)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Coco', 2, 'Café', 'M', 1, 1, 30, 2, 'Afectuoso y sociable', 5, '2023-07-10', '2000-01-01', '/assets/huellas/img/adopcion/perro-coco.jpg', 'S');

-- Registro 6 (Milo es un gato Dálmata)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Milo', 1, 'Atigrado', 'M', 6, 2, 27, 2, 'Energético y juguetón', 6, '2023-08-19', '2000-01-01', '/assets/huellas/img/adopcion/gato-milo.jpg', 'S');

-- Registro 7 (Charlie es un perro Labrador Retriever)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Charlie', 3, 'Blanco y negro', 'M', 1, 1, 55, 2, 'Inteligente y activo', 7, '2023-07-05', '2000-01-01', '/assets/huellas/img/adopcion/perro-charli.jpg', 'S');

-- Registro 8 (Nina es un gato Persa)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Nina', 1, 'Gris rayado', 'H', 8, 2, 28, 2, 'Cautelosa pero afectuosa', 8, '2023-09-02', '2000-01-01', '/assets/huellas/img/adopcion/gato-nina.jpg', 'S');

-- Registro 9 (Lucas es un perro Goldend Retriever)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Lucas', 5, 'Dorado', 'M', 5, 1, 60, 3, 'Cariñoso y obediente', 9, '2023-08-10', '2000-01-01', '/assets/huellas/img/adopcion/perro-lucas.jpg', 'S');

-- Registro 10 (Mia es un gato Egipcio Mau)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Mia', 2, 'Blanco y negro', 'H', 10, 2, 29, 2, 'Mimoso y juguetón', 10, '2023-07-30', '2000-01-01', '/assets/huellas/img/adopcion/gato-mia.jpg', 'S');

-- Registro 11 (Leo es un perro Rottweiler)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Leo', 2, 'Leonado', 'M', 2, 1, 58, 2, 'Energético y amigable', 11, '2023-08-12', '2000-01-01', '/assets/huellas/img/adopcion/perro-leo.jpg', 'S');

-- Registro 12 (Oliver es un gato Main Coon)
INSERT INTO animal (nombre, edad, color, sexo, id_raza, tipo_id, peso, altura, id_tamano, personalidad, num_identificacion, fecha, fec_nac, url_imagen, esterelizacion) VALUES
('Oliver', 1, 'Gris atigrado', 'M', 12, 2, 30, 2, 'Curioso y sociable', 12, '2023-07-14', '2000-01-01', '/assets/huellas/img/adopcion/gato-oliver.jpg', 'S');

    insert into tipo_animal (id_tipo_animal,tipo_animal) values(1,'Perro');
    insert into tipo_animal (id_tipo_animal,tipo_animal) values(2,'Gato');


    insert into raza (nombre,id_raza) values ('Labr_idador Retriever',1);
    insert into raza (nombre,id_raza) values ('Rott_idweiler',2);
    insert into raza (nombre,id_raza) values ('Pug',3);
    insert into raza (nombre,id_raza) values ('Bord_ider Collie',4);
    insert into raza (nombre,id_raza) values ('Gold_iden Retriever',5);
    insert into raza (nombre,id_raza) values ('Dálm_idata',6);


    insert into raza (nombre,id_raza) values ('Siamdesa',7);
    insert into raza (nombre,id_raza) values ('Persida',8;
    insert into raza (nombre,id_raza) values ('Bengidala',9);
    insert into raza (nombre,id_raza) values ('Mau Egipcio',10);
    insert into raza (nombre id_raza) values ('Siamdés',11);
    insert into raza (nombre,id_raza) values ('Mainde Coon',12);

    insert into tamanos(tamano_animal,id_tamano) values('Bajo',1);
    insert into tamanos(tamano_animal,id_tamano) values('Mediano',2);
    insert into tamanos(tamano_animal,id_tamano) values('Grande',3);


    insert into adopcion (id_animal,fecha_adopcion, estado) values (1,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (2,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (3,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (4,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (5,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (6,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (7,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (8,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (9,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (10,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (11,'2023-09-02','true');
    insert into adopcion (id_animal,fecha_adopcion, estado) values (12,'2023-09-02','true');