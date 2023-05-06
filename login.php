<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | AjaxPrints</title>
 	

<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		background-image: url(bi.jpg);
		
		background-size: cover;
		width: 100%;
	    height: calc(100%);
	   
	    top:0;
	    left: 0
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		display: flex;
		margin-left: 300px;
	}
	#text-black{
		color: black;
		
	}
	.btn{
		position: relative;
    background-image: var(--gradient-1);
    color: var(--text-white);
    font-size: var(--fontSize-6);
    font-weight: var(--weight-semiBold);
    max-width: max-content;
    min-width: 180px;
    height: 50px;
    display: grid;
    place-items: center;
    padding-inline: 30px;
    clip-path: var(--clip-path-3);
    overflow: hidden;
	}


	
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}



.btn-hover {
    width: 200px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 10px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}


.btn-hover.color-3 {
    background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
    box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
}





</style>

<body class="bg-dark">
	
<div class="buttons">
    <button class="btn-hover color-3" ><a href="indexhome.php" style="color:white;">Go back to Home</a></button>
</div>


  <main id="main" >
  	
  		<div class="align-self-center w-100">
		<button class="btn btn-primary d-block mx-auto" id="text-white" style="background-color: purple;"><b><h style="color:transparent;">----------------------------</h>AjaxPrints<h style="color:transparent;">-------------------------</h></b></button>

  		<div id="login-center" class="transparent row justify-content-center">
  			<div class="card col-md-4">
  				<div class="card-body">
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="username" class="control-label text-dark">Username</label>
  							<input type="text" id="username" name="username" class="form-control form-control-sm">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label text-dark">Password</label>
  							<input type="password" id="password" name="password" class="form-control form-control-sm">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label text-dark">Type</label>
  							<select class="custom-select custom-select-sm" name="type">
  								<option value="3">Customer</option>
  								<option value="2">Staff</option>
  								<option value="1">Admin</option>
  								
  							</select>
  						</div>
  						<center><button class=" btn-hover color-3 btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
						<center text-color="blue"><a class="grey"  href="./register.php">__ Register ? _</a></center>
  					</form>
  				</div>
  			</div>
  		</div>
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
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
	$('.number').on('input',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9 \,]/, '');
        $(this).val(val)
    })
</script>	
</html>