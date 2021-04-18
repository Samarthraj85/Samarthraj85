<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart form</title>
    <link rel="stylesheet" href="stylecart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="cart.js"></script>
</head>

<body>
    <div class="contain">
        <header>
          <div class="header">
             
              <a><i class="fas fa-bell"></i></a>
              <a><i class="far fa-heart"></i></a>
              <a><i class="fas fa-user"></i></a>
            
             <!------------------------search bar here----------------- -->
                <form class="example" action="">
                    <input  id="search" type="text" placeholder="Search here..." name="search">
                    <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
                </form> 
          </div>      
            <nav class="navbar">
                <ul>
                    <li><a href="indexcart.php">Home</a></li>
                    <li><a href="register.php">Login</a></li>
                    <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a></li>
                    <li><a href="you">About Us</a></li>
                </ul> 
            </nav>
        </header>
        
      
      <div class="container">   
        <div class="card">
            <img src="pic1.jpg" alt="Chairs" style="width:70%">
            <h1>Chair</h1>
            <p class="price">Rs.1299</p>
            <p>Lorem ipsum dolor sit amet...</p>
            <p><button>Add to Cart</button></p>
            <p><button class="buynow">Buy Now</button></p>
        </div> 
        <div class="card"> 
         <img src="pic2.jpg" alt="jeans" style="width:70%">
           <h1>Tailored Jeans</h1>
           <p class="price">Rs.899</p>
          <p>Lorem ipsum dolor sit amet....</p>
          <p><button>Add to Cart</button></p>
           <p><button class="buynow">Buy Now</button></p>
        </div>
        <div class="card">
          <img src="pic3.jpg" alt="laptop" style="width:70%">
           <h1>Lenovo Laptop</h1>
           <p class="price">Rs.25000</p>
          <p>Lorem ipsum dolor sit amet consectetur...</p>
          <p><button>Add to Cart</button></p>
          <p><button class="buynow">Buy Now</button></p>
        </div> 
        <div class="card"> <img src="pic4.jpg" alt="Denim Jeans" style="width:70%">
           <h1>Comfort Chair</h1>
           <p class="price">Rs.4000</p>
          <p>Lorem ipsum dolor sit amet....</p>
          <p><button>Add to Cart</button></p>
          <p><button class="buynow">Buy Now</button></p>
        </div> 
         <div class="card"><img src="pic5.jpg" alt="furniture" style="width:100%">
           <h1>Furniture Bed</h1>
           <p class="price">Rs.24000</p>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p><button>Add to Cart</button></p>
          <p><button class="buynow">Buy Now</button></p>
        </div>
        <div class="card"> 
             <img src="pic6.jpg" alt="watches" style="width:100%">
           <h1>Watch</h1>
           <p class="price">Rs.2500</p>
          <p>Lorem ipsum dolor sit amet..</p>
          <p><button>Add to Cart</button></p>
          <p><button class="buynow">Buy Now</button></p>
        </div>
        <div class="card"> 
             <img src="pic7.jpg" alt="denim jacket" style="width:100%">
           <h1>Denim Jacket</h1>
           <p class="price">Rs.399</p>
          <p>Lorem ipsum dolor sit amet consectetur...</p>
          <p><button>Add to Cart</button></p>
          <p><button class="buynow">Buy Now</button></p>
        </div>
         <div class="card">
            <img src="pic8.jpg" alt="shoes" style="width:100%">
           <h1>Shoes</h1>
           <p class="price">Rs.1200</p>
          <p>Lorem ipsum dolor sit amet consectetur...</p>
          <p><button>Add to Cart</button></p>
          <p><button class="buynow">Buy Now</button></p>
        </div>

            
        
    

</html>