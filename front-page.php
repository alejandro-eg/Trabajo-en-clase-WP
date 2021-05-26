<?php get_header(); ?>
<main class="h-full">
    <div class="flex w-full justify-center items-center space-x-10 my-20">
        <div class="w-1/12 rounded-full hover:shadow-2xl transition">
            <img
                class="rounded-full w-full"
                src="<?php echo get_template_directory_uri() ?>/assets/img/Alejandro.jpg" 
                alt="Imagen de perfil de Alejandro"
            >
        </div>
        <div class="w-6/12">
           <p class="select-none"> <h1 Alejandro Egas></h1>
           Tengo 22 años nací el 22 de septiembre de 1998, nací en Ecuador en la ciudad de Quito, 
           soy estudiante de informática, también aficionado por la lectura, la musica y los derechos humanos
           <br>
           <a href="https://www.facebook.com/alejandroegasg">->Mas sobre mi</a></br>
            </p>
        </div>
    </div>
    <div class="flex h-85 space-x-10 mt-10 w-8/12 mx-auto">
        <div class="w-full h-full border-2 hover:shadow-lg transition rounded-b-lg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/plataformas.png" alt="Imagen Plataformas Streaming">
            <p class="h-1/5 text-center leading-9 select-none">Adicto las series</p>
        </div>


    <div class="flex w-full justify-center mt-10 text-justify">
        <p class="w-8/12 select-none">
        Tengo un especial interes en las plataformas de streaming ya que soy adicto a ver series, me gustan en especial los dramas médicos 
        </p>
    </div>

  
</main>
<div class="flex h-85 space-x-10 mt-10 w-8/12 mx-auto">
        <div class="w-full h-full border-2 hover:shadow-lg transition rounded-b-lg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/lenguajes.jpg" alt="Lenguajes de Programación">
            <p class="h-1/5 text-center leading-9 select-none">Los lenguajes aprendidos </p>
        </div>

    <div class="flex w-full justify-center mt-10 text-justify">
        <p class="w-8/12 select-none">
        Desde los 15 años entré en el mundo de la Programación, cuando escogí informática como especialidad
         en el colegio desde ese momento he aprendido lenguajes como c c++ c# php java sql entre otros.
        </p>
    </div>
<?php get_footer(); ?>