<?php include "function.php"; ?>
<?php
    if(isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
    }
    $account = getAccountById($id, $link);
    
    echo "<div class='accounts_table' id='find_button'>";
    foreach($account as $a => $index) {
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
    echo "<div>"; 
    
?>