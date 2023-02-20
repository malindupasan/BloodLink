<?php $i=0 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="<?=ROOT?>/css/complaintsstyle.css">
    <style>
        
    </style>

    <title>Reviews</title>
</head>
<body>
    <div class="sidebar">           <!--sidebar-->
    <div class="l1">
    <?php if($_SESSION['USER']->role=="Admin"){?>
            <a href="<?=ROOT?>/bsmanage">
        <?php } else { ?>
            <a href="<?=ROOT?>/dashboard">
        <?php }?>
        <div class="l11">
            <div class="l11img"><img src="./img/dash.png" class="dasimg"></div>
            <div class="das">Dashboard</div>
        </div></a>
        <a href="<?=ROOT?>/main"><div class="l12">
            <div class="l12img"><img src="./img/userg.png" class="ugimg"></div>
            <div class="das">Campaigns</div>
        </div></a>
        <?php if($_SESSION['USER']->role!="Admin"){?>
            <a href="<?=ROOT?>/viewdonblood"><div class="l13">
            <div class="l13img"><img src="./img/gluco.png" class="bdimg"></div>
            <div class="das">Donations</div>
        </div></a>
        <?php } ?>
        <a href="<?=ROOT?>/bbbsmanage"><div class="l14">
            <div class="l14img"><img src="./img/bld.png" class="blimg"></div>
            <div class="das">Blood Stock Management</div>
        </div></a>
        <?php if($_SESSION['USER']->role=="Admin"){?>
            <a href="<?=ROOT?>/complaints"><div class="l14 active">
            <div class="l14img"><img src="./img/review.png" class="blimg"></div>
            <div class="das actve">Customer Complaints</div>
        </div></a>
        <?php } else {?>
            <a href="<?=ROOT?>/complaints"><div class="l14 active">
            <div class="l14img"><img src="./img/review.png" class="blimg"></div>
            <div class="das actve">User Reviews</div>
        </div></a>
        <?php } ?>
    </div>
    <div class="l2">
        <a href="<?=ROOT?>/users"><div class="l21">
            <div class="l21img"><img src="./img/act.png" class="acimg"></div>
            <div class="das">System Users</div>
        </div></a>
    </div>
    </div>

    <div class="exsdbar">

        <div class="navbar">        <!--navbar-->
    
            <div class="nleft">
    
                <div class="imge"><img src="./img/Logo.png" class="logo"></div>
                <div class="vbar"></div>
                <div class="blinkphi">
    
                    <div class="blink">BloodLink</div>
                    <div class="phi"><u><?=$_SESSION['USER']->role;?></u></div>
    
                </div>
            </div>
    
            <div class="nright">
                <div class="icon"><a href="logout" ><img src="./img/shut.png" class="shut"></a></div>
                <div class="name"><h4>Welcome! <?=$_SESSION['USER']->uid;?> <?php /*echo $_SESSION['uname']*/?></h4></div>
            </div>
    
        </div>

        <div class="section">
            <div class="comtitle">Reviews</div>

            <div class="sec3"> 
        
                <?php foreach($data[0] as $value):?>
                    
                    <?php if($i%3==0 && $i!=0) : ?>
                            </div>
                            <div class="sec3"> 
                    <?php endif ?>
                    <a href="<?=ROOT?>/complaintsdet?rid=<?=$data[0][$i]->rid?>">
                    <div class="card">
                        
                        <!-- <div class="c-bottom"> -->
                            <!-- <h3 class="cheading"><?= $data[0][$i]->author?></h3>
                            <h3 class="cheading"><?= $data[0][$i]->title?></h3>

                            <p class="desctxt">
                            <?= $data[0][$i]->description;?>          </p> -->
            
                        <!-- </div> -->
                        <div class="rtitle">
                            <?= $data[0][$i]->title?>
                        </div>
                        <div class="rauth">
                            By <?= $data[0][$i]->author?>
                        </div>
                        <div class="rdate">
                            On <?= $data[0][$i]->date?>
                        </div>
                        <?php
                            if($data[0][$i]->reply==NULL):
                        ?>
                        <div class="repbtn">
                            <button class="repbtn">Reply</button>
                        </div>
                        <?php endif ?>


                    </div>
                    </a>
                    <?php $i++; ?>
                    <?php endforeach; ?>
           
            
        </div>
    </div>
    <?php 
        //   echo "<pre>";
        //  $a=$rows[0]->id;
        // print_r($rows[0]->rid);
        // print($a);
    ?>
  
</body>
</html>