<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost:8888/Bloood%20Link%202/public/css/home.css">
    <title>home</title>
</head>

<body>
    <!-- ---------------------navbar----------------------------------   -->
    <nav class="navbar">
        <div class="left">
            <div class="nav-i-logo">
                <img src="./images/Logo.png" alt="" class="nav-logo">
            </div>
            <div class="nav-i-1">
                Become a Donor
            </div>
            <div class="nav-i">
                Give blood
            </div>
            <div class="nav-i">
                News
            </div>
            <div class="nav-i">
                Campaings
            </div>
        </div>
        <div class="right">

            <div class="nav-i">
                Contact
            </div>
            <div class="nav-i">
                About
            </div>

            <div class="nav-i">
                <img src="./images/Profile.png" alt="" class="nav-user-icon" onclick="toggleMenu() ">
            </div>
            <div class="sub-menu-wrapper" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="images/Profile.png" alt="">
                        <h3><?= Auth::getnic() ?></h3>
                    </div>
                    <hr>

                    <a href="../profile-Mal/profile.php" class="sub-menu-link">
                        <img src="images/profile 2.png" alt="">
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>

                    <a href="../logout" class="sub-menu-link">
                        <img src="images/logout.png" alt="">
                        <p>Logout</p>
                        <span>></span>
                    </a>



                </div>
            </div>
        </div>

        <script>
            let subMenu = document.getElementById("subMenu");


            function toggleMenu() {
                subMenu.classList.toggle("open-menu");
            }


        </script>



    </nav>
    <!-- ---------------------------------------navbar end--------------------------------------------    -->
    <div class="sec1">
        <h2>CHANGE THEIR LIFE</h2>
        <h1>Donate Blood To <br> Save Life</h1>

    </div>



    <div class="sec2">

        <div class="sec2-1">
            <h1 class="sec2_h">Become a <br>Donor</h1>
            <p class="sec2_p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tenetur eligendi deleniti
                sequi! Deserunt labore tempora sit fugit voluptates similique vel ipsa reprehenderit! Suscipit
                voluptatibus aut impedit asperiores architecto recusandae.</p>
            <button class="sec2_btn"></button>
        </div>
        <div class="sec2-1">
            <h1 class="sec2_h"> Why give Blood?</h1>
            <p class="sec2_p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis aut autem quam
                obcaecati, impedit quae voluptates doloremque pariatur qui sint. Impedit, illum ducimus mollitia veniam
                ab tenetur libero nam excepturi?</p>
            <button class="sec2_btn"></button>
        </div>
        <div class="sec2-1">
            <h1 class="sec2_h">How donation <br> Helps</h1>
            <p class="sec2_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ad tempora excepturi
                cupiditate nam labore veniam quam praesentium! Sit nesciunt quia fugiat nisi adipisci, est neque
                deserunt tenetur a beatae?</p>
            <button class="sec2_btn"></button>
        </div>

    </div>

    <div class="sec3">
        <div class="sec3_1">
            <div class="sec3_1_1"></div>
        </div>
        <div class="sec3_1">
            <div class="sec3_1_2">
                <h1>Welcome</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem odio dignissimos praesentium,
                    tempore incidunt dolorem repudiandae perspiciatis similique et ab tenetur, velit tempora illo?
                    Labore esse libero qui deserunt quasi.</p>
            </div>
        </div>
    </div>

    <?php
    echo "<pre>";
        print_r($_SESSION['USER']->fullname) ;        ?>

</body>

</html>