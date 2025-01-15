<?php if (isset($_SESSION['user']['username'])) { ?>
        <div class="logged_in_info">
                <span>Welcome <?php echo $_SESSION['user']['username'] ?></span>
                |
                <span class="logout-btn"><a href="logout.php">Log out</a></span>
        </div>
<?php }else{ ?>
<div class="banner">
  <div class="banner-content">
    <!-- <h1>Inspiration Quote</h1> -->
      <p> 
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> Architecto earum illo, aspernatur laborum optio consequatur?
      </p>
      <a href="register.php" class="btn">Join us!</a>
  </div>
  
  <div class="login">
    <form action="index.php" method="post" >
      <h2>Login</h2>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password"  placeholder="Password"> 
      <button class="btn" type="submit" name="login-btn">Sign in</button>
    </form>
  </div>
</div>
<?php } ?>