
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>
     
    <!--Library Linking-->
    <!--bootstrap cdn 4.4 css file-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--owl carousel2 (latest) cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <!--Font Awsome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

       <!--Start header of website-->

       <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light"  style="background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);">
            <p class="font-rale font-size-12 text-white-50 m-0">Shreeram Sankar 430-985 Ranganathan St. Chennai 600092 (+91) 6380-749-744</p>
            <div class="font-rale font-size-14">
                <a href="login.php" class="px-3 border-right border-left text-light">Login</a>
                <a href="logout.php" class="px-3 border-right border-left text-light">Logout</a>
        
            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark "style=" background-color: #0a4561;
background-image: linear-gradient(45deg, #0a4561 0%, #160e55 52%, #00040f 90%);
;">
            <a class="navbar-brand" href="index.php">Mobile Shopee</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">On Sale <span class="sr-only">(current)</span></a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="cs.php">Launching Soon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="abt.php">About us</a>
                </li>
              </ul>
              <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
            </div>
          </nav>
           <!-- !Primary Navigation -->
       </header> <!--Start header of website-->

       <!--main-->
       <main id="main-site">




