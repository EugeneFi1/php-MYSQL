<?php
    $link = mysqli_connect('localhost', 'root', '', 'integral');

    function getAccounts($link) {
        $sql = "SELECT * FROM account";
        $query = mysqli_query($link, $sql);
        $result = mysqli_fetch_all($query, 1);
        return $result; 
    }
?>