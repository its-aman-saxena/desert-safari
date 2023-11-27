<?php
include('head.php');
?>
<div class="contact">
    <h1 class="heading">Book Your Tour Now</h1>
    <h1 class="heading"><img class="logo" src="./img/p4.1.png" alt=""></h1>
    <form method="post" action="">
        <div class="conf">
            <select id="country" name="selectpackage">
                <option value="australia">Select your plan</option>
                <option value="canada">Camel Safari</option>
                <option value="usa">Desert Safari</option>
                <option value="usa">Jeep Safari</option>
                <option value="usa">Atv bike</option>
                <option value="usa">Night camp in pushkar</option>
                <option value="usa">Wedding Event In Pushkar</option>
                <option value="usa">Hot Air Balloon Safari Pushkar</option>
            </select>
            <input type="text" name="name" placeholder="Full Name">
        </div>
        <div class="conf">
            <input type="text" name="phone" pattern="(0/91)?[6-9][0-9]{9}" placeholder="Mobile Number">
            <input type="email" name="email" placeholder="Email Address">
        </div>
        <div class="conf">
            <!-- <input type="date" name="checkin" placeholder="Check In Date" value="datet" placeholder="Date"> -->
            <!-- <input type="date" name="checkout" placeholder="Check Out Date" value="datet"> -->
            <input placeholder="Check In" name="checkin" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
            <input placeholder="Check Out" name="checkout" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
        </div>
        <div class="conf">
            <input type="text" name="adult" placeholder="Adult">
            <input type="text" name="children" placeholder="Children">
        </div>
        <!-- <a class="butt" href="#">Book Trip</a> -->
        <div>
            <button type="submit" class="butt" name="submit">Submit</button>
        </div>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    include('dbcon.php');

    $selectpackage = mysqli_real_escape_string($conn, $_POST['selectpackage']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $checkin = mysqli_real_escape_string($conn, $_POST['checkin']);
    $checkout = mysqli_real_escape_string($conn, $_POST['checkout']);
    $adult = mysqli_real_escape_string($conn, $_POST['adult']);
    $children = mysqli_real_escape_string($conn, $_POST['children']);

    $qry = "INSERT INTO `message`(`selectpackage`, `name`, `email`, `phone`, `checkin`, `checkout`, `adult`, `children`) 
            VALUES ('$selectpackage', '$name', '$email', '$phone', '$checkin', '$checkout', '$adult', '$children')";

    $run = mysqli_query($conn, $qry);

    if ($run) {
        echo '<script>alert("Data Inserted Successfully")</script>';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
?>



<div class="c1">
    <div class="c1-container myswiper">
        <div class="c1-content">
            <h1 class="heading">Gallery Of Maharaja Desert Camp & Safari</h1>
            <div class="c1-wrap swiper-wrapper">
                <div class="c1-card swiper-slide">
                    <img src="./img/gallery/1.png" alt="">
                </div>
                <div class="c1-card swiper-slide">
                    <img src="./img/gallery/2.png" alt="">
                </div>
                <div class="c1-card swiper-slide">
                    <img src="./img/gallery/3.png" alt="">
                </div>
                <div class="c1-card swiper-slide">
                    <img src="./img/gallery/4.png" alt="">
                </div>
                <div class="c1-card swiper-slide">
                    <img src="./img/gallery/2.png" alt="">
                </div>
                <div class="c1-card swiper-slide">
                    <img src="./img/gallery/1.png" alt="">
                </div>
            </div>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</div>

<!-- script -->
<!-- iconify cdn -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper page 2-->
<script>
    var swiper = new Swiper(".c1-content", {
        slidesPerView: 3,
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
                slidesPerView: 3,
            },
        }
    });
</script>
<script src="./js/script.js"></script>
<!-- script -->

<?php
include('footer.php');
?>