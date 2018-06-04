<?php 
if(isset($_GET["id"])) {
// თუ არის id გეთად

$var = $_GET["tyn"];
	switch($var) {

		case "a":
			echo "დაიბეჭდა ტექსტი სადაც მნიშვნელობა იყო a";
		break; //რათა შეაჩერპს პირობა

		case 1:
			echo "სადაც მნიშვნელობა ცვლადი იყო ერთი";
		break;

		case "tyn":
			echo "სადაც მნიშვნელობა იყო tyn";
		break;

		case 'jigari':
			echo "სადაც მნიშვნელობა იყო jigari";
		break;

  		default:
			echo "თუ არცერთი მნიშვნელობა შეესიტყვება";

	}

} else
echo "შეცდომა";
?>