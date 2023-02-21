    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>
    
    <link rel="stylesheet" href="<?=ROOT?>/css/reqdetailsstyle.css">

     <div class="campname" ><u><?php echo $rows->name; ?></u></div>

    <div class="splits">
       
        <div class="splitleft">
           
            <div class="imgplc">
                <div class="imgg"></div>
            </div>

            <div class="det">
                <div class="place"><b>Place: </b><?=$rows->location;?>   </div>
                <div class="time"><b>Time: </b><?=$rows->date;?></div>
                <div class="date"><b>Date: </b><?=$rows->date;?>      </div>
                <div class="bbank"><b>BloodBank: </b><?=$rows->bloodbank;?></div>
                <div class="orgby"><b>Organized by: </b><?=$rows->location;?></div>
                <div class="pno"><b>Phone No: </b><?=$rows->date;?></div>
            </div>
        </div>
        <div class="splitright"> 
        <div class="desc"><p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc</p></div>     
        </div>
    </div>
    
   
</body>
</html>