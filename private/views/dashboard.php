

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
        <div class="l11 active">
            <div class="l11img"><img src="./img/dash.png" class="dasimg"></div>
            <div class="das actve">Dashboard</div>
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
            
            <div class="dash">
            <h2>Dashboard</h2>

            </div>
            <div class="chrtarea">
                <div class="canarea">
                    <canvas id="chart" ></canvas>
                </div>
            </div>
            <div class="thism">
                <h2>This Month</h2>
            </div>
            <div class="thismdet">
                <div class="numofcamp">
                    <div class="numofnm">Campaigns</div>
                    <div class="numofnum"><b>4</b></div>
                </div>
                <div class="numofdon">
                <div class="numofnm">Donations</div>
                    <div class="numofnum"><b>4</b></div>
                </div>
               <div class="numofdonor">
               <div class="numofnm">Donors</div>
                    <div class="numofnum"><b>4</b></div>
               </div>
                
            </div>

            <div class="rep">
                <h1><b>Report</b></h1>
            </div>

            <div class="repfrm">
                <form class="form-inline"method="post">
                    <div class="fromd">
                        <label>From:</label>
                        <input type="date" name="fromdate" id="fdate">
                    </div>
                    <div class="tod">
                    <label>To:</label>
                        <input type="date" name="todate" id="tdate">
                    </div>
                    <div class="searchbtn">
                        <button type="submit" class="subbtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>

<script>
                var canvas = document.getElementById("chart");
                var config = {
                type: "bar",
                data: {labels: ["A+","A-","B+","B-","AB+","AB-","O+","O-"],
                        datasets: [{label:"RBC", 
                                    data: [<?=$rbc[0]->Ap?>,<?=$rbc[0]->Am?>,<?=$rbc[0]->Bp?>,<?=$rbc[0]->Bm?>,<?=$rbc[0]->ABp?>,<?=$rbc[0]->ABm?>,<?=$rbc[0]->Op?>,<?=$rbc[0]->Om?>],
                                    backgroundColor: [
                                        'rgba(5, 19, 103, 1)'
                                        
                                    ]
                                    },{label:"WBC", 
                                        data: [<?=$rbc[0]->Ap?>,<?=$wbc[0]->Am?>,<?=$wbc[0]->Bp?>,<?=$wbc[0]->Bm?>,<?=$wbc[0]->ABp?>,<?=$wbc[0]->ABm?>,<?=$wbc[0]->Op?>,<?=$wbc[0]->Om?>],
                                        backgroundColor: [
                                        'rgba(45, 49, 250, 1)'
                                    ]
                                    },{label:"Plasma", 
                                    data: [<?=$plsm[0]->Ap?>,<?=$plsm[0]->Am?>,<?=$plsm[0]->Bp?>,<?=$plsm[0]->Bm?>,<?=$plsm[0]->ABp?>,<?=$plsm[0]->ABm?>,<?=$plsm[0]->Op?>,<?=$plsm[0]->Om?>],
                                    backgroundColor: [
                                        'rgba(93, 139, 244, 1)'
                                    ]
                                    },{label:"Platelettes", 
                                    data: [<?=$plt[0]->Ap?>,<?=$plt[0]->Am?>,<?=$plt[0]->Bp?>,<?=$plt[0]->Bm?>,<?=$plt[0]->ABp?>,<?=$plt[0]->ABm?>,<?=$plt[0]->Op?>,<?=$plt[0]->Om?>],
                                    backgroundColor: [
                                        'rgba(144, 224, 255, 1)'
                                    ]
                                    }
                                ]
                        },
                        options: {
                            plugins:{
                                legend:{
                                    position:'bottom',
                                    labels: {
                                        font: {
                                            size: 17
                                        }
                                    }
                                    
                                }
                            // scales: {
                            // xAxes: [{
                            //     ticks: {
                            //     fontSize: 16,
                            //     fontWeight: 'bold'
                            //     }
                            // }]
                            // }
                        }
                        }}


                var barchart= new Chart(canvas, config)
                
            </script>
</body>
</html>