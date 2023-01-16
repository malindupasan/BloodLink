


<?php $user=$data ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost:8888/Bloood%20Link%202/public/css/profile.css">
    <title>Document</title>
</head>

<body>
    <!-- ---------------------navbar----------------------------------   -->
    <nav class="navbar">
        <div class="left">
            <div class="nav-i-logo">
                <a href="../home/home.php">   <img src="./images/Logo.png" alt="" class="nav-logo"></a> 
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
                Campaigns
            </div>
        </div>
        <div class="right">

            <div class="nav-i">
                Contact
            </div>
            <div class="nav-i">
                About
            </div>
<!-- submeny dropdown -->
            <div class="nav-i">
                <img src="<?php echo "../edit-profile/" . Auth::getprofile_img() ?>" alt="" class="nav-user-icon" onclick="toggleMenu() ">
            </div>
            <div class="sub-menu-wrapper" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="<?php echo "../edit-profile/" . Auth::getprofile_img() ?>" alt="">
                        <h3><?php Auth::getfullname() ?></h3>
                    </div>
                    <hr>

                    <a href="" class="sub-menu-link">
                        <img src="images/profile 2.png" alt="">
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>

                    <a href="../public/logout" class="sub-menu-link">
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


<!-- submenu end -->
    </nav>
    <!-- ---------------------------------------navbar end--------------------------------------------    -->


    <div class="section1">
        <div class="section1-1">
            <div class="sec1-prof">
            <div class="section1-1-1"><img src="http://localhost:8888/Bloood%20Link%202/public/images/uploads/profile_test.jpeg" alt=""
                    class="profilepic"></div>
                    <a href="./change_profile_img.php"><button class="section1-1-1-btn">change Profile picture</button></a>
            <div class="section1-1-2">
                <?php Auth::getfullname() ?>
            </div>
            <div class="section1-1-3">B+</div>
        </div>
    </div>
        <div class="section1-2">
            <div class="section1-1-1"><img src="http://localhost:8888/Bloood%20Link%202/public/images/backlogo.png" alt="" class="backlogo"></div>

        </div>

    </div>




    <div class="section2" style="margin-top:-50px;">

        <form action="../public/editprofile"  class="sec2form">

            <div class="sec2f-1-1">
                <label for="name">Name</label>
                <input class="inputsec2-1" type="text" readonly name="name"
                    value="<?= Auth::getfullname() ?>">
                <button type="submit" class="editbtn">edit</button>
            </div>
            <div class="sec2f-1">
                <label for="email">E-Mail</label>
                <input class="inputsec2" type="text" name="email" readonly
                    value="<?= Auth::getemail() ?>">
            </div>

            <div class="sec2f-1">
                <label for="phone">Phone Number</label>
                <input class="inputsec2" type="text" name="phone" readonly
                    value="<?= Auth::getmobile() ?>">
            </div>

            <div class="sec2f-1">
                <label for="nic">NIC</label>
                <input class="inputsec2" type="text" name="nic" readonly value="<?= Auth::getnic() ?>">
            </div>

            <div class="sec2f-1">
                <label for="city">City</label>
                <input class="inputsec2" type="text" name="city" readonly
                    value="<?= Auth::getcity() ?> ">
            </div>

            <div class="sec2f-1">
                <label for="address">Address</label>
                <input class="inputsec2" type="text" name="address" readonly
                    value="<?= Auth::getaddress() ?>">
            </div>

            <div class="sec2f-1">
                <label for="age"></label>
                <input class="inputsec2" type="text" readonly name="age">
            </div>

            <div class="sec2f-1">
                <label for="weight">weight</label>
                <input class="inputsec2" type="text" readonly name="name">
            </div>

            <div class="sec2f-1">
                <label for="bloodgroup">BloodGroup</label>
                <input class="inputsec2" type="text" name="bloodgroup">
            </div>







        </form>


    </div>






</body>

</html>