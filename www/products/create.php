
<?php
    $name = htmlspecialchars($_POST["name"]);
    $description = htmlspecialchars($_POST["description"]);
    $price = htmlspecialchars($_POST["price"]);

    $product = [
        ':name' => $name,
        ':description' => $description,
        ':price' => (int)$price
    ];

    $dir = 'sqlite:/' . $_SERVER['DOCUMENT_ROOT'] . '/database/db.sqlite';
    $db = new PDO($dir) or die("cannot open the database");
    
    // sql string with placeholders
    $str = "
        INSERT INTO products (name, description, price)
        VALUES (:name, :description, :price);
    ";

    // execute statement into db
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $db->prepare($str);
        $stmt->execute($product);
        $id = $db->lastInsertId();
    } catch(Exception $err) {
        echo "Unable to connect";
        echo $err->getMessage();
        exit;
    }

    // redirect user to the created product
    header("Location: /products/show.php?id=" . $id)

?>