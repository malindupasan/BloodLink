<?php $this->view("includes/navbar");?>
<link rel="stylesheet" href="<?=ROOT?>/css/newsfeed.css">

<div class="sec1">
        <button id="news-btn" type="button" class="news-btn">News</button>
        <button id="posts-btn" class="posts-btn">Posts</button>
        
</div>
<div class="sec2">
    <h1>Community Post</h1>
    <a href="community_posts"><button class="post-btn">Add +</button></a>
</div>

<div class="sec3">
   <?php $i=0;?>
   <?php if($data1):?>
   <?php foreach ($data1 as $d):?>
    <div class="card">
        <div class="c-sec">
            <div class="c-sec-h"> <h1> <u> <?=$data1[$i]->title?> </u></h1>
            <small>Posted by <b><?=$data1[$i]->name?></b> on <?=$data1[$i]->date?> </small>
            </div>
            <div class="c-sec-cont"> <p> <?=$data1[$i]->description?></p> </div>
        </div>
        <div class="c-img">
            <img src=" <?=$data1[$i]->image?>" alt="">
        </div>
    </div>
    <?php $i++;?>
    <?php endforeach;?>
    <?php endif ?>

    <?php if($data2):?>
   <?php foreach ($data2 as $d):?>
    <div class="card">
        <div class="c-sec">
            <div class="c-sec-h"> <h1> <u> <?=$data2[$i]->title?> </u></h1>
            <small>Posted by <b><?=$data2[$i]->name?></b> on <?=$data2[$i]->date?> </small>
            </div>
            <div class="c-sec-cont"> <p> <?=$data2[$i]->description?></p> </div>
        </div>
        <div class="c-img">
            <img src=" <?=$data2[$i]->image?>" alt="">
        </div>
    </div>
    <?php $i++;?>
    <?php endforeach;?>
    <?php endif ?>

    <?php if($data3):?>
   <?php foreach ($data3 as $d):?>
    <div class="card">
        <div class="c-sec">
            <div class="c-sec-h"> <h1> <u> <?=$data3[$i]->title?> </u></h1>
            <small>Posted by <b><?=$data3[$i]->name?></b> on <?=$data3[$i]->date?> </small>
            </div>
            <div class="c-sec-cont"> <p> <?=$data3[$i]->description?></p> </div>
        </div>
        <div class="c-img">
            <img src=" <?=$data3[$i]->image?>" alt="">
        </div>
    </div>
    <?php $i++;?>
    <?php endforeach;?>
    <?php endif ?>
    

</div>