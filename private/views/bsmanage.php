<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/bsmanagestyle.css">

    <title>Document</title>
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
            <div class="l14">
            <div class="l14img"><img src="./img/review.png" class="blimg"></div>
            <div class="das">User Reviews</div>
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
    
            <div class="section">
                <div class="sectionp0">
                    <h1><b>Blood Stock Management</b></h1>
                </div>
                <div class="chtttl">
                    <h2><u>Blood Stocks</u></h2>
                </div>
               
                <div class="sectionp1">
                    <div class="canarea">
                    <canvas id="chart" ></canvas>
                </div>
                </div>
                <div class="sectionp2">
                    <div class="sectionp21">
                        <div class="bscontainer">
                            <div class="bsloc">
                                <b><u>Colombo</u></b>
                            </div>
                            <div class="bstock">
                                <div class="iccon">
                                    <div class="iconball1"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball2"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball3"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball4"></div>
                                    <div class="exiconball"></div>
                                </div>

                            </div>
                        </div>

                        <div class="bscontainer">
                            <div class="bsloc">
                                <b><u>Colombo</u></b>
                            </div>
                            <div class="bstock">
                                <div class="iccon">
                                    <div class="iconball1"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball2"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball3"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball4"></div>
                                    <div class="exiconball"></div>
                                </div>

                            </div>
                        </div>

                        <div class="bscontainer">
                            <div class="bsloc">
                                <b><u>Colombo</u></b>
                            </div>
                            <div class="bstock">
                                <div class="iccon">
                                    <div class="iconball1"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball2"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball3"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball4"></div>
                                    <div class="exiconball"></div>
                                </div>

                            </div>
                        </div>

                        <div class="bscontainer">
                            <div class="bsloc">
                                <b><u>Colombo</u></b>
                            </div>
                            <div class="bstock">
                                <div class="iccon">
                                    <div class="iconball1"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball2"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball3"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball4"></div>
                                    <div class="exiconball"></div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="sectionp22">
                        <div class="bscontainer">
                            <div class="bsloc">
                                <b><u>Colombo</u></b>
                            </div>
                            <div class="bstock">
                                <div class="iccon">
                                    <div class="iconball1"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball2"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball3"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball4"></div>
                                    <div class="exiconball"></div>
                                </div>

                            </div>
                        </div>

                        <div class="bscontainer">
                            <div class="bsloc">
                                <b><u>Colombo</u></b>
                            </div>
                            <div class="bstock">
                                <div class="iccon">
                                    <div class="iconball1"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball2"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball3"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball4"></div>
                                    <div class="exiconball"></div>
                                </div>

                            </div>
                        </div>

                        <div class="bscontainer">
                            <div class="bsloc">
                                <b><u>Colombo</u></b>
                            </div>
                            <div class="bstock">
                                <div class="iccon">
                                    <div class="iconball1"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball2"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball3"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball4"></div>
                                    <div class="exiconball"></div>
                                </div>

                            </div>
                        </div>

                        <div class="bscontainer">
                            <div class="bsloc">
                                <b><u>Colombo</u></b>
                            </div>
                            <div class="bstock">
                                <div class="iccon">
                                    <div class="iconball1"></div>
                                    <div class="exiconball">11</div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball2"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball3"></div>
                                    <div class="exiconball"></div>
                                </div>
                                <div class="iccon">
                                    <div class="iconball4"></div>
                                    <div class="exiconball"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectionp3">
                    <div class="selectbb">
                        <b>BloodBank:</b>
                        <select class="bbselect" name="bbs" id="bb" >
                            <option class="bbopt1" value="def"></option>
                            <option class="bbopt" value="saab">Colombo</option>
                            <option class="bbopt" value="mercedes">Badulla</option>
                            <option class="bbopt" value="audi">Galle</option>
                          </select>
                    </div>
                    <div class="expdate">
                        <b>Exp: Date:</b>
                        <input type="date" value="Exp:Date">
                    </div>
                    <div class="searchbut">
                        <button class="bbsearch" >Search</button>
                    </div>
                    
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
            <?php
                echo "<pre>";
                print_r($rbc[0]->Ap);

                
            ?>
</body>
</html>