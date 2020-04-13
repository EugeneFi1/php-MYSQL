<?php
    $users  = getUsers($link);

    echo "<h1>Users table:</h1>";
    echo "<div class='accounts_table'>";
    foreach($users as $a => $index) {
        echo "<div class='rows'>";
            foreach($index as $key => $value) {
                if($key == 'id'){
                    echo "<div class='rows_id'>".$value."</div>";
                    continue;
                }
                echo "<div class='rows_content'>".$value."</div>";
            }
            echo "<div class='rows_buttons'>";
                    echo "<button type='button' onclick='deleteUser(".$index['id'].")'>delete</button>";
                    echo "<button type='button' onclick='editUser(".$index['id'].")'>edit</button>";
            echo "</div>";    
        echo "</div>";
    } 
    echo "<div>"; 
?>
<script>
    function deleteUser(a) {
    var id = a;

    $.ajax({
        url: 'function.php',
        type: 'GET',
        data: { 'delete_id_user': id },
        dataType: 'html',
        cache: false,       
        success: function(data) {
            $("#edit").load("accountsTable.php");
		}
    });
};  

function editUser(s) {
    var id = s;

    $.ajax({
        url: 'edit.php',
        type: 'GET',
        data: { 'edit_id_user': id },
        success: function(data) {
	    	$("#edit").load("edit.php" + "?" + 'edit_id_user=' + id);
		}
    });
};

</script>