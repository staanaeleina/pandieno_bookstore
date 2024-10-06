<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/signup.css" />
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica+SC&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
    <script type="module" src="script/script.js" defer></script>
</head>
  <body>
    <nav>
      <div class="nav-container">
        <div class="left-nav">
          <ul>
            <li>
              <img
                src="https://res.cloudinary.com/dvr0evn7t/image/upload/v1727950923/edcd0988-0c42-466e-b5fd-76660fe9afeb_ktknm8-removebg-preview_mmikc5.png"
                alt="logo"
              />
            </li>
            <li><h2>Pandieño Bookstore</h2></li>
          </ul>
        </div>
        <div class="right-nav">
          <ul>
            <li id="search-bar">
              <input
                type="text"
                placeholder="Search item..."
                class="search-bar"
              />
            </li>
            <li><a href="#">Sign up</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <section>
        <div class="left"></div>
        <div class="right">
          <div class="right-container">
            <h2 id="sign-up">Sign up</h2>
            <form action="signup.php" method="POST">
              <input type="text" id="email" name="email" required><br>
              <label for="email">Email</label><br><br>
          
              <input type="password" id="password" name="password" required><br>
              <label for="password">Password</label><br><br>
          
              <input type="password" id="confirm-password" name="confirm-password" required><br>
              <label for="confirm-password">Confirm Password</label><br><br>
              <input type="checkbox" onclick="showPassword()">Show Password<br><br>
              
              <input type="submit" value="Sign up">
          </form>
          </div>
        </div>
        </div>
      </section>
    </main>
  </body>
  <footer>
    <p>© 2024 Pandieno Bookstore. All Rights Reserved .</p>
  </footer>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input values
    $username_email = htmlspecialchars(trim($_POST['username-email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm-password']));

    // Validate input
    if ($password === $confirm_password) {
        // Here, you can process the data (e.g., save to a database)
        
        // Redirect to a new page (e.g., success.php)
        header("Location: php/usersignup.php");
        exit; // Always use exit after header redirection to stop further script execution
    } else {
        echo "Passwords do not match.";
    }
} else {
    // Redirect or show an error if the request method is not POST
    echo "Invalid request method.";
}
?>