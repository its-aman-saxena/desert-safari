<?php
include('head.php');
?>
<div class="cat">
    <img class="bg" src="./img/gallery/Vector.png" alt="">
    <div class="cat-content">
        <img src="./img/visit/9.png" alt="">
        <h1 class="heading">Pushkar Lake</h1>
        <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
        <p>The word meaning of Pushkar is Lotus. Lotus (Nelumbo nucifera Gaertner) is a symbol of Indian cultural heritage, deeply associated with Hindu mythology. It is believed the town and this universe came in existence as the lord Brahma through the lotus in search of appropriate place to perform sacred Yagna for beginning of this universe and the parts of flower fell on three places which were later known as Jyaistha, Madhya and Kanistha Pushkar.

            Earlier the town used to combine the beauty of a Rose flower gardens and the serenity of pious Pushkar Lake. This spectacular site used to houses thousands of lotus flowers. But due to modernization and scarcity of water the lake has lost its identity as lotus lake, Because of visionary social activist the Lake is getting itâ€™s identify back by growing Pink lotus in it. Although the process of cultivating Lotus is in experimental phase but we do believe that the lake will be crammed with lotus one day.

            Lotus is the birth place of Brahma, the creator of universe. According to Hindu mythology, at the time of beginning of Universe a lotus flower sprang from the navel of lord Vishnu, One of trinity Gods and Brahma took birth from the said lotus. Brahma then threw a lotus flower to select suitable spot for the sacrifice (yajna). Lotus struck at particular place and water spurted from there giving it a shape of pious Pushkar Lake; which is even today revered as the supreme place of pilgrimage for Hindus. Beside pilgrims thousand of foreign tourist visits Pushkar to have a Holy dip in the Holy Lake.

            The holy lake is an attraction by itself at Pushkar and has immense significance for the followers of Hinduism. According to the legends, the consecrated lake formed with the touch of Brahmaâ€™s louts petal, is belied to have miraculous heading and purifying water.</p>
        <br><br>
        <p><b>PUSHKAR LAKE GHATS</b></p>
        <br>
        <p>The Lake is hugged by 52 ghats, teeming with devotes and tourist. Most of the ghats are 300 years old and have innumerable small temple. Various ghats were built by former ruler which include Jaipur ghat, Bhartpur ghat, Gwalior ghat, Jodhpur ghat, Kota ghat, Sikar ghat along with Gau ghat, Varah ghat where pilgrims take holy dip for salvation</p>
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