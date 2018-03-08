<?php include 'header.html';?>
 <style>
 	body {
background-image: url('voters.jpg'); background-size: cover; background-repeat: no-repeat;
overflow-x: hidden;
}

.main-section{
    background:url('../demo/imgpsh_fullsize.jpg') no-repeat;
    background-size:100% 100%;
    margin: 0px;
    width: 100%;
}
.user-login-header,.login-image-main{
    margin-top: 15px;
}
.user-login-header h1{
    font-size: 45px;
    color:#fff;
}
.user-login-header p,.last-part p{
    color:#c9c5c7;
}
.user-login-header span{
    color:#fff;
    font-weight: 600;
}
.login-image-main{
    padding: 30px;
    background-color:#fff;
    border-radius:5px;
    box-shadow: 0 0 5px 0 #fff;
}
.user-image-section img{
    background-color: #ffeb3b;
    padding:10px;
    width:200px;
    border-radius: 50%;
}
.user-login-box,.last-part{
    padding:20px;
}
.user-login-box button,.user-login-box button:hover{
    background-color:#ffeb3b;
    border:1px solid #ffeb3b;
    width: 100%;
    color:#424242;
    font-weight:600;
}
.last-part button{
    text-decoration: none;
    color:#B56162;
}


 </style>

<body >

 	<form action="loginproc.php" method="POST" style="
    margin-top: 50px;">
 	<div class="row">
		<div class="col-md-4 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-2 login-image-main text-center">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 user-image-section">
					<img src="commelec.png">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 user-login-box">
					<div class="form-group">
				  		<input type="text" id="role" name="role" class="form-control validate" placeholder="User Name" autofocus="">
					</div>
					<div class="form-group">
				  		<input type="text" class="form-control validate" placeholder="Password" name="password" id="password">
					</div>
					    <button type="submit" class="btn btn-default col s12" id="submit" name="submit">Login</button>
				</div>
			</div>
		</div>
	</div>
</form>
  <?php include 'footer.html';?>