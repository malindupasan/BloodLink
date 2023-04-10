<?php $this->view('includes/pageinit'); ?>

<?php $this->view('includes/navup'); ?>
    <?php $date=date('Y-m-d');?>
    
    <link rel="stylesheet" href="<?=ROOT?>/css/reqdetailsstyle.css">

     <div class="campname" ><u><?php echo $rows->camp_name; ?></u></div>

    <div class="splits">

       
        <div class="splitleft">
           
            <div class="imgplc">
                <div class="imgg"><img src="<?=ROOT?>/images/backlogo.png"></div>
            </div>
            
            <div class="det">
                <div class="place g"><b>Place: </b><?=$rows->address;?>   </div>
                <div class="time g"><b>Time: </b><?=$rows->start_time;?></div>
                <div class="date g"><b>Date: </b><?=$rows->date;?>      </div>
                <div class="orgby g"><b>Organized by: </b><?=$rows->date;?></div>
                
                <?php if($rows->doctor_id!=NULL) {?>
                    <div class="doctor"><b>Doctor ID: </b><?=$rows->doctor_id?></div>

                    <?php } else{?>

                        <form method="post">
                        <div class="doctor g"><b>Doctor ID: </b><select name="docid" id="docid">
                        <?php if($rows2!=NULL) {
                        foreach($rows2 as $row):?>
                            <option class="bbopt" value=<?=$row->id?>><?=$row->name?></option>
                        <?php endforeach; 
                        }?>
                        </select>
                        <button type="submit">Add</button>
                        </div>

                        </form>
                    <?php }?>
                    <?php if($rows->date<$date) { ?>
                        <a href="<?=ROOT?>/reportui?id=<?php echo $rows->camp_id; ?>"><button class="btn1">Report</button></a> <!-------------only after bdc--->

                    <?php }?>
            </div>
        </div>
        <div class="splitright"> 
        <div class="desc"><p align="justify"><?=$rows->description;?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc</p></div>     
        </div>
    </div>

    <?php if($rows->date==$date) { ?>
        <div class="onetimebtn">
            <a href="<?=ROOT?>/onetimeui?id=<?=$rows->camp_id;?>"><button class="btnonet">Start BDC</button> <!-------------only on bdc--->
        </div>
    <?php }?>
    
    
   
</body>
</html>