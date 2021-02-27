<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Form</title>
</head>
<body>

    <form action = "<?php echo $_SERVER['PHP_SELF']?>" method="get">

        <label for = "first-name">First Name:</label> <br>
        <input type = "text" name = "first-name" id = "first-name"> <br><br>

        <label for = "last-name">Last Name:</label> <br>
        <input type = "text" name = "last-name" id = "last-name"> <br><br>

        <label for = "age">Age:</label> <br>
        <input type = "number" name = "age" id = "age"> <br><br>
        
        <label for = "email">Email:</label> <br>
        <input type = "email" name = "email" id = "email"> <br><br>

        <button type = "submit" name = "submit">Submit Form</button> <br><br>

    </form>

    <?php
        $first_name = "";
        $last_name = "";
        $age = "";
        $email = "";

        if (isset($_GET["submit"])) {
            $first_name = $_GET["first-name"];
            $last_name = $_GET["last-name"];
            $age = $_GET["age"];
            $email = $_GET["email"];

            if (empty($first_name)) {
                echo "Please enter first name<br><br>";
            }

            if (empty($last_name)) {
                echo "Please enter last name<br><br>";
            }

            if (empty($age)) {
                echo "Please enter age<br><br>";
            }

            if (empty($email)) {
                echo "Please enter email<br><br>";
            }

            else if (isset($first_name) && isset($last_name) && isset($age) && isset($email)) {
                echo "First Name: " . $first_name . "<br><br>";
                echo "Last Name: " . $last_name . "<br><br>";
                echo "Age: " . $age . "<br><br>";
                echo "Email: " . $email . "<br><br>";
            }
        }
    ?>

</body>
</html>