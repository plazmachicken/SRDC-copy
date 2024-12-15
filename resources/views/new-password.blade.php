<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Password</title>
<style>
  /* CSS styles */
  /* Import Google font - Poppins */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    min-height: 100vh;
    width: 100%;
    background: #092044;
  }

  .container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 500px; /* Adjusted max-width */
    width: 100%;
    background: #fff;
    border-radius: 7px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  }

  .container .form {
    padding: 2rem;
  }

  .form header {
    font-size: 2rem;
    font-weight: 500;
    text-align: center;
    margin-bottom: 1.5rem;
  }

  .form input[type="text"],
  .form input[type="password"],
  .form input[type="submit"] { /* Adjusted CSS for inputs */
    height: 60px;
    width: 100%;
    padding: 0 15px;
    font-size: 17px;
    margin-bottom: 1.3rem;
    border: 1px solid #ddd;
    border-radius: 6px;
    outline: none;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
  }

  .form input[type="submit"] { /* CSS for submit button */
    background: #009579;
    color: #fff;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .form input[type="submit"]:hover {
    background: #006653;
  }

  .form .alert {
    margin-bottom: 1rem; /* Adjusted margin */
  }

</style>
</head>
<body>
<main>
  <div class="container">
    <div class="form">
      <header>Create a new password</header>
      
      <form method="POST" action="{{ route('reset.password.post') }}">
        @csrf
        <input type="text" name="token" hidden value="{{$token}}">
        <input type="text" placeholder="Enter your email" name="email" required autofocus>
        <input type="password" placeholder="Enter your new password" id="password" name="password" required>
        <input type="password" placeholder="Confirm your new password" id="password" name="password_confirmation" required>
        <input type="submit" value="Submit">

        <span class="signup">Back to login
            <label for="check"><a href="login">Login</a></label>
      </form>
    </div>
    @if(@session()->has("success"))
    <div class="alert alert-success">
      {{session()->get("success")}}
    </div>
    @endif
    @if(@session()->has("error"))
    <div class="alert alert-danger">
      {{session()->get("error")}}
    </div>
    @endif
  </div>
</main>
</body>
</html>
