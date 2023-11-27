<?php
include('head.php');
?>
        <div class="about">
            <img class="bg" src="./img/gallery/Vector.png" alt="">
            <div class="a-content">
                <h1 class="heading">About - Maharaja Desert Camp & Safari</h1>
                <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
                <p>Maharaja Desert Camp & Safari is an epitome of royal desert exploration. With our opulent services, we transport you to the heart of the enchanting Arabian dunes. Our tailored safaris boast an array of majestic experiences, from exhilarating dune bashing to magical sunset camel rides. Revel in the traditional Bedouin culture with our mesmerizing campfires, belly dancing, and sumptuous local delicacies. Our seasoned guides ensure an unforgettable journey through the mystical deserts, showcasing the essence of true Arabian hospitality. Unravel the charm of the golden sands with Maharaja Desert Camp & Safari, where luxury meets adventure in the vast expanse of the desert.</p>
                <br>
                <p>Maharaja Desert Camp & Safari is not just a name, but a promise of an extraordinary adventure in the heart of the Arabian desert. With a legacy rooted in the essence of royalty, our company embodies the spirit of the majestic Maharajas of India, bringing forth a unique blend of opulence and wilderness.

Embark on a journey that transcends the ordinary, as we take you on an exhilarating ride through the mesmerizing dunes of the Arabian sands. Our seasoned guides, well-versed in the secrets of the desert, ensure an experience that is not only thrilling but also steeped in cultural richness and authenticity.

At Maharaja Desert Camp & Safari, every moment is crafted to perfection, be it the exhilarating dune bashing, the serene camel rides, the enchanting desert camps, or the delectable traditional feasts under the starry desert sky. We offer an array of carefully curated packages that cater to the diverse tastes and preferences of our esteemed guests, ensuring a truly unforgettable and personalized desert experience.

Immerse yourself in the grandeur of the desert with Maharaja Desert Camp & Safari, where every step is a testament to the majestic legacy of the Maharajas, and every memory is etched with the magic of the Arabian sands.</p>
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
                                <p>Embark on an exhilarating desert safari, ride camels, witness stunning sunsets, and experience the rich culture of the Arabian desert.</p>
                            </div>
                        </div>
                        <div class="a1-card swiper-slide">
                            <div class="a1-detail">
                                <h5>Maharaja Desert Camp & Safari - Rajasthani Events</h5>
                                <p>"Experience thrilling dune bashing, camel rides, and stunning sunsets on a mesmerizing desert safari adventure. Unforgettable memories await."</p>
                            </div>
                            <img src="./img/about/2.png" alt="">
                        </div>
                        <div class="a1-card swiper-slide">
                            <img src="./img/about/3.png" alt="">
                            <div class="a1-detail">
                                <h5>Maharaja Desert Camp & Safari - Rajasthani Events</h5>
                                <p>Experience the thrill of the desert with our exhilarating safari. Enjoy dune bashing, camel rides, and mesmerizing sunsets. Book now!</p>
                            </div>
                        </div>
                        <div class="a1-card swiper-slide">
                            <div class="a1-detail">
                                <h5>Maharaja Desert Camp & Safari - Rajasthani Events</h5>
                                <p>Thrilling desert dune drive, camel rides, traditional feast, and enchanting sunset views on a mesmerizing desert safari adventure.</p>
                            </div>
                            <img src="./img/about/4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- script -->
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