<?php 

     $id = $_GET['id'];
     $dir = 'sqlite:/' . $_SERVER['DOCUMENT_ROOT'] . '/database/db.sqlite';
     $db = new PDO($dir) or die("cannot open the database");
   
     $str = "
        SELECT * FROM products
        WHERE id = :id;
      ";

    // execute statement into db
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $db->prepare($str);
        $stmt->execute([':id' => $id]);
        $product = $stmt->fetch();
    } catch(Exception $err) {
        echo "Unable to connect";
        echo $err->getMessage();
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title><?php print $product['name'] ?></title>
</head>
<body>
    <main class="container">
    <h1><?php print $product['name'] ?></h1>
    <p><strong>Description: </strong><?php print $product['description'] ?></p>
    <p><strong>Price: </strong><?php print $product['price'] ?></p>
    </main>    
</body>
</html>