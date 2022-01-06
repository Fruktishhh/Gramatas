<?php

$DATABASE_HOST = 'sql209.epizy.com';
$DATABASE_USER = 'epiz_30739123';
$DATABASE_PASS = '72oXiWW9Q5p36';
$DATABASE_NAME = 'epiz_30739123_books';

date_default_timezone_set('Europe/Riga');


$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {

  
	exit('Kļūda, savienojoties ar datubāzi: ' . mysqli_connect_error());
}
?> 