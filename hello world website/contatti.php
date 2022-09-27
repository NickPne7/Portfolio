<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-4">
		<title>Sono Nicola Peanut</title>
		
		
        <?php
            /*
            include 'header.php';
            */
        ?>
		
	</head>
	<body>
		<header>
		
			<h1 id="principale">Peanut</h1>
			
			<nav>
				<ul>
					<li><a href="index.html">HomePage</a></li>
					<li><a href="chisono.html">Chi sono</a></li>
					<li><a href="Portfolio.html">Portfolio</a></li>
					<li><a href="Simone.html">Simone</a></li>
				</ul>
			</nav>
				
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
				<from action="" method="">
					<fieldset>
						
						<legedn>Dati anagrafici:</legedn>
						<br>
						<labe for="nome">nome</labe>
						<input type="text" id="nome"  name="nome">
						<br/>
						<labe for="cognome">cognome</labe>
						<input type="text" id="cognome"  name="cognome">
						<br/>
						genere
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

				</from>
			</div>
			
		</main>
		<footer>
			<p><small>copyright 5BS &copy; 2022 | Nicola Pinat </small></p>
		</footer>
	</body>
</html>