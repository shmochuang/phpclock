

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Clock</title>
	
	<link href="styles.css" type="text/css" rel="stylesheet">
	<?php require('logic.php'); ?>
	
</head>
<body class="<?php echo $class ?>">
	<h1>It is <?php echo $current_time ?> </h1>
	<p>Time zone: <?php echo $time_zone ?> </p>
	
	<img href="http://making-the-internet.s3.amazonaws.com/<?php echo $image ?>"

</body>
</html>
