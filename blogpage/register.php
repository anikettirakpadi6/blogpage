<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('include/reg_login.php'); ?>

<?php include('include/header.php'); ?>

<title>Blog | Sign up </title>
</head>
<body>
<div class="container">
        <!-- Navbar -->
                <?php include( ROOT_PATH . '/include/navbar.php'); ?>
        <!-- // Navbar -->

        <div style="width: 40%; margin: 20px auto;">
                <form method="post" action="register.php" >
                        <h2>Register on Blog</h2>
                        <?php include(ROOT_PATH . '/include/errors.php') ?>
                        <input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
                        <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
                        <input type="password" name="password_1" placeholder="Password">
                        <input type="password" name="password_2" placeholder="Password confirmation">
                        <button type="submit" class="btn" name="reg_user">Register</button>
                        <p>
                                Already a member? <a href="login.php">Sign in</a>
                        </p>
                </form>
        </div>
</div>
<!-- // container -->
<!-- Footer -->
        <?php include( ROOT_PATH . '/include/footer.php'); ?>
