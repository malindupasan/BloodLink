<?php $this->view("includes/navbar",$data);?>
<title>Profile</title>
<link rel="stylesheet" href="<?=ROOT?>/css/profile.css">

<div class="section1">
    <div class="section1-1">
        <div class="sec1-prof">
            <div class="section1-1-1"><img src="<?php echo(ROOT."/".$data['rows']->profile_img)?>" alt=""
                class="profilepic"></div>
            <a href="./change_profile_img.php"><button class="section1-1-1-btn">change Profile picture</button></a>

            <div class="section1-1-2">
                <?= $data['rows']->name  ?>
            </div>
            <div class="section1-1-3">B+</div>
            <a href="change_pass"><button type="submit" class="change_pass">Change password</button></a>
        </div>

    </div>
    <div class="section1-2">
        <div class="section1-1-1"><img src="<?=ROOT?>/images/backlogo.png" alt="" class="backlogo"></div>

    </div>

</div>




<div class="section2" style="margin-top:-50px;">

    <form action="../public/editprofile" class="sec2form">

        <div class="sec2f-1-1">
            <label for="name">Name</label>
            <input class="inputsec2-1" type="text" readonly name="name" value="<?= $data['rows']->name ?>">
            <button type="submit" class="editbtn">Edit</button>

        </div>

        <div class="sec2f-1">
            <label for="email">E-Mail</label>
            <input class="inputsec2" type="text" name="email" readonly value="<?= Auth::getemail() ?>">
        </div>

        <div class="sec2f-1">
            <label for="phone">Phone Number</label>
            <input class="inputsec2" type="text" name="phone" readonly value="<?= $data['rows']->mobile ?>">
        </div>

        <div class="sec2f-1">
            <label for="nic">NIC</label>
            <input class="inputsec2" type="text" name="nic" readonly value="<?= Auth::getnic() ?>">
        </div>

        <div class="sec2f-1">
            <label for="city">City</label>
            <input class="inputsec2" type="text" name="city" readonly value="<?= $data['rows']->city ?> ">
        </div>

        <div class="sec2f-1">
            <label for="address">street</label>
            <input class="inputsec2" type="text" name="address" readonly value="<?= $data['rows']->street ?>">
        </div>

        <div class="sec2f-1">
            <label for="address">House No</label>
            <input class="inputsec2" type="text" name="address" readonly value="<?= $data['rows']->houseno ?>">
        </div>

        <div class="sec2f-1">
            <label for="age">Age</label>
            <input class="inputsec2" type="text" value="<?= $data['rows']->age ?>" readonly name="age">
        </div>











    </form>


</div>






</body>

</html>