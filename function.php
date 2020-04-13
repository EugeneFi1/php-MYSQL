<?php
    $link = mysqli_connect('localhost', 'root', '', 'integral');

    if(isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        deleteAccount($id, $link);
    } 

    if(isset($_GET['edit_id']) && isset($_GET['name']) && isset($_GET['lastname'])) {
       $id = $_GET['edit_id'];
       $name = $_GET['name'];
       $lastname = $_GET['lastname'];
       
       updateAccount($name, $lastname, $id, $link);
    } 

    

    function getAccounts($link) {
        $sql = "SELECT * FROM account";
        $query = mysqli_query($link, $sql);
        $result = mysqli_fetch_all($query, 1);
        return $result; 
    }
    function deleteAccount($id, $link) {
        $sql = "DELETE FROM account WHERE id=".$id."";
        $query = mysqli_query($link, $sql);
    }
    function getAccountById($id, $link) {
        $sql = "SELECT * FROM account WHERE id=".$id."";
        $query = mysqli_query($link, $sql);
        $result = mysqli_fetch_all($query, 1);
        return $result; 
    }
    function updateAccount($name, $lastname, $id, $link) {
    $sql = "UPDATE account SET name='".$name."', lastname='".$lastname."' WHERE id=".$id."";
    $query = mysqli_query($link, $sql);
    }
?>