<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html style="height: 100%;">

<head>
	<title>
		Iniciar Sesión
	</title>
		<?php echo $this->Html->charset('UTF-8'); ?>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('materialize');
		echo $this->Html->script('jquery-3.2.0');
		echo $this->Html->script('materialize');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body style="height: 100%;">

			<?php echo $this->fetch('content'); ?>

</body>
</html>
