
 <?php $this->view("includes/navbar",); ?>


    <link rel="stylesheet" href="http://localhost:8888/Bloood%20Link%202/public/css/camppage.css">
 

    <div class="sec1">
        <h2 class="sec1-h"><?= $data['rows']->cName?></h2>
     
    </div>


    <div class="sec2">
        <div class="sec2-1">
            <div class="s2Img">

            
            </div>
            <div class="s2Info">
                <span class="ftext">Place:</span> <span class="vtext"><?= $data['rows']->venue?></span> <br>
                <span class="ftext">Start Time:</span> <span class="vtext"><?= $data['rows']->time?></span><br>
                <span class="ftext">Date:</span><span class="vtext"><?= $data['rows']->date?></span><br>
                <span class="ftext">BloodBank:</span><span class="vtext"><?= $data['rows']->bloodBank?></span><br>
                <span class="ftext">Organizer:</span><span class="vtext">Add this Later</span><br>
                <span class="ftext">Phone No:</span> <span class="vtext"><?= $data['rows']->phone?></span><br>
            </div>
        </div>
        <div class="sec2-2">
            <div class="sec2Desc"></div>
            <button></button>
        </div>
    </div>




        
        <h1>THis is <?= $data['rows']->campID?>camppage</h1>
    </body>
</html>