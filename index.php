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
       
        echo "<div class='accounts_table'>";
            foreach($accounts as $a => $index) {
                echo "<div class='rows'>";
                    foreach($index as $key => $value) {
                        if($key == 'id'){
                            echo "<div class='rows_id'>".$value."</div>";
                            continue;
                        }
                        echo "<div class='rows_content'>".$value."</div>";
                    }
                    echo "<div class='rows_buttons'>";
                        echo "<form>";
                            echo "<button type='submit' id='delete_id' name='delete_id' value='".$index['id']."'>delete</button>";
                            echo "<button type='submit' id='edit_id' name='edit_id' value='".$index['id']."'>edit</button>";
                        echo "</form>";
                    echo "</div>";    
                echo "</div>";
            } 
        echo "<div>";  
   ?>
</body>
</html>