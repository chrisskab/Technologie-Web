<!DOCTYPE html>
<html>
    <head>
        <title>Réservation</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Réservation</h2>
        
        <p>
            Le prix de la place est de 10 euros jusqu'à 12 ans et ensuite de 15 euros.<br /><br />
	    Le prix de l'assurance annulation est de 20 euros, quel que soit le nombre de voyageurs. <br />
        </p>

	<form method="post" action="detail.php">
 
	<p>
    	Destination <input type="text" name="destination"/> <br />
	Nombre de places <input type="text" name="nb" /> <br />
	<input type="checkbox" id="IdCheckBox" /> 
	<label for="IdCheckBox">Assurance annulation</label><br/>
	<input type="submit" value="Page suivante" />
	</p>
 	</form>

    </body>
</html>