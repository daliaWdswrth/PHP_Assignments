<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>
<body>


    
    <?php 

        Session_start();
        Session_destroy();
        //header('Location: ' . $_SERVER['HTTP_REFERER']);
    
        header('Location: mysessions.php');
    ?>




</body>
</html>