<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php include "function.php" ?> 
   <?php
        $accounts = getAccounts($link);
        
        echo "<pre>";
            print_r($accounts);
        echo "</pre>";    
   ?>
</body>
</html>