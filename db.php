<?php
    $db = new Mysqli();
    $db -> connect('localhost','root','holalol1','delyrio');
    if($db) {
        // Connected to DB
    }
    else{
        // Not Connected to DB
    }
?>