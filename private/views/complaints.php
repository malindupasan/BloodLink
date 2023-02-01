
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="<?=ROOT?>/complaintsstyle.css">
    <style>
        
    </style>

    <title>Reviews</title>
</head>
<body>
    <div class="sidebar">           <!--sidebar-->
        <div class="l1">
            <div class="l11">
                <div class="l11img"><img src="./img/dash.png" class="dasimg"></div>
                <div class="das">Dashboard</div>
            </div>
            <div class="l12">
                <div class="l12img"><img src="./img/userg.png" class="ugimg"></div>
                <div class="das">Campaigns</div>
            </div>
            <div class="l13">
                <div class="l13img"><img src="./img/gluco.png" class="bdimg"></div>
                <div class="das">Donations</div>
            </div>
            <div class="l14">
                <div class="l14img"><img src="./img/bld.png" class="blimg"></div>
                <div class="das">Blood Stock Management</div>
            </div>
        </div>
        <div class="l2">
            <div class="l21">
                <div class="l21img"><img src="./img/act.png" class="acimg"></div>
                <div class="das">System Users</div>
            </div>
        </div>
    </div>

    <div class="exsdbar">

        <div class="navbar">        <!--navbar-->
    
            <div class="nleft">
    
                <div class="imge"><img src="./img/Logo.png" class="logo"></div>
                <div class="vbar"></div>
                <div class="blinkphi">
    
                    <div class="blink">BloodLink</div>
                    <div class="phi"><u>PHI</u></div>
    
                </div>
            </div>
    
            <div class="nright">
                <div class="icon"><a href="logout.php" ><img src="./img/shut.png" class="shut"></a></div>
                <div class="name"><h4>Welcome! <?php /*echo $_SESSION['uname']*/?></h4></div>
            </div>
    
        </div>

        <div class="section">
            <div class="comtitle">Reviews</div>

            <?php foreach($rows as $row):?>
                <div class="rev1">
                            <a class="link" href="boo.php?id=<?php echo $row['rid'];?>" >
                            <div class="det1">
                                <p class="revtitle"><?=$row->title ?></p>
                                <p>By <b><?=$row->author ?></b></p>
                                <p>On <b><?=$row->date ?></b></p>
                                <?php
                                    if ($row->reply==NULL) { ?>
                                        <p class="repstat0"><b><?php echo "No Replies";?></b></p>
                                <?php }
                                ?>
                                <?php
                                    if ($row->reply!=NULL) { ?>
                                        <p class="repstat1"><b><?php echo "Replied";?></b></p>
                                <?php }
                                ?>

                            </div> </a>
                        </div>
            <?php endforeach; ?>
            
            
        </div>
    </div>
    <?php 
          echo "<pre>";
        //  $a=$rows[0]->id;
        print_r($rows);
        // print($a);
    ?>
    
</body>
</html>