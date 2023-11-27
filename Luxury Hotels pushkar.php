<?php
include('head.php');
?>
<div class="cat">
    <img class="bg" src="./img/gallery/Vector.png" alt="">
    <div class="cat-content">
        <img src="./img/visit/6.png" alt="">
        <h1 class="heading">Luxury Hotels pushkar</h1>
        <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
        <p><b>Ananta Spa</b></p>
        <br>
        <p>Ananta Spa & Resorts a luxury resort in Pushkar is a best place for the replenishment and reviving of the mind, body and soul. Gods own resort, Ananta is a five star luxury spa cum resort and a perfect place for the weddings, conferences and family holidays. Rejuvenating spa and luxurious resort makes it among best hotels in Pushkar.</p>
        <br>
        <p><b>Westin Pushkar</b></p>
        <br>
        <p>This luxury resort in Pushkar is surrounded by the Aravalli Hills and set in a scenic valley, very close to the holy Pushkar Lake; The Westin Pushkar Resort & Spa is just minutes from many of the town's top attractions. Amid the natural beauty, The Westin Pushkar Resort & Spa ensures thoroughly relaxing experiences in modern facilities and luxury accommodation.</p>
        <br><br>
        <p><b>Hotel Greenhouse Resort in Pushkar</b></p>
        <br>
        <p>Hotel Greenhouse Resort is a luxurious eco-boutique resort located in the midst of the Pushkar City, The tranquility and spirituality of the city of Pushkar transcends into the resort as well as guests will experience the most peaceful and rejuvenating holiday of a lifetime. The Resort prides itself in providing luxurious and authentic experiences for guest. The Resort has a vegetable garden where exotic vegetables are grown seasonally. Along with this the resort has a beautiful greenhouse of strawberries so freshly grown strawberries can be enjoyed at the resort.</p>
        <br><br>
        <p><b>Hotel Aaram Baagh</b></p>
        <br>
        <p>Hotel Aaram Baagh is a royal luxury hotel in Pushkar, a perfect relaxing place far from the rush of the urban life. Aaram Baagh is one of the hotels of Pachar Group and earlier serves Kings and Queens as a place for relaxing and keeping them far from Royal duties. Hotel Aaram Baagh now reflects and provides a royal style of living to its guests.</p>
        <br>
        <a href="#" class="butt">Read More</a>
        <a href="contact.php" class="butt">Book Trip</a>
    </div>
    <img class="curve" src="./img/about/Vector.png" alt="">
</div>
<div class="a1">
    <div class="a1-container myswiper">
        <div class="a1-content">
            <div class="a1-wrap swiper-wrapper">
                <div class="a1-card swiper-slide">
                    <img src="./img/about/1.png" alt="">
                    <div class="a1-detail">
                        <h5>Maharaja Desert Camp & Safari - Rajasthani Events</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis delectus quam
                            voluptate, repudiandae ipsum eos quibusdam. Repudiandae quam architecto ad?</p>
                    </div>
                </div>
                <div class="a1-card swiper-slide">
                    <div class="a1-detail">
                        <h5>Maharaja Desert Camp & Safari - Rajasthani Events</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis delectus quam
                            voluptate, repudiandae ipsum eos quibusdam. Repudiandae quam architecto ad?</p>
                    </div>
                    <img src="./img/about/2.png" alt="">
                </div>
                <div class="a1-card swiper-slide">
                    <img src="./img/about/3.png" alt="">
                    <div class="a1-detail">
                        <h5>Maharaja Desert Camp & Safari - Rajasthani Events</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis delectus quam
                            voluptate, repudiandae ipsum eos quibusdam. Repudiandae quam architecto ad?</p>
                    </div>
                </div>
                <div class="a1-card swiper-slide">
                    <div class="a1-detail">
                        <h5>Maharaja Desert Camp & Safari - Rajasthani Events</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis delectus quam
                            voluptate, repudiandae ipsum eos quibusdam. Repudiandae quam architecto ad?</p>
                    </div>
                    <img src="./img/about/4.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</div>




<!-- iconify cdn -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".a1-content", {
        slidesPerView: 4,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 4,
            },
        }
    });
</script>
<script src="./js/script.js"></script>
<!-- script -->
<?php
include('footer.php');
?>