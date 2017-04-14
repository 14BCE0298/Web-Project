<html>
<head>
<title>Login page for Existing Users</title>
<style>
.div1 {
    height: 98%;
    width: 99%;
    background-color: powderblue;
	border: 5px solid;
	border-color: #a64dff;
    border-radius: 5px;
}
.div2 {
	width:370px;
	border: 15px solid;
	border-color: #c62007;
    border-radius: 15px;
	margin-top:150px;
font-weight: bold;
font-size: 35px;
text-align: left;
padding:20px;
}
.div3 {
	padding: 10px;
 font-weight: bold;
font-size: 25px;
line-height: 50px;
}
input[type=text], select {
    width: 370px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 370px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 18px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

</style>
</head>
<body>
<div class="div1" align="center">
<div class="div2">Login Credentials
<div class="div3">
<form action="login_validate.php" method="post">
UserId:   <input type="text" name="UserId"><br>
Password: <input type="text" name="Password"><br>
<input type="submit">
</form>
</div>
</div>
</div>
</body>
</html>
