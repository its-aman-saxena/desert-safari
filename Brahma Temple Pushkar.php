<?php
include('head.php');
?>
<div class="cat">
    <img class="bg" src="./img/gallery/Vector.png" alt="">
    <div class="cat-content">
        <img src="./img/visit/10.png" alt="">
        <h1 class="heading">Brahma Temple Pushkar</h1>
        <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
        <p>
            Brahma Temple Pushkar One of the major thriving temple of Brahma, in Pushkar can be identified by it red spire and by the image of Hans (the swan considered sacred to Lord Brahma). This temple built with the marble is decorated with silver coin. Beside there is silver turtle on the floor of temple. The chaturmukhi (four faces) Brahma is idol is houseed in Garbha Griha or "Womb home" which is the sanctum sanctorum. Above the Garbha Griha a super structure called Shikhara is composed of many shikhara. Interestingly the marble staute of surya standing sentinel at the Brahma temple is shown wearing boot. It is a pointed out that while all gods are shown with the bare feet, the figure Surya wears an ancient warrior's boot. This was considered a luxury accorded to him by the iconographers who did not want his feet to be scorched by the heat generated by him self. Mogul Emperor Aurangzeb is said to have destroyed this temple followed by a period of fear and confusion. The activities at Brahma temple were remained at low pitch. Later on a Brahman devotee named phundi bai first repaired in 1719. She was the mother of shambu ram and daughter of Girdhar Das, was resident of Jaipur. There after Maharaja Sawai Jai Singh rebuilt it in 1727. In 1809 Gokul Chand Parekh, a minister of scindias, repaired it at cost of Rs. 1,30,000.</p>
        <br><br>
        <p><b>ABOUT LORD BRAHMA</b></p>
        <br>
        <p>Brahma is the Hindu god that is associated with the formation of the universe and is one of the important three gods. The others two Hindu Gods in the trinity are Vishnu and Shiva. The companion of Hindu god Brahma is Saraswati, who is connected with learning. According to what is mentioned in the holy book the Puranas, Hindu god Brahma was born from a lotus. This flower grew from the stomach of Vishnu and this happened before the formation of the universe.</p>
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