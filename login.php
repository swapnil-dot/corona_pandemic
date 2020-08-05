<?php

$conn = new mysqli('localhost', 'root', '', 'signin');



if (isset($_POST['usn'])) {

  $uname = mysqli_real_escape_string($conn, trim($_POST['usn']));
  $password = mysqli_real_escape_string($conn, trim($_POST['psw']));



  $sql = "SELECT * FROM hos WHERE usn = $uname AND psw = $password";

  $result = mysqli_query($conn, $sql);

  if (!$result || mysqli_num_rows($result) == 1) {
    $_SESSION['uname'] = $usn;
    header("Location:dashboard.html");
    exit();
  } else {
    echo " You Have Entered Incorrect Password";
    exit();
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script>
    function validateForm() {
      var x = document.forms["myform"]["uname"].value;
      if (x == "" || x == null) {
        alert("Enter username");
        return false;
      }
      var y = document.forms["myform"]["psw"].value;
      if (y == "" || y == null) {
        alert("Please Enter password");
        return false;
      }
    }
  </script>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background: url(104.jpg) no-repeat;
      background-size: cover;
    }

    /* Full-width input fields */
    input[type="text"],
    input[type="password"] {
      width: 95%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: grid;
      border: outset 1px solid;
      float: left;
      background: #f1f1f1;
    }

    /* Set a style for all buttons */
    button {
      background-color: rgb(7, 52, 78);
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: outset 1px solid black;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    .container {
      padding: 30px;
      color: white;
      font-weight: bolder;
    }

    span.psw {
      float: right;
      padding-top: 16px;
      color: black;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: black;
      /* Fallback color */
      background-color: aqua;
      /* Black w/ opacity */
      padding-top: 60px;
      text-align: center;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: rgba(0, 0, 0, 0.9);
      margin: 5% auto 15% auto;
      /* 5% from the top, 15% from the bottom and centered */
      border-radius: 20px;
      width: 50%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s;
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0);
      }

      to {
        -webkit-transform: scale(1);
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0);
      }

      to {
        transform: scale(1);
      }
    }

    img {
      border: 1px solid black;
      border-radius: 10px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <form class="modal-content animate" action="login.php" onsubmit="return validateForm()" method="POST" required name="myform">
    <div class="imgcontainer">
      <img src="1001.png" alt="Avatar" class="avatar" />
    </div>

    <div class="container">
      <label for="uname"><b>Username:</b></label>
      <input type="text" placeholder="Enter Username" name="usn" id="usn" />
      <br />

      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" />

      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember" /> Remember
        me
      </label>
    </div>

    <div class="container" style="background: url(104jpg);">
      <button type="button" href="login.html" class="cancelbtn">
        Cancel
      </button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
  <footer>For Admin Login <a href="test.html">Click here</a></footer>
</body>

</html>