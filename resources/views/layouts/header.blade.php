<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
	<style>

.box{
    width:700px;
	float:right;
    border:1px solid black;
    }

.box ul li{
	width: 120px;
	float:left;
	margin: 10px auto;
	text-align: center;
}
.box ul li a{
    text-decoration: none;
    color:darkgray;
    font-weight:bold;
    }

.box ul li:hover{
    background-color: red;
}
.box ul li a:hover{
    color:white;
}

body{
    background-color:rgb(217, 217, 217);
}

header{
    position:fixed;
    right:0;
}
</style>

	<meta charset="utf-8">
	<title></title>
	</head>

    <header>
		<div class = "box">
			<ul type = "none">
				<li><a href="/home">Home </a></li>
				<li><a href="/menu">Menu </a></li>
				<li><a href="/contact">Contact </a></li>
				<li><a href="/photo">Photo Gallery </a></li>
			</ul>
		</div>
    </header>
</html>
