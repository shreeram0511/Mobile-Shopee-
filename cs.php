<?php
   
    // include header.php file
    include ('header.php');
?>

<body>

   <center><h1 style="color:white;font-size:90px;">LAUNCHING SOON..!</h1></center> 
<div class="products">
  <div class="product">
    <img src="asserts/14.jpg">
    <h1>Apple iPhone 14 Pro</h1>
    <span>Apple iPhone 14 Pro and iPhone 14 Pro Max display panel design leaks with reflective Face ID and pill-shaped camera cut-outs</span>
    <div class="price">
    Launching Soon..!
    </div>
  </div>
  <div class="product">
    <img src="asserts/s23.jpg">
    <h1>Samsung Galaxy S23</h1>
    <span>Samsung Galaxy S23 Ultra imagined with a 200MP Main Camera: Concept renders surface online </span>
    <div class="price">
    Launching Soon..!
    </div>
  </div>
  <div class="product">
    <img src="asserts/gpix.jpg">
    <h1>Google Pixel 7 Pro</h1>
    <span>The Pixel 7 Pro has been revealed and its looking like an incredible addition to the Pixel Family! </span>
    <div class="price">
    Launching Soon..!
    </div>
  </div>
</div>

<style>
    
@import url('https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Raleway&family=Rubik&display=swap');

    body {
  font-family: 'Raleway';
	width: 100wh;
	height: 90vh;
	color: #fff;
	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
	animation: Gradient 15s ease infinite;
}


.products{
  padding: 20px;
  padding-top: 20px;
  text-align: center;
}

.products .product {
  position: relative;
  overflow: hidden;
  width: 300px;
  height: 380px;
  text-align: left;
  display: inline-block;
  background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
  border: 1px solid rgba(0,0,0);
  margin: 20px;
  padding: 20px;
}

.products .product img {
  position: relative;
  top: -5px;
  margin: auto;
  transition: all .2s ease;
  width: 100%;
  -webkit-clip-path: polygon(0 100%, 0 0, 100% 0, 100% 70%);
          clip-path: polygon(0 100%, 0 0, 100% 0, 100% 70%);
}
.products .product img:hover {
  -webkit-clip-path: polygon(0 100%, 0 0, 100% 0, 100% 100%);
          clip-path: polygon(0 100%, 0 0, 100% 0, 100% 100%);
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.products .product h1 {
  line-height: 20px;
  font-size: 20px;
  margin-top: 15px;
}
  
.products .product .price {
  text-align: center;
  font-size: 20px;
  margin-top: 25px;
  color: black;
  background-image: linear-gradient(to right, #b6fbff, #83a4d4);
  border: 1px solid whitesmoke;

  padding: 10px;
}
.products .product .price:hover {
  text-align: center;
  font-size: 20px;
  margin-top: 25px;
  color: black;
  background-image: linear-gradient(to right, rgb(242, 112, 156), rgb(255, 148, 114));
  border: 1px solid whitesmoke;

  padding: 10px;
}
.back-button {
    background: linear-gradient(90deg, rgba(48,87,121,1) 0%, rgba(33,45,50,1) 75%, rgba(0,0,0,1) 100%, rgba(16,33,40,1) 100%, rgba(0,0,0,1) 100%, rgba(36,75,89,1) 100%, rgba(63,131,154,1) 100%);
  color: white;
  font-size: 30px;
  line-height: 1;
  padding: 20px 30px 15px 25px;
  text-decoration: none;
  transition: all 0.2s;
}

.back-button:hover {
    background: linear-gradient(90deg, rgba(55,38,51,1) 0%, rgba(198,18,131,1) 75%, rgba(0,0,0,1) 100%, rgba(16,33,40,1) 100%, rgba(0,0,0,1) 100%, rgba(36,75,89,1) 100%, rgba(0,0,0,1) 100%);
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
</style></body>