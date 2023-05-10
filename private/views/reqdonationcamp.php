<?php $this->view("includes/navbar", $data); ?>
<link rel="stylesheet" href="<?= ROOT ?>/css/reqdonationcamps.css">
<script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script defer src="<?= ROOT ?>/js/reqdonationcamps.js"></script>
<title>Organize Request</title>

<div class="sec1">

        <h1>Request to organize blood donation camp</h1>
</div>

<form method="get" id="campreqform">
        <div class="sec2">
                <div class="form-item">
                        <label for="cName" class="label1">Campaign Name</label><br>
                        <input type="text" class="inp1" id="cName" name="name"><br>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                </div>
                <div class="form-item-c">
                        <div class="subform-item">
                                <label for="cName" class="labels1">City</label><br>
                                <input type="text" class="inps inps1" id="city" name="city" value=""><br>
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <small>error message</small>
                        </div>
                        <div class="subform-item">
                                <label for="cName" class="labels2">No :</label><br>
                                <input type="text" class="inps" id="houseno" name="house_no"><br>
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <small>error message</small>
                        </div>
                </div>
                <div class="form-item">
                        <label for="cName" class="label1">Street</label><br>
                        <input type="text" class="inp1" id="street" name="street"><br>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                </div>
                <div class="form-item-c">
                        <div class="subform-item">
                                <label for="cName" class="labels1">Phone</label><br>
                                <input type="text" class="inps inps1" id="phone" name="telephone"><br>
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <small>error message</small>
                        </div>
                        <div class="subform-item">
                                <label for="cName" class="labels2">Date</label><br>
                                <input type="date" class="inps" id="date" name="date"><br>
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <small>error message</small>
                        </div>
                </div>

                <input type="text" id="locationInp" class="locationinp">
                <input type="text" class="inp1" id="p-latitude" name="latitude" hidden>
                <input type="text" class="inp1" id="p-longitude" name="longitude" hidden>
                <div class="location">
                        <label for="cName" class="labels1">Location</label><br>

                        <div class="map" id="map"></div>
                </div>


                <button type="submit" class="btn">Request</button>

        </div>
</form>