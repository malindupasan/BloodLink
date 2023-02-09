
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="styles2.css"> -->
    <link rel="stylesheet" href="reqdetailsstyle.css">


    <title>Review Details</title>
   
</head>
<!-- <?php
    echo "<pre>";
    print_r($rows->id);
?> -->
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
   
     <div class="campname" ><u><?php echo $rows->name; ?></u></div>

    <div class="splits">
       
        <div class="splitleft">
           
            <div class="imgplc">
                <div class="imgg"></div>
            </div>

            <div class="det">
                <div class="place"><b>Place: </b><?=$rows->location;?>   </div>
                <div class="time"><b>Time: </b><?=$rows->date;?></div>
                <div class="date"><b>Date: </b><?=$rows->date;?>      </div>
                <div class="bbank"><b>BloodBank: </b><?=$rows->bloodbank;?></div>
                <div class="orgby"><b>Organized by: </b><?=$rows->location;?></div>
                <div class="pno"><b>Phone No: </b><?=$rows->date;?></div>
            </div>
        </div>
        <div class="splitright"> 
        <div class="desc"><p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc</p></div>     
        </div>
    </div>
    
   
</body>
</html>