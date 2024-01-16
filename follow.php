<?php
    require_once("bootstrap.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $seguito= $_POST["username"];
        $follow_result = $dbh->getFollowsTable()->isFollowing($_SESSION["username"], $seguito);
        if(count($follow_result)==0){
            $dbh->getFollowsTable()->insert($_SESSION["username"], $seguito);
        } else {
            $dbh->getFollowsTable()->delete($_SESSION["username"], $seguito);
        }
        echo ($dbh->getUsersTable()->getFollower($seguito)[0]["follower_count"]);
    }
?>