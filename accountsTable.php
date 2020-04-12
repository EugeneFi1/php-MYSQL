<?php include "function.php"; ?> 
<?php
    $accounts  = getAccounts($link);

    echo "<div class='accounts_table' id='find_button'>";
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
                //echo "<form>";
                    echo "<button type='button' onclick='deleteElement(".$index['id'].")'>delete</button>";
                    echo "<button type='button' onclick='editElement(".$index['id'].")'>edit</button>";
                //echo "</form>";  value='".$index['id']."'
            echo "</div>";    
        echo "</div>";
    } 
    echo "<div>"; 
?>
<script src="script.js"></script>
