
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="test_login.css">

  </head>
  <body>
    <div id="left"></div>
    <div id="right"></div>
      <div class="z-axix">
        <h1>WELCOME</h1>
        <form class="r-form" action="home.php" method="post">
            user name: <br><input type="email" id="Email_field" required autofocus><br><br>
            password: <br><input type="password" id="password_field" required minlength="6"><br><br>
            <a href="#">forgot password?</a><br>
            <a href="test_signup.php"> New user?</a><br><br>
            <button type="submit">LOGIN</button>
        </form>
    </div>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.6.3/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.6.3/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
<script type="text/javascript">
  var userEmail= document.getElementById('Email_field').value;
  var userPassword= document.getElementById('password_field').value;
</script>
</body>
</html>
