

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>check location</title>


<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">
<link rel="stylesheet" href="<?= ROOT ?>/css/reqdonationcamps.css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script defer src="<?=ROOT?>/js/reqdonationcamps.js"></script>




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Check defects within area</div>

        </div>
        <form method="get">

<input type="text" name="check" id="" value="true" hidden>

<input type="text"  id="locationInp" class="locationinp">
<input type="text" class="inp1" id="p-latitude" name="latitude" hidden>
 <input type="text" class="inp1" id="p-longitude" name="longitude" hidden>
<div class="location">
    <!-- <label for="cName" class="labels1">Location: </label><br> -->
    
    <div class="map" id="map"></div>
</div>


<button class="btn">Check</button>

</div>

        
    

        
    </div>
    
    



</body>
</html>