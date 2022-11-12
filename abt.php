
<?php
   
   // include header.php file
   include ('header.php');
?>




<div class="container">
  <header>
	
    <nav class="nav">
      <ul class="nav__list">
      
       
      
    </nav>
    <h1 class="page-title">About Us</h1>
  </header>
  <main>
    <article class="content">
      <section class="content__descriptor">
<img src="asserts/logo3.png" style="height:270px;">
      </section>
      <section class="content__text-box">
        <p class="content__text">
          We aim to be the customers we wished we had when we started out.
          Lightning-fast, always on your side and fundamentally helpful.
        </p>
        <p class="content__text">
          Our knowledge is your knowledge. Our network is your network. Your
          problems are our problems. We don't have all the answers, but we
          will help you find them.
        </p>
      </section>
    </article>
  </main>
</div>
<style>
	
    @import url("https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@300;400&display=swap");
 *, *::after, *::before {
	 box-sizing: border-box;
	 margin: 0;
	 padding: 0;
}
 *::selection {
	 color: #000;
	 background-color: #dfdfdf;
}
 html {
	 font-size: 62.5%;
}
 body {
	 min-height: 100vh;
	 font-family: "Poppins", sans-serif;
	 font-size: 1.5rem;
	 line-height: 2;
	 font-weight: 500;
	 color: #dfdfdf;
	 background: linear-gradient(90deg, rgba(48,89,93,1) 0%, rgba(62,71,73,1) 11%, rgba(70,114,144,1) 19%, rgba(57,113,152,1) 20%, rgba(30,77,108,1) 27%, rgba(21,57,83,1) 39%, rgba(0,0,0,1) 50%, rgba(7,70,78,1) 59%, rgba(27,71,78,1) 68%, rgba(7,93,108,1) 77%, rgba(37,72,79,1) 89%, rgba(0,0,0,1) 100%, rgba(16,33,40,1) 100%, rgba(0,19,213,1) 100%);
 }
	 .container {
	 max-width: 120rem;
	 margin: 0 auto;

}
 
 .page-title {
	 margin-bottom: 8rem;
	 font-family: "Anton", sans-serif;
	 font-size: 16rem;
	 font-weight: 100;
	 text-transform: uppercase;
	 letter-spacing: -0.4px;
	 line-height: 16rem;
	 color: #fafafa;
}
 @media only screen and (max-width: 760px) {
	 .page-title {
		 margin-bottom: 6rem;
		 font-size: 8rem;
	}
}
 @media only screen and (max-width: 580px) {
	 .page-title {
		 margin-bottom: 4rem;
		 font-size: 7rem;
	}
}
 @media only screen and (max-width: 370px) {
	 .page-title {
		 margin-bottom: 0;
		 font-size: 5rem;
	}
}
 .content {
	 display: flex;
	 justify-content: space-between;
	 align-items: flex-start;
}
 @media only screen and (max-width: 760px) {
	 .content {
		 flex-direction: column;
		 justify-content: flex-start;
		 align-items: stretch;
	}
}
 .content__descriptor {
	 width: 14%;
	 border-top: 1px solid #7b7b7b;
	 padding-top: 4rem;
}
 @media only screen and (max-width: 760px) {
	 .content__descriptor {
		 width: 100%;
		 padding: 2rem 0;
		 border-top: none;
	}
}
 .content__title {
	 font-size: 1.5rem;
	 font-weight: 400;
}
 .content__text-box {
	 display: flex;
	 flex-direction: column;
	 justify-content: flex-start;
	 align-items: flex-end;
	 gap: 2rem;
	 width: 50%;
	 border-top: 1px solid #7b7b7b;
	 border-bottom: 1px solid #7b7b7b;
	 margin-right: 10rem;
	 padding: 4rem 0;
}
 @media only screen and (max-width: 920px) {
	 .content__text-box {
		 margin-right: 0;
	}
}
 @media only screen and (max-width: 760px) {
	 .content__text-box {
		 width: 100%;
		 padding: 2rem 0;
	}
}
 @media only screen and (max-width: 580px) {
	 .content__text-box {
		 border-bottom: none;
	}
}
 .content__text {
	 width: 320px;
}
 @media only screen and (max-width: 580px) {
	 .content__text {
		 width: 100%;
	}
}
 
</style>