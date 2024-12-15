<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Submitted IPs</title>
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
.title {
    text-align:center;
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
.headings-div {
    display: flex;
    justify-content: space-around;
    align-items: center;
    text-align: center;
    width: 80%;
    background-color:#dadada;
	padding:30px;
	border-radius:40px;
	margin-left:auto;
	margin-right:auto;
}
.headings {
    flex: 1;
    margin: 0;
	font-size:20px;
}
ol {
	text-align:left;
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
.list a{
	text-decoration:none;
	color:black;
}
.container {
    max-width: 1000px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
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
    </header>

	<h1 class="title">My IP Applications</h1>

	<div class="headings-div">
		<div>
		<p class="headings"><strong>IP ID Number: </strong></p>
			<ol class="list">
				<li><a href="ipstatus.html">15243</a></li>
				<li>15353</li>
				<li>35214</li>
				<li>35253</li>
				<li>64333</li>
				<li>14552</li>
				<li>73267</li>
				<li>95345</li>
				<li>13224</li>
				<li>65321</li>
			</ol>
		</div>

		<div>
		<p class="headings"><strong>Apply Date: </strong></p>
			<ol class="list">
				<li><a href="ipstatus.html">12/01/2024</a></li>
				<li>12/01/2024</li>
				<li>12/01/2024</li>
				<li>12/01/2024</li>
				<li>12/01/2024</li>
				<li>12/01/2024</li>
				<li>12/01/2024</li>
				<li>12/01/2024</li>
				<li>12/01/2024</li>
				<li>12/01/2024</li>
			</ol>
		</div>

		<div>
		<p class="headings"><strong>Status: </strong></p>
			<ol class="list">
				<li><a href="ipstatus.html">Pending</a></li>
				<li>Pending</li>
				<li>Pending</li>
				<li>Approved</li>
				<li>Approved</li>
				<li>Denied</li>
				<li>Pending</li>
				<li>Pending</li>
				<li>Pending</li>
				<li>Pending</li>
			</ol>
		</div>
	</div>

  <footer style="background-color: #092044">
        <div class="container">
            <p style="color: #fff">&copy; SRDC 2024</p>
        </div>
    </footer>
</body>
</html>
