<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Submitted IPs</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
	overflow-x:hidden;
}

header {
    background-color: white;
    color: #fff;
    padding: 20px 0;
}


.container-nav {
    width: 100%;
    margin: 0 auto;
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
    flex: 1;
    margin-left: auto;
    text-align: right;
    border: 2px solid #ccc;
    border-radius: 5px;
}

.search-space {
    padding: 10px;
    width: 100%;
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


.login-btn {
    background-color: #092044;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    margin-right: 10px;
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
    flex-direction: column;
    justify-content: space-between;
	margin-bottom:0;
	max-width: 100%;
    margin: 0 auto;
    display: flex;
    text-align: center;
    background-color: #092044;
    color: white;
    font-size: 12px;
}
.list a{
	text-decoration:none;
	color:black;
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
                    <li><a href="{{ route('patent') }}">Patent</a></li>
                    <li><a href="{{ route('utility') }}">Utility</a></li>
                    <li><a href="{{ route('trade') }}">Trademark</a></li>
                    <li><a href="{{ route('industrialForm') }}">Industrial Design</a></li>
                    <li><a href="{{ route('geographic') }}">Geographical Indication</a></li>
                    <li><a href="{{ route('copyform') }}">Copyright</a></li>
                    <li><a href="{{ route('custdash') }}">Dashboard</a></li>
                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

	<h1 class="title">My IP Applications</h1>

    <div class="headings-div">
            <div>
                <table style="width: 100%; table-layout: fixed; padding-top:15px;">
                    <thead>
                        <tr>
                            <th style="width: 50%; padding-bottom:10px;">Intellectual Property Name</th>
                            <th style="width: 25%; padding-bottom:10px;">Created on</th>
                            <th style="width: 25%; padding-bottom:10px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allEntries as $entry)
                        <tr>
                        <td style="padding-top:6px; text-align:left;"><a style="text-decoration:none; color:black;" href="{{ route('ipstatus.show', ['id' => $entry->id, 'formType' => $entry->formType]) }}">{{ $entry->inventiontitle }}</a></td>
                            <td><a style="text-decoration:none; color:black;" href="{{ route('ipstatus.show', ['id' => $entry->id, 'formType' => $entry->formType]) }}">{{ $entry->created_at->format('d-m-Y') }}</a></td>
                            <td><a style="text-decoration:none; color:black;" href="{{ route('ipstatus.show', ['id' => $entry->id, 'formType' => $entry->formType]) }}">{{ $entry->is_complete }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>




</body>
</html>
