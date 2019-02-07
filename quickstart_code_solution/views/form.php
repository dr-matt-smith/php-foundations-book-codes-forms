<!doctype html>
    <html><head><title>simple form</title></head>
    <body>

    <h1>Enter details about a new movie</h1>
    <form method="GET" action="index.php">
        <input type="hidden" name="action" value="processForm">

        <p>
            id:
            <input name="id">
        <p>
            title:
            <input name="title">
        <p>
            category:
            <input name="category">
        <p>
            price:
            <input name="price">
        <p>
            <input type="submit" value="submit">
