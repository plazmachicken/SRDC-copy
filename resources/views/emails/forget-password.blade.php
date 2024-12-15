
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body style="font-family: Arial, sans-serif;">

    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 8px;">
        
        <h2>Password Reset</h2>
        
        <p>Hello,</p>
        
        <p>We received a request to reset your password. Please click the link below to reset your password:</p>
        
        <p><a href="{{route('reset.password', $token)}}">Reset Password</a></p>
        
        <p>If you didn't request a password reset, you can safely ignore this email.</p>
        
        <p>Thank you!</p>
    
    </div>

</body>
</html>
