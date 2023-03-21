<?php $this->view("includes/navbar", $data);?>
<link rel="stylesheet" href="<?=ROOT?>/css/addpost.css">
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>


<script defer src="<?=ROOT?>/js/addcamp.js"></script>
<title>Community Post</title>
<div class="sec1">
    <h2 class="sec1-h">Community Post</h2>
</div>
<div class="sec2">

        <div class="sec2-1">
            <form action="" enctype="multipart/form-data" method="post" class="file_form" id="addpic">

            <div class="form-item">
                <label for="cName" class="label1">Title</label><br>
                <input type="text" class="inp1" id="cName" name="title"><br>
            </div>

            <div class="form-item">
                <label for="description" class="label1">Description</label><br>
                <textarea class="inp2" id="description" name="description"></textarea>
            </div>




        </div>
        <div class="sec2-2">

            <div class="add_camp_pic">

                <div class="file_form">

                    <input type="file" name="file" id="file" class="file">
                    </label>
                    <br>
                    <!-- <button type="submit" class="save" name=submit>Add Photo</button> -->
                </div>
                
    </form>
    <div class="sec2-btn">
                <button type="submit" form="addpic" class="addBtn">Add</button>
            </div>
</div>




</div>

</div>