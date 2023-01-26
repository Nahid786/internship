
<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
   <style>
    *{
        margin:auto;
        padding:auto;
    }
    .container{
        padding-top:60px;
        max-width: 40%;
        max-height:70%;
        //border-top:solid 6px orange;
        
    }
   </style>
</head>
<body>
<form action="re_connection.php" method="post">
<div class="container">
<div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
        <h3 class="text-center">Responsive Registration Form</h3>
        <form action="connect.php" method="post">
   <!-- for email -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input class="form-control" placeholder="Email" type="email" name="email">
    </div> <!-- end email -->
    <!-- creating password -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Password" type="password" name="password">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Re-type password" type="password" name="retype_password">
    </div> <!-- end password-->  
    <!-- first name -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input type="text" class="form-control" placeholder="First Name"  name="fname">
        <span style="padding:15px;"></span>
        <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input class="form-control" placeholder="Last Name" type="text" name="lname">
        </div><!-- end of first and last name -->
    <!-- radio -->
    
      <div class="form-check">
        <input type="radio" name="sex" value="Male" />Male
        
        <span style="padding:20px;"></span>
        <input type="radio" name="sex" value="Female" />Female
       
        </div>
    <div style="padding:5px;"></div>
    <!-- for select country -->
    <div class="form-group input-group">
    	
		<select class="form-control" name="country">
			<option selected=""> Select a Country</option>
			<option>India</option>
			<option>UK</option>
			<option>US</option>
		</select>
	</div> <!-- end country -->

    
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" >
      <label class="form-check-label" for="gridCheck">I agree with terms & conditions</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">I want to receive the Newsletter</label>
    </div>
  
    
    <div class="form-group" style="padding:5px;">
        <input type="submit" value="Create Account" class="btn btn-primary btn-block" name="submit"> 
    </div> <!-- form-group// -->      
                                                           

</article>

   
</div>
</div>
 </form>   
</body>
</html>
