<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fight Aginst Coorona</title>
    <script type="text/javascript">
        function validate() {
            var patient = document.getElementById("name");
            var father = document.getElementById("fname");
            var agee = document.getElementById("age");
            var addhi = document.getElementById("addh");

            var aadh = document.getElementById("aad");
            var testi = document.getElementById("test");
            var coni = document.getElementById("con");
            var usnhi = document.getElementById("usnh");

            var wori = document.getElementById("wor");

            var sidi = document.getElementById("sid");

            if (patient.value.trim() == "") {
                alert("Patient name required");
                patient.style.border = "solid 3px red";
                document.getElementById("lblname").style.visibility = "visible";
                return false;
            } else if (father.value.trim() == "") {
                alert("Father's name required");
                father.style.border = "solid 3px red";
                document.getElementById("lblfname").style.visibility = "visible";
                return false;
            } else if (agee.value.trim() == "") {
                alert("Input age of Patient");
                agee.style.border = "solid 3px red";
                document.getElementById("lbllblage").style.visibility = "visible";
                return false;
            } else if (addhi.value.trim() == "") {
                alert("Address required");
                addhi.style.border = "solid 3px red";
                document.getElementById("lbladdh").style.visibility = "visible";
                return false;
            } else if (aadh.value.trim() == "") {
                alert("Aadhar number required");
                aadh.style.border = "solid 3px red";
                document.getElementById("lblaad").style.visibility = "visible";
                return false;
            } else if (testi.value.trim() == "") {
                alert("Test ID required");
                testi.style.border = "solid 3px red";
                document.getElementById("lbltest").style.visiblity = "visible";
                return false;
            } else if (coni.value.trim() == "") {
                alert("Contact number required");
                coni.style.border = "solid 3px red";
                document.getElementById("lblcon").style.visiblity = "visible";
                return false;
            } else if (usni.value.trim() == "") {
                alert("Username Required");
                usni.style.border = "solid 3px red";
                document.getElementById("lblusnh").style.visibility = "visible";
                return false;
            } else if (wori.value.trim() == "") {
                alert("Occupation required");
                wori.style.border = "solid 3px red";
                document.getElementById("lblwor").style.visibility = "visible";
                return false;
            } else if (sidi.value.trim() == "") {
                alert("Patient's SID required");
                sidi.style.border = "solid 3px red";
                document.getElementById("lblsid").style.visibility = "visible";
                return false;
            } else {
                return true;
            }
        }
    </script>

    <style>
        form {
            max-width: 500px;
            border-radius: 20px;
            margin: auto;
            background: rgba(0, 0, 0, 0.8);
            box-sizing: border-box;
            padding: 14px 20px;
            color: white;
            margin-top: 100px;

            display: grid;
            font-family: "Times New Roman", Times, serif;
        }

        input {
            width: 450px;
            display: inline-block;
        }

        label {
            text-transform: uppercase;
            text-align: left;
        }

        body {
            background: url("104.jpg");
            background-size: cover;
            height: auto;
            width: 100%;
        }

        @keyframes example {
            from {
                background-color: red;
            }

            to {
                background-color: yellow;
            }
        }

        @keyframes example1 {
            from {
                background-color: blueviolet;
            }

            to {
                background-color: orangered;
            }
        }

        h1 {
            width: 100%;
            height: 100%;
            background-color: transparent;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: 2300;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
            border: 1px dashed black;
            border-radius: 8px;
            animation-delay: 1s;
        }

        footer {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }

        h3 {
            width: 140%;
            height: 10%;
            color: white;

            background-color: transparent;
            animation-name: example1;
            animation-duration: 2s;
            animation-iteration-count: 2300;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
            border: 1px solid black;
            border-radius: 8px;
            animation-delay: 1s;
            font-size: 15px;
        }

        #logo {
            color: white;
            background-color: rgb(6, 29, 13);
            padding: 10px;
            border: 1px dashed black;
            border-radius: 10px;
            font-weight: bold;
            font-size: 60px;
            width: 200px;
        }

        .header {
            overflow: hidden;
            text-align: center;
        }

        #img {
            align-content: right;
        }

        button {
            width: 450px;
            background-color: grey;
            display: table;
            padding-left: 150px;
            padding-right: 185px;
            opacity: 0.9;
            cursor: pointer;
        }

        h2 {
            font-size: 10px;
            font-family: "Times New Roman", Times, serif;
        }

        button.acc {
            background-color: rgba(233, 255, 233, 0.342);
            opacity: 1;
            padding: 1rem;
            font-weight: bolder;
            font-family: "Lucida Console", Courier, monospace;
            font-size: 1rem;
        }

        button.can {
            background-color: rgba(212, 161, 161, 0.185);
            opacity: 1;
            padding: 1rem;
            font-weight: bolder;
            font-family: "Lucida Console", Courier, monospace;
            font-size: 1rem;
        }

        button:hover.can {
            background-color: red;
        }

        button:hover.acc {
            background-color: green;
        }

        p {
            margin-left: 50%;
        }

        #hgg {
            margin-left: 0%;
        }

        .w3 {
            margin-left: 15%;
        }
    </style>
</head>

<body>
    <div class="w3">
        <img src="1001.png" alt="" class="hgg" />
        <label for="logo" id="logo"> Fight Against Corona</label>
        <img src="1001.png" alt="" class="hgg" />
    </div>
    <marquee behavior="scroll" scrollamount="18" width="100%" direction="left" height="30%">
        <h1>
            Please fill the following details and
            <em>Click on <b>Register</b></em> to continue
        </h1>
    </marquee>
    <div class="w3-container w3-center w3-animate-bottom">

        <?php
        echo "<font color= blue size=4pt face=Arial>Get this number as unique ID:-</font>";
        $lob = uniqid();
        echo "<font color= red size=4pt face=Arial>.$lob.</font>";
        ?>
        <form action="page2.php" onsubmit="return validate();" method="post">
            <label for="name">Name of Patient:</label>
            <input type="text" id="name" name="name" placeholder="Name" pattern="[A-Za-z]{3,30}" title="Name must contain alphabetic characters, length must be b/w 3-30 characters" />
            <label id="lblname" style="color: red; visibility: hidden; font-size: 10px;">*Name required*</label>
            <br />
            <label for="fname">Father's Name:</label>
            <input type="text" id="fname" name="fname" placeholder="Father's Name" pattern="[A-Za-z]{3,30}" title="Name must contain alphabetic characters, length must be b/w 3-30 characters" />
            <label id="lblfname" style="color: red; visibility: hidden; font-size: 10px;">*Father's Name*</label>
            <br />

            <label for="age">Age of Patient:</label>
            <input type="text" id="age" name="age" placeholder="Age of Patient" pattern="[0-9]{0,120}" title="Name must contain numeric characters, valid input 2 or 3 digit number b/w 1-120" />
            <label id="lblage" style="color: red; visibility: hidden; font-size: 10px;">*Patient's Age*</label>
            <br />
            <label id="lblgen">Gender:</label>
            <input type="radio" id="lol" name="gender" value="male" /> Male
            <input type="radio" id="lol" name="gender" value="female" /> Female
            <input type="radio" id="lol" name="gender" value="other" /> Others

            <br />

            <label for="addh">Permanent Address:</label>
            <input type="text" id="addh" name="addh" placeholder="Home Address" pattern="[0-9+\a-zA-Z]{1,200}" title="Permanent Address must be alphanumeric containing 1-200 characters.House no.,Area,City,State." />
            <label id="lbladdh" style="color: red; visibility: hidden; font-size: 10px;">*Patient's Address*</label>
            <br />

            <label for="email">Email Address:(optional)</label>
            <input type="Email" id="email" name="email" placeholder="xyz@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Match Email pattern xyz@xyz.com" />
            <br />
            <label for="aad">Aadhar Number:</label>
            <input type="text" id="aad" name="aad" placeholder="Aadhar Number" pattern="[0-9]{0,20}" title="Match Aadhar Number pattern." />
            <label id="lblaad" style="color: red; visibility: hidden; font-size: 10px;">*Aadhar Number*</label>
            <br />
            <label for="test">Upload Test Reports:</label>
            <input type="file" id="test" name="test" accept="image/*" size="40" />
            <label id="lbltest" style="color: red; visibility: hidden; font-size: 10px;">*Input test Reports*</label>
            <br />
            <label for="con">Contact Number:</label>
            <input type="text" id="con" name="con" placeholder="Contact Number" pattern="[0-9]{0,10}" title="Enter contact details, max length 10 characters." />
            <label id="lblcon" style="color: red; visibility: hidden; font-size: 10px;">*Contact Number*</label>
            <br />
            <label for="usnh">Username of Hospital:</label>
            <input type="text" id="usnh" name="usnh" placeholder="Username issued to hospital" pattern="[0-9A-Za-z]{3,30}" title="Username must alphanumeric characters, length must be b/w 3-30 characters" />
            <label id="lblusnh" style="color: red; visibility: hidden; font-size: 10px;">*Username of hospital*</label>
            <br />
            <label for="wor">Type of worker:</label>
            <input type="text" id="wor" name="wor" placeholder="Patient's Occupation" pattern="[A-Za-z]{3,30}" title="Patient's Occupation must contain alphabetic characters, length must be b/w 3-30 characters" />
            <label id="lblwor" style="color: red; visibility: hidden; font-size: 10px;">*Enter Occupation of Patient*</label>
            <br />
            <label for="sid">Patient's SID Number:</label>
            <input type="text" id="sid" name="sid" placeholder="Special Identification Number" pattern="[0-9A-Za-z0-9]{3,30}" title="Name must contain alphanumeric characters, length must be b/w 3-30 characters" />
            <label id="lblsid" style="color: red; visibility: hidden; font-size: 10px;">*Enter SID Number*</label>
            <br />

            <button class="acc" type="submit" class="register">
                REGISTER
            </button>
            <button class="can" type="button" onclick="javascript:window.location='dashboard.html';" class="cancelbtn">
                CANCEL
            </button>
        </form>
    </div>
    <marquee behavior="scroll" scrollamount="15" direction="left">
        <h3>
            This website is meant for Corona Pandemic.Copyright ©
            IndianGovernment.Found use of it in any other activities will be
            considered as a breach of copyright and the guilty will be punishable
            under law.
        </h3>
    </marquee>

    <footer>
        <h2>&copy;Copyright under Legal Notice: SC Creation:2020</h2>
    </footer>
</body>

</html>