<?php
include('head.php');
?>
<div class="cat">
    <img class="bg" src="./img/gallery/Vector.png" alt="">
    <div class="cat-content">
        <img src="./img/visit/23.png" alt="">
        <h1 class="heading">Ajaypal Temple Ajmer</h1>
        <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
        <p>Ajay Pal is around 10kms. From Pushkar. Raja Ajay Pal, the founder of Ajmer City, founded this temple in 11th century AC. The temple surrounded on all side by boulders of marble which make it very picturesque place and also object of attraction. The Ajay Pal temple along with Ajgandheshwar temple located in depression surrounded on all sides by hills. To reach this place one has to negotiate tortuous pathways and small hills.</p>
        <br><br>
        <p><b>JOURNEY TO AJAYPAL TEMPLE</b></p>
        <br>
        <p>Camel Cart is the best vehicle to go there. Bitumen road leading from the base of Savitri hill, will take you towards Kharekdi village. During initial 3 kms. The road passes through forest which is unexpected is thar desert. As you reach close to kharekdi village the forest replaced by sand dunes then the road passes through a valley surrounded by hills both sides. After journey of seven kilometers you will reach kharekdi. Just at entry into kharekdi the road divides in two. One passes through village and other by passes it. After covering 300 meters of by pass you will see a hand pump and dusty road on right side. You straight for 100 meters and then turn towards right. For next 3 kms the road is dusty and little dumpy also. It will take through houses and fields. The final 1 km of road is through rocky terrain. Here path is tortuous be careful and drive little slowly. Just before last 500 meters, there is a Bhairon ji temple from here you should turn to right to reach Ajay Pal. Along the pathway you have opportunity to watch village life. Herds of goats, school children and women folk with colourful Rajasthani dresses and man folk with colourful turbans. On this rout there in no restaurant so you advise to carry water bottle, snacks and camera with you. The rainy season (augest-october) You can see springs, canal check dams, water fall and small streams flowing there.</p>
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