<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signup.css"/>
    <script type="module" src="script.js"></script>
  </head>
<body>
    <nav>
        <div class="nav-container">
          <div class="left-nav">
            <ul>
              <img src="logo.png" alt="logo">
              <h2>Pandieño Bookstore</h2>
              <h3>|&nbsp Log In</h3>
            </ul>
          </div>
          <div class="right-nav">
            <ul>
              <a href="#signup">Sign up</a>
            </ul>
          </div>
        </div>
      </nav>

      <section id="signup">
        <h2>Sign up</h2>
        <form>
          <label for="first-name">First Name:</label>
          <input type="text" id="first-name" name="first-name"><br><br>

          <label for="middle-name">Middle Name:</label>
          <input type="text" id="middle-name" name="middle-name"><br><br>

          <label for="last-name">Last Name:</label>
          <input type="text" id="last-name" name="last-name"><br><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email"><br><br>

          <label for="barangay">Barangay:</label>
          <input type="text" id="barangay" name="barangay"><br><br>

          <label for="houseno.">House No.:</label>
          <input type="text" id="houseno." name="houseno."><br><br>

          <label for="street">Street:</label>
          <input type="text" id="street" name="street"><br><br>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password"><br><br>

          <label for="confirm-password">Confirm Password:</label>
          <input type="password" id="confirm-password" name="confirm-password"><br><br>

          <input type="submit" value="Creat Account">
        </form>
      </section>
      </div>
  </body>
</html>
