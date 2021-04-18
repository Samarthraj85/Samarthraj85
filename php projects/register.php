<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="stylelogin.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
    <div class="contain">
        <header>
           <h1>Logo Here</h1>
              <a><i class="far fa-bell"></i></a>
               <a><i class="fas fa-user"></i></a>
               <a><i class="fas fa-heart"></i></a>


              <form class="example" action="action_page.php">
                    <input  id="search" type="text" placeholder="Search here..." name="search">
                    <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
                </form>

            <nav class="navbar">
                <img href="logo" src="logo1.jpg">
                <ul>
                    <li><a href="indexcart.php">Home</a></li>
                    <li><a href="register.php">Login</a></li>
                    <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a></li>
                    <li><a href="you">About Us</a></li>
                </ul>
                <!-- search bar -->
                <!-- <form class="example" action="action_page.php">
                    <input  id="search" type="text" placeholder="Search here..." name="search">
                    <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
                </form> -->
            </nav>
            
            <div class="form">  
                <div class="login-form">
                  <form action="register.php" class="form1">
                      <h2>Login</h2>
                      <input type="text"  name="Username" placeholder="Username..."><br>
                      <input type="password" name="password" placeholder="Password..."><br>
                      <button type="submit" value="submit">Submit</button>
                  </form>
                  <li><a href="link">Forgot Password?</a><br></li>
                  <li><a href="link">Don't Have an Account?| Create Account</a></li>
                </div>
                <div class="register-form">
                   <form action="" class="form2">
                      <h2>Registration</h2>
                      <input type="text" placeholder="Username..."><br>
                      <input type="email" placeholder="Email..."><br>
                      <input type="password" placeholder="Password"><br>
                      <input type="confirm password" placeholder="Confirm Password..."><br>
                      <button type="submit">Register Now</button>
                   </form>
                </div>
            </div>      
        </header>
    </div>  
   
    
 
  
</body>
</html>