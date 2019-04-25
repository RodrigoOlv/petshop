<?php
/**
* @author RodrigoOlv <rodrigo.oliveira1998@outlook.co>
* @version 0.1 German-Shepherd
* @since 04/25/2019 16:34
*/
include 'view/header.html';

 
// $main gives a int to select #main div
switch ($_GET["page"]) {
	case "home":
		include 'view/home.html';
		break;

	case "quem-somos":
		include 'view/quem-somos.html';
		break;

	case "banho-tosa":
		include 'view/banho-tosa.html';
		break;

	case "veterinaria":
	include 'view/veterinaria.html';
	break;

	case "produtos":
	include 'view/produtos.html';
	break;

	case "fale-conosco":
	include 'view/fale-conosco.html';
	break;
	
	default:
		include 'view/home.html';
		break;
}

include 'view/footer.html';
