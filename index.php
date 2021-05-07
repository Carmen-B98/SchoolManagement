<?php
include 'showDB.php';
 if(isset($_POST['Submit'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     $usertype=$_POST['usertype'];
     $query = "SELECT * FROM mydb.admin where username='".$username."' and passcode='".$password."' and usertype='".$usertype."' ";
     $result = mysqli_query($conn, $query);
     if($result){
         while($row= mysqli_fetch_array($result)){
             echo '<script type="text/javascript">alert("Logat cu succes ca si ' .$row['usertype'].' !") </script>';
         }
         if($username == "admin" && $password == "admin" && $usertype=="admin"){
             ?>
         <script type="text/javascript">
             window.location.href="dashboard.php"</script> 
         <?php
         }elseif ($usertype=="admin"){  
           echo '<script type="text/javascript">alert("Introdu numele si parola !!") </script>';
         }
         }else{
         echo '<script type="text/javascript">alert("Toate campurile sunt obligatorii!") </script>';
        }
        
        if($username == "parinte" && $password == "parinte" && $usertype=="parinte"){
             ?>
         <script type="text/javascript">
             window.location.href="afiseaza_nota.php"</script> 
         <?php
         }elseif ($usertype=="parinte"){  
           echo '<script type="text/javascript">alert("Introdu numele si parola !! ") </script>';; 
         }
         else{
         echo '<script type="text/javascript">alert("Toate campurile sunt obligatorii!") </script>';
        }
             
 }
?>
         
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            margin-top: 50px;
            background-image: url('images/school.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
         
        .container input {
           width: 200px;
           clear: both;
           border-radius: 10px;            
        }
        
        input[type=submit]{
            width: 100px;
        }
        
        select{
            width: 78px;
        }
         
       
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; border-radius: 25px;" align = "left">
            <div style = " color:#FFFFFF;text-align: center; padding-top: 10px; font-size: 15px;"><b> Login </b></div>
				
            <div class="container" style="  width: 200px;clear: both;margin:30px"> 
               
               <form action = "" method = "post" >
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <label>Select user type  :</label>
                  <select name="usertype">
                      <option value="admin">Admin</option>
                      <option value="parinte">Parinte</option>
                  </select>
                  <input type = "submit"  name= "Submit" value = "Submit"/><br />
               </form>
			
            </div>
				
         </div>
			
      </div>

   </body>
</html>
