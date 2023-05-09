

<?php $this->view('pageinit'); ?>
<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>

<script src="<?=ROOT?>/scripts/genrep.js"></script>  
<script src="<?=ROOT?>/js/ajscriptdashboard.js"></script>

<link rel="stylesheet" href="<?=ROOT?>/css/dashboardstyle.css">


        <div class="section" id="section">           <!--main section except sidebar & navbar-->
        <link rel="stylesheet" href="<?=ROOT?>/css/bbbsmanagestyle.css">

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

                <a href="<?=ROOT?>/thismonthcamps"><div class="numofcamp">
                    <div class="numofnm">Campaigns</div>
                    <div class="numofnum"><b><?= $ess['bdccount']?></b></div>
                </div></a>

                <a href="<?=ROOT?>/thismonthdonations"><div class="numofdon">
                    <div class="numofnm">Donations</div>
                    <div class="numofnum"><b><?= $ess['donationcount']?></b></div>
                </div></a>

                <a href="<?=ROOT?>/thismonthdonors"><div class="numofdonor">
                    <div class="numofnm">Donors</div>
                    <div class="numofnum"><b><?= $ess['donorcount']?></b></div>
               </div></a>
                
            </div>

            <?php $year=date('Y');?>
            <div class="thism">
                <h2>This Year-<?= $year;?></h2>
            </div>

            <div class="thismdet">

                <a href="<?=ROOT?>/thismonthcamps"><div class="numofcamp">
                    <div class="numofnm">Campaigns</div>
                    <div class="numofnum"><b><?= $ess['bdccountyear']?></b></div>
                </div></a>

                <a href="<?=ROOT?>/thismonthdonations"><div class="numofdon">
                    <div class="numofnm">Donations</div>
                    <div class="numofnum"><b><?= $ess['donationcountyear']?></b></div>
                </div></a>

                <a href="<?=ROOT?>/thismonthdonors"><div class="numofdonor">
                    <div class="numofnm">Donors</div>
                    <div class="numofnum"><b><?= $ess['donorcountyear']?></b></div>
               </div></a>
                
            </div>

            <div class="thism">
                <h2>Defect Status</h2>
            </div>

            <div class="rep">
            <div class="canarea2">
                <div class="p1">
                    <div class="pttl">This Month Rejects</div>
                    <canvas id="chartpie" ></canvas>

                </div>
                <div class="p2">
                <div class="pttl">This Year Rejects</div>

                    <canvas id="chartpie2" ></canvas>

                </div>

                </div>
            </div>

            <div class="thism2">
                <h2>Blood Requests</h2>
            </div>

            <div class="thismdet2">

                <a href="<?=ROOT?>/viewbldrequests"><div class="numofcamp">
                    <div class="numofnm">Available</div>
                    <div class="numofnum"><b><?= $ess['bldreqavailable']?></b></div>
                </div></a>

                

                <a href="<?=ROOT?>/viewstatusbldrequests"><div class="numofdonor">
                    <div class="numofnm">Sent</div>
                    <div class="numofnum"><b><?= $ess['bldreqsent']?></b></div>
               </div></a>
                
            </div>
            <div class="thism">
                <h2>Defects - Year <?= $year;?> vs <?= $year-1;?></h2>
            </div>

            <div class="chrtarea">
                <div class="canarea3">
                    <canvas id="chart3" ></canvas>
                </div>
            </div>
            <div class="thism">
                <a href="<?=ROOT?>/reportui4"><button>View Report</button></a>
            </div>

            

            <!-- <div class="repfrm">
                <form class="form-inline"method="post" id="form" action="<?=ROOT?>/formforpdf">
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
            </div> -->
            <!-- <button  class="subbtn sp" onclick="generatePDF()">pdf</button> -->

        </div>


</body>
</html>

