<!doctype html>
<html><head><title>order form</title></head>
<body>

<h3>Flowers by post</h3>
<form method="POST" action="index.php">
    <input type="hidden" name="action" value="processForm">

    <p>Address:<br>
        <input type="text" name="address">

    <p>Express delivery:<br>
    <input type="checkbox" name="isExpress" value="true">

    <p><input type="submit">
</form>

</body>
</html>