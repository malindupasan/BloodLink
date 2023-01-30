<?php $this->view("includes/navbar",); ?>
<?php $i=0 ?>

    <link rel="stylesheet" href="http://localhost:8888/Bloood%20Link%202/public/css/campaigns.css">
 

    <div class="sec1">
        <h2 class="sec1-h">campaigns</h2>
        <div class="sec1-sub">
        <form action="" class="searchfrom"> 
         <input type="text">   
        <button class="search-btn">Search</button>
        </form>   
        <button class="post-btn">Post</button>
       
    </div>
    </div>
    <div class="sec2">
        <button class="progress-btn">In Progress</button>
        <button class="upcoming-btn">Upcoming</button>
    </div>
     <div class="sec3"> 
        
    <?php foreach($data[0] as $value):?>
        
        <?php if($i%3==0 && $i!=0) : ?>
                </div>
                <div class="sec3"> 
        <?php endif ?>
        <a href="<?=ROOT?>/camppage?id=<?=$data[0][$i]->campID?>">
        <div class="card">
            <div class="c-top"></div>
            <div class="c-bottom">
                <h3 class="cheading"><?= $data[0][$i]->cName?></h3>
                <?= $data[0][$i]->description?>

            </div>
        </div>
        </a>
        <?php $i++; ?>
        <?php endforeach; ?>
       
        
    </div>


    
</body>
</html>