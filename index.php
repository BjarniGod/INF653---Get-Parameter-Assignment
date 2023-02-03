

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 Assignment</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>Week 2 Assignment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="first">First Name:</label>
        <input type="text" id="first" name="first" autocomplete="off">

        <label for="last">Last Name:</label>
        <input type="text" id="last" name="last" autocomplete="off">

        <label for="last">Age:</label>
        <input type="number" id="age" name="age" autocomplete="off">
        <div class="buttonDiv">
            <button type="submit" formmethod="get">Get Data</button>
            <!-- <button type="submit" formmethod="post">Post Data</button> -->
        </div>
    </form>

    <div class="info">
    <?php
    $firstName = htmlspecialchars($_GET['first']);
    $lastName = htmlspecialchars($_GET['last']);
    $age = $_GET['age'];
    $date = date('d-m-y');
    
    // if(isset($_GET['first']) && isset($_GET['last'])){
    if($firstName != '' && $lastName != '' && $age != ''){
    
        echo "Hello my name is " . $firstName . " " . $lastName . ".<br>";
        echo "I am " . $age . " years old and ";
        
        
        if($age >= 18){
            $firstName = htmlspecialchars($_POST['first']);
            $lastName = htmlspecialchars($_POST['last']);
        
            echo "I am old enough to vote in the United States.<br>";
        } else {
            echo "I am not old enough to vote in the United States.<br>";
        }
        $days = $age * 365;
        echo "Being " . $age . " years old means that I am " . $days . " days old.<br>";
        
        ?>

        <?php

   

    } else {
        echo "Fill in all information above and press 'Get Data'!";
    }    
    
?>
</div>

<footer>
    <?php
        echo "Todays date is " . $date . ".";
    ?>
</footer>

</body>


</html>