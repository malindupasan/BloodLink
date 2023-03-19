<?php $this->view("includes/navbar", ); ?>
<title>Archievements</title>
<link rel="stylesheet" href="<?= ROOT ?>/css/archievements.css">


<div class="stats">
    <div class="donatedNo">
        <h2>No of times donated :</h2> <span class="times"> 23</span>
    </div>
    <div class="donatedNo">
        <h2> Last donated on :</h2> <span class="dateLastD">12-12-2012</span>
    </div>

</div>

<div class="heading">
    <h1>Archievements</h1>
</div>


<div class="card-row-1">
    <div class="achi">
        <div class="a-img"><img class="locked-img" src="<?= ROOT ?>/images/achiev2.png" alt=""></div>
        <div class="a-name">
            <h2>Just Started</h2>
        </div>
        <div class="a-disc">
            <p class="achi-desc">Register for a camp using bloodlink and donate blood</p>
        </div>
        <!-- <div class="a-button"></div> -->
    </div>

    <div class="achi locked-achi ">
        <div class="a-img">
            <img class="lock" src="<?= ROOT ?>/images/lock.png" alt="">
            <img class="locked-img blackandw" src="<?= ROOT ?>/images/achiev1.png" alt="">
        </div>
        <div class="a-name">
            <h2>The Saviour</h2>
        </div>
        <div class="a-disc">
            <p class="achi-desc">Register for a camp using bloodlink and donate blood</p>
        </div>
        <!-- <div class="a-button"></div> -->


    </div>
    <div class="achi locked-achi ">
        <!-- add locked achi class -->
        <div class="a-img"><img class="locked-img " src="<?= ROOT ?>/images/achiev3.png" alt=""></div>
        <div class="a-name">
            <h2>Lite Donor</h2>
        </div>
        <div class="a-disc">
            <p class="achi-desc">Donate blood for 5 times</p>
        </div>
        <!-- <div class="a-button"></div> -->


    </div>

</div>
<div class="card-row-1">
    <div class="achi locked-achi ">
        <div class="a-img"><img class="locked-img" src="<?= ROOT ?>/images/achiev4.png" alt=""></div>
        <div class="a-name">
            <h2>Consistant Donor</h2>
        </div>
        <div class="a-disc">
            <p class="achi-desc">Donate blood for 3 times in 365 days</p>
        </div>
        <!-- <div class="a-button"></div> -->


    </div>
    <div class="achi locked-achi ">
        <div class="a-img"><img class="locked-img" src="<?= ROOT ?>/images/achiev5.png" alt=""></div>
        <div class="a-name">
            <h2>Legendary Donor</h2>
        </div>
        <div class="a-disc">
            <p class="achi-desc">Donate blood for 20 times</p>
        </div>
        <!-- <div class="a-button"></div> -->


    </div>
</div>