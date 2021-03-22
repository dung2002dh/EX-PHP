<!DOCTYPE html>
<html>
<head>
    <title>Ex1</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.css">
</head>
<body>
    <main>
    <div class="container">
        <table border="">
            <tr class="header">
                <td class="text-center">
                    <p><b>Sign in<b></p>
                </td>
            </tr>
            <tr class="register-form">
                <td>
                    <form action="/action_page.php" class="was-validated">
                        <div class="form-group">
                            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Không được để trống trường này.</div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Không được để trống trường này.</div>
                         </div>
                         <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    </main>
</body>
</html>