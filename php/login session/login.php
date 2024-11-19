<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../styles/login.css"> 
    <title>Login Page</title>
    <script>
        function validateform(){
         var em=document.getElementById('email').value;
         var ps=document.getElementById('pw').value;
       
          
  
         textcheck(em,'email');
         textcheck(ps,'pw');
         
         
  
        
  
     
        }
  
        function textcheck(text,id){
  
                if(text=="" || text==null){
                  document.getElementById(id).style.borderColor="red";
                }else{
                  document.getElementById(id).style.borderColor="green";
                }
              
  
              }
  
  
  
  
      </script>
</head>
<body style="height: 800px;">
    <div>
 
    <div class="sign-in-form">
        <div style="text-align: center;width: 100%;padding-top: 5px;height: 50px;padding-bottom: 30px;" ><a href="../Geust user session/index.php" ><img src="../../src/logo.png" width="80%"></a></div> 
        <img src="../../src/user.png" alt="">
        <h1>Login</h1>
        

        <form id="form1" method="post" action="log.php">

            <input type="email" id="email" name="email" class="input-box" placeholder="Email">
            <input type="password" id="pw" name="pw" class="input-box" placeholder="Password">
           
            <button type="submit" name="submit" onclick="validateform()" value="Sign in" class="signin-btn" id="button">Login</button>
            
          
          </form>
            <hr>


            


            <p>Do you have an account ? <a href="register.php">Sign up</a></p>

        
    </div>
</div>

	
</body>
</html>