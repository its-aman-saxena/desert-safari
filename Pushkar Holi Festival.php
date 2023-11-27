<?php
include('head.php');
?>
<div class="cat">
    <img class="bg" src="./img/gallery/Vector.png" alt="">
    <div class="cat-content">
        <img src="./img/visit/7.png" alt="">
        <h1 class="heading">Pushkar Holi Festival</h1>
        <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
        <p>Pushkar is a popular destination for Holi celebrations and is known for its unique holi camping experience. We invite you to Camp for celebrating Holi festival .

            Celebrate Holi this year in the most adventurous and unique way with Pushkar Adventure Desert Camp. Camp offers 1Night/2 Days Holi package which includes camping, food, snacks, bonfire, folk dance, bonfire, a Holi celebration, desert activities camel, Jeep safari , and much more.

            - Reasons to celebrate holi in Pushkar-Highlights and attractions.

            The festival of Holi in Pushkar starting celebrate before 5 days from actual date.Every night visitors, locals dancing with sticks(Daandiya)on Indian rhythm(Dhhol). The program start after 10 PM and continue running until 3 AM

            -| Kapdaa Faad holi-Pushkar |

            It is famous for its kapdaa faad Holi . People tears clothes of each other's and roam around bare chested. Females are not included in this. Police and local security make sure that females will not get included in such activities.</p>
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