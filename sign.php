<?php
$errors = array();
$conn = new mysqli('localhost', 'root', '', 'signin');

$hsn = $_POST['hsn'];
$addh = $_POST['addh'];
$cntct = $_POST['cntct'];
$email = $_POST['email'];
$doch = $_POST['doch'];
$img = $_POST['img'];
$usn = $_POST['usn'];
$psw = $_POST['psw'];
$cnpsw = $_POST['cnpsw'];


if (isset($_POST['sign'])) {
    $psw = mysqli_real_escape_string($conn, $_POST['psw']);
    $cnpsw = mysqli_real_escape_string($conn, $_POST['cnpsw']);
}
if ($psw != $cnpsw) {
    array_push($errors, "The Two passwords do not match");
}

if (count($errors) == 0) {
    $psw = md5($cnpsw);
    $stmt = $conn->prepare("Insert into hos(hsn,addh,cntct,email,doch,img,usn,psw,cnpsw) values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssissbsss", $hsn, $addh, $cntct, $email, $doch, $img, $usn, $psw, $cnpsw);
    $stmt->execute();
    echo "success";
    $stmt->close();
    $conn->close();
} else {
    echo "Passwords don't match.";
}
