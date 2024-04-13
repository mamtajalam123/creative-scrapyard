<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>About Us</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

:root{
    --orange:#ff7800;
    --black:#130f40;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
    --border:.2rem solid rgba(0,0,0,.1);
    --outline:.1rem solid rgba(0,0,0,.1);
    --outline-hover:.2rem solid var(--black);
}


*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    /* text-transform: capitalize; */
    transition: all .2s linear;
}
.lolo{
    width: 100px;
    height: 100px;
    position: absolute;
    top: -14px;
    left: 23px;

}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body{
    background:#eee;
}

section{
    padding:2rem 9%;
}

.heading{
    text-align: center;
    padding:8rem 0;
    padding-bottom: 3rem;
    font-size: 3.5rem;
    color:var(--black);
}

.heading span{
    background: var(--orange);
    color:#fff;
    display: inline-block;
    padding:.5rem 3rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
}
.wrapper{
    width: 1170px;
    margin:auto;
}
.logokart img{
    width: 120px;
    height: 120px;
    float: left;
}
.stars {
    color: orange;
  }
  ul{
    list-style: none;
    background: white;
  }
  ul li{
    display: inline-block;
    position: relative;

  }
  ul li a{
    display: block;
    padding: 5px 7px;
    color: #FFF;
    text-decoration: none;
    text-align: center;
    font-size: 20px;
  }
  ul li ul.dropdown{
    display: block;
  }
  ul li ul.dropdown{
    width:100%;
    background: #fff;
    position: absolute;
    z-index: 444;
    display: none;
  }
  ul li a:hover{
    background: white;

  }
  ul li:hover ul.dropdown{
    display: block;
  }


.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border:.2rem solid var(--black);
    color:var(--black);
    cursor: pointer;
    background: none;
}

.btn:hover{
    background: var(--orange);
    color:#fff;
}

.header{
    position: fixed;
    top:0; left:0; right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:2rem 9%;
    background:#fff;
    box-shadow: var(--box-shadow);
}

.header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color:var(--black);
}

.header .logo i{
    color:var(--orange);
}

.header .navbar a{
    font-size: 1.7rem;
    margin:0 1rem;
    color:var(--black);
}

.header .navbar a:hover{
    color:var(--orange);
}

.header .icons div{
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    border-radius: .5rem;
    background: #eee;
    color:var(--black);
    font-size: 2rem;
    margin-left: .3rem;
    cursor: pointer;
    text-align: center;
}

.header .icons div:hover{
    background: var(--orange);
    color:#fff;
}

#menu-btn{
    display: none;
}

.header .search-form{
    position: absolute;
    top:110%; right:-110%;
    width: 50rem;
    height:5rem;
    background: #fff;
    border-radius: .5rem;
    overflow: hidden;
    display: flex;
    align-items: center;
    box-shadow: var(--box-shadow);
}

.header .search-form.active{
    right:2rem;
    transition: .4s linear;
}

.header .search-form input{
    height:100%;
    width:100%;
    background: none;
    text-transform: none;
    font-size: 1.6rem;
    color:var(--black);
    padding:0 1.5rem;
}

.header .search-form label{
    font-size: 2.2rem;
    padding-right: 1.5rem;
    color:var(--black);
    cursor: pointer;
}

.header .search-form label:hover{
    color:var(--orange);
}

.header .shopping-cart{
    position: absolute;
    top:110%; right:-110%;
    padding:1rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width:35rem;
    background: #fff;
}

.header .shopping-cart.active{
    right:2rem;
    transition: .4s linear;
}

.header .shopping-cart .box{
    display: flex;
    align-items: center;
    gap:1rem;
    position: relative;
    margin:1rem 0;
}

.header .shopping-cart .box img{
    height:10rem;
}

.header .shopping-cart .box .fa-trash{
    font-size: 2rem;
    position: absolute;
    top:50%; right:2rem;
    cursor: pointer;
    color:var(--light-color);
    transform: translateY(-50%);
}

.header .shopping-cart .box .fa-trash:hover{
    color:var(--orange);
}

.header .shopping-cart .box .content h3{
    color:var(--black);
    font-size: 1.7rem;
    padding-bottom: 1rem;
}

.header .shopping-cart .box .content span{
    color:var(--light-color);
    font-size: 1.6rem;
}

.header .shopping-cart .box .content .quantity{
    padding-left: 1rem;
}

.header .shopping-cart .total{
    font-size: 2.5rem;
    padding:1rem 0;
    text-align: center;
    color:var(--black);
}

.header .shopping-cart .btn{
    display: block;
    text-align: center;
    margin:1rem;
}

.header .login-form{
    position: absolute;
    top:110%; right:-110%;
    width:35rem;
    box-shadow: var(--box-shadow);
    padding:2rem;
    border-radius: .5rem;
    background: #fff;
    text-align: center;
}

.header .login-form.active{
    right:2rem;
    transition: .4s linear;
}

.header .login-form h3{
    font-size: 2.5rem;
    text-transform: uppercase;
    color: var(--black);
}

.header .login-form .box{
    width: 100%;
    margin:.7rem 0;
    background:#eee;
    border-radius: .5rem;
    padding:1rem;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
}

.header .login-form p{
    font-size: 1.4rem;
    padding:.5rem 0;
    color:var(--light-color);
}

.header .login-form p a{
    color:var(--orange);
    text-decoration: underline;
}
#search{
    height: 20px;
    width: 80px;
    background-color: rgb(0, 255 , 115);
}

.home{
    display: flex;
    align-items: center;
    justify-content: center;
    /* background: url(../image/banner-bg.webp) no-repeat; */
    background: url(../image/arshad.png) no-repeat;
    background-position: center;
    background-size: cover;
    padding-top: 17rem;
    padding-bottom: 10rem;
    margin: 88px -6px;
}

.home .content{
   position: relative; 
    width:60rem;
   top: -7vh;
   left: 22vw;
}

 .home .content h3{
    color:var(--black);
    font-size: 3rem;
}
/* .home .content2 h3{
    color:var(--black);
    font-size: 3rem;
} */

.home .content h3 span{
    color:var(--orange);
}
.home .content p{
    color:var(--light-color);
    font-size: 1.7rem;
    padding:1rem 0;
    line-height: 1.8;
}

.features .box-container{
    display: list-item;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.features .box-container .box{
    padding:3rem 2rem;
    background: #fff;
    outline: var(--outline);
    outline-offset: -1rem;
    text-align: center;
    box-shadow: var(--box-shadow);
}

.features .box-container .box:hover{
    outline: var(--outline-hover);
    outline-offset: 0rem;
}

.features .box-container .box img{
    margin:1rem 0;
    height: 15rem;
}

.features .box-container .box h3{
    font-size: 2.5rem;
    line-height: 1.8;
    color:var(--black);
}

.features .box-container .box p{
    font-size: 1.5rem;
    line-height: 1.8;
    color:var(--light-color);
    padding:1rem 0;
}

.categories .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(26rem, 1fr));
    gap:1.5rem;
}

.categories .box-container .box{
    padding:3rem 2rem;
    border-radius: .5rem;
    background:#fff;
    box-shadow: var(--box-shadow);
    outline:var(--outline);
    outline-offset: -1rem;
    text-align: center;
}

.categories .box-container .box:hover{
    outline:var(--outline-hover);
    outline-offset: 0rem;
}

.categories .box-container .box img{
    margin:1rem 0;
    height:15rem;
}

.categories .box-container .box h3{
   font-size: 2rem;
   color:var(--black);
   line-height: 1.8;
}

.categories .box-container .box p{
    font-size: 1.7rem;
    color:var(--light-color);
    line-height: 1.8;
    padding:1rem 0;
}


.products .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(26rem, 1fr));
    gap:1.5rem;
}

.products .box-container .box{
    padding:3rem 2rem;
    border-radius: .5rem;
    background:#fff;
    box-shadow: var(--box-shadow);
    outline:var(--outline);
    outline-offset: -1rem;
    text-align: center;
}

.products .box-container .box:hover{
    outline:var(--outline-hover);
    outline-offset: 0rem;
}

.products .box-container .box img{
    margin:1rem 0;
    height:15rem;
}

.products .box-container .box h3{
   font-size: 2rem;
   color:var(--black);
   line-height: 1.8;
}

.products .box-container .box p{
    font-size: 1.7rem;
    color:var(--light-color);
    line-height: 1.8;
    padding:1rem 0;
}

.footer{
    background: #fff;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    color:var(--black);
    padding:1rem 0;
}

.footer .box-container .box h3 i{
    color:var(--orange);
}

.footer .box-container .box .links{
    display: block;
    font-size: 1.5rem;
    color:var(--light-color);
    padding:1rem 0;
}

.footer .box-container .box .links i{
    color:var(--orange);
    padding-right: .5rem;
}

.footer .box-container .box .links:hover i{
    padding-right: 2rem;
}


.footer .box-container .box p{
    line-height: 1.8;
    font-size: 1.5rem;
    color:var(--light-color);
    padding:1rem 0;
}

.footer .box-container .box .share a{
    height:4rem;
    width:4rem;
    line-height:4rem;
    border-radius: .5rem;
    font-size: 2rem;
    color:var(--black);
    margin-right: .2rem;
    background: #eee;
    text-align: center;
}

.footer .box-container .box .share a:hover{
    background: var(--orange);
    color: #fff;
}

.footer .box-container .box .email{
    width: 100%;
    margin:.7rem 0;
    padding:1rem;
    border-radius: .5rem;
    background: #eee;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
}

.footer .box-container .box .payment-img{
    margin-top: 2rem;
    height: 3rem;
    display: block;
}

.footer .credit{
    text-align: center;
    margin-top: 2rem;
    padding:1rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color:var(--black);
    border-top: var(--border);
}

.footer .credit span{
    color:var(--orange);
}

.footer-logo {
    width: 9em;
}






/* media queries  */

@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .header{
        padding:2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: inline-block;
    }

    .header .search-form{
        width:90%;
    }

    .header .navbar{
        position: absolute;
        top:110%; right:-110%;
        width:30rem;
        box-shadow: var(--box-shadow);
        border-radius: .5rem;
        background: #fff;
    }

    .header .navbar.active{
        right:2rem;
        transition: .4s linear;
    }

    .header .navbar a{
        font-size: 2rem;
        margin:2rem 2.5rem;
        display: block;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

    .heading{
        font-size: 2.5rem;
    }

    .footer{
        text-align: center;
    }

    .footer .box-container .box .payment-img{
        margin: 2rem auto;
    }

}
    </style>
    
</head>
<body id="aboutus_page">
    <header class="header">
    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
      <a href="#" class="logo"><img class="lolo" src="image/logo.jpg">CREATIVE SCRAP</a>
        <ul class="nav navbar-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="">CONTACT US</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <input type="search" id="search-box" placeholder="Search here...">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <a href="loginpage.php"><div class="fas fa-user" id="login-btn"></div></a>
    </div>
    
    </header>
    <main>
        <section id="about-head" class="main">
            <img src="images/aboutus.jpeg" alt="" >
            <div>
                <h2>Who Are We?</h2><br>
               <p> "We Are Creativity and Scrapyard" is a conceptual name for a business or platform that celebrates creativity through the medium of scrap art. Here's a brief description:

                "We Are Creativity and Scrapyard is an innovative online platform that brings together artists, creators, and enthusiasts of scrap art. We believe in the power of creativity to transform discarded materials into extraordinary works of art. Our mission is to showcase the beauty and ingenuity of scrap art while promoting sustainability and eco-consciousness. Through our curated collection of unique pieces, artist profiles, and interactive features, we aim to inspire creativity, spark curiosity, and foster a vibrant community of like-minded individuals who share a passion for repurposing and reimagining the world around us."    </p>       
             </div>
        </section>
    </main>
    <footer>
        <section class="footer">

            <div class="box-container">
        
                <div class="box">
                    <img class="footer-logo" src="images/logo.jpg">

            <h3>
                CREATIVE SCRAP
            </h3>

            <p>Dive into the euphoric experience of shopping.
               <br>
               Happy to create!
            </p>
                    <div class="share">
                        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                        <a href="https://www.twitter.com/KartUp_Business/" class="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/kartup_business/" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/in/kart-up-33520a251/" class="fab fa-linkedin"></a>
                    </div>
                </div>
        
                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#" class="links"> <i class="fas fa-phone"></i> +91-9547208910 </a>
                    <a href="#" class="links"> <i class="fas fa-phone"></i> +91-8602425833 </a>
                    <a href="#" class="links"> <i class="fas fa-envelope"></i> creascrap.business@gmail.com </a>
                    <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Indore, India - 452016 </a>
                </div>
        
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="index.php" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
                    <a href="creativity.html" class="links"> <i class="fas fa-arrow-right"></i> Products </a>
                    <a href="categories.html" class="links"> <i class="fas fa-arrow-right"></i> Categories </a>
                    <a href="feedback.html" class="links"> <i class="fas fa-arrow-right"></i> Feedback </a>
                </div>
        </div>

        </section>
    </footer>
</body>
</html>