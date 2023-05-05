<!doctype html>
<html lang="en">

<head>
  <title>ADMIN Dasbord</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Own Admin CSS -->
  <link rel="stylesheet" href="./adminstyle.css">
  <!-- Bootstrap CSS v5.2.1 -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- font awsome -->
  <script src="https://kit.fontawesome.com/ef36600fd6.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- place navbar here -->
  <div class="container-fluid p-0 m-0">
    <!-- First Child -->
    <nav class="navbar navbar-expand-lg nav-light bg-info">
      <div class="container-fluid">
        <img src="./adminlogo.jpg" alt="" class="adminlogo">
        <nav class="navbar navbar-expand-lg nav-light bg-info">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="" class="nav-link">Welcome guest</a>
            <li class="nav-item"><button class="btn btn-outline-light">Login</button></li>
            </li>
          </ul>
        </nav>
      </div>
    </nav>

    <!-- second child -->
    <div class="bg-light ">
      <h3 class="text-center p-2">ADMIN MANGE PANNEL</h3>
    </div>



    <!-- Third Child main SEction -->
    <main>
      <div class="row">

        <div class="md-col-12 bg-secondary p1 d-flex ">
          <div class="ps-3">

            <i class="fa-solid fa-user"></i>
            <p class="text-light text-center">ADMIN NAME</p>
          </div>
          <div class="but-group text-center   m-2  ">
            <button class="btn btn-outline-light m-2"><a href="insert_product.php" class="nav-link  my-1">Insert Products
              </a></button>
            <button class="btn btn-outline-light m-2"><a href="" class="nav-link  my-1">View Products
              </a></button>
            <button class="btn btn-outline-light m-2"><a href="admin.php?insert_cat" class="nav-link  my-1">Insert Categories
              </a></button>
            <button class="btn btn-outline-light m-2"><a href="" class="nav-link  my-1">View Categories
              </a></button>
            <button class="btn btn-outline-light m-2"><a href="admin.php?insert_brands" class="nav-link  my-1">Insert Brands
              </a></button>
            <button class="btn btn-outline-light m-2"><a href="" class="nav-link  my-1">View Brands
              </a></button>
            <button class="btn btn-outline-light m-2"><a href="" class="nav-link  my-1">All Orders
              </a></button>
            <button class="btn btn-outline-light m-2"><a href="" class="nav-link  my-1">All payments
              </a></button>
            <button class="btn btn-outline-light m-2"><a href="" class="nav-link  my-1">List Users
              </a></button>
            <button class="btn btn-outline-light m-2"><a href="" class="nav-link  my-1">Logout
              </a></button>

          </div>
        </div>
      </div>
      <!-- Fouth Child -->
      <div class="container my-5">
      <?php 
      if(isset($_GET['insert_cat'])){
        include('insert_cat.php');
      }
      if(isset($_GET['insert_brands'])){
        include('insert_brands.php');
      }
      
      
      
      
      
      ?>  



      </div>

    </main>




  </div>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>