

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">
    <style>
       
    </style>
    
    <title>Main Page(Temp)</title>

</head>
<body>
    <div class="sidebar">           
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

        <a href="<?=ROOT?>/main"><div class="l12 active">
            <div class="l12img"><img src="./img/userg.png" class="ugimg"></div>
            <div class="das actve">Campaigns</div>
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
            <a href="<?=ROOT?>/complaints"><div class="l14">
            <div class="l14img"><img src="./img/review.png" class="blimg"></div>
            <div class="das">Customer Complaints</div>
        </div></a>
        <?php } else {?>
            <a href="<?=ROOT?>/complaints"><div class="l14">
            <div class="l14img"><img src="./img/review.png" class="blimg"></div>
            <div class="das">User Reviews</div>
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
                <div class="vbar">
                   <!-- <img class="blackline">-->
                </div>
                <div class="blinkphi">

                    <div class="blink">BloodLink</div>
                    <div class="phi"><u><?=$_SESSION['USER']->role;?></u></div>

                </div>
            </div>

            <div class="nright">
                <div class="icon"><a href="logout" ><img src="./img/Shutdown.png" class="shut"></a></div>
                <div class="name"><h4>Welcome! <?=$_SESSION['USER']->uid;?> </h4></div>
            </div>

        </div>

        <div class="section">           <!--main section except sidebar & navbar-->
            <div class="camptitle">
                <div class="campaign">Campaigns</div>
                <?php if ($_SESSION['USER']->role!="Admin") { ?>
                <div class="newbtn"><a href="<?=ROOT?>/form"><button class="btn" >New</button></a></div>

                <?php }?>
                
            </div>
            <div class="tbl">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>BloodBank</th>
                        <th><?php if($_SESSION['USER']->role=="PHI"){?>Status<?php } ?></th>
                        <th></th>

                    </tr>
                <thead>
                <?php foreach($rows as $row):?>
                    <div class="trows">
                    <tr>
                        <td><a  href="<?=ROOT?>/reqdetails?id=<?=$row->id?>"><button class="bdcvbtn">View</button></a></td>
                        <td><a  href="<?=ROOT?>/reqdetails?id=<?=$row->id?>"><?=$row->name ?></a></td>
                        <td><?=$row->location ?></td>
                        <td><?=$row->date ?></td>
                        <td><?=$row->bloodbank ?></td>
                        <td>
                        <?php       //status indicators
                                $cdate=date("y-m-d");
                                // echo $cdate;
                                if ((strtotime($cdate)<(strtotime($row->date)))&&($row->accrej==0 || $row->accrej==1)) {?>
                                   <div class="upc"><?php echo "Upcoming";?></div> 
                               <?php }
                                if ((strtotime($cdate)==(strtotime($row->date)))&&($row->accrej==1)) {?>
                                    <div class="ong"><?php echo "Ongoing";?></div>
                                <?php }
                                if ((strtotime($cdate)>(strtotime($row->date)))&&($row->accrej==1)) {
                                    echo "Closed";
                                }
                                if($row->accrej==2){?>
                                    <div class="rej"><?php echo "Rejected";?></div>
                                <?php }
                                ?>
                        </td>
                        <td><?php           //accept/reject buttons
                                if ($row->accrej==0 && $_SESSION['USER']->role=="PHI" ){  ?>
                                    <a href="<?=ROOT?>/approval?id=<?php echo $row->id; ?>&stat=1"><button class="btn">Accept</button></a> <a href="<?=ROOT?>/approval?id=<?php echo $row->id; ?>&stat=2"><button class="btn">Reject</button></a>
                            <?php } ?>
                                
                        
                        </td>


                    
                    </tr>
                    </div>
                <?php endforeach; ?>
            </table>
            </div>
        </div>
        <div class="pagination">
                <div class="pagin">
                    <a href="<?=ROOT?>/Main?page=1"><button class="pagebtn">First</button></a>
                </div>
                <div class="pagin">
                    <a href="<?=ROOT?>/Main?page=<?php 
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
                    <a href="<?=ROOT?>/Main?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
                </div>
                
           <?php } ?> 
                <div class="pagin">
                    <a href="<?=ROOT?>/Main?page=<?php
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
                    <a href="<?=ROOT?>/Main?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
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