<?php
include('head.php');
?>
<div class="cat">
    <img class="bg" src="./img/gallery/Vector.png" alt="">
    <div class="cat-content">
        <img src="./img/visit/21.png" alt="">
        <h1 class="heading">Akbar Fort Ajmer</h1>
        <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
        <p>Akbar Fort, Ajmer was built in 1570 A.D. by the great emperor named Akbar. Akbar's Palace in Ajmer in India was built to serve as a home to Akbar during his visits and pilgrimages to Ajmer. Akbar's Palace was made almost impregnable and unattackable by the two impressive stone walls that surrounded the palace.

            Akbar's Palace, Rajasthan holds an important position in the history of Ajmer as it had acted as the platform for the historic meeting between Emperor Jehangir and Sir Thomas Roe of British East India Company.

            During the British occupation in Ajmer, Akbar's Palace was converted into a munitions house. The palace was then renamed as the 'Rajputana Arsenal'.

            A portion of Akbar's Palace was converted and changed into a museum in 1908. There is beautiful massive black marble idol of Goddess Kali in the palace. There are brilliant military armor and weapons on display at the palace turned museum.

            Akbar's Palace, Ajmer is a masterpiece work. The rooms in the palace are beautifully decorated. The palace is situated quite close to the railway station in Ajmer. The palace is a grand and elaborate way to learn more and gain knowledge about the romantic yet tumultuous and disruptive history of the picturesque city of Ajmer.

            The palace possesses an awesome collection of some of the most beautiful stone sculptures. The palace also displays the ancient and medieval armory and weapons. There are various other artistic objects in the palace and not to forget the eye catching and delicate miniature paintings that are really beautiful.

            Akbar's Palace also displays the best and choicest collection of Mughal and Rajput armor.</p>
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