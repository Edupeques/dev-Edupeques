UPDATE  `edupeques`.`alumns` SET  `photo` =  '../images/ninos/5.jpg' WHERE  `alumns`.`entry` =1;
INSERT INTO  `edupeques`.`alumns` (
`entry` ,
`matricula` ,
`name` ,
`subname` ,
`birthday` ,
`class` ,
`photo` ,
`pwd`
)
VALUES (
NULL ,  '0',  'Desiree',  'Aban',  '1993-03-21',  '1',  '../images/ninos/desi3.jpg',  '678'
), (
NULL ,  '0',  'David',  'Bernia',  '1993-04-07',  '2',  '../images/ninos/david4.jpg',  ''
), (
NULL ,  '0',  'Federico',  'Barcelona',  '1994-11-15',  '2',  '../images/ninos/fede3.jpg',  ''
), (
NULL ,  '0',  'Lui',  'Rubio',  '1993-07-31',  '3',  '../images/ninos/3.JPG',  ''
), (
NULL ,  '0',  'Desi',  'Aban',  '1993-03-21',  '4',  '../images/ninos/desi4.jpg',  ''
), (
NULL ,  '0',  'Dav',  'Bernia',  '1993-04-11',  '3',  '../images/ninos/david3.jpg',  ''
), (
NULL ,  '0',  'Fed',  'Barcelona',  '1994-11-15',  '4',  '../images/ninos/fede1.jpg',  ''
), (
NULL ,  '0',  'Maria Luisa',  'Rubio',  '1993-07-31',  '6',  '../images/ninos/4.JPG',  ''
), (
NULL ,  '0',  'Dee',  'Aban',  '1993-03-21',  '5',  '../images/ninos/desi5.jpg',  ''
), (
NULL ,  '0',  'Daivid',  'Bernia',  '1993-04-11',  '5',  '../images/ninos/david1.jpg',  ''
), (
NULL ,  '0',  'Fee',  'Barçelona Independençia',  '1994-11-15',  '6',  '../images/ninos/fede2.jpg',  ''
);
UPDATE  `edupeques`.`alumns` SET  `photo` =  './img/burro.png' WHERE  `alumns`.`entry` =2;
UPDATE  `edupeques`.`alumns` SET  `photo` =  './img/caramelos.png' WHERE  `alumns`.`entry` =3;
UPDATE  `edupeques`.`alumns` SET  `photo` =  '../images/ninos/5.jpg' WHERE  `alumns`.`entry` =1;
UPDATE  `edupeques`.`alumns` SET  `class` =  '2' WHERE  `alumns`.`entry` =3;
