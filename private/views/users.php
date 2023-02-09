

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=ROOT?>/mainstyle.css">
    <style>
       
    </style>
    
    <title>Main Page(Temp)</title>

</head>
<body>
    <div class="sidebar">           <!--sidebar-->
    <div class="l1">
        <a href="<?=ROOT?>/dashboard"><div class="l11">
            <div class="l11img"><img src="./img/dash.png" class="dasimg"></div>
            <div class="das">Dashboard</div>
        </div></a>
        <a href="<?=ROOT?>/main"><div class="l12">
            <div class="l12img"><img src="./img/userg.png" class="ugimg"></div>
            <div class="das">Campaigns</div>
        </div></a>
        <a href="<?=ROOT?>/"><div class="l13">
            <div class="l13img"><img src="./img/gluco.png" class="bdimg"></div>
            <div class="das">Donations</div>
        </div></a>
        <a href="<?=ROOT?>/bbbsmanage"><div class="l14">
            <div class="l14img"><img src="./img/bld.png" class="blimg"></div>
            <div class="das">Blood Stock Management</div>
        </div></a>
        <a href="<?=ROOT?>/complaints"><div class="l14">
            <div class="l14img"><img src="./img/review.png" class="blimg"></div>
            <div class="das">User Reviews</div>
        </div></a>
    </div>
    <div class="l2">
        <a href="<?=ROOT?>/users"><div class="l21 active">
            <div class="l21img"><img src="./img/act.png" class="acimg"></div>
            <div class="das actve">System Users</div>
        </div></a>
    </div>
    </div>
    <div class="exsdbar">

        <div class="navbar">        <!--navbar-->

            <div class="nleft">

                <div class="imge"><img src="./img/Logo.png" class="logo"></div>
                <div class="vbar">
                   <!-- <img class="blackline">-->
                </div>
                <div class="blinkphi">

                    <div class="blink">BloodLink</div>
                    <div class="phi"><u>PHI</u></div>

                </div>
            </div>

            <div class="nright">
                <div class="icon"><a href="logout.php" ><img src="./img/Shutdown.png" class="shut"></a></div>
                <div class="name"><h4>Welcome! </h4></div>
            </div>

        </div>

        <div class="section">           <!--main section except sidebar & navbar-->
            <div class="camptitle">
                <div class="campaign">System Users</div>
                <div class="newbtn"><a href="http://localhost/mvcsahan/public/addusrform"><button class="btn" >New</button></a></div>
            </div>
            <div class="tbl">
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>NIC</th>
                        <th>Role</th>
                        <th>Tel No</th>
                        <th>Email</th>
                        

                    </tr>
                <thead>
                <?php foreach($rows as $row):?>
                    <tr>
                        
                        <td><a  href="<?=ROOT?>/reqdetails?id=<?=$row->id?>"><?=$row->uid ?></a></td>
                        <td><?=$row->name ?></td>
                        <td><?=$row->nic ?></td>
                        <td><?="Doc"?></td>
                        <td>
                        <?=$row->tel ?>
                        </td>
                        <td>
                            <?=$row->email ?>
                        </td>


                    
                    </tr>
                <?php endforeach; ?>
            </table>
            </div>

            <div class="pagination">
                <div class="pagin">
                    <a href="<?=ROOT?>/users?page=1"><button class="pagebtn">First</button></a>
                </div>
                <div class="pagin">
                    <a href="<?=ROOT?>/users?page=<?php 
                        if(!isset($_GET['page'])){
                            echo "1";
                        }elseif(($_GET['page']-1)<1){
                            echo "1";
                        } else{
                            echo $_GET['page']-1;
                        }
                        
                    
                    ?>"><button class="pagebtn"><<</button></a>
                </div>
           <?php for($i=1;$i<=$ess['noofpgs'];$i++) { ?>
                <div class="pagin">
                    <a href="<?=ROOT?>/users?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
                </div>
                
           <?php } ?> 
                <div class="pagin">
                    <a href="<?=ROOT?>/users?page=<?php
                        if(!isset($_GET['page'])){
                            echo "2";
                        } elseif(($_GET['page']+1)>$ess['noofpgs']){
                            echo $ess['noofpgs'];
                        } else{
                            echo $_GET['page']+1;
                        }
                        
                    
                    ?>"><button class="pagebtn">>></button></a>
                </div>
                <div class="pagin">
                    <a href="<?=ROOT?>/users?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
                </div>
        
        </div>

        </div>

    </div>
    <?php 
        //   echo "<pre>";
        //  $a=$rows[0]->id;
        // print_r($rows);
        // print($a);
    ?>
    
    
</body>
</html>