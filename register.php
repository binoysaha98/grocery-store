<html>
<head>
<title>Leaf-Store</title>
<script src="https://use.fontawesome.com/ea79d9acdf.js"></script>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="sidecss.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>
<!--Header -->
  <header>
        <div id="htext"><p>Leaf-Store</p></div>
        <div id="hlogo"><i class="fa fa-leaf fa-4x" aria-hidden="true"></i></div>  
    </header>
<!--Navigation bar -->
<ul id="emnav">
  <li><a class="active" href="homepage.html#home">Home</a></li>
  <li><a href="homepage.html#contact">Contact</a></li>
  <li><a href="homepage.html#about">About</a></li>
</ul>

<!--main body -->

<div class="container">
  <div class="card">
    <h2>Signup Form</h2>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Footer</h3>
  <p>Source Code At <a href="https://www.github.com/binoysaha98/grocery-store" target="_blank">Github</a></p>
  
  <p>Remember to check out our socks</p>
</footer>


</body>
 </html>