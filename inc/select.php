<?php $sql_ = 'SELECT * FROM `users` ORDER BY `id` ASC';
$result = mysqli_query($conn, $sql_);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
