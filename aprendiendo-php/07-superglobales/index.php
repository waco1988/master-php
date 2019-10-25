<?php

//VAriables superglobales

//Variables de servidor
//Dirección Ip del servidor
echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
echo '</h1>';

//Nombre del servidor
echo '<h1>';
echo $_SERVER['SERVER_NAME'];
echo '</h1>';

//Software del servidor
echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '</h1>';

//Nombre del navegador que se esta usando
echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h1>';

//DIRECCION IP DEL CLIENTE
echo '<h1>';
echo $_SERVER['REMOTE_ADDR'];
echo '</h1>';
