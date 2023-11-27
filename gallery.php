<?php
include('head.php');
?>
        <div class="ghome">
            <img class="bg" src="./img/gallery/Vector.png" alt="">
            <div class="g-content">
                <h1 class="heading">Maharaja Desert Camp & Safari Gallery</h1>
                <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium alias dolor sint commodi
                    voluptatibus fugiat corrupti modi atque doloremque, natus blanditiis nesciunt placeat laboriosam
                    illum fuga, aut eum inventore delectus maxime, reiciendis quia. Ab voluptates qui itaque voluptatem
                    nam perferendis.</p>
            </div>
        </div>
        <div class="g1">
            <div class="g1-container myswiper">
                <div class="g1-content">
                    <h1 class="heading">Camel Safari</h1>
                    <div class="g1-wrap swiper-wrapper">
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/1.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/2.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/3.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/4.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/2.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/1.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-pagination" style="background-color: gold;"></div> -->
            </div>
        </div>
        <div class="g1">
            <div class="g1-container myswiper">
                <div class="g1-content">
                    <h1 class="heading">Jeep Safari</h1>
                    <div class="g1-wrap swiper-wrapper">
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/1.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/2.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/3.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/4.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/2.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/1.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-pagination" style="color: gold;"></div> -->
            </div>
        </div>
        <div class="g1">
            <div class="g1-container myswiper">
                <div class="g1-content">
                    <h1 class="heading">Rajasthani Events</h1>
                    <div class="g1-wrap swiper-wrapper">
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/1.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/2.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/3.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/4.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/2.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/1.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
        <div class="g1">
            <div class="g1-container myswiper">
                <div class="g1-content">
                    <h1 class="heading">Rajasthani Heritage</h1>
                    <div class="g1-wrap swiper-wrapper">
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/1.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/2.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/3.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/4.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/2.png" alt="">
                        </div>
                        <div class="g1-card swiper-slide">
                            <img src="./img/gallery/1.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
        <!-- script -->
        <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper page 2-->
<script>
    var swiper = new Swiper(".g1-content", {
        slidesPerView: 4,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // autoplay:{
            // delay:2000,
        // },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // mousewheel: true,
        // keyboard: true,
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

<!-- iconify cdn -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <script src="./js/script.js"></script>

<!-- script -->

<?php
include('footer.php');
?>