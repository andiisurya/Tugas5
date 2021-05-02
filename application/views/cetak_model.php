<?php

echo "<table border='1'>
<tr>
	<td>Nama</td>
	<td>Stock</td>
	<td>Terjual</td>
</tr>";
foreach ($konten as $rows => $row) {
	echo 
	"<tr>";
	foreach ($row as $col => $cell) {
		echo "<td>" . $cell . "</td>";
	}
	echo "</tr>";
}
echo "</table>";