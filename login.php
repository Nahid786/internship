
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
      <style>
body  
{  
    margin: 0;  
    padding: 0;  
    background-color:#CD6155;  
    font-family: 'Arial';  
}  
.login{  
        width: 400px;  
        overflow: hidden;   
        margin: auto;  
        margin-top:200px; 
        padding:20px;
        background: white;  
       
          
}  
input[type=text] {
  border: none;
  border-bottom: 2px solid #99A3A4;
  margin: 8px 0;
  padding-left: 12px;
}
input[type=password] {
  border: none;
  border-bottom: 2px solid #99A3A4;
}
h2{   
    color: black;   
} 

 
#Uname{  
    width: 350px;  
    height: 30px;  
    
}  
#Pass{  
    width: 350px;  
    height: 30px;  
    
      
}  
 #log{  
    width: 49%;  
    height: 50px;  
    background-color: #D7DBDD; /* Green */
  border: none;
  
  padding:10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px; 
  
  
}   
#log:hover{
    background-color:#2E4053;
}
p{  
    color: gray;  
    font-size: 12px;  
}  

      </style>
</head>    
<body>    
      
    <div class="login">    
    <form method="post" action="home.php"> 
    <h2 class="shift">Login</h2>   
       
        <input type="text" class="shift" name="Uname" id="Uname" placeholder="Email">    
        <br><br>    
    
        <input type="Password" class="shift" name="Pass" id="Pass" placeholder="Password">    
         
        <br><br> 
        <p style="text-align:center;">FORGOT YOUR PASSWORD?</p>  
        
        
        <button type="submit" name="log" id="log" value="Register">  REGISTER</button>
        <button type="submit" name="log" id="log" value="Register">SIGN IN</button>
          
          
    </form>     
</div>    
</body>    
</html>