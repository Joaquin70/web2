<?php
function connectToDB(){
    return new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root','');
}


