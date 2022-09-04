<?php


function url_redirect($values = []) {
    
    $buildQueryString = http_build_query($values);

    header('Location: http://localhost/Trabalhos PHP/trabalho-aplicação-php?' . $buildQueryString);

    exit; 
}