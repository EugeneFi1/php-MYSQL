<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include "function.php" ?> 
   <?php
        $accounts = getAccounts($link);
        
        foreach($accounts as $a => $index) {
            echo "<div class='rows'>";
            foreach($index as $key => $value) {
                if($key == 'id'){
                    echo "<div class='rows_id'>".$value."</div>";
                    continue;
                }
                echo "<div class='rows_content'>".$value."</div>";
            }
            echo "</div>";
        }   
   ?>
</body>
</html>