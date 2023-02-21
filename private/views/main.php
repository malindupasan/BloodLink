

    <?php $this->view('pageinit'); ?>

    <?php $this->view('nav'); ?>
    <?php $this->view('navup'); ?>

    <link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">




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