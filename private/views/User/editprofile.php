<?php $this->view("includes/navbar",$data);?>
<title>Edit profile</title>
<link rel="stylesheet" href="<?=ROOT?>/css/editprofile.css">
   
    <div class="section1">
        <div class="section1-1">
            <div class="sec1-prof">
            <div class="section1-1-1"><img src="<?php echo(ROOT."/".$data['rows']->profile_img)?>" alt=""
                    class="profilepic"></div>
                    <a href="./changepic"><button class="section1-1-1-btn">add new</button></a>
            <div class="section1-1-2">
                <?= $data['rows']->name ?>
            </div>
            <div class="section1-1-3">B+</div>
        </div>
    </div>
        <div class="section1-2">
            <div class="section1-1-1"><img src="<?=ROOT?>/images/backlogo.png" alt="" class="backlogo"></div>

        </div>

    </div>


    <div class="section2" style="margin-top:-50px;">

<form  method="post" class="sec2form">




    <div class="sec2f-1-1">
        <label for="name">Name</label>
        <input class="inputsec2-1" type="text"  name="name3" value="<?= $data['rows']->name ?>">
        <button type="submit" class="editbtn">Save</button>
    </div>
    <div class="sec2f-1">
        <label for="email">E-Mail</label>
        <input class="inputsec2" type="text" name="email" 
            value="<?= Auth::getemail() ?>" readonly>
    </div>

    <div class="sec2f-1">
        <label for="phone">Phone Number</label>
        <input class="inputsec2" type="text" name="phone" 
            value="<?= $data['rows']->mobile  ?>" >
    </div>

    <div class="sec2f-1">
        <label for="nic">NIC</label>
        <input class="inputsec2" type="text" name="nic" readonly value="<?= $data['rows']->nic  ?> ">
    </div>

    <div class="sec2f-1">
        <label for="city">City</label>
        <input class="inputsec2" type="text" name="city" 
            value="<?= $data['rows']->city ?> ">
    </div>

    <div class="sec2f-1">
        <label for="address">Street</label>
        <input class="inputsec2" type="text" name="street" 
            value="<?= $data['rows']->street  ?>">
    </div>

    <div class="sec2f-1">
        <label for="age">House No</label>
        <input class="inputsec2" type="text"  name="houseno" value="<?= $data['rows']->houseno  ?>" >
    </div>
    <div class="sec2f-1">
        <label for="age">Age</label>
        <input class="inputsec2" type="text" readonly name="age" value="<?= $data['rows']->age  ?>" >
    </div>

  







</form>


</div>







</body>

</html>