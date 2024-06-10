<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/styles.css">
<title>My First PHP Website</title>
</head>
<body>
<header>
<div class="logo">
<a href="index.php"><img src="Image/logo.png" alt="Logo"></a>
</div>
<nav>
<ul>
<li class="<?php if ($current_page == 'index.php') echo 'active'; ?>">
<a href="index.php">Home</a>
</li>
<li class="<?php if ($current_page == 'about.php') echo 'active'; ?>">
<a href="about.php">About</a>
</li>
<li class="<?php if ($current_page == 'new.php') echo 'active'; ?>">
<a href="new.php">New</a>
</li>

</ul>
</nav>
<div class="search-bar">
<form action="search.php" method="GET">
<input type="text" name="query" placeholder="Search...">
<button type="submit"><i class="fas fa-search"></i></button>
</form>
</div>


</header>
 
<main>
<!-- Main content goes here -->
</main>
 
<footer>
<div class="social-icons">
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
</div>
</footer>
 
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>