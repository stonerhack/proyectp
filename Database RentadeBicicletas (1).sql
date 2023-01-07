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
     BICICLETA char(5),
     foreign key(BICICLETA)references BICICLETA(Codigo),
     RENTA int(4),
     foreign key(RENTA)references RENTA(FOLIO),
     primary key (BICICLETA,RENTA),
     CANTIDAD int(2) not null,
     IMPORTE int(4) not null
);

insert into TIPO_BICICLETA values
('132S','Bicicletas Sport o para iniciación','Son ideales para iniciarte en la práctica del ciclismo de montaña.'),
('328M','Bicicletas tipo Trail o Hard Tail','Son bicicletas pensadas para la diversión en estado puro.'),
('250M','Bicicletas Fatbikes','Este tipo de bicicletas son ideales para usarlas por la nieve o la arena,pero también pueden ser divertidas para determinadas rutas por la montaña.'),
('229M','Bicicletas de Dirt Jump','Están diseñadas para saltar y hacer "trucos",y son más pequeñas que el resto de las bicis de MTB, lo que las hace muy ágiles y fáciles de maniobrar.'),
('569M','Precaliber 24 de 8 velocidades y suspensión','Es versátil y fue construida para los niños aventureros que adoran salir del pavimento para andar por la tierra.'),
('183U','Bicicleta Urbana R26 Huffy Deluxe','Cuadro con tecnología perfect fit lo que permite al usuario colocar ambos pies en el suelo al mismo tiempo al momento de subirse a la bicicleta'),
('695U','Bicicleta Urbana R26 Kulana Malama','Asiento extra largo y portabultos, Manubrio Easy Reach Newgirls con canasta integrada, Freno de montaña para la llanta trasera.')

insert into CATEGORIA values
(1,'Administador DB'),
(2,'Administrador Establecimiento')

insert into ADMIN values
(112,'Diego','Valenzula','Lopez','diegova20@gmail.com','lopez12345',2),
(455,'Andrea','Perez','Gomez','andrea95@outlook.com','Perez9090',2),
(321,'Eduardo','Flores','Roque','eduardoroq@gmail.com','Eduardo8989',2),
(100,'Ian Armando','Labrada','Farias','ianutt@gmail.com','Ian14',1)

insert into CLIENTE values
(1,'Nestor','Lagunas','Sanchez','4928 7692 2414 1623','05/26'),
(2,'Mariana','Sandoval','Reyes','1234 5678 9012 3456','09/27'),
(3,'Ximena','Gimenez','Vautista','4532 3100 9999 1048','11/24'),
(4,'Pablo','Torres','Balenzuela','5412 7512 3412 3456','04/25'),
(5,'Talion','Benitez','Vazquez','5285 2758 5053 5017','01/23'),
(6,'Aguilar','Lopez','Gonzales','4859 0875 4982 8010','08/25'),
(7,'Karen','Hernandez','Diaz','4508 1234 5678 9010','10/23'),
(8,'Juan','Salinas','Ramon','5412 7512 3456 7890','02/27'),
(9,'Celina','Contreras','Dominguez','0012 3456 7890 1234','03/24'),
(10,'Jorge','Orozco','Rosenberg','4865 1285 9514 3210','02/26'),
(11,'Marlene','Nuñez','Salmuera','4037 0712 3456 7891','06/27'),
(12,'Frodo','Bolson','Olivarez','5433 2930 0675 5620','03/28'),
(13,'Nayeli','Villegas','Hernandez','4174 6322 3516 4789','09/23'),
(14,'Ismael','Medina','Rodriguez','4384 2186 1110 7331','12/25'),
(15,'Alexis','Carachure','Lenorio','1000 2345 6000 7890','10/27'),
(16,'Luis','Maldonado','Brito','1234 5678 9101 1121','11/25'),
(17,'Cristian','Fernandez','Brabo','4547 7403 8765 4321','02/26'),
(18,'Karina','Montero','Vera','4925 5600 3412 2020','09/23'),
(19,'Alejandro','Avila','Vargas','5709 1234 5778 9012','05/27'),
(20,'Ivan','Garcia','Sandoval','4619 5215 4062 5191','12/25'),
(21,'Dana','Peña','Garzon','4978 0123 4567 9032','07/24'),
(22,'Cristian','Prestegui','Ortega','5524 8812 3412 3456','01/27'),
(23,'Karina','Mondragon','Velazquez','5209 4750 8910 8643','09/23'),
(24,'Hugo','Duarte','Espinoza','5116 2930 8042 4634','05/29'),
(25,'Mario','Gutierrez','Mejia','5327 7085 6453 6202','04/28'),
(26,'Oliver','Portillo','Rivas','6711 8000 1234 5678','07/30'),
(27,'Gael','Rojas','Salazar','5200 0129 5034 2818','12/32'),
(28,'Eric','Silva','Vera','5540 0200 6905 3402','06/30'),
(29,'Julieta','Zambrano','Vargas','5433 6248 5643 7814','08/34'),
(30,'Frida','Gonzales','Flores','0123 4567 8901 2345','12/26'),
(31,'Socorro','Chajon','Santos','3452 1284 6871 5836','03/23'),
(32,'Vicente','Cush','Alvarez','3529 6116 5534 1592','08/28'),
(33,'Amanda','Soto','Tecun','5302 6101 2345 6789','09/24'),
(34,'Edwin','Garcia','Morales','5136 1521 1037 3052','01/30'),
(35,'Gilberto','Santos','López','3797 2310 3418 7945','05/29'),
(36,'Ileana','Vivas','Muñoz','4779 5294 4506 5310','11/27'),
(37,'José Luis','Ramírez','Carrera','4035 3672 6333 0270','06/23'),
(38,'Juan Arnulfo','Pérez','Rosales','5537 8597 6541 6482','02/34'),
(39,'Julio Cesar','Orantes','Osaeta','5191 1623 9069 1315','08/35'),
(40,'Lady Angélica','Soto','Concuan','4014 6936 8824 7475','01/25'),
(41,'Luz María','Guerra','Matías','4709 7436 6196 4362','12/28'),
(42,'Nery','Moices','Cruz','4236 5533 5312 4239','07/31'),
(43,'Oscar Manuel','Osorio','Teletor','5464 9940 7916 9217','04/26'),
(44,'Rafael','Acuña','Quiñonez','5527 4208 2227 9181','09/24'),
(45,'Patricio','Miranda','Castellanos','4895 3725 5921 3551','11/29'),
(46,'Santiago','Rivas','Garrido','5324 4818 0233 2536','08/27'),
(47,'Vilma Yajaida','Herrera','Herrera','5385 3378 7187 5050','06/32'),
(48,'Zoila','Bautista','Fajardo','4282 2935 3025 2693','03/29'),
(49,'Eugenio Oliverio','Franco','Soza','5593 6924 0637 4096','12/30'),
(50,'Sheyla Marleni','Najera','Mejia','4736 0117 3005 4277','11/24')

insert into ESTABLECIMIENTO values
('220PR','Plaza Rio','Zona Urbana Río','P. de los Heroes',200,112),
('224PG','Plaza Galerias','Otay Galerías','Boulevard Agua Caliente',110,455),
('221P2','Plaza 2000','Corredor Tijuana','Delejido Francisco Villa',26135,321)

insert into BICICLETA values
('342MS','Bicicleta ideal para empezar con el ejercico para fortalecer tus piernas',10,'Negro',200,'132S','220PR'),
('184GD','Bicicleta para salir a pasear por las tardes y llamar la atención',31,'Amarrilo',250,'328M','224PG'),
('140CM','Bicicleta llamativa para salir con tus amigos en el parque',24,'Rojo',250,'250M','221P2'),
('453AP','Unica para pedalear por lugares complicados sin ningun problema',16,'Gris',250,'229M','220PR'),
('336LA','Bicicleta deportiva para salir a lugares montañosos',20,'Naranja',200,'132S','224PG'),
('598CN','Bicicleta resistente a muchos golpes, lo cual no se dañara facilmente',41,'Morado',200,'328M','221P2')

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
('342MS',1,1,800),
('184GD',2,3,2250),
('140CM',2,2,1500),
('598CN',3,2,1600),
('453AP',4,2,1000),
('336LA',5,1,600),
('598CN',6,3,2400),
('598CN',7,2,1200),
('184GD',8,1,750),
('140CM',9,1,250),
('453AP',10,3,3000),
('336LA',11,2,1600),
('598CN',11,1,1000),
('342MS',12,1,400),
('453AP',13,3,1500),
('336LA',14,3,600),
('140CM',15,3,2250),
('342MS',16,1,200),
('342MS',17,2,400),
('453AP',18,1,500),
('184GD',19,3,2250),
('598CN',20,3,2400),
('140CM',21,2,500),
('342MS',22,1,200),
('598CN',22,3,750),
('184GD',23,3,3000),
('342MS',24,2,1200),
('184GD',25,2,1000),
('184GD',26,2,1500),
('453AP',27,1,750),
('336LA',28,1,400),
('140CM',29,1,1000),
('342MS',30,3,600),
('598CN',31,2,1200),
('453AP',32,3,1500),
('336LA',33,2,1600),
('342MS',33,1,1000),
('140CM',34,3,1500),
('453AP',35,2,1000),
('184GD',35,2,1000),
('140CM',36,2,800),
('336LA',37,1,400),
('598CN',38,2,400),
('453AP',39,3,750),
('342MS',40,1,600),
('336LA',41,1,600),
('598CN',42,2,1600),
('140CM',43,3,1500),
('453AP',44,1,500),
('140CM',45,1,250),
('598CN',46,3,600),
('140CM',46,2,500),
('184GD',47,2,500),
('336LA',48,1,800),
('140CM',49,1,750),
('598CN',49,1,600),
('598CN',50,1,600)




/**************************************** TRIGGERS **********************************/
 /* 20. Actualizar el stock de un bicicleta despues de que se registra para su renta 
*************************************/
delimiter$$
create trigger ActualizarStock
after insert on detalle_renta
for each row
begin

    update BICICLETA
    set stock = stock - new.cantidad
    where Codigo = new.bicicleta;

end $$
delimiter ;
/* PRUEBA TRIGGER ActualizarStock */
insert into renta values 
('','2022-12-30','11:00:00',3,1,600,1)

insert into detalle_renta values 
('598CN',51,1,600)

insert into renta values 
('','2022-12-30','12:00:00',3,1,600,49)

insert into detalle_renta values 
('598CN',52,1,600)


/* 21. Evitar que se cambie la fecha de una renta
*************************************/
delimiter$$
create trigger Update_Fecha_Renta
before update on renta
for each row
begin 
   declare msg varchar(255);
    if(new.FECHA != old.FECHA)
    then
        set msg = concat('No se puede actualizar fecha');
        signal sqlstate '45000' set message_text = msg;
    end if;
end $$
delimiter ;

/* PRUEBA TRIGGER Update_Fecha_Renta */
update renta set FECHA = '2022-12-31'
where FOLIO = 52


/* 22. Evitar que se cambie la hora de la renta
*************************************/
delimiter$$
create trigger Update_Hora_Renta
before update on renta
for each row
begin 
   declare msg varchar(255);
    if(new.HORA != old.HORA)
    then
        set msg = concat('No se puede actualizar la hora');
        signal sqlstate '45000' set message_text = msg;
    end if;
end $$
delimiter ;

/* PRUEBA TRIGGER Update_Hora_Renta */
update renta set HORA = '13:00:00'
where FOLIO = 52


/* 23. Evitar que se cambie el Tiempo de la renta
*************************************/
delimiter$$
create trigger Update_Tiempo_Renta
before update on renta
for each row
begin 
   declare msg varchar(255);
    if(new.TIEMPO != old.TIEMPO)
    then
        set msg = concat('No se puede actualizar el tiempo');
        signal sqlstate '45000' set message_text = msg;
    end if;
end $$
delimiter ;

/* PRUEBA TRIGGER Update_Tiempo_Renta */
update renta set TIEMPO = '4'
where FOLIO = 52

/* 24. Evitar que se cambie la cantidad_bici de la renta
*************************************/
delimiter$$
create trigger Update_Cantidad_Bici_Renta
before update on renta
for each row
begin 
   declare msg varchar(255);
    if(new.CANTIDAD_BICI != old.CANTIDAD_BICI)
    then
        set msg = concat('No se puede actualizar la cantidad de bicicletas');
        signal sqlstate '45000' set message_text = msg;
    end if;
end $$
delimiter ;

/* PRUEBA TRIGGER Update_Cantidad_Bici_Renta */
update renta set CANTIDAD_BICI = '4'
where FOLIO = 52


/* 25. Evitar que se elimine una renta
*************************************/
delimiter$$
create trigger Delete_Renta
before delete on renta
for each row
begin  
    declare msg varchar(255);
    if (old.FOLIO)
    then
        set msg = concat('No se puede eliminar la renta');
        signal sqlstate '45000' set message_text = msg;
    end if;
end  $$
delimiter ;

/* PRUEBA TRIGGER Delete_Renta */
Delete from renta where FOLIO = 52;


/* 25. Calcular importe detalle venta
*************************************/
delimiter$$
create trigger Importe_Detalle_Renta
before insert on detalle_renta
for each row
begin  
    declare importe int(4);
    declare monto int(4);
    declare preciohora(3);
    declare bicicleta char(5);
    declare renta int(4);
    declare cantidad int(2);

end  $$
delimiter ;

/*
SP
26. lista de ventas de un cliente utilizar un parametro de entrada para ingresar el numero de cliente
--nombre completo del cliente 
--numero de venta
--fecha de la venta
--total de la venta 
*/
delimiter $$
create procedure ListaRtsDeUnCliente(in NumCli integer)
begin
    select concat(cli.NOMBRE_PILA,' ',cli.PRIMER_APELLIDO,' ',cli.SEGUNDO_APELLIDO) as Cliente, rt.FOLIO as Folio_De_Renta, 
    rt.FECHA as Fecha_De_Renta, rt.MONTO as Monto_Renta
    from renta as rt
    inner join cliente as cli on rt.Numero = cli.Numero
    where rt.Numero = NumCli;
end$$
delimiter ;

drop procedure ListaRtsDeUnCliente;
--- Prueba
call ListartsDeUnCliente(1);


/*
    27. SP para calcular la cantidad de rentas de un cliente */

delimiter $$
create procedure rtsDeUnCliente(inout rtsCliente integer)
begin
select count(Numero) into rtsCliente
from renta
where Numero = rtsCliente;
end $$
delimiter ;

drop procedure rtsDeUnCliente;

--- Prueba
set @rtsCliente = 1;
call rtsDeUnCliente(@rtsCliente);
select @rtsCliente as RentasDelCliente;


/* 28. Detalle completa de una Renta utilizar un parametro de entrada para ingresar el folio de la renta
--numero de la renta 
--fecha de la renta 
--nombre completo del cliente 
--Codigo de la bicicleta rentadas
--cantidad de cada bicicleta
--precio unitario de cada renta
-- tiempo de la renta
--importe por cada renta
--total de la renta
*/

DELIMITER $$
create PROCEDURE DetalleRenta (in Nr integer)
begin
    select re.FOLIO as Folio_Renta, re.FECHA as Fecha,
    concat(cli.NOMBRE_PILA,' ',cli.PRIMER_APELLIDO,' ',cli.SEGUNDO_APELLIDO) as Cliente,
    deren.BICICLETA as Codigo_Bici, deren.CANTIDAD as Cantidad_Bicicletas,
    bic.PRECIOHORA as Precio_Bicicleta,re.TIEMPO as Tiempo,deren.IMPORTE as Importe, re.MONTO as Monto
    from detalle_renta as deren
    inner join renta as re on deren.RENTA = re.FOLIO
    inner join cliente as cli on re.Numero = cli.Numero
    inner join bicicleta as bic on deren.BICICLETA = bic.Codigo
    where deren.renta = NR;
end $$
DELIMITER ;

--Prueba
call DetalleRenta(2);

drop procedure Detallerenta;

