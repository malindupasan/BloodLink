<?php $this->view("includes/navbar",); ?>
<?php $i=0 ?>

    <link rel="stylesheet" href="http://localhost:8888/Bloood%20Link%202/public/css/campaigns.css">
    <title>Campaigns</title>

    <div class="sec1">
        <h2 class="sec1-h">campaigns</h2>
        <div class="sec1-sub">
        <form method="get" class="searchfrom"> 
         <input type="text" value="<?=isset($_GET['find'])?$_GET['find']:''?>" name="find">   
        <button class="search-btn" type="submit">Search</button>
        </form>   
       <a href="<?=ROOT.'/addcamp'?>"> <button  class="post-btn">Post</button></a>
       
    </div>
    </div>
    <div class="sec2">
        <button class="progress-btn">Upcoming</button>
        <button class="upcoming-btn">In Progress</button>
        <button class="mycamps-btn">MyCampaigns</button>
    </div>
     <div class="sec3"> 
        
    <?php foreach($data[0] as $value):?>
        
        <?php if($i%3==0 && $i!=0) : ?>
                </div>
                <div class="sec3"> 
        <?php endif ?>
        <a href="<?=ROOT?>/camppage?id=<?=$data[0][$i]->campID?>">
        <div class="card">
            <div class="c-top">
                <img class="cimg" src="<?=ROOT.'/'.$data[0][$i]->camp_img?>" alt="">
            </div>
            <div class="c-bottom">
                <h3 class="cheading"><?= $data[0][$i]->cName?></h3>
                <p class="desctxt">
                <?php $marks=strlen($data[0][$i]->description); echo ($marks<255) ? $data[0][$i]->description : substr($data[0][$i]->description,0,250.)."...";?>          </p>

            </div>
        </div>
        </a>
        <?php $i++; ?>
        <?php endforeach; ?>
       
        
    </div>


    
</body>
</html>