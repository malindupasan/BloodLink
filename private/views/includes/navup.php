<link rel="stylesheet" href="<?=ROOT?>/css/mainstylenavup.css">



        <div class="navbar">        <!--navbar-->

            <div class="nleft">

                <div class="imge"><img src="./img/Logo.png" class="logo"></div>
                <div class="vbar">
                   <!-- <img class="blackline">-->
                </div>
                <div class="blinkphi">


                    <div class="blink"><a href="whatisBL">BloodLink</a></div>

                    <div class="phi"><u><?=$_SESSION['USER']->role?></u></div>

                </div>
            </div>

            <div class="nright">

                <div class="icon"><a href="<?=ROOT?>/logout" ><img src="./img/Shutdown.png" class="shut"></a></div>
                <div class="name"><h4>Welcome! <?= $_SESSION['USER']->name?> </h4></div>

            </div>

        </div>