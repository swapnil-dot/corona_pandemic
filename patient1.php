<?php
$errors = array();
$conn = new mysqli('localhost', 'root', '', 'patient');
if (isset($_POST['name']) || isset($_POST['fname']) || isset($_POST['age'])  || isset($_POST['addh']) || isset($_POST['email']) || isset($_POST['aad']) || isset($_POST['test']) || isset($_POST['con']) || isset($_POST['usnh']) || isset($_POST['wor']) || isset($_POST['sid'])) {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];


    $addh = $_POST['addh'];
    $email = $_POST['email'];
    $aad = $_POST['aad'];
    $test = $_POST['test'];
    $con = $_POST['con'];
    $usnh = $_POST['usnh'];
    $wor = $_POST['wor'];
    $sid = $_POST['sid'];
}


if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);


    $addh = mysqli_real_escape_string($conn, $_POST['addh']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $aad = mysqli_real_escape_string($conn, $_POST['aad']);
    $test = mysqli_real_escape_string($conn, $_POST['test']);
    $con = mysqli_real_escape_string($conn, $_POST['con']);
    $usnh = mysqli_real_escape_string($conn, $_POST['usnh']);
    $wor = mysqli_real_escape_string($conn, $_POST['wor']);
    $sid = mysqli_real_escape_string($conn, $_POST['sid']);
}


if (count($errors) == 0) {

    $stmt = $conn->prepare("Insert into pat(name,fname,age,addh,email,aad,test,con,usnh,wor,sid) values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssissibisss", $name, $fname, $age, $addh, $email, $aad, $test, $con, $usnh, $wor, $sid);
    $stmt->execute();
    echo "success";
    echo "<a href=qrcode.html><font color= red size=4pt face=Arial>
    Click here to generate QR code.</font></a>";
    $stmt->close();
    $conn->close();
} else {
    echo "Try again or check connection...!!";
}
