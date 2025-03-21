<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: rgb(22, 22, 154);  
  color:beige;
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: rgb(0, 21, 255);   
        padding: 20px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.9;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: rgb(36, 108, 132);  
    } 
    a{
        color: rgb(26, 255, 5);
    }  
    a:hover{
        color: rgb(223, 255, 12);
        text-decoration: none;
        font-size: large;
        font-weight: bold;
    }
</style>   
</head>    
<body>    
    <center> <h1> Student Login Form </h1> </center>   
    <form action="connect.php" method="post">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>   
            <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>   
        </div>   
    </form>
    <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="departments.html">Departments</a>
        <a href="services.html">Our Services</a>
        <a href="contact.html">Contact Us</a>
        <a href="http://localhost/xampp/index/form.php">Student Portal</a>
    </nav>     
</body>     
</html>  
