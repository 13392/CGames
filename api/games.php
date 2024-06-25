<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$path = "http://localhost/CGames/imagens/jogos/";

$games[1] = array(
    "id" => 1,
    "nome" => "",
    "play" => "plays/",
    "descricao" => "",

    "poster" => "{$path}poster_",
    "banner" => "{$path}",

);

$games[2] = array()
echo json_encode($games);
