  <?php 
  echo"<table border ='1'>"; 
  echo"<caption> Penjumlahan </caption>";
  echo"<thread>";
  echo"<tr>";
  echo"<td>Nilai1</td>";
  echo"<td>Nilai2</td>";
  echo"<td>Hasil</td>";
  echo"</tr>";
  echo"</thread>";

  for ($row = 1; $row < 4; $row ++){
  	echo "<tr>";

  	for ($col = 1; $col <=3; $col ++){
        if ($col<3) {
  		   echo "<td>$col</td>";
        }
        if ($col==3) {
        	$jum = $col + $col;
  		    echo "<td>$jum</td>";
        }
  	}
	echo"</tr>";
    }
echo"</table>";