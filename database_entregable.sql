Create database RentadeBicicletas;

create table TIPO_BICICLETA(
     FOLIO char(4),
     NOMBRE varchar(60) not null,
     DESCRIPCION varchar(250),
     primary key(FOLIO)
);

create table CATEGORIA(
      NUMERO int(1),
      NOMBRE varchar(60) not null,
      primary key(NUMERO)
);

create table CLIENTE (
     Numero int auto_increment,
     NOMBRE_PILA varchar(60) not null,
     PRIMER_APELLIDO varchar(60) not null,
     SEGUNDO_APELLIDO varchar(60),
     NUMERO_TARJETA varchar(19) not null,
     FECHA_VENC_TARJETA varchar(5) not null,
     NUMERO_TELEFONICO varchar(13) not null,
     primary key(Numero)
);

create table ADMIN (
     NUMEMPLEADO int(3),
     NOMBRE_PILA varchar(60) not null,
     PRIMER_APELLIDO varchar(60) not null,
     SEGUNDO_APELLIDO varchar(60),
     CORREO varchar(50) unique not null,
     PASSWORD varchar(15) not null,
     CATEGORIA int(1),
     foreign key(CATEGORIA) references CATEGORIA(NUMERO),
     primary key(NUMEMPLEADO)
);

create table ESTABLECIMIENTO(
     Codigo char(5),
     NOMBRE varchar(30) not null,
     COLONIA varchar(50) not null,
     CALLE varchar(50) not null,
     NUMERO int not null,
     NUMEMPLEADO int(3),
     foreign key(NUMEMPLEADO)references ADMIN(NUMEMPLEADO),
     primary key(Codigo)
);

create table BICICLETA(
     Codigo char(5),
     DESCRIPCION varchar(250) not null,
     STOCK int(3) not null,
     COLOR varchar(15) not null,
     PRECIOHORA  int(3) not null,
     TIPO_BICICLETA char(4),
     foreign key(TIPO_BICICLETA)references TIPO_BICICLETA(FOLIO),
     ESTABLECIMIENTO char(5),
     foreign key(ESTABLECIMIENTO)references ESTABLECIMIENTO(Codigo),
     primary key(Codigo)
);

create table RENTA(
     FOLIO int(4) auto_increment,
     FECHA date not null,
     HORA time not null,
     TIEMPO int(3) not null,
     CANTIDAD_BICI int(2) not null,
     MONTO int(4) not null,
     Numero int,
     foreign key(Numero)references CLIENTE(Numero),
     primary key(FOLIO)
);

create table DETALLE_RENTA(
     Codigo int(3) auto_increment,
     BICICLETA char(5),
     foreign key(BICICLETA)references BICICLETA(Codigo),
     RENTA int(4),
     foreign key(RENTA)references RENTA(FOLIO),
     primary key (Codigo),
     CANTIDAD int(2) not null,
     IMPORTE int(4) not null
);

insert into TIPO_BICICLETA values
('132S','Bicicletas Sport o para iniciación','Se las conoce también como bicicletas Sport y no tienen ninguna limitación, pues son auténticas bicis de montaña con las que cualquier ciclista, de cualquier nivel, puede progresar fácilmente. Están orientadas al rendimiento mediante la práctica fácil y divertida, sin más pretensiones. '),
('328M','Bicicletas tipo Trail o Hard Tail','Tiene un recorrido de horquilla baja y las ruedas son, con frecuencia, de 29 pulgadas. Su versatilidad motiva que sean las más acertada para iniciarse en el ciclismo de montaña, pues se adaptan a todos los terrenos: caminos forestales, de tierra, sendas de montes, etc.'),
('250M','Bicicletas Fatbikes','Este tipo de bicis son ideales para aquellas personas amantes de la aventura, a las que no les gustan los límites. Son la solución perfecta para disfrutar de un día al aire libre sin importar las condiciones del terreno: haya arena, lluvia, nieve o piedras, ¡podrás con todo!'),
('229M','Bicicletas de Dirt Jump','Están diseñadas para saltar y hacer “trucos”, y son más pequeñas que el resto de las bicis de MTB, lo que las hace muy ágiles y fáciles de maniobrar.'),
('569M','Precaliber 24 de 8 velocidades y suspensión','Cuenta con un cuadro de aluminio resistente pero ligero, una tijera de suspensión rendidora y una transmisión de 8 velocidades ideal para correr carreras de la escuela a casa, pasar volando entre los bosques y rodar sobre senderos y caminos con la familia. Para niños de 8 a 12 años, entre 51 a 59 de estatura.'),
('183U','Bicicleta Urbana R26 Huffy Deluxe','Es especial para que salgas a pasear en el parque o para irte a transitar por la ciudad. Es de rodada 26" y cuenta con frenos de contrapedal por lo que maniobrarla al momento de detenerte es mucho más seguro.')

insert into CATEGORIA values
(1,'DBA'),
(2,'DB')

insert into ADMIN values
(112,'Diego','Valenzula','Lopez','diegova20@gmail.com','lopez12345',2),
(455,'Andrea','Perez','Gomez','andrea95@outlook.com','Perez9090',2),
(321,'Eduardo','Flores','Roque','eduardoroq@gmail.com','Eduardo8989',2),
(100,'Ian Armando','Labrada','Farias','ianutt@gmail.com','Ian14',1)

insert into CLIENTE values
(1,'Nestor','Lagunas','Sanchez','4928 7692 2414 1623','05/26','664 340 2142'),
(2,'Mariana','Sandoval','Reyes','1234 5678 9012 3456','09/27','664 545 5767'),
(3,'Ximena','Gimenez','Vautista','4532 3100 9999 1048','11/24','664 604 7831'),
(4,'Pablo','Torres','Balenzuela','5412 7512 3412 3456','04/25','664 712 3052'),
(5,'Talion','Benitez','Vazquez','5285 2758 5053 5017','01/23','664 553 2545'),
(6,'Aguilar','Lopez','Gonzales','4859 0875 4982 8010','08/25','664 921 0606'),
(7,'Karen','Hernandez','Diaz','4508 1234 5678 9010','10/23','664 511 0701'),
(8,'Juan','Salinas','Ramon','5412 7512 3456 7890','02/27','644 419 1066'),
(9,'Celina','Contreras','Dominguez','0012 3456 7890 1234','03/24','664 901 5208'),
(10,'Jorge','Orozco','Rosenberg','4865 1285 9514 3210','02/26','664 794 5378'),
(11,'Marlene','Nuñez','Salmuera','4037 0712 3456 7891','06/27','664 347 0236'),
(12,'Frodo','Bolson','Olivarez','5433 2930 0675 5620','03/28','664 139 5107'),
(13,'Nayeli','Villegas','Hernandez','4174 6322 3516 4789','09/23','664 733 4830'),
(14,'Ismael','Medina','Rodriguez','4384 2186 1110 7331','12/25','664 472 4375'),
(15,'Alexis','Carachure','Lenorio','1000 2345 6000 7890','10/27','664 587 6013'),
(16,'Luis','Maldonado','Brito','1234 5678 9101 1121','11/25','664 382 8309'),
(17,'Cristian','Fernandez','Brabo','4547 7403 8765 4321','02/26','664 254 3944'),
(18,'Karina','Montero','Vera','4925 5600 3412 2020','09/23','644 442 5198'),
(19,'Alejandro','Avila','Vargas','5709 1234 5778 9012','05/27','664 707 1500'),
(20,'Ivan','Garcia','Sandoval','4619 5215 4062 5191','12/25','664 794 2440'),
(21,'Dana','Peña','Garzon','4978 0123 4567 9032','07/24','664 412 1520'),
(22,'Cristian','Prestegui','Ortega','5524 8812 3412 3456','01/27','664 622 4488'),
(23,'Karina','Mondragon','Velazquez','5209 4750 8910 8643','09/23','664 818 8652'),
(24,'Hugo','Duarte','Espinoza','5116 2930 8042 4634','05/29','664 697 5113'),
(25,'Mario','Gutierrez','Mejia','5327 7085 6453 6202','04/28','664 473 3338'),
(26,'Oliver','Portillo','Rivas','6711 8000 1234 5678','07/30','664 828 8159'),
(27,'Gael','Rojas','Salazar','5200 0129 5034 2818','12/32','664 843 3169'),
(28,'Eric','Silva','Vera','5540 0200 6905 3402','06/30','664 295 6850'),
(29,'Julieta','Zambrano','Vargas','5433 6248 5643 7814','08/34','664 858 5199'),
(30,'Frida','Gonzales','Flores','0123 4567 8901 2345','12/26','664 516 4661'),
(31,'Socorro','Chajon','Santos','3452 1284 6871 5836','03/23','664 055 6871'),
(32,'Vicente','Cush','Alvarez','3529 6116 5534 1592','08/28','664 634 4938'),
(33,'Amanda','Soto','Tecun','5302 6101 2345 6789','09/24','664 660 8548'),
(34,'Edwin','Garcia','Morales','5136 1521 1037 3052','01/30','664 934 0894'),
(35,'Gilberto','Santos','López','3797 2310 3418 7945','05/29','664 192 9185'),
(36,'Ileana','Vivas','Muñoz','4779 5294 4506 5310','11/27','664 149 1819'),
(37,'José Luis','Ramírez','Carrera','4035 3672 6333 0270','06/23','664 561 4010'),
(38,'Juan Arnulfo','Pérez','Rosales','5537 8597 6541 6482','02/34','664 720 1862'),
(39,'Julio Cesar','Orantes','Osaeta','5191 1623 9069 1315','08/35','664 768 5169'),
(40,'Lady Angélica','Soto','Concuan','4014 6936 8824 7475','01/25','664 940 4046'),
(41,'Luz María','Guerra','Matías','4709 7436 6196 4362','12/28','644 266 3527'),
(42,'Nery','Moices','Cruz','4236 5533 5312 4239','07/31','644 634 5951'),
(43,'Oscar Manuel','Osorio','Teletor','5464 9940 7916 9217','04/26','664 719 6521'),
(44,'Rafael','Acuña','Quiñonez','5527 4208 2227 9181','09/24','664 742 7850'),
(45,'Patricio','Miranda','Castellanos','4895 3725 5921 3551','11/29','664 332 5281'),
(46,'Santiago','Rivas','Garrido','5324 4818 0233 2536','08/27','664 532 8276'),
(47,'Vilma Yajaida','Herrera','Herrera','5385 3378 7187 5050','06/32','664 174 3215'),
(48,'Zoila','Bautista','Fajardo','4282 2935 3025 2693','03/29','664 930 7136'),
(49,'Eugenio Oliverio','Franco','Soza','5593 6924 0637 4096','12/30','664 575 3694'),
(50,'Sheyla Marleni','Najera','Mejia','4736 0117 3005 4277','11/24','664 936 7121')

insert into ESTABLECIMIENTO values
('220PR','Plaza Rio','Zona Urbana Río','P. de los Heroes',200,112),
('224PG','Plaza Galerias','Otay Galerías','Boulevard Agua Caliente',110,455),
('221P2','Plaza 2000','Corredor Tijuana','Delejido Francisco Villa',26135,321)

insert into BICICLETA values
('342MS','Cuentan con cuadros de aluminio. Además, su geometría prima la comodidad, por lo que se trata de bicicletas ideales para hacer kilómetros sin preocupaciones.',10,'Negro',200,'132S','220PR'),
('184GD','Son bicicletas para casi todo. Con ellas es posible moverse por cualquier zona urbana sin problemas, ya sea en llano o en pendiente. Montan una relación de marchas bastante generosa de hasta 24 velocidades.',31,'Amarrilo',250,'328M','224PG'),
('140CM','Son ideales para adquirir mucha técnica en las bajadas. Al mismo tiempo, estas bicicletas cuentan con cuadros muy robustos y suelen disponer de tijas telescópicas de serie, muy útiles para las bajadas.',24,'Rojo',250,'250M','221P2'),
('453AP','Bicicleta de dimensiones muy reducidas, con rueda pequeña y que ocupan muy poco espacio plegadas. Son ideales cuando tenemos que cargar con ella a menudo, tenemos poco espacio o debemos subirla regularmente a nuestro puesto de trabajo.',16,'Gris',250,'229M','220PR'),
('336LA','Debido a sus singulares características, este tipo de bicicletas son ideales para usarlas por la nieve o la arena, pero también pueden ser divertidas para determinadas rutas por la montaña.',20,'Naranja',200,'569M','224PG'),
('598CN',' Son de rueda grande y tienen una conducción segura y cómoda en todo tipo de terrenos. Están indicadas especialmente para zonas llanas. Cuentan con guardabarros, portabultos y toda la transmisión protegida.',41,'Morado',200,'183U','221P2')


Select date_format(FECHA, "%d-%m-%Y") as fecha_new_formato from renta;

insert into RENTA values
(1,'2022-11-05','11:00:00',4,1,800,1),
(2,'2022-11-05','13:00:00',3,5,3750,2),
(3,'2022-11-05','16:00:00',4,2,1600,3),
(4,'2022-11-07','12:00:00',2,2,1000,4),
(5,'2022-11-09','10:00:00',3,1,600,5),
(6,'2022-11-09','15:00:00',4,3,2400,6),
(7,'2022-11-10','11:00:00',3,2,1200,7),
(8,'2022-11-10','14:00:00',3,1,750,8),
(9,'2022-11-10','14:00:00',1,1,250,9),
(10,'2022-11-11','10:00:00',4,3,3000,10),
(11,'2022-11-11','15:00:00',4,3,2600,11),
(12,'2022-11-13','13:00:00',2,1,400,12),
(13,'2022-11-13','13:00:00',2,3,1500,13),
(14,'2022-11-13','14:00:00',1,3,600,14),
(15,'2022-11-14','10:00:00',3,3,2250,15),
(16,'2022-11-14','14:00:00',1,1,200,16),
(17,'2022-11-14','16:00:00',1,2,400,17),
(18,'2022-11-14','18:00:00',2,1,500,18),
(19,'2022-11-16','13:00:00',3,3,2250,19),
(20,'2022-11-16','16:00:00',4,3,2400,20),
(21,'2022-11-16','17:00:00',1,2,500,21),
(22,'2022-11-16','18:00:00',1,4,950,22),
(23,'2022-11-17','14:00:00',4,3,3000,23),
(24,'2022-11-18','09:00:00',3,2,1200,24),
(25,'2022-11-18','11:00:00',2,2,1000,25),
(26,'2022-11-18','13:00:00',3,2,1500,26),
(27,'2022-11-18','16:00:00',3,1,750,27),
(28,'2022-11-20','10:00:00',2,1,400,28),
(29,'2022-11-20','17:00:00',4,1,1000,29),
(30,'2022-11-22','11:00:00',1,3,600,30),
(31,'2022-11-23','10:00:00',3,2,1200,31),
(32,'2022-11-23','14:00:00',2,3,1500,32),
(33,'2022-11-23','15:00:00',4,1,2600,33),
(34,'2022-11-25','12:00:00',2,3,1500,34),
(35,'2022-11-25','15:00:00',2,4,1800,35),
(36,'2022-11-25','17:00:00',3,2,1500,36),
(37,'2022-11-26','11:00:00',2,1,400,37),
(38,'2022-11-26','13:00:00',1,2,400,38),
(39,'2022-11-26','13:00:00',1,4,750,39),
(40,'2022-11-26','15:00:00',3,1,600,40),
(41,'2022-11-26','18:00:00',3,1,600,41),
(42,'2022-11-27','10:00:00',4,2,1600,42),
(43,'2022-11-27','10:00:00',2,3,1500,43),
(44,'2022-11-27','10:00:00',2,1,500,44),
(45,'2022-11-27','16:00:00',1,1,250,45),
(46,'2022-11-27','16:00:00',1,5,1100,46),
(47,'2022-11-27','16:00:00',1,2,500,47),
(48,'2022-11-29','12:00:00',4,1,800,48),
(49,'2022-12-30','11:00:00',3,2,1350,49),
(50,'2022-12-30','11:00:00',3,1,600,50)

insert into DETALLE_RENTA values
(1,'342MS',1,1,800),
('','184GD',2,3,2250),
('','140CM',2,2,1500),
('','598CN',3,2,1600),
('','453AP',4,2,1000),
('','336LA',5,1,600),
('','598CN',6,3,2400),
('','598CN',7,2,1200),
('','184GD',8,1,750),
('','140CM',9,1,250),
('','453AP',10,3,3000),
('','336LA',11,2,1600),
('','598CN',11,1,1000),
('','342MS',12,1,400),
('','453AP',13,3,1500),
('','336LA',14,3,600),
('','140CM',15,3,2250),
('','342MS',16,1,200),
('','342MS',17,2,400),
('','453AP',18,1,500),
('','184GD',19,3,2250),
('','598CN',20,3,2400),
('','140CM',21,2,500),
('','342MS',22,1,200),
('','598CN',22,3,750),
('','184GD',23,3,3000),
('','342MS',24,2,1200),
('','184GD',25,2,1000),
('','184GD',26,2,1500),
('','453AP',27,1,750),
('','336LA',28,1,400),
('','140CM',29,1,1000),
('','342MS',30,3,600),
('','598CN',31,2,1200),
('','453AP',32,3,1500),
('','336LA',33,2,1600),
('','342MS',33,1,1000),
('','140CM',34,3,1500),
('','453AP',35,2,1000),
('','184GD',35,2,1000),
('','140CM',36,2,800),
('','336LA',37,1,400),
('','598CN',38,2,400),
('','453AP',39,3,750),
('','342MS',40,1,600),
('','336LA',41,1,600),
('','598CN',42,2,1600),
('','140CM',43,3,1500),
('','453AP',44,1,500),
('','140CM',45,1,250),
('','598CN',46,3,600),
('','140CM',46,2,500),
('','184GD',47,2,500),
('','336LA',48,1,800),
('','140CM',49,1,750),
('','598CN',49,1,600),
('','598CN',50,1,600)
