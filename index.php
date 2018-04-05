<!DOCTYPE html>
<html>
<head>
	<title>php&css</title>
</head>
<body>
<form action="#" method="post" name="mainform">
<?php
$username = "";
$password = "";
$server_username = "root";
$server_pass	 = "";
$server_host	 = "localhost";
$server_database = "getdata";

$conn = mysqli_connect( $server_host, $server_username, $server_pass, $server_database) or die("Can't connect to the database");
mysqli_query($conn, "SET NAMES 'UTF8'");

?>
<style type="text/css">
	body{
  margin: 0;
  padding: 0;
  border: 0;
  /*background-color: #4A8DCA;*/
  /*background-color: #4A8DCA;*/
  /*background-image: url("http://www.allwhitebackground.com/images/2/2280.jpg");*/
  background-image: url("../img/background.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-family: 'Open Sans', 'Helvetica', sans-serif; 
  overflow: hidden;
  width: 100%;
  height: 100vh;
}

h1, h2, h3, h4, h5, h6{
  margin: 0;
  padding: 0;
  border: 0;
}

p{
  font-size: 15px;
  font-weight: 4px;
  text-align: center;
}

a{
  color: #4A8DCA;
  text-decoration: none;
}

a:hover{
  text-decoration: underline;
}

.content{
  background-color: #bbb;
  border-radius: 10px;
  padding: 40px 50px 40px 50px;
}

form h1{
  font-size: 24px;
  font-weight: 300;
  margin-bottom: 30px;
  text-align: center;
  text-transform: none;
}

form h2{
  color: #444;
  font-size: 14.5px;
  font-weight: 700;
  margin-bottom: 10px;
}

form input {
  border: 1px solid #ddd;
  border-radius: 3px;
  color: #888;
  display: block;
  font-size: 13px;
  margin-bottom: 10px;
  padding: 0px 10px;
  height: 35px;
  width: 250px;
}

form input:focus{
  outline: none;
  border-color: #ff9900;
}

::-webkit-input-placeholder {
  color: #bbb;
  font-size: 13px;
  line-height: 16px;
}

form label{
  display: inline-block;
}

form button{
  background-color: #999900;
  border: none;
  border-radius: 3px;
  color: #fff;
  font-size: 13.5px;
  font-weight: 700;
  letter-spacing: .5px;
  height: 50px;
  width: 270px;
  cursor: pointer;
  /*margin-bottom: 20px;*/
  /*-webkit-transition: all 400ms ease;
          transition: all 400ms ease;*/
}

form button:focus{
  outline: none;
}

form .button_btn{
  background-color: #508030;
  border-radius: 3px;
  color: #fff;
  font-size: 13.5px;
  font-weight: 700;
  letter-spacing: .5px;
  height: 50px;
  width: 270px;
  margin-bottom: 10px;
  
  /*-webkit-transition: all 400ms ease;
          transition: all 400ms ease;
          */
}
form .pform {
  font-size: 15px;
  font-weight: 4px;
}

</style>
<div class="content">
	<h1>GET DATA</h1>
	<input type="text" name="username" value="" placeholder="ACCOUNT" autofocus /></br>
	<input type="password" name="password" value="" placeholder="PASSWORD"></br>
	<button type="submit" class="button_btn" name="button_btn">Gửi dữ liệu</button>
	<p class="pform">HỆ THỐNG GET DỮ LIỆU TỪ DTB</p>
</div>
</form>
</body>
</html>