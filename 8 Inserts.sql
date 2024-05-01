insert into animales (nombre, especie, razacolor, edad, localidad, descripcion, fecharescate, adoptado) values
("Maullina Jolie", "gato", "Ardilla", 0.5,"El bosque", "Es claramente una gata, para nada es una ardilla que se coló con el resto de los gatos.", "2024-01-21", false),
("Uñitas el Destructor", "gato", "Blanco", 1.0,"MORDOR", "ESTE GATO ES UN SEÑOR OSCURO, dicho esto Uñitas te amara por el resto de tu vida.", "2023-01-21", False),
("Bigotes McPelusa", "gato", "Blanco", 0.3,"Casita de fiestas", "A este gatito le encanta festejar cumpleaños Festejara el tuyo con mucho amor.", "2024-02-22", False),
("Zarpacatástrofe", "gato", "Naranja", 0.2,"El campo de batalla", "Gato muy cariñoso, tanto que te protegera, con sus uñas y armas de fuego.", "2024-03-12", False),
("Kaiba", "gato", "Blanco de Ojos Azules", 1,"CABA, Barrio Chino", "Un gato ambicioso que disfruta mucho de jugar y mas de recibir premio.", "2024-01-10", True),
("Salem", "gato", "Negro", 1,"Buenos Aires, San Martín", "A veces parece que habla, pero en realidad maulla gracioso.", "2023-05-21", False),
("Chasqui", "gato", "Siames", 6, "Casa de Nico", "Es la gatita mas hermosa de todo el mundo, es un poco timida, pero una vez que te ama lo hace de forma incondicional.", "2018-01-21", True),
("Onix", "gato", "Mau Egipcio", 5,"Casa de Nico", "Onix es hijo de chasqui, es muy cariñoso y chitochito.", "2018-09-16", True),
("Pochoclo", "gato", "Bicolor", 2,"Casa de Abi", "Un gato muy aesthetic, tiene una personalidad unica, no se metan con el.", "2022-05-22", True);

insert into usuarios (nombrecompleto, usuario, contraseña, DNI, descripcion, localidad, animalfav) values
("Nicolás Sagues Peña", "Nicrock 2.0","C0ntr4s3ñ4" ,47307877, "Dueño de Chasqui y Onix :D, Hizo la BD y el DER.", "Villa Santa Rita", "Gato"),
("Abigahil Saucedo", "xXAbiXx","Nachi1023" ,47346765, "Dueño de Pochoclo, Tini, Lali y Violeta, Se encarga junto a Agus del Diseño.", "Al lado de tropezón", "Gato"),
("Anderson Sanchez", "Ander","ander456" ,47356345, "Tiene un gato Aesthetics pero no se el nombre, se encarga del Frontend.", "Casa de Ander", "Gato"),
("Agustina Heck", "Agus :v","agus1234" ,47951845, "Se encarga junto a Abi del Diseño de la pagina.", "Casa de Agus", "Gato");

insert into adopciones (ID_animal, ID_user, fecha_adopcion) values
(5,3,"2024-02-21"),
(7, 1,"2018-01-21"),
(8, 1,"2018-09-16"),
(9, 2,"2022-05-22");
