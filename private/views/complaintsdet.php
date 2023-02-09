
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=ROOT?>/boostyle.css">    

    <title>Document</title>
</head>
<body>
    <div class="nav">
        <div class="navbar">

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
                <div class="name"><h4>Dr.K.Perera</h4></div>
            </div>

        </div>
    </div>
    <div class="exnav">
        
        <div class="rtitle">
            <u><?php echo $rows->title;?></u>
        </div>
        <div class="rby">
            Review by <b><?php echo $rows->author?></b>
        </div>
        <div class="rdate">
            On <?php echo $rows->date?>

        </div>
        <div class="rdes">
            <p align="justify"><?php echo $rows->description."Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus."?></p>
        </div>
        <div class="rrep">
            <?php 
                if(!$rows->reply==NULL){?>
                        <div class="showrep">
                            <u class="rep"> <h2>Replied</h2></u>
                        <?php echo $rows->reply;?>
                        </div>                <?php } else{
                    echo "nope";

                }
            ?>
        </div>
    </div>
    
    
</body>
</html>