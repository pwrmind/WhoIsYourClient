<?php
    echo '<p>Привет, мир!</p>';
    $json = file_get_contents('https://api.vk.com/method/friends.get?user_id=11647357&order=name&fields=sex');
    echo $json;
    $data = json_decode($json);
    echo $data;
?>