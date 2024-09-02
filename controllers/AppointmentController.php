<?php

if (isset($_POST['name'], $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name;
} else {
    die('401 forbidden this page');
}
