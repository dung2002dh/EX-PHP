<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
    <title>Ex 4</title>
</head>

<body>
    <?php
    $name = $email = $phoneNum = $website = $message = $err = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!filter_var($_POST["website"], FILTER_VALIDATE_URL)) {
            $err = "Trường website cần phải có định dạng URL";
        } 
        else {
            $website = $_POST["website"];
        }
        if (!is_numeric($_POST["phoneNum"])) {
            $err = "không được để trống trường phone";
        } 
        else {
            $phoneNum = $_POST["phoneNum"];
        }
        if (empty($_POST["name"])) {
            $err = "Không được để trống trường name";
        } 
        else {
            $name = $_POST["name"];
        }
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $err = "Không được để trống trường email";
        } 
        else {
            $email = $_POST["email"];
        }
        $message = $_POST["message"];
    }
    ?>
    <div class="container w-100 mx-auto" >
      <div class="jumbotron">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto">
            <span class="text-danger"><?php echo $err; ?></span>
            <input type="text" name="name" id="name" placeholder="Your Name" class="mt-5 form-control" value="<?php echo $name; ?>" />
            <input type="email" name="email" id="email" placeholder="Your Email Address" class="mt-2 form-control" value="<?php echo $email; ?>" />
            <input type="text" name="phoneNum" id="phoneNum" placeholder="Your PhoneNumber" class="mt-2 form-control" value="<?php echo $phoneNum; ?>" />
            <input type="text" name="website" id="website" placeholder="Your Website starts with https://" class="mt-2 form-control" value="<?php echo $website; ?>" />
            <textarea name="message" id="message" rows="5" placeholder="Type Your Message Here..." class="mt-2 form-control"></textarea>
            <input type="submit" name="submit" id="submit" class="mt-2 bg-danger text-white form-control font-weight-bolder" value="SUBMIT">
        </form>
      </div>
    </div>
    <div class="container text-center">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if (filter_var($_POST["website"], FILTER_VALIDATE_URL) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && is_numeric($_POST["phoneNum"]) && !empty($_POST["name"])) {
                echo "Your Name: $name <br>";
                echo "Your Email: $email <br>";
                echo "Your Phone Number: $phoneNum <br>";
                echo "Your Website: $website <br>";
                echo "Your Message: $message <br>";
            }
        }
        ?>
    </div>
</body>
</html>