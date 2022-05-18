<?php include "assest/head.php"; ?>
<?php

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE username = :username";

        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Check if username exists, if yes then verify password
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: index.php");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // Close connection
    unset($pdo);
}
?>
<?php include "assest/gheader.php" ?>
<section class="py-5 mb-md-2"
    style="background: radial-gradient(116.18% 118% at 50% 100%, rgba(99, 102, 241, 0.1) 0%, rgba(218, 70, 239, 0.05) 41.83%, rgba(241, 244, 253, 0.07) 82.52%);">
    <div class="container py-lg-4">
        <div class="mx-auto col-lg-6 w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
            <h1 class="text-center text-xl-start">Đăng nhập xem thông tin</h1>
            <p class="text-center text-xl-start pb-3 mb-3">Cảm ơn bạn đã quan tâm đến chi tiết portfolio của
                mình. Vì có những thông tin dự án không công khai được nên bạn cần mật khẩu đăng nhập để xem
                nhé!</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"
                class="needs-validation mb-2" novalidate="">
                <div class="position-relative mb-4">
                    <label for="email" class="form-label fs-base">User Name</label>
                    <input value="recruiter" type="text" name="username" class="form-control form-control-lg <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                        required="">
                    <div class="invalid-feedback position-absolute start-0 top-100"><?= $username_err; ?></div>
                </div>
                <div class="mb-4">
                    <label class="form-label fs-base">Mật khẩu</label>
                    <div class="password-toggle">
                        <input  type="password" name="password" class="form-control form-control-lg <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>" required="">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox">
                            <span class="password-toggle-indicator"></span>
                        </label>
                        <div class="invalid-feedback position-absolute start-0 top-100"><?= $password_err; ?></div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary shadow-primary btn-lg w-100">Đăng nhập</button>
            </form>
        </div>
    </div>
</section>
<!-- Latest Articles -->
<!-- <div class="section jumbotron mb-0 h-100">
  
    <div class="container d-flex flex-column justify-content-center align-items-center h-100">

        <div class="wrapper my-0 pt-3 bg-white w-50 text-center">
            <img src="img/logo/logo.png" alt="dev culture logo" style="width: 100px;height: auto;">
        </div>

      
        <div class="wrapper bg-white rounded px-4 py-4 w-50">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username"
                        class="form-control <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
                    <span class="invalid-feedback"><?= $username_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password"
                        class="form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?= $password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Login">
                </div>
                <p><a href="#" class="text-muted">Lost your password?</a></p>
            </form>
        </div>

    
    </div>
 
</div> -->

<?php include "assest/footer.php" ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>