<?php
	$cant= $_POST["cantidad"];
	$mult= $_POST["tope"];
	for($i=1;$i<=$cant;$i++){
		echo '
		<!DOCTYPE html>
		<html>
		<body>
		<table border="1">
			<caption>Tabla del ',$i,'</caption>';
		for($cont=0;$cont<=$mult;$cont++){
			echo '<tr>
					<td>',$i,' X ',$cont,'</td>
					<td>',$i*$cont,'</td>
					</tr>';
		}
		echo '</table><br />
		</body>
		</html>';
	}