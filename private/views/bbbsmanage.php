

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=ROOT?>/css/bbbsmanagestyle.css">
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
        <a href="<?=ROOT?>/bbbsmanage"><div class="l14 active">
            <div class="l14img"><img src="./img/bld.png" class="blimg"></div>
            <div class="das actve">Blood Stock Management</div>
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
            
            <div class="namearea">
                <div class="nmandreq">
                    <div class="nm"><b>Blood Stock</b></div>
                    <?php if ($_SESSION['USER']->role=="Doctor"){ ?>
                        <div class="reqbt">
                        <a href="<?=ROOT?>/reqbloodform"><button class="reqbt"><b>Request Blood</b></button></a>
                        </div>
                    <?php }?>
                    
                </div>
            </div>
            <div class="chrtarea">
                <div class="canarea">
                    <canvas id="chart" ></canvas>
                </div>
            </div>
            <div class="searcharea">
                <div class="typ">
                    <b>Type:</b>
                        <select class="tselect" name="ts" id="t" >
                            <option class="topt1" value="def"></option>
                            <option class="topt" value="saab">RBC</option>
                            <option class="topt" value="mercedes">WBC</option>
                            <option class="topt" value="audi">Plasma</option>
                            <option class="topt" value="audi">Platelettes</option>

                          </select>
                </div>
                <div class="btyp">
                    <b>Blood Group:</b>
                        <select class="bselect" name="bs" id="b" >
                            <option class="bopt1" value="def"></option>
                            <option class="bopt" value="saab">A-</option>
                            <option class="bopt" value="mercedes">A+</option>
                            <option class="bopt" value="audi">B+</option>
                            <option class="bopt" value="audi">B-</option>
                            <option class="bopt" value="audi">AB+</option>
                            <option class="bopt" value="audi">AB-</option>
                            <option class="bopt" value="audi">O+</option>
                            <option class="bopt" value="audi">O-</option>



                          </select>
                </div>
                <div class="exdate">
                    <b>EXP Date:</b>
                    <input type="date" value="ExpDate">
                </div>
                <div class="srch">
                    <button class="btsearch" ><b>Search</b></button>
                </div>



            </div>
            <div class="tblarea">
                <table>
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Blood Group</th>
                            <th>Donated Date</th>
                            <th>EXP Date</th>
                            <th>Amount</th>
                            
    
                        </tr>
                    <thead>
                    <?php foreach($rows as $row):?> 
                        <tr>
                        
                        <td><?=$row->bloodtype ?></a></td>
                        <td><?=$row->bloodgroup ?></td>
                        <td><?=$row->donateddate ?></td>
                        <td><?=$row->expdate ?></td>
                        <td><?=$row->amount ?></td>
                        </tr>
                        

                    <?php endforeach; ?>

                
                </table>
                
            </div>

            <div class="addb">
                <button class="addb">Add Blood</button>
            </div>
        </div>

 <script src="<?=ROOT?>/scripts/bbbsscript.js"></script>  
</body>
</html>