
<link rel="stylesheet" href="<?=ROOT?>/css/mainstylenav.css">

<!-- <input class="chk" type="checkbox" id="check">

<label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label> -->
    <div class="sidebar"> 
                 

    <div class="l1">
        <a href="<?=ROOT?>/dashboard"><div class="l11">
            <div class="l11img"><img src="./img/dash.png" class="dasimg"></div>
            <div class="das">Dashboard</div>
        </div></a>

        <a href="<?=ROOT?>/campaignsdashboard"><div class="l12">
            <div class="l12img"><img src="./img/userg.png" class="ugimg"></div>
            <div class="das">Campaigns</div>

        </div></a>
        <a href="<?=ROOT?>/"><div class="l13">
            <div class="l13img"><img src="./img/gluco.png" class="bdimg"></div>
            <div class="das">Donations</div>
        </div></a>

        <a href="<?=ROOT?>/bstockdashboard"><div class="l14">

            <div class="l14img"><img src="./img/bld.png" class="blimg"></div>
            <div class="das">Blood Stock Management</div>
        </div></a>
        <?php if ($_SESSION['USER']->role=='PHI'){ ?>
            <a href="<?=ROOT?>/forphi"><div class="l14">
            <div class="l14img"><img src="./img/review.png" class="blimg"></div>
            <div class="das">for phi</div>
        </div></a>
        <?php } else {?>
        <a href="<?=ROOT?>/complaints"><div class="l14">
            <div class="l14img"><img src="./img/review.png" class="blimg"></div>
            <div class="das">User Reviews</div>
        </div></a>
        <?php }?>
    </div>
    <div class="l2">
        <a href="<?=ROOT?>/users"><div class="l21">
            <div class="l21img"><img src="./img/act.png" class="acimg"></div>
            <div class="das">System Users</div>
        </div></a>
    </div>
    </div>

    <div class="exsdbar">