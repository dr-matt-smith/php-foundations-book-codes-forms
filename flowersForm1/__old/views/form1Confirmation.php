<!doctype html>
<html><head><title>confirmation</title></head>
<head>
<style type="text/css">
	@import 'css/form.css';
</style>
</head>
<body>

<h3>Flowers by post :: CONFIRMATION OF FORM DETAILS</h3>

<!-- ***************** -->
<p>
	Address:

	<br/>	
	<span class="confirmation">
	<?= $address ?>
	</span>
</p>

<!-- ***************** -->
<p>
	Express delivery:
	
	<span class="confirmation">
	<?= $expressDeliveryConfirmation ?>
	</span>
</p>

<hr>
<a href="index.php">(back to the form)</a>

</body>
</html>