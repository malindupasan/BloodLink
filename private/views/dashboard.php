

        <?php $this->view('pageinit'); ?>

        <?php $this->view('nav'); ?>
        <?php $this->view('navup'); ?>
        <script src="<?=ROOT?>/scripts/genrep.js"></script>  


        <link rel="stylesheet" href="<?=ROOT?>/css/bbbsmanagestyle.css">


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
                        <a href="javascript:genPDF()">genpdf</a>
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