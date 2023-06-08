<h1>Login</h1>
<div class="error"><?=$this->message?></div>
<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="e.g. admin">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login" name="submit" class="btn btn-primary">
</form>

<a href="register.php">Register</a>