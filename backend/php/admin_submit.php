<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php 
    require("./connection.php");
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "smart_environment";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    }
    
    $tbl="CREATE TABLE IF NOT EXISTS seedlings(
        seedling_id INT(11) NOT NULL AUTO_INCREMENT,
        category VARCHAR(255) NOT NULL,
        s_name VARCHAR(255) NOT NULL,
        price INT(20) NOT NULL ,
        path VARCHAR(80) NOT NULL,
        description TEXT NOT NULL,
        PRIMARY KEY(seedling_id)
        
        )";

        if(!$conn->query($tbl)){
            echo "Database is down";
        }
         

	$stmt = $conn->prepare("INSERT INTO seedlings (category, s_name, price, path, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss",$categories, $name, $price, $path, $description);
    
    $categories = $_POST["categories"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $path = $_POST["path"];
	$stmt->execute();
	
header('Location: admin.php');

	$stmt->close();
	$conn->close();
	
	 
?>
 
        <script src="" async defer></script>
    </body>
</html>