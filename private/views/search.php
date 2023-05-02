<?php $this->view('includes/navup'); ?>

<link rel="stylesheet" href="<?=ROOT?>/css/search.css">
<div class="main">
<div id="cover">
  <form method="get" action="">
    <div class="tb">
      <div class="td"><input type="text" placeholder="Search" required name="donor"></div>
      <div class="td" id="s-cover">
        <button type="submit">
          <div id="s-circle"></div>
          <span></span>
        </button>
      </div>
    </div>
  </form>
</div>
<?php if ($data):?>
<div class="container">
<a href="search"><button class="btn large" name="accept" >Back to search</button></a>
    <div class="card">

        <div class='top'>
            <img src="<?=$data->profile_img?>">
        </div>
        <div class='bottom'>
            <h1><?=$data->name?></h1>
            <?php if(isset($data->guest_id)):?>
                <small><b>Guest Donor</b></small>
            <!-- <?php if($eligible=='0'): ?>
                <small class='error'><i class="fa-solid fa-circle-exclamation"></i> Has donated blood less than 3 months ago.</small>
            <?php endif; ?> -->
            <br>
            <div class="details">
                <p>ID: <?=$data->guest_id?></p>
                <p>Last donated date: <?=$data->last_donated?></p>
                <p>NIC: <?=$data->nic?></p>
            </div>
            <?php endif;?>
            <?php if(!isset($data->guest_id)):?>
            <small><?=$data->city?></small>
            <!-- <?php if($eligible=='0'): ?>
                <small class='error'><i class="fa-solid fa-circle-exclamation"></i> Has donated blood less than 3 months ago.</small>
            <?php endif; ?> -->
            <br>
            <div class="details">
                <p>Age: <?=$data->age?></p>
                <p>Email: <?=$data->email?></p>
                <p>NIC: <?=$data->nic?></p>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>
<?php endif?>
<?php if ($data=='0'):?>
    <p class="error">User with the NIC doesn't exist!<p>
    <form method="post" class="register">
        <p>Register as a guest donor</p>
        <input type="text" placeholder="Name of the donor" name="name" required>
        <input type="text" placeholder="National ID no." name="nic" required>
        <button class="btn">Register</button>
    </form>
<?php endif;?>
</div>