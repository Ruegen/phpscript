<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <main class="container">
        <h1>New Product</h1>
        <form action="/products/create.php" method="POST" >
            
            <p class="form-group">
                <label for="name">Name: </label>
                <input class="form-control" type="text" name="name">
            </p>
            
            <p class="form-group">
                <label for="description">Description: </label>
                <textarea class="form-control" name="description" cols="30" rows="10">
                </textarea>
            </p>

            <p class="form-group">
                <label for="price">Price: </label>
                <input class="form-control" type="number" name="price">
            </p>

            <p class="form-group">
                <input class="btn btn-primary" type="submit" value="Create Product">
            </p>

        </form>
    </main>
</body>
</html>