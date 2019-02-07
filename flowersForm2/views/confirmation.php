<!doctype html>
<html><head><title>confirmation</title>
    <style type="text/css">
        @import '/css/form.css';
    </style>
</head>
<body>

<h3>Flowers by post <br>CONFIRMATION OF FORM DETAILS</h3>
<p>
    Address:<br/>
    <span class="confirmation">
	<?= $address ?>
	</span>

<p>
    Express delivery:
    <span class="confirmation">
	<?= $deliveryMethod ?>
	</span>

<hr>
<a href="index.php">(home page)</a>

</body>
</html>