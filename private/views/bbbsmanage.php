        <?php $this->view('pageinit'); ?>

        <?php $this->view('nav'); ?>
        <?php $this->view('navup'); ?>

        <link rel="stylesheet" href="<?=ROOT?>/css/bbbsmanagestyle.css">

        <div class="section">           <!--main section except sidebar & navbar-->
            <!-- <div class="back">
                <div class="backimg"><img class="backimg" src="back.png" ></div>
            </div> -->
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

            <!-- <div class="addb">
                <button class="addb">Add Blood</button>
            </div> -->
        </div>

 <script src="<?=ROOT?>/scripts/bbbsscript.js"></script>  
</body>
</html>