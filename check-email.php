<?php
    //Connect to sql db

    require ("connect_db_subscribe.php");
    
    $pdo = new PDO('mysql:host=localhost;dbname=mtbpuromotor', 'root','');
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $query = $conn->prepare("SELECT email FROM mtbpmsubs WHERE email = '$email'");
        $query->execute();
        $rows = $query->fetchAll();
        $total_rows = count($rows);
            if( $total_rows > 0 ){
                echo 'false';
            } else {
                echo 'true';
            }
    }   
    
?>