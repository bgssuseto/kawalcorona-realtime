<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Indonesia</title>
</head>
<body>
	

	<tbody>

		<?php foreach ($indonesia as $row) {?>

		<tr>Kasus Positif : <?= $row['positif'];?></tr>
		<?php } ?>
	</tbody>

</body>
</html>
