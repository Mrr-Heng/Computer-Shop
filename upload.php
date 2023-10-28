<?php

require_once 'connection.php';

if(isset($_POST["submit"])){
  $productname = $_POST["productname"];
  $price = $_POST["price"];
  $discount = $_POST["discount"];

  //For uploads photos
  $upload_dir = "uploads/"; //this is where the uploaded photo stored
  $product_image = $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
  $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
  $check = $_FILES["imageUpload"]["size"]; // to detect the size of the image
  $upload_ok = 0;

  if(file_exists($upload_file)){
      echo "<script>alert('The file already exist')</script>";
      $upload_ok = 0;
  }else{
      $upload_ok = 1;
      if($check !== false){
        $upload_ok = 1;
        if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
            $upload_ok = 1;
        }else{
            echo '<script>alert("please change the image format")</script>';
        }
      }else{
          echo '<script>alert("The photo size is 0 please change the photo ")</script>';
          $upload_ok = 0;
      }
  }

  if($upload_ok == 0){
     echo '<script>alert("sorry your file is doesn\'t uploaded. Please try again")</script>';
  }else{
      if($productname != "" && $price !=""){
          move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);

          $sql = "INSERT INTO product(product_name,price,discount,product_image)
          VALUES('$productname',$price,$discount,'$product_image')";

          if($conn->query($sql) === TRUE){
              echo "<script>alert('your product uploaded successfully')</script>";
          }
      }
  }


  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="upload.css">
    <title>Document</title>
</head>
<body>
    <section id="upload_container">
            <form action="upload.php" method="POST" enctype="multipart/form-data" >
                <p><a href="index.php"><i class="fa-solid fa-house"></i> </i>Home</a></p>
                <input type="text" name="productname" id="productname" placeholder="Product Name" required>
                <input type="number" name="price" id="price" placeholder="Product Price" required>
                <input type="number" name="discount" id="discount" placeholder="Product Discount">
                <input type="file" name="imageUpload" id="imageUpload" required hidden>
                <button id="choose" onclick="upload();">Choose Image</button>
                <input type="submit" value="Upload" name="submit">
            </form>
    </section>    

    <script>
        var productname = document.getElementById("productname");
        var price = document.getElementById("price");
        var discount = document.getElementById("discount");
        var choose = document.getElementById("choose");
        var uploadImage = document.getElementById("imageUpload");

        function upload(){
            uploadImage.click();
        }

        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            if(productname.value == ""){
                productname.value = file.name;
            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        html{
            font-size: 62.5%;
        }

        body{
            background-color: #fff;
            background: rgb(133,49,255);
            background: linear-gradient(90deg,rgba(133,49,255,1)0%,
            rgba(252,70,107,1));
        }

        #upload_container{
            margin: 10% auto;
            display: flex;
            flex-direction: column;
            width: 50%;
            margin-top: 10%;
        }

        #upload_container form{
            display: flex;
            flex-direction: column;
            background-color: #fff;
            padding: 50px;
            border-radius: 4px;
            box-shadow: 2px 0px 10px 5px;
        }

        #upload_container form input{
            padding: 8px;
            outline: none;
            border: 1px solid lightblue;
            margin-bottom: 8px;
            border-radius: 5px;
            padding: 20px ;
            margin-top: 15px;
        }

        #upload_container form button{
            padding: 8px;
            outline: none;
            background-color: red;
            color: #fff;
            border-radius: 8px;
            border: none;
            margin-bottom: 8px;
            margin-top: 5%;
            padding: 20px;
            cursor: pointer;
        }

        #upload_container form input[type="submit"]{
            background-color: rgb(76, 230, 4);
            color: #fff;
            border: none;
            border-radius: 8px;
            transition: .5s;
            cursor: pointer;
        }

        #upload_container form input[type="submit"]:hover{
            background-color: blue;
            transition: .5s;
            cursor: pointer;
            border-radius: 8px;
        }
        #upload_container p{
            text-align: center;
            font-size: 20px;
        }
        #upload_container a{
            color: black;
        }
        i{
            color: red;
        }
        @media screen and (max-width:600px){
            #upload_container{
                margin: 10% auto;
                display: flex;
                flex-direction: column;
                width: 90%;
                margin-top: 25%;
            }
        }
    </style>
</body>
</html>