
<?php
session_start();
$_SESSION['index'] = $_SERVER['PHP_SELF'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quesene</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!--font awespme cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!--header section start-->
    <header>
        <a href="#" class="logo"><i class="fas fa-utensils" style="padding-right: 5px"></i>Quesene</a>
        <nav class="navbar">
            <a class="active navbtn" href="#home">home</a>
            <a class="navbtn" href="#dishes">cuisine</a>
            <a class="navbtn" href="#about">about</a>
            <!-- <a href="#menu">menu</a> -->
            <a class="navbtn" href="#review">review</a>
            <a class="navbtn" href="#order">order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>
    </header>

    <!--header section end-->

<!-- search form-->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!--home section starts-->
<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our special dish</span>
                    <h3>ramen bowl</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Deleniti pariatur voluptatibus expedita repudiandae voluptatum.</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="ramen.png" alt="ramen">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our special dish</span>
                    <h3>fried chicken</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti pariatur voluptatibus expedita repudiandae voluptatum.</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="fried_chicken.png" alt="fried_chicken">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our special dish</span>
                    <h3>Chicken biriyani</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti pariatur voluptatibus expedita repudiandae voluptatum.</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="chicken_biriyani.png" alt="biriyani">
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>

    </div>
</section>
<!--home section ends-->

<!--cuisine section starts-->
<section class="dishes" id="dishes">

    <h3 class="sub-heading">our cuisine</h3>
    <h1 class="heading">popular items</h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="burger1.png" alt="">
            <h3>chicken burger</h3>
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$13.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="salad1.png" alt="">
            <h3>chicken salad</h3>
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$12.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="french_fries1.png" alt="">
            <h3>french fries</h3>
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$10.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="pizza1.png" alt="">
            <h3>pepperoni pizza</h3>
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="thainoodles1.png" alt="">
            <h3>thai noodles</h3>
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
            </div>
            <span>$17.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="walnut_cake.png" alt="">
            <h3>walnut cake</h3>
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$11.99</span>
            <a href="#" class="btn">add to cart</a>

        </div>

    </div>

</section>
<!--cuisine section ends-->

<!--about section starts-->

<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us?</h1>

    <div class="row">
        <div class="image">
            <img src="pancake4.png" alt="">
            </div>

            <div class="content">
                <h3>Best food in the country</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto adipisci recusandae aliquam commodi a expedita maiores, labore cumque explicabo repellendus! Fugit quam placeat ut, voluptatem repellat illum minima est tempora?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eius cupiditate alias ad maiores a officia, possimus autem sed consectetur repellat sapiente. Repellat atque optio cumque labore architecto? Distinctio, nesciunt!</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast">
                            <span>free delivery</span>
                        </i>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign">
                            <span>easy payments</span>
                        </i>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset">
                            <span>24/7 service</span>
                        </i>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>
    </div>

</section>

<!--about section ends-->

<!--review section starts-->
<section class="review" id="review">
    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="asian1.jpg" alt="">
                    <div class="user-info">
                        <h3>son jung</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                       </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione repellendus repellat doloremque quos error deleniti modi eveniet molestiae. Provident itaque dignissimos modi incidunt nam nisi perferendis tempore, ad eaque voluptate!</p>

            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="woman.jpg" alt="">
                    <div class="user-info">
                        <h3>amy kim</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                       </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione repellendus repellat doloremque quos error deleniti modi eveniet molestiae. Provident itaque dignissimos modi incidunt nam nisi perferendis tempore, ad eaque voluptate!</p>

            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="man1.jpg" alt="">
                    <div class="user-info">
                        <h3>john wilson</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                       </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione repellendus repellat doloremque quos error deleniti modi eveniet molestiae. Provident itaque dignissimos modi incidunt nam nisi perferendis tempore, ad eaque voluptate!</p>

            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="short_hair.jpg" alt="">
                    <div class="user-info">
                        <h3>laura tess</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                       </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione repellendus repellat doloremque quos error deleniti modi eveniet molestiae. Provident itaque dignissimos modi incidunt nam nisi perferendis tempore, ad eaque voluptate!</p>

            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="hair_line.jpg" alt="">
                    <div class="user-info">
                        <h3>james patrick</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                       </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione repellendus repellat doloremque quos error deleniti modi eveniet molestiae. Provident itaque dignissimos modi incidunt nam nisi perferendis tempore, ad eaque voluptate!</p>

            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="coloured.jpg" alt="">
                    <div class="user-info">
                        <h3>karen louis</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                       </div>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione repellendus repellat doloremque quos error deleniti modi eveniet molestiae. Provident itaque dignissimos modi incidunt nam nisi perferendis tempore, ad eaque voluptate!</p>

            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>

</section>
<!--review section ends-->

<!--order section starts-->
<section class="order" id="order">
    <h3 class="sub-heading"> order now </h3>
    <h1 class="heading"> fast and free </h1>

    <!-- FORM -->
    <form action="#" method="post">
        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input name="name" type="text" placeholder="Enter your name">
            </div>
            <div class="input">
                <span>your number</span>
                <input name="phone" type="number" placeholder="Enter your number">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your order</span>
                <input name="order" type="text" placeholder="Enter food name">
            </div>
            <div class="input">
                <span>additional item</span>
                <input name="additem" type="text" placeholder="Extra Order">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Number of orders</span>
                <input name="noorder" type="number" placeholder="Count">
            </div>
            <div class="input">
                <span>date and time</span>
                <input name="date" type="datetime-local">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="address" placeholder="Enter your address" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>your message</span>
                <textarea name="message" placeholder="Enter your message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" value="Order now" class="btn">
    </form>

   
</section>
<!--order section ends-->
<!-- Subscribe to newsletter -->
<section class="subscribe" id="subscribe">
    <div class="newsletter_cont">
        <h1 class="sub-heading">Subscribe to our newsletter!</h1>
        <h3 class="heading">To not miss any updates by quesene</h3>
        <form action="subscribe.php" method="post">
                <input class="input" name="email" type="email" placeholder="Enter your email">
                <input type="submit" value="Subscribe" class="btn subs-submit" style="background: black;">
        
        </form>
        <span class="thanks">Thanks for subscribing!</span>
        </div>
</section>




<!--footer section starts-->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <a href="#">India</a>
            <a href="#">Japan</a>
            <a href="#">South korea</a>
            <a href="#">USA</a>
            <a href="#">UK</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">cuisine</a>
            <a href="#">about</a>
            <a href="#">review</a>
            <a href="#">order</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">+111-456-7770</a>
            <a href="#">+1457-555-7349</a>
            <a href="#">neneshet@gmail.com</a>
            <a href="#">Karnataka, India - 435002</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <div class="credit">copyright @ 2023 by <span>neha shet</span></div>

</section>

<!--footer section ends-->












<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="script.js"></script>

</body>
</html>

