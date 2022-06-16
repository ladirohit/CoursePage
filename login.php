<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IPWT THEORY DA</title>
 	

<?php include('./header.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");
?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:#28a745;
		display: flex;
		align-items: center;
	}
	#login-right .card{
		margin: auto
	}
	.logo {
    margin: auto;
    font-size: 8rem;
    padding: .5em 0.8em;
    color: #000000b3;
</style>

<body>


  <main id="main" class=" alert-info"><div id="login-left"><div class="logo">
  <h1 style="font-size:70px; color:#0E6251 ; margin-left:50px"><b>IPWT THEORY DA</b></h>
  <p></p><h1 style="color:#EAEDED  ;"><b><u>E-LEARNING COURSE PAGE SYSTEM </u></b></h1><p></p><p></p>
  <h2 ><b>Name: <b style="color:white;">LADI ROHIT </b></b></h2><p></p>
<h2 ><b>Registration Number: <b style="color:white;">19BDS0096 </b></b></h2><p></p>
<h2 ><b>Course Title: <b style="color:white;">INTERNET PROGRAMMING AND WEB TECHNOLOGIES</b></b></h2>
<p></p>
<h2 ><b>Faculty: <b style="color:white;">NALINI N</b></b></h2>
<p></p>
<h2 ><b>Slot: <b style="color:white;">L57+L58</b></b></h2>
 
  			</div>
  		</div>
  		<div id="login-right">

  			<div class="w-100">
  				<h4 class="text-success text-center"><b>E-Learning Course Page System </b></h4>
  				<br>
  		
  			
  			<div class="card col-md-8">
  				<div class="card-body">
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="x" class="control-label text-success">Select Your Role</label>
 <select name="X" id="X" class="form-control">
    <option value="volvo">Student</option>
    <option value="saab">Faculty</option>
  </select>
	
  						</div>
  						<div class="form-group">
  							<label for="username" class="control-label text-success">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label text-success">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-success">Login</button></center>

  					</form>

  				</div>

  			</div>
  			
  		</div>
  		<p></p>
  			
   		</div>

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.reload('index.php?page=home');
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>