<?php

function carrega_estilos(){
    //nome da folha de estilo = estilo-pai
    //fica nesse endereco =  get_template_directory_uri() . '/style.css'
    wp_enqueue_style('estilos-pai', get_template_directory_uri() . '/style.css');
    //adiciona novos estilos
    wp_enqueue_style('estilo_filho_2', get_stylesheet_directory_uri() . '/css/estilo2.css');
    wp_enqueue_style('estilo_filho_3', get_stylesheet_directory_uri() . '/css/estilo3.css');
    wp_enqueue_style('estilo_filho_4', get_stylesheet_directory_uri() . '/css/estilo4.css');
    
}

//acao que vai chamar a funcao
//momendo em que essa funcao vai ser executada = wp_enqueue_scripts
//funcao que vai ser executada = carrega_estilos
add_action('wp_enqueue_scripts' , 'carrega_estilos');