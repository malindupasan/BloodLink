
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=ROOT?>/css/formstyle.css">
    <style>
       
    </style>
    
    <title>Add New Camp</title>
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
                <div class="icon"><a href="logout" ><img src="./img/shut.png" class="shut"></a></div>
                <div class="name"><h4>Welcome! <?=$_SESSION['USER']->uid;?></h4></div>
            </div>

        </div>
    </div>

    

    <div class="exnav">
        <div class="backarr">
        <img class="barr" src="./img/back.png" alt="">

        </div>
    <div class="boxes r1">
            <a href="<?=ROOT?>/bbbsmanage"><div class="b1">
                <div class="imgb">
                    <img class="bimg" src="./img/bld.jpg" alt="">
                </div>
                <div class="data">
                    Blood Stock 
                </div>
            </div>
            
            <a href="<?=ROOT?>/viewbldrequests"><div class="b1">
                <div class="imgb">
                    <img class="bimg" src="./img/breq.jpg" alt="">
                </div>
                <div class="data">
                    Blood Requests
                </div>
            </div></a>
        </div>
    </div>
        

    
</body>
</html>