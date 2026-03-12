<?php
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $DOB = $_POST['DOB'];
        $mobilenumber = $_POST['mobilenumber'];
        $Address = $_POST['Address'];
        $Faculty = $_POST['faculty'];
        $gender = $_POST['gender'];

        echo "<div style = 'background:#ffffff;padding:20px;border-radius:8px;text-align:center;margin-bottom:24px;margin-right:20px;'>";
        echo "<h3> Student Details </h3>";
        echo "Name: ".$name."<br>";
        echo "Date of birth: ".$DOB."<br>";
        echo "Mobile Number: ".$mobilenumber."<br>";
        echo "Address: ".$Address."<br>";
        echo "Faculty:".$Faculty."<br>";
        echo "Gender: ".$gender."<br>";
        echo "</div>";


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body
        {
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            height: 100vh;
            background: #764BA2;
        }
        h2{
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            background:#ffffff;
            padding:50px;
            width: 30%;
            border: 1px solid black;
            border-radius: 10px;
            gap: 6px;

        }
        input,select{
            text-align: center;
            cursor: pointer;
            padding: 8px;
            margin: 8px 0px;
            font-size: 16px;

        }
        button{
            width: 140px;
            align-self: center;
            padding: 8px 15px;
            cursor: pointer;
            background:#FF4D4D;
            border-radius: 8px;
            border: none;
            color: white;
            transition: 0.3s;
         }
         div label{
            margin-right: 10px;
         }
         div input[type="radio"] {
           margin-right: 20px;
          }
         button:hover{
            background: #FF1A1A
         }


    </style>
</head>
<body>
<form action="#" method="POST">
 <h2>Student Registration Form</h2>
 <label for="Name">Name:</label>
 <input type="text" name="name" placeholder="Enter your name">
 <label for="dob">Date of Birth:</label>
 <input type="date" name="DOB" placeholder="Enter your date of birth">
 <label for="mobilenumber">Mobile No:</label>
 <input type="tel" name="mobilenumber"  pattern="[0-9]{10}" required>
 <label for="address" >Address:</label>
 <input type="text" name="Address" id= "address" placeholder="Enter your address">
 <label for="faculty" name="faculty">Faculty:</label>
 <select name="faculty" id="faculty" required>
    <option value="">Select your faculty</option>
    <option value="BCA">BCA</option>
    <option value="BSc.CSIT">BSc.CSIT</option>
    <option value="BBA">BBA</option>
    <option value="BIT">BIT</option>
 </select>
<label for="Gender">Gender:</label>
<div>
    <label for="male">Male:</label>
    <input type="radio" name="gender" value="male">
    <label for="female">Female:</label>
    <input type="radio" name="gender" value= "female"   >
</div>
<button type= "submit" name="submit"> Register Here</button>
</form>
</body>
</html>
