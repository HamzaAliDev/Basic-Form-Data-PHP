<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST["username"])){
            $username = $_POST["username"];
            
            echo "<h1>Welcome! {$username}</h1>";

        }else{
            
            echo "<h1>Enter the username in Form</h1>";
        }
    ?>
</body>
</html>