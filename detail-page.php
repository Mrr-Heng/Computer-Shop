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
    <title>Computer Shop Cambodia</title>
</head>
<body>
    <div class="flex-web-banner">
        <img src="" alt="">
        <div class="flex-text-on-banner">
            <img src="images/ROG-COOLER-2023-JUNE-30-V3-1134x220.jpg" alt="">
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
                <li><a href="index.php"><i class="fa-solid fa-house"></i> </i>Home</a></li>
                <li><a href="#"><i class="fa-solid fa-laptop"></i></i> </i>Laptop</a>
                    <div class="flex-navbar-laptop">

                    </div>
                </li>
                <li><a href="#"><i class="fa-solid fa-desktop"></i></i> </i>Desktop</a>
                    <div class="flex-navbar-desktop">

                    </div>
                </li>
                <li><a href="#"><i class="fa-solid fa-microchip"></i></i> </i>Component</a>
                    <div class="flex-navbar-component">

                    </div>
                </li>
                <li><a href="#"><i class="fa-solid fa-headphones"></i></i> </i>Accessories</a>
                    <div class="flex-navbar-accessories">

                    </div>
                </li>
                <li><a href="#"><i class="fa-solid fa-wrench"></i></i> </i>Pc Builer</a>
                    <div class="flex-navbar-pcbuiler">

                    </div>
                </li>
                <li><a href="#"><i class="fa-solid fa-message"></i></i> </i>Contact Us</a>
                    <div class="flex-navbar-contact">

                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex-container-detial-page">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="images/Laptop/Asus/Rog-Strix-G18.png">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="images/Laptop/Asus/Asus-Strix-G18-Left.png" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="images/Laptop/Asus/Asus-Strix-G18-Right.png" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="images/Laptop/Asus/Rog-Strix-G18-Top.png" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="images/Laptop/Asus/Asus-Strix-G18-bottom.png" onclick="showImg(this.src)">
                    </div>
                </div>
        </div>
        <div class="right">
                    <div class="url">Home > Laptop > Rog Strix G18</div>
                    <div class="model">Asus Rog Strix G18 Gaming</div>
                    <div class="ratings">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Price : 1699$</div>
                    <div class="storage">
                        <p>M.2 :</p>
                        <div class="ssd-m2 active">512GB</div>
                        <div class="ssd-m2">1TB</div>
                        <div class="ssd-m2">2TB</div>
                    </div>
                    <div class="memory">
                        <p>Ram :</p>
                        <div class="ram active">16GB</div>
                        <div class="ram">32GB</div>
                        <div class="ram">64GB</div>
                    </div>
                    <div class="quantity">
                        <p>Quantity :</p>
                        <input type="number" min="1" max="5" value="1">
                    </div>
                    <div class="btn-box">
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>
    </div>
        <script>
            let bigImg = document.querySelector('.big-img img');
            function showImg(pic){
                bigImg.src = pic;
            }
        </script>

</body>
</html>