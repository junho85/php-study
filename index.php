<!DOCTYPE html>
<html>
<head>
<title>test</title>
</head>

<body>
<h2>php 구구단</h2>
<table>
<?php
for ($i = 1; $i <= 9; $i++) {
	echo "<tr>";
	for ($j = 1; $j <= 9; $j++) {
		echo "<td>$i x $j = " . ($i * $j) . "</td>";
	}
	echo "</tr>";
}
?>
</table>
</body>
</html>
