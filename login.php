<?php
	// Start Sesssion
	session_start();
  
	if(isset($_SESSION['students'])) header('location: id-issuance.php');
   $error_message = '';
   
   
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('database/connection.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = 'SELECT studentNumber FROM students WHERE email = :email AND password = :password';
    $stmt = $conn->prepare($query);

    // Bind parameters
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
    // User authentication successful
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$students = $stmt->fetchAll()[0];
		$_SESSION['students'] = $students;

		header('Location: id-issuance.php');
    } else {
      $error_message = 'Incorrect email or password. Please try again.';
      
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/form.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>PUP Student ID</title>
  </head>

    <body>
      <!-- Error Prompt -->
    <?php if (!empty($error_message)) {?>
      <div class="error-container" style="<?php echo !empty($error_message) ? 'display: block;' : 'display: none;'; ?>">
        <div class="error-message"><p><?= $error_message ?></p></div>
      </div>
      <?php
	      }
	    ?>

      <div class="container">
          <a href="index.php" class="back-btn">X</a>
          <div class="form--container--logo"><img src="img/school-logo-w.png" alt="logo"></div>
          <div class="form--container--header">PUP Student ID</div>
          <div class="form-container">  
            <form action="login.php" method="POST" id="myForm" class="form--container--content">
              <div class="container--section--input">
                <div class="field email-field">
                  <div class="input-field">
                    <input type="email" name="email" placeholder="Email Address..." id="emailInput" required/>
                    <div id="emailError" class="error-message error-input"></div>
                  </div>
                </div>
                  <div class="input-field">
                    <div class="input-field create-password">
                      <input type="password" name="password" placeholder="Password..." id="passwordInput" required/>
                      <div id="passwordError" class="error-message error-input"></div>
                    </div>
                  </div>
                <div class="btn">
                  <button class="btn-form" type="submit">Sign in</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    <script src="js/login.js"></script>
  </body>
</html>