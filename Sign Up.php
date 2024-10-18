<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
    $uname = filter_var($_POST["uname"], FILTER_SANITIZE_STRING);
    $pass = filter_var($_POST["pass"], FILTER_SANITIZE_STRING);


    if (empty($fname) || empty($uname) || empty($pass)) {
        $_SESSION["error"] = "Please fill in all fields.";
    } else {
     
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        if ($stmt->execute()) {
            $_SESSION["success"] = "Account created successfully.";
        } else {
            $_SESSION["error"] = "Failed to create account.";
        }

        
        $stmt->close();
    }
}


if (isset($_SESSION["error"])) {
    $error = $_SESSION["error"];
    unset($_SESSION["error"]);
} elseif (isset($_SESSION["success"])) {
    $success = $_SESSION["success"];
    unset($_SESSION["success"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="shadow w-450 p-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h4 class="display-4 fs-1">Create Account</h4><br>
            <?php if (isset($error)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php } elseif (isset($success)) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Full name</label>
                <input type="text" class="form-control" name="fname" value="<?php echo(isset($_POST['fname']))?$_POST['fname']:"" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="uname" value="<?php echo(isset($_POST['uname']))?$_POST['uname']:"" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="pass">
            </div>

            <button type="submit" class="btn btn-primary">Create Account</button>
        </form>
    </div>
</body>
</html>