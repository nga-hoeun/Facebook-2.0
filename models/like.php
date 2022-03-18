<?php
require_once('database.php');



/**
 * Update a Post given id and attibutes
 * @param integer $like_status :  the number of like
 * @param string  $post_id :  the id of post
 * @param integer $user_id :  	the id of user
 * 
 */
function userLike($like_status,$post_id, $user_id){
    global $db;
    $statement = $db->prepare("INSERT INTO likes (like_status, post_id, user_id) VALUES(:like_status, :post_id, :user_id);");
    $statement->execute([
        ':like_status'=> $like_status,
        ':post_id'=> $post_id,
        ':user_id'=> $user_id
    ]);
    return ($statement->rowCount()==1);
}


function getNumberLike($post_id){
    global $db;
    $statement = $db->prepare("SELECT COUNT(like_status) AS numbers_like, post_id, user_id FROM likes WHERE post_id=:post_id;");
    $statement->execute([
        ':post_id'=> $post_id
    ]);
    $items = $statement->fetchAll(); 
    return $items;
}