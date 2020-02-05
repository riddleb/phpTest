<?php
# connect
$pdo = new PDO( 
    "mysql:host=".'10.8.30.49'.";"."dbname=".'bmriddle355wi20', 
    'bmriddle355wi20', 
    'bmriddledbwi200Oc'
);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$sql = "INSERT INTO customers (fname,lname,phone) VALUES ('$fname', '$lname','$phone')";
$pdo->query($sql);
echo "<p>Your info has been added</p><br>";
