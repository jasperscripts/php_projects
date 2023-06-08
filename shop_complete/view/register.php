<h1>Registration Page</h1>
<div class="error"><?=$this->message?></div>
<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="e.g. admin">
    <input type="text" name="email" placeholder="e.g. admin@email.com">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password1" placeholder="Confirm Password">
    <input type="submit" value="Register" name="submit" class="btn btn-primary">
</form>