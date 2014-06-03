ALTER TABLE  `games` CHANGE  `course`  `age` TINYINT( 2 ) UNSIGNED NOT NULL ;
ALTER TABLE  `games` CHANGE  `url`  `url` VARCHAR( 70 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
INSERT INTO  `edupeques`.`games` (
`entry` ,
`category`,
`age`,
`game`,
`url`,
`image`
)
VALUES (
NULL ,  '1', '3', 'Arbol', '../minigames/dibujos/dibujo-2/index.html', ''
), (
NULL ,  '1', '3', 'Casa', '../minigames/dibujos/dibujo-3/index.html', ''
), (
NULL ,  '1', '3', 'Gallina', '../minigames/dibujos/dibujo-4/index.html', ''
), (
NULL ,  '1', '4', 'Loro', '../minigames/dibujos/dibujo-5/index.html', ''
), (
NULL ,  '1', '4', 'Mariposa', '../minigames/dibujos/dibujo-6/index.html', ''
), (
NULL ,  '1', '5', 'Moto', '../minigames/dibujos/dibujo-7/index.html', ''
), (
NULL ,  '2', '3', 'Globo Azul', '../minigames/colores/colorazulglobo.html', ''
), (
NULL ,  '2', '3', 'Globos', '../minigames/colores/globos.html', ''
), (
NULL ,  '2', '3', 'Parque Colores', '../minigames/colores/ParqueColores.html', ''
), (
NULL ,  '2', '3', 'Puzzle', '../minigames/colores/puzzle.html', ''
), (
NULL ,  '2', '3', 'Puzzle 2', '../minigames/colores/puzzle2.html', ''
), (
NULL ,  '2', '3', 'Puzzle 3', '../minigames/colores/puzzle3.html', ''
), (
NULL ,  '3', '5', 'Navidad', '../minigames/festividades/nacimiento/index.html', ''
), (
NULL ,  '3', '5', 'Papa Noel', '../minigames/festividades/noel/index.html', ''
), (
NULL ,  '3', '5', 'Pascua', '../minigames/festividades/pascua/huevopascua.html', ''
), (
NULL ,  '3', '5', 'Pascua 2', '../minigames/festividades/pascua/huevopascua2.html', ''
), (
NULL ,  '3', '5', 'Pascua 3', '../minigames/festividades/pascua/huevopascua3.html', ''
), (
NULL ,  '3', '5', 'Reyes', '../minigames/festividades/reyes/index.html', ''
), (
NULL ,  '4', '3', 'Cantidades', '../minigames/numeros/cantidades.html', ''
), (
NULL ,  '4', '3', 'Cantidades en inverso', '../minigames/numeros/cantidadesInverso.html', ''
), (
NULL ,  '4', '3', 'Contorno del 1', '../minigames/numeros/contorno1.html', ''
), (
NULL ,  '4', '3', 'Contorno del 2', '../minigames/numeros/contorno2.html', ''
), (
NULL ,  '4', '3', 'Contorno del 3', '../minigames/numeros/contorno3.html', ''
), (
NULL ,  '4', '3', 'Repasar el 1', '../minigames/numeros/repasoContorno1.html', ''
), (
NULL ,  '4', '3', 'Repasar el 2', '../minigames/numeros/repasoContorno2.html', ''
), (
NULL ,  '4', '3', 'Repasar el 3', '../minigames/numeros/repasoContorno3.html', ''
), (
NULL ,  '4', '4', 'Contorno del 4', '../minigames/numeros2/contorno4.html', ''
), (
NULL ,  '4', '4', 'Contorno del 5', '../minigames/numeros2/contorno5.html', ''
), (
NULL ,  '4', '4', 'Contorno del 6', '../minigames/numeros2/contorno6.html', ''
), (
NULL ,  '4', '4', 'Repasar el 4', '../minigames/numeros2/repasoContorno4.html', ''
), (
NULL ,  '4', '4', 'Repasar el 5', '../minigames/numeros2/repasoContorno5.html', ''
), (
NULL ,  '4', '4', 'Repasar el 6', '../minigames/numeros2/repasoContorno6.html', ''
), (
NULL ,  '4', '4', 'Repasar el 4', '../minigames/numeros2/repasoContorno4.html', ''
), (
NULL ,  '4', '4', 'Reconocer Cantidades', '../minigames/numeros2/reconocerCantidades1.html', ''
), (
NULL ,  '4', '4', 'Reconocer Cantidades 2', '../minigames/numeros2/reconocerCantidades2.html', ''
), (
NULL ,  '4', '5', 'Contorno del 0', '../minigames/numeros3/contorno0.html', ''
), (
NULL ,  '4', '5', 'Contorno del 7', '../minigames/numeros3/contorno7.html', ''
), (
NULL ,  '4', '5', 'Contorno del 8', '../minigames/numeros3/contorno8.html', ''
), (
NULL ,  '4', '5', 'Contorno del 9', '../minigames/numeros3/contorno9.html', ''
), (
NULL ,  '4', '5', 'Contorno del 10', '../minigames/numeros3/contorno10.html', ''
), (
NULL ,  '4', '5', 'Repasar el 7', '../minigames/numeros3/repasoContorno7.html', ''
), (
NULL ,  '4', '5', 'Repasar el 8', '../minigames/numeros3/repasoContorno8.html', ''
), (
NULL ,  '4', '5', 'Repasar el 9', '../minigames/numeros3/repasoContorno9.html', ''
), (
NULL ,  '4', '5', 'Repasar el 10', '../minigames/numeros3/repasoContorno10.html', ''
), (
NULL ,  '4', '5', 'Sumas', '../minigames/numeros2/operacionesSuma.html', ''
), (
NULL ,  '5', '4', 'Animales de la granja', '../minigames/Habitos/animalesGranja.html', ''
), (
NULL ,  '5', '4', 'Animales de la selva', '../minigames/Habitos/animalesSelva.html', ''
), (
NULL ,  '5', '3', 'El baño', '../minigames/Habitos/elBano.html', ''
), (
NULL ,  '5', '3', 'La cara', '../minigames/Habitos/laCara.html', ''
), (
NULL ,  '5', '5', 'Las Profesiones', '../minigames/Habitos/lasProfesiones.html', ''
), (
NULL ,  '5', '4', 'Los Numeros', '../minigames/Habitos/losNumeros.html', ''
), (
NULL ,  '5', '5', 'Los Transportes', '../minigames/Habitos/losTransportes.html', ''
);