<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {background-color:darkgrey; height:100vh; display:flex; justify-content:center; align-items:center}
	</style>
</head>
<body>
	<?php 

		// Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori
		class Magazzino {
			public $nome;
			public $location;
			public $prodotti_contenuti = [];

			public function __construct($nome, $location) {
				$this -> nome = $nome;
				$this -> location = $location;
			}
		}

		// Prodotto: definire gli attributi per nome, peso e prezzo
		class Prodotto {
			public $nome;
			public $peso;
			public $prezzo;
		}

		// Generare alcune istanze di ogni classe, hai fini di test e per meglio comprendere i concetti
		$magazzino1 = new Magazzino("Magazzino_Principale", "Milano");
		$magazzino2 = new Magazzino("Magazzino_Scarti", "Varese");
		$magazzino3 = new Magazzino("Magazzino_Progetti", "Bergamo");

		$prodottoA = new Prodotto;
		$prodottoA -> nome = "scatola";
		$prodottoA -> peso = 20;
		$prodottoA -> prezzo = 10;

		$prodottoB = new Prodotto;
		$prodottoB -> nome = "palla";
		$prodottoB -> peso = 5;
		$prodottoB -> prezzo = 3;

		$prodottoC = new Prodotto;
		$prodottoC -> nome = "giocattolo";
		$prodottoC -> peso = 2;
		$prodottoC -> prezzo = 18;

		$magazzino1 -> prodotti_contenuti[] = $prodottoA;
		$magazzino1 -> prodotti_contenuti[] = $prodottoC;
		$magazzino2 -> prodotti_contenuti[] = $prodottoB;

		var_dump($magazzino1);
		echo "<br>";
		var_dump($magazzino2);
		echo "<br>";
		var_dump($magazzino3);

	?>
</body>
</html>