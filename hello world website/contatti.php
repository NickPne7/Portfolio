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
                include 'nav.php';
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
                <!-- Contatti con form -->
				<h2>contatti</h2>
				<form action="<?php $_SERVER["PHP_SELF"]?>" method="GET">
					<fieldset>
						
						<legend>Dati anagrafici:</legend>
						<br>
                        <!-- nome cognome, provincia  e genere -->
						<label for="nome">nome</label>
						<input type="text" id="nome"  name="nome">
						<br/>
						
                        <label for="cognome">cognome</label>
						<input type="text" id="cognome"  name="cognome">
						
                        <br/>
                        
                        <label for="provincia">Indica la provincia di nascita:</label>
                        
                        <select id="provincia" name="provincia">
                            <option value="ud">UD</option>
                            <option value="ts">TS</option>
                            <option value="go">GO</option>
                            <option value="pn">PN</option>
                        </select>
                        
                        <br>
						Genere:
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
                    <h2>Interessi</h2>
					<fieldset>
						
						<legend>Interessi:</legend>
                        <!-- <label for="Interessi">Interessi:</label> -->
						<input type="checkbox" id="interessi"  name="interessi" value="sport"> <label for="sport">Sport</label> <br>
                        <input type="checkbox" id="interessi"  name="interessi" value="musica"> <label for="musica">Musica</label> <br>
                        <input type="checkbox" id="interessi"  name="interessi" value="arte"> <label for="arte">Arte</label> <br>
                        
					</fieldset>
				
					<input type="submit" value="Invia i miei dati">

				</form>
                <hr>
                <h2>Ecco i dati inviati: </h2>
                <hr>
					<?php
                        
						if($_SERVER["REQUEST_METHOD"] == "GET"){
                            
                            if(isset($_REQUEST['nome'])){
                                $nome = $_REQUEST['nome'];
                                echo "il nome inserito è ".$nome;
                            }else{
                                echo "manco il nome, inseriscilo!";
                            }
                            echo "<br>";
                            
                            if(isset($_REQUEST['cognome'])){
                                $cognome = $_REQUEST['cognome'];
                                echo "il cognome inserito è: " . $cognome;
                            }else{
                                echo "manca il cognome, inseriscilo!";
                            }
                            echo "<br>";
                            
                            if(isset($_REQUEST['genere'])){
                                $genere = $_REQUEST['genere'];
                                echo "il genere inserito è: " . $genere;
                            }else{
                                echo "manca il genere, inseriscilo!";
                            }
                            echo "<br>";
                            
                            if(isset($_REQUEST['provincia'])){
                                $provincia = $_REQUEST['provincia'];
                                echo "la provincia selezionata è: " . $provincia;
                            }else{
                                echo "manca la provincia, inseriscila!";
                            }
                            echo "<br>";
                            
                            if(isset($_REQUEST['email'])){
                                $email = $_REQUEST['email'];
                                echo "l'email inserita è: " . $email;
                            }else{
                                echo "manca l'email, inseriscila!";
                            }
                            echo "<br>";
                            
                            if(isset($_REQUEST['interessi'])){
                                $interessi = $_REQUEST['interessi'];
                                echo "interessi inseriti: " . $interessi;
                            }else{
                                echo "manca l'interesse, inseriscilo!";
                            }
                            echo "<br>";
						}

					?>
			</div>
			
		</main>
		<footer>
			<p><small>copyright 5BS &copy; 2022 | Nicola Pinat </small></p>
		</footer>
	</body>
</html>