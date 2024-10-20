<!DOCTYPE html>
<head>
    <title>Display Profile</title>
</head>
<body>
    <?php 
        if(isset($_POST["name"]) && $_POST["email"] && $_POST["age"]){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $age = $_POST["age"];

            echo "<h1>Name: {$name}</h1>";
            echo "<h1>Email: {$email}</h1>";
            echo "<h1>Age: {$age}</h1>";

        } else {
            echo "Fill All the Inputs in Form";
        }
    ?>
</body>
</html>