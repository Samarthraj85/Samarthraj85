<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

</head>
<body>
<div class="contain">
        <header>
          <div class="header">
             <a><i class="fas fa-bell"></i></a>
             <a><i class="far fa-heart"></i></a>
             <a><i class="fas fa-user"></i></a>

           <!-- search bar -->
                <form class="example" action="">
                    <input  id="search" type="text" placeholder="Search here..." name="search">
                    <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
                </form>
          </div>      
            
            <nav class="navbar">
                <img href="logo" src="logo1.jpg">
                <ul>
                    <li><a href="indexcart.php">Home</a></li>
                    <li><a href="register.php">Login</a></li>
                    <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a></li>
                    <li><a href="you">About Us</a></li>
                </ul>
                
            </nav>
        </header>
</div>
<div class="grandtotal">
   <h3>Grand Total</h3>
   <p>Product Detail</p>
   <p>Shipping Rate</p> 
   <p>Discount</p> 
   <p>Sub Total Price:</p>
</div>

  
<div class="tableform">
  <table>
     <thead>
      <tr>
        <th>Product name</th>
        <th>Price</th>
        <th>Stock Status</th>
        <th>Quantity</th>
      </tr>
     </thead>
     <tbody>
       <tr>
         <td>Chair</td>
         <td>Rs.1299</td>
         <td>Available</td>
         <td>3</td>
         <td><a><button>Remove</button></a></td>
       </tr>
       <tr>
         <td>Tailored Jeans</td>
         <td>Rs.899</td>
         <td>Out of Stock</td>
         <td>2</td>
         <td><a><button>Remove</button></a></td>
       </tr>
       <tr>
         <td>Lenovo Laptop</td>
         <td>Rs.25000</td>
         <td>Available</td>
         <td>2</td>
         <td><a><button>Remove</button></a></td>
       </tr>
       <tr>
         <td>Comfort Chair</td>
         <td>Rs.4000</td>
         <td>Available</td>
         <td>5</td>
         <td><a><button>Remove</button></a></td>
       </tr><tr>
         <td>Furniture bed</td>
         <td>Rs.24000</td>
         <td>Available</td>
         <td>7</td>
         <td><a><button>Remove</button></a></td>
       </tr>
      </tbody>
  </table>
</div>

</body>
</html>