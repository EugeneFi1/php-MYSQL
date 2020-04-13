<?php include "function.php"; ?>
<?php
    if(isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $account = getAccountById($id, $link);
        $x = 'Account';
    }
    
    if(isset($_GET['edit_id_user'])) {
        $id = $_GET['edit_id_user'];
        $account = getUserById($id, $link);
        $x = 'User';
    }
    
    echo "<div class='accounts_table'>";
    foreach($account as $a => $index) {
        echo "<div class='rows'>";
            foreach($index as $key => $value) {
                if($key == 'id'){
                    echo "<div class='rows_id'>".$value."</div>";
                    continue;
                }
                echo "<div class='rows_content'>
                       <input type='text' value='".$value."' id='".$key."'></div>";
            }   
        echo "</div>";
    } 
    echo "<div>"; 
  
    echo "<div class='rows_buttons'>";
        echo "<button type='button' onclick='update".$x."(".$id.")'>update</button>";
        echo "<button type='button' onclick='homePage()'>cancel</button>";
    echo "</div>"
?>

<script>
    function homePage() {
        $("#edit").load("accountsTable.php");
    };
    
    function updateAccount(a) {
        var name = $("#name").val();
        var lastname = $("#lastname").val();
        var id = a;

        $.ajax({
        url: 'function.php',
        type: 'GET',
        data: { 'edit_id': id, 'name': name, 'lastname': lastname },
        success: function(data) {
	    	$("#edit").load("accountsTable.php");
		}
    });
    }
    function updateUser(a) {
        var name = $("#name").val();
        var amount = $("#amount").val();
        var id = a;

        $.ajax({
        url: 'function.php',
        type: 'GET',
        data: { 'edit_id_user': id, 'name': name, 'amount': amount },
        success: function(data) {
	    	$("#edit").load("accountsTable.php");
		}
    });
    }
</script>