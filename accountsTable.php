<?php include "function.php"; ?> 
<?php
    $accounts  = getAccounts($link);

    echo "<h1>Accounts table:</h1>";
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
                    echo "<button type='button' onclick='deleteElement(".$index['id'].")'>delete</button>";
                    echo "<button type='button' onclick='editElement(".$index['id'].")'>edit</button>";
            echo "</div>";    
        echo "</div>";
    } 
    echo "<div>"; 
?>
<?php
            include "usersTable.php"; 
?>
