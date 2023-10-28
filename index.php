<?php
  require_once 'connection.php';

  $sql = "SELECT * FROM product";
  $all_product = $conn->query($sql);
  $sql_cart = "SELECT * FROM cart";
  $all_cart = $conn->query($sql_cart);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="login.css">
    <title>Computer Shop Cambodia</title>
</head>
<body>
    <div class="flex-web-banner">
        <img src="" alt="">
        <div class="flex-text-on-banner">
            <img src="img/ROG-COOLER-2023-JUNE-30-V3-1134x220.jpg" alt="">
            <div class="flex-banner-title">
                <h2>Cambodia Computer Shop</h2>
            </div>
        </div>
    </div>
    <div class="flex-navbar-size">
        <div class="flex-navbar-button">
            <div class="flex-catagory">
                <li><a href=""><i class="fa-solid fa-bars"></i> All Catagory <i class="fa-solid fa-chevron-down" id="fa-chevron-down"></i></a>
                    <div class="flex-navbar-catagory">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-desktop"></i>Desktop Computer</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-laptop"></i>Laptop Computer</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-microchip"></i>Components Desktop</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-chair"></i>Gaming Gear</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-lightbulb"></i>Projector Device</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-headset"></i>Accessories</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-print"></i>Printer Scanner</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-network-wired"></i>Network Device</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-shield"></i>Security & Safety</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-plug"></i>Laptop Spare Part</a></li><hr>
                            <li><a href="#"><i class="fa-solid fa-battery"></i>Power System (UPS)</a></li>
                        </ul>
                    </div>
                </li>
            </div>
            <ul>
                <li><a href="#"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="#"><i class="fa-solid fa-laptop"></i> </i>Laptop</a></li>
                <li><a href="#"><i class="fa-solid fa-desktop"></i> </i>Desktop</a></li>
                <li><a href="#"><i class="fa-solid fa-microchip"></i> </i>Component</a></li>
                <li><a href="#"><i class="fa-solid fa-headphones"></i> </i>Accessories</a></li>
                <li><a href="#"><i class="fa-solid fa-message"></i>Contact</a></li>
                <li><a href="upload.php"><i class="fa-solid fa-cloud-arrow-up"></i>Upload</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>Cart</a></li>
                <a href="#" class="value-of-cart"><?php echo mysqli_num_rows($all_cart);  ?></a>
                <li><a href="#"  onclick="document.getElementById('form-login').style.display='block'" style="width:auto;"><i class="fa-solid fa-right-to-bracket"></i>LogIn</a></li>
            </ul>
        </div>
    </div>
    <div id="form-login" class="form-login-modal">
    <form action="login.php" method="post">
    <span onclick="document.getElementById('form-login').style.display='none'" class="close" title="Close Modal">&times;</span>
        <div class="container">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <br><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" id="login-btn"><a href="detail-page.php">Login</a></button>
            <label>
            <input type="checkbox" checked="checked" name="remember">
            </label>
        </div>
    </form>
    </div>
   <main>
       <?php
          while($row = mysqli_fetch_assoc($all_product)){
       ?>
       <div class="card">
           <div class="image">
               <img src="<?php echo $row["product_image"]; ?>" alt="">
           </div>
           <div class="caption">
               <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
               </p>
               <h3 class="product_name"><?php echo $row["product_name"];  ?></h3>
               <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
           </div>
           <button class="add" data-id="<?php echo $row["product_id"];  ?>">Add</button>
           <a href="detail-page.php"><button class="add">View</button></a>
       </div>
       <?php

          }
    ?>
   </main>
   <script>
       var product_id = document.getElementsByClassName("add");
       for(var i = 0; i<product_id.length; i++){
           product_id[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       target.innerHTML = data.in_cart;
                       document.getElementById("badge").innerHTML = data.num_cart + 1;
                   }
               }

               xml.open("GET","connection.php?id="+id,true);
               xml.send();
            
           })
       }
       var modal = document.getElementById('form-login');
       window.onclick = function(event) {
            if (event.target == form-login-modal) {
                form-login-modal.style.display = "none";
            }
        }
   </script>
</body>
</html>