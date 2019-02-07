<!doctype html>
<html><head><title>form example</title></head>

<body>

<form
        name="form1"
        method="GET"
        action="index.php"
>

<h3>Flowers by post</h3>

    <input type="hidden" name="action" value="processForm">

<!-- ***************** -->
<p>
	Address:
	<br>
	<input type="text" name="address">
</p>

<!-- ***************** -->
<p>
	Express delivery:
	<br>
	<input type="checkbox" name="isExpress" value="true">
</p>

<!-- ***************** -->
<p>
	<input type="submit">
</p>


</form>

</body>
</html>