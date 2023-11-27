<?php
include('head.php');
?>
<div class="cat">
    <img class="bg" src="./img/gallery/Vector.png" alt="">
    <div class="cat-content">
        <img src="./img/visit/20.png" alt="">
        <h1 class="heading">Adhai Din Johnpara</h1>
        <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
        <p>Adhai-din-ka-Jhonpra is one of the classic instances of religious vandalism, an outstanding example of an edifice built over the ruins of Jain temples. This famous mosque, situated on the border of Ajmer, is an inimitable example of primitive Indo-Islamic architecture. Constructed by Muhammad Ghori, Adhai- din-ka-Jhonpra has a slew of interesting legends to its name. While some believe that this mosque was built within a short span of two and half days and hence, the name, a few others associate the name to the two and half day fair that is held within the mosque premise every year. Previously, a seat of learning, this place was seized, demolished, and restored as a mosque by Ghori in the year 1198. Ghori constructed seven arched walls around the mosque and engraved it with calligraphic verses from the Holy Quran. Later, an attractive tower was added to the place. Today, this striking piece of architecture stands tall with its towering domes, pillars, and arched screens.</p>
        <br><br>
        <p><b>BRIEF HISTORY</b></p>
        <br>
        <p>Formerly a Sanskrit college, this seat of learning was constructed by Seth Viramdeva Kala in 660 A.D. for the Panch Kalyan Mahotsava of the Tirthankaras. A magnificent building with sprawling courtyard, carved roofs, and striking pillars, this building was quick to catch the fancy of Muhammad Ghori soon after he annexed Ajmer in 1192 A.D. He was so pleased by the place that he ordered his men to knock down the edifice and build a mosque instead. Thus, the temple and the learning center were demolished and the mosque came into being. They placed seven cloisters carved with Islamic script on the western side and a mimbar and a mehrab near it to make it look like a mosque. A Sanskrit calligraphy on the top of the main entrance narrates the history of the place. This mosque includes 10 domes, which is supported by 124 pillars.</p>
        <br><br>
        <p><b>MAJOR ATTRACTIONS</b></p>
        <br>
        <p>Two of the biggest attractions of this mosque are its main hall embellished with carved pillars, and arches made of yellow limestone on the main front wall of the entrance. Apart from this, the mosque houses a tower that was used by the Muezzin to offer namaz. The walls of the prayer hall are beautifully carved with intriguing rectangular panels, much like the Persian mosques, which lend this place an aura of elegance.</p>
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