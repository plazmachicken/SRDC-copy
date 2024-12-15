<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notifications</title>
	<link rel="stylesheet" href="notification.css" />
    <style>
body {
    font-family:sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fff;
}

header {
    background-color: white;
    color: #fff;
}

.container-nav {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #092044;
}
.container-header{
    width: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    width: 200px;
    height: auto;
    margin: 15px;
}

.search-bar {
    margin-left: auto;
    text-align: right;
    border: 2px solid #ccc;
    border-radius: 5px;
}

input[type="text"] {
    padding: 10px;
    width: 80%;
    border: none;
    border-radius: 5px;
}

.title {
    text-align:center;
}

nav {
            margin-left: 10%;
            margin-right: 10%;
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            text-align: center;
        }

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
}

nav li {
    text-align: center;
}

nav a {
    color: #fff;
    text-decoration: none;
}
.user-actions {
    display: flex;
    align-items: center;
}
.login-btn {
    margin-right: 10px;
    background-color: #092044;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
}

.login-btn:hover {
    background-color: #063366;
}

.main-content {
    display: flex;
    justify-content: space-around;
    align-items: center;
    text-align: center;
    width: 100%;

}
.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.container-footer {
    max-width: 1000px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
}

h1 {
    text-align: center;
    color: #333;
}

.notification {
    margin-bottom: 15px;
    padding: 10px;
    border-left: 6px solid #007bff;
    background-color: #f9f9f9;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.notification .title {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    text-align: left;
}

.notification .date {
    font-size: 12px;
    color: #888;
    margin-top: 8px;
}

.notification .content {
    margin-top: 12px;
    color: #555;
}

footer{
    max-width: 100%;
    margin: 0 auto;
    display: flex;
    text-align: center;
    background-color: #092044;
    color: white;
    font-size: 12px;
    position: fixed;
    bottom: 0;
    width: 100%;
}
    </style>
</head>
<body>
	<header>
		<div class="container-header">
            <img src="logo_20200823.jpg" alt="utkylui" class="logo">
            <div class="user-actions">
            <button class="login-btn">Login</button>
            <div class="search-bar">
            <input type="text" placeholder="Search">
            </div>
        </div>
        </div>
        <div class="container-nav">
            <nav>
                <ul>
                    <li><a href="patent.html">Patent</a></li>
                    <li><a href="trademark.html">Trademark</a></li>
                    <li><a href="IndustrialForm.html">Industrial Design</a></li>
                    <li><a href="GeographicalForm.html">Geographical Indication</a></li>
                    <li><a href="copyright.html">Copyright</a></li>
                    <li><a href="{{ route('customerdash') }}">Dashboard</a></li>
                    <li><a href="{{ route('welcome')}}">About Us</a></li>
                </ul>
            </nav>
        </div>
    <div class="container">
    <h1>Notifications</h1>

    <div class="notification">
      <div class="title">New Message Received</div>
      <div class="date">April 28, 2024</div>
      <div class="content">You have received a new message from John Doe.</div>
    </div>

    <div class="notification">
      <div class="title">Meeting Reminder</div>
      <div class="date">April 27, 2024</div>
      <div class="content">Reminder: Meeting with the team at 2:00 PM.</div>
    </div>

    <div class="notification">
      <div class="title">Payment Confirmation</div>
      <div class="date">April 25, 2024</div>
      <div class="content">Your payment of $50.00 has been successfully processed.</div>
    </div>
  </div>
	</header>
     <footer style="background-color: #092044">
        <div class="container">
            <p style="color: #fff">&copy; SRDC 2024</p>
        </div>
    </footer>
</body>
</html>
