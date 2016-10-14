<h1>Détail des réservations</h1>


<?php 

	$nb = $_POST['nb'];
	for ($i=1; $i<=$nb; $i++)
		{
	$namex='name'.$i;
	$agex='age'.$i;
    			echo '<table>
	<tr>
        <td><b>Voyageur '.$i.'</b></td>
	
   <tr>
        <td>Name</td>
	<td><input type="text" name= ' .$namex. '/></td> </tr>
  <tr>
	<td>Age</td>
	<td><input type="text" name=' .$agex. '/></td>
   </tr>
</br>

</table> ';
		}
	
	

?>


<p><a href="reservation.php">Retour à la page précédente</a> </p>