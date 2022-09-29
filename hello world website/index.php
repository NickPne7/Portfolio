<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-4">
		<title>Sono Nicola Peanut</title>
		
		<?php
			include 'header.php';
		?>
		
	</head>
	<body>
		<header>
		
			<h1 id="principale">Peanut</h1>
			
			<?php
                include "nav.php";
            ?>
				
		</header>
		<main>
		
			<div id="wrapper">
				<!-- La form contiene:
						un input di testo per inserire nome e cognome
						un imput tipo mail per inserire l'indirizzo di posta elettronica
						un input di tipo radio per il genere maschile e femminile
						una selezione della provincia di nascita
						un campo data per la data di nascita
						un tipo0 checkbox per inserire propri interessi
						un campo di testo per un breve messaggio
						Raggruppiamo i dati anagrafici e separatamente i dati sugli interessi personali
				-->
				<h2>contatti</h2>

				<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
					<fieldset>
						<legedn>Dati anagrafici:</legedn>
						<br>
						<labe for="nome">nome</labe>
						<input type="text" id="nome"  name="nome">
						<br/>
						<labe for="cognome">cognome</labe>
						<input type="text" id="cognome"  name="cognome">
						<br/>
						Genere
						<input type="radio" id="maschile" name="genere" value="maschile">
						<label for="maschile">maschile</label>
						
						<input type="radio" id="femminile" name="genere" value="femminile">
						<label for="femminile">femminile</label>

						<input type="radio" id="altro" name="genere" value="altro">
						<label for="altro">altro</label>
						<br>

						<label for="email">e-mail</label>
						<input type="e-mail" name="email" id="email">
						<br>
					</fieldset>

					<fieldset>
						
						<legedn>Interessi:</legedn>

					</fieldset>
				
					<input type="submit" value="Invia i miei dati">

				</form>

				<hr>
				<h2>Ecco i dati inviati: </hr>
					<?php

						if($_SERVER["REQUEST_METHOD"] == "POST"){
							$nome = $_REQUEST['nome'];
							if(empty($nome)){
								echo "manca il nome, inseriscilo";
							}else{
								echo "il nome inserito è " . $nome;
							}	
						}

					?>
			</div>
			
		</main>
		<footer>
			<p><small>copyright 5BS &copy; 2022 | Nicola Pinat </small></p>
		</footer>
	</body>
</html>