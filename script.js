function deleteElement(a) {
    var id = a;

    $.ajax({
        url: 'function.php',
        type: 'GET',
        data: { 'delete_id': id },
        dataType: 'html',
        cache: false,       
        success: function(data) {
            $("#edit").load("accountsTable.php");
		}
    });
};

function editElement(s) {
    var id = s;

    $.ajax({
        url: 'edit.php',
        type: 'GET',
        data: { 'edit_id': id },
        success: function(data) {
	    	$("#edit").load("edit.php" + "?" + 'edit_id=' + id);
		}
    });
};


   