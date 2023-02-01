

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
                <div class="campaign">Campaigns</div>
                <div class="newbtn"><a href="http://localhost/mvcsahan/public/form"><button class="btn" >New</button></a></div>
            </div>
            <div class="tbl">
            <table>
                <thead>
                    <tr>
                        
                        <th>Name</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>BloodBank</th>
                        <th>Status</th>
                        <th></th>

                    </tr>
                <thead>
                <?php foreach($rows as $row):?>
                    <tr>
                        
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
                                if ($row->accrej==0){  ?>
                                    <a href="<?=ROOT?>/approval?id=<?php echo $row->id; ?>&stat=1"><button class="btn">Accept</button></a> <a href="<?=ROOT?>/approval?id=<?php echo $row->id; ?>&stat=2"><button class="btn">Reject</button></a>
                            <?php } 
                                if ($row->accrej==1){ ?>
                                    <button class="btns" >Accepted</button>
                            <?php } 
                                if ($row->accrej==2){ ?>
                                    <button class="btns">Rejected</button>
                                <?php } ?>
                        
                        </td>


                    
                    </tr>
                <?php endforeach; ?>
            </table>
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