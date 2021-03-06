<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
    <title>Ex 2</title>
</head>
<body>
    <?php
    $firstName = $lastName = $email = $gender = $state = $hobbies = "";
    $fName = $lName = $emailErr = $genderErr = "";
    function check_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST["firstName"])) {
            $fName = "*First Name is required";
        } else {
            $firstName = check_input($_POST["firstName"]);
        }
        if (empty($_POST["lastName"])) {
            $lName = "*Last Name is required";
        } else {
            $lastName = check_input($_POST["lastName"]);
        }
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
        } else {
            $email = $_POST["email"];
            $emailErr = "*Email is not valid";
        }
        if (empty($_POST["gender"])) {
            $genderErr = "*Gender is required";
        } else {
            $gender = check_input($_POST["gender"]);
        }
        $state=$_POST["states"];
        if (empty($_POST["hobbies"])) {
            $hobbies = "";
        } else {
            foreach ($_POST["hobbies"] as $hobby) {
                $hobbies .= "$hobby,";
            }
        }
    }
    ?>
    <div class="container">
        <div class="col-sm-12 col-md-5 mx-auto">
            <h3 class="text-bold text-center">Registration Form</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label class="control-label" for="firstName">First Name</label><span class="text-danger"><?php echo $fName; ?></span>
                    <input class="form-control" type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>">
                </div>
                <div class="form-group">
                    <label for="lastName" class="control-label">Last Name</label><span class="text-danger"><?php echo $lName; ?></span>
                    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName; ?>">
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label><span class="text-danger"><?php echo $emailErr; ?></span>
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <label for="gender" class="control-label mr-2">Gender</label>
                    <input type="radio" name="gender" id="male" value="male" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>> Male
                    <input type="radio" name="gender" id="female" value="female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>> Female <span class="text-danger"><?php echo $genderErr; ?></span>
                </div>
                <div class="form-group">
                    <label for="states" class="control-label">State</label>
                    <select name="states" id="state" class="form-control">
                        <option value="1">Johor</option>
                        <option value="2">Massachusetts</option>
                        <option value="3">Washington</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hobbies" class="control-label">Hobbies</label> <br>
                    <input type="checkbox" name="hobbies[]" id="badminton" value="badminton">
                    <label for="badminton" class="control-label">Badminton</label>
                    <input type="checkbox" name="hobbies[]" id="football" value="football">
                    <label for="football" class="control-label">Football</label>
                    <input type="checkbox" name="hobbies[]" id="bicycle" value="bicycle">
                    <label for="bicycle" class="control-label">Bicycle</label>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Save Record" />
                    <input type="reset" name="reset" id="reset" class="btn" value="Reset" />
                </div>
            </form>
            <?php
            if (!empty($_POST["firstName"]) && !empty($_POST["lastName"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && !empty($_POST["gender"]))) {
                echo "????ng k?? th??nh c??ng! <br>";
                echo "Th??ng tin c???a b???n: <br>";
                echo "First Name: $firstName <br>";
                echo "Last Name: $lastName <br>";
                echo "Email: $email <br>";
                echo "Gender: $gender <br>";
                echo "State: $state <br>";
                echo "Hobbies: $hobbies <br>";
            }
            ?>
        </div>
    </div>
</body>

</html>