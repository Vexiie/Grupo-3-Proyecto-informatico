insert into animales (nombre, especie, sexo, razacolor, edad, localidad, descripcion, fecharescate, adoptado) values
("Maullina Jolie", "gato","Hembra","Ardilla", 0.5,"El bosque", "Es claramente una gata, para nada es una ardilla que se coló con el resto de los gatos.", "2024-01-21", false),
("Uñitas la Destructora","Hembra", "gato", "Blanco", 1.0,"MORDOR", "ESTE GATO ES UN SEÑOR OSCURO, dicho esto Uñitas te amara por el resto de tu vida.", "2023-01-21", False),
("Bigotes McPelusa", "gato","Macho", "Blanco", 0.3,"Casita de fiestas", "A este gatito le encanta festejar cumpleaños Festejara el tuyo con mucho amor.", "2024-02-22", False),
("Zarpacatástrofe", "gato","Macho", "Naranja", 0.2,"El campo de batalla", "Gato muy cariñoso, tanto que te protegera, con sus uñas y armas de fuego.", "2024-03-12", False),
("Kaiba", "gato","Macho", "Blanco de Ojos Azules", 1,"CABA, Barrio Chino", "Un gato ambicioso que disfruta mucho de jugar y mas de recibir premio.", "2024-01-10", False),
("Salem", "gato","Macho", "Negro", 1,"Buenos Aires, San Martín", "A veces parece que habla, pero en realidad maulla gracioso.", "2023-05-21", False),
("Chasqui", "gato","Hembra", "Siames", 6, "Casa de Nico", "Es la gatita mas hermosa de todo el mundo, es un poco timida, pero una vez que te ama lo hace de forma incondicional.", "2018-01-21", True),
("Onix", "gato","Macho", "Mau Egipcio", 5,"Casa de Nico", "Onix es hijo de chasqui, es muy cariñoso y chitochito.", "2018-09-16", True),
("Pochoclo", "gato","Macho", "Bicolor", 2,"Casa de Abi", "Un gato muy aesthetic, tiene una personalidad unica, no se metan con el.", "2022-05-22", True),
("Floppa", "gato","Macho" ,"Caracal", 1,"Somewhere", "Floppa es el lider de muchas organizaciones, es multibillonario y adora la Fanter.", "1986-06-22", false),
("Toby", "perro","Macho" ,"Golden Retriever", 0.5,"Palermo, Buenos Aires", "Es un golden retriever, no hace falta decir mas Rawr", "2024-07-21", false),
("Coco", "perro","Hembra" ,"bonito", 1,"Puerta de Hierro, Buenos Aires", "Una perra con experiencia en las calles, te protegera con su vida", "2024-06-24", false),
("Shiva", "perro","Macho" ,"Husky Siberiano", 0.4,"Caballito, Buenos Aires", "Un perro muy bonito y muy joven, esta listo para ser criado como un miembro mas de tu familia.", "2024-03-23", false),
("Bola de nieve", "cobayo","Hembra" ,"Cobayo Negro", 0.3,"Villa Santa Rita, Buenos Aires", "Bola de nieve es muy buena y amigable, odia los espacios cerrados y se adapta fácilmente a un lugar ruidoso y movido.", "2024-05-11", false),
("Delgadencia", "cobayo","Macho" ,"Cui Peruano", 0.2,"Peru", "Fue rescatado de Perú donde sufría por el maltrato de sus dueños. El adora las caricias en las orejitas y ama los premios.", "2024-05-11", false),
("Atún", "cobayo","Hembra" ,"Hmster naranja y blanco", 0.5,"Hawaii", "Ama vestirse de abeja, debido a que sufre mucho el frio, necesita abrigo y cariño, el hamster ideal para recibir cariño.", "2024-05-30", false),
("Mordo", "Ave","Macho" ,"Azulejo", 2,"El Parque", "Solo viene a su hogar para comer y pasar la noche, no es muy cariñoso y puede llegar a morder, no le gustan los perros ni los felinos. NO DARLE PAN!", "2023-06-20", false),
("Pico Zapatin", "Ave","Macho" ,"Pico Zapato", 3,"Aparecio un dia en el refugio", "Un pájaro amable y jugueton que adora jugar con niños y bebés, es totalmente dulce y adora las caricias en su pico.", "2023-12-12", false),
("Erika B.", "Ave","Hembra" ,"Paloma", 1.5,"Nueva York", "Una paloma con mucho conocimiento callejero, aun asi ella busca un hogar con una familia que la ame.", "2023-09-12", false),
("Barbara", "Ave","Hembra" ,"Cuervo", 1,"Ciudad Gotica", "Una Cuerva muy coqueta, ella ama los dientes de leon y otras flores, suele traer flores bonitas a la casa.", "2024-02-27", false),
("Pachorra", "Perro","Hembra" ,"Caniche Micro Toy", 6,"Microcentro", "Pachi es una perra con una prescencia amenazante, ella vive su vida a su manera, Su pasion? Decir verdades.", "2001-09-11", false),
("Maní", "Cobayo","Hembra" ,"Hamster Naranja", 2,"Loma Hermosa", "Maní era una hamster con una vida de vicios, pudo dejar de fumar hace poco, ahora rehabilitada y lista para unirse a una familia.", "2024-03-06", false);

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
