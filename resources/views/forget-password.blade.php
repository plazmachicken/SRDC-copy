<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Password</title>
<style>
  body {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #092044;
    margin: 0;
    font-family: 'Poppins', sans-serif;
  }

  .container {
    max-width: 400px;
    width: 100%;
    background: #fff;
    border-radius: 7px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
  }

  .form {
    text-align: center;
  }

  .form header {
    font-size: 24px;
    font-weight: 500;
    margin-bottom: 20px;
  }

  .form p {
    font-size: 16px;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-control {
    height: 50px;
    width: calc(100% - 30px); /* Adjusted width to consider padding */
    padding: 0 15px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 6px;
    outline: none;
    box-sizing: border-box; /* Ensures padding is included in width calculation */
  }

  .form-control:focus {
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
  }

  .text-danger {
    color: #dc3545;
  }

  .alert {
    margin-bottom: 20px;
  }

  .btn-primary {
    height: 50px;
    width: 100%;
    font-size: 18px;
    font-weight: 500;
    background-color: #009579;
    border: none;
    border-radius: 6px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .btn-primary:hover {
    background-color: #006653;
  }
</style>
</head>
<body>
<main>
  <div class="container">
    <div class="form">
      <header>Reset Password</header>
      <p>We will send a link to your email, use that link to reset your password.</p>
      <form method="POST" action="{{ route('forget.password.post') }}">
        @csrf
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter your email" name="email" required autofocus>
          @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</main>
</body>
</html>
