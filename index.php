<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/mainpage.css" />
    <script type="module" src="script/script.js" defer></script>
  </head>
<body>
  <nav>
    <div class="nav-container">
      <div class="left-nav">
        <ul>
          <img src="logo.png" alt="logo">
          <h2>Pandieño Bookstore</h2>
          <h3>|&nbsp Item Page</h3>
        </ul>
      </div>
      <div class="right-nav">
          <ul>
                <input type="text" placeholder="Search item..." class="search-bar">
              <li class="cart">
                <img src="cart-icon.png" alt="cart">
                <span class="cart-count">2</span>
                <a href="#">Log in</a> | <a href="php/signup.php">Sign up</a>
            </ul>
      </div>
    </div>
  </nav>
  <main>
    <section class="filters">
      <div>
        <span>Sort by:</span>
        <select>
          <option>By Category</option>
          <option>Fantacy</option>
          <option>Triller</option>
          <option>Fictiom</option>
          <option>Horror</option>
          <option>Romance</option>
          <option>Mystery</option>
          <option>Nonfiction</option>
          <option>Poetry</option>
          <option>Novel</option>
          <option>Adventure</option>
        </select>
        <select>
          <option>Latest</option>
          <option>Newest - Oldest</option>
          <option>Oldest - Newest</option>
        </select>
        <select>
          <option>Price Range</option>
          <option>Low - High</option>
          <option>High - Low</option>
        </select>
      </div>
      <div>
        <span>Relevant | </span>
        <span>Latest | </span>
        <span>Top Sales</span>
      </div>
    </section>
    <section class="related-books">
      <div class="book-grid">
        <div class="book-item">
          <img src="related-book1.jpg" alt="Anya and the Nightingale">
          <p>Anya and the Nightingale</p>
        </div>
        <div class="book-item">
          <img src="related-book2.jpg" alt="La Promesse Du Dragon">
          <p>La Promesse Du Dragon</p>
        </div>
        <div class="book-item">
          <img src="related-book2.jpg" alt="La Promesse Du Dragon">
          <p>La Promesse Du Dragon</p>
        </div>
        <div class="book-item">
          <img src="related-book2.jpg" alt="La Promesse Du Dragon">
          <p>La Promesse Du Dragon</p>
        </div>
        <div class="book-item">
          <img src="related-book2.jpg" alt="La Promesse Du Dragon">
          <p>La Promesse Du Dragon</p>
        </div>
        <div class="book-item">
          <img src="related-book2.jpg" alt="La Promesse Du Dragon">
          <p>La Promesse Du Dragon</p>
        </div>
        <div class="book-item">
          <img src="related-book2.jpg" alt="La Promesse Du Dragon">
          <p>La Promesse Du Dragon</p>
        </div>
        <div class="book-item">
          <img src="related-book2.jpg" alt="La Promesse Du Dragon">
          <p>La Promesse Du Dragon</p>
        </div>
      </div>
    </section>
  </main>
</body>
</html>