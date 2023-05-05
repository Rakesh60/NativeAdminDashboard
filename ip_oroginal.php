<?php 

include('./includes/connect.php');
if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keyword=$_POST['product_keyword'];
    $product_categories=$_POST['product_categories'];
    $product_brands=$_POST['product_brands'];


    //accessing images ---->
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    //price
    $product_price=$_POST['product_price'];
    $product_status='true';


     //accessing images ---->temporary name
     $temp_image1=$_FILES['product_image1']['tmp_name'];
     $temp_image2=$_FILES['product_image2']['tmp_name'];
     $temp_image3=$_FILES['product_image3']['tmp_name'];

    //checking empty condition
    if($product_title=='' or $description=='' or $product_keyword=='' or $product_categories=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
        echo "<script>alert('Please fill all the availabe fields')</script>";
        exit();
    }
    else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        //INSERT QUERY

        $insert_product="INSERT INTO `products`(product_title,product_description,product_keyword,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) VALUES(' $product_title','$description','$product_keyword','$category_id','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";

        $result_query=mysqli_query($conn,$insert_product);
        if($result_query){
            echo "<script>alert('SECCESSFULLY INSERTED THE PRODUCTS')</script>";
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
    <title>Insert Product-Admin DashBoard</title>
     <!-- BOOTSTRAP CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- My OWN CSS -->
  
    <link rel="stylesheet" href="./insertform.css">
    

    <!-- FONT AWSOME LINK -->
    <script src="https://kit.fontawesome.com/ef36600fd6.js" crossorigin="anonymous"></script>

    <!-- Google Fonts apis -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,800;1,100;1,200&display=swap"/>
</head>
<body class="bg-light">
    <div class="container mt-3 form_container  ">
        <h1 class="text-center">Insert Products</h1>
        <!-- FORM -->
        <form action="" method="post" enctyepe="multipart/from-data">
            <!-- TITLE -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control " placeholder="Enter Your Product Title" autocomplete="off" required="required" >
            </div>
            <!-- DESCRIPTION -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Your Product product description" autocomplete="off" required="required" >
            </div>

            <!-- KEYWORDS -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product KeyWords</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter Your Product product Keywords" autocomplete="off" required="required" >
            </div>
            <!-- PRODUCT CATEGORY -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_categories" id="" class="product_category form-select">
                <option class="optiopn" value="">Select Product Category</option>
                <?php 
                $select_query="SELECT * FROM `categories`";
                $result_query=mysqli_query($conn,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                 $category_title=$row['category_title'];
                 $category_id=$row['category_id'];
                 echo " <option class='optiopn' value='$category_id'>$category_title</option>";
                }


                
                
                ?>
                
               </select>
            </div>
            <!-- PRODUCT BRAND -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_brands" id="" class="product_category form-select">
                <option class="optiopn" value="" >Select Product Brand</option>
                <?php 
                $select_query="SELECT * FROM `brands`";
                $result_query=mysqli_query($conn,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                 $brand_title=$row['brand_title'];
                 $brand_id=$row['brand_id'];
                 echo " <option class='optiopn' value='$brand_id'>$brand_title</option>";
                }


                
                
                ?>
               </select>
            </div>

             <!-- PRODUCT IMAGE 1 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required" >
            </div>

            <!-- PRODUCT IMAGE 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 1</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"    required="required">
            </div>

            <!-- PRODUCT IMAGE 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"    required="required">
            </div>

            <!-- PRODUCT PRICE -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Your Product product price" autocomplete="off" required="required" >
            </div>

            <!--  -->
            <div class=" mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn btn-primary mb-3 px-3" value="Insert Product" >
            </div>
        </form>
    </div>
    
</body>
</html>