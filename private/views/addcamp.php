<?php $this->view("includes/navbar",$data);?>
<link rel="stylesheet" href="http://localhost:8888/Bloood%20Link%202/public/css/addcamp.css">
<title>Add camp</title>
<div class="sec1">
    <h2 class="sec1-h">Campaigns</h2>
</div>
<div class="sec2">
    <div class="sec2-1">
        <form action="">



            <div class="form-item">
                <label for="campName" class="label1">Campaign Name</label><br>
                <input type="text" class="inp1"><br>
            </div>

            <div class="form-item">
                <label for="campName" class="label1">Date</label><br>
                <input type="text" class="inp1"><br>
            </div>
            <div class="form-item">
                <label for="campName" class="label1">Venue</label><br>
                <input type="text" class="inp1"><br>
            </div>
            <div class="form-item">
                <label for="campName" class="label1">Email</label><br>
                <input type="text" class="inp1"><br>
            </div>
            <div class="form-item">
                <label for="campName" class="label1">Phone NO</label><br>
                <input type="text" class="inp1"><br>
            </div>
            <div class="form-item">
                <label for="campName" class="label1">Starting Time</label><br>
                <input type="text" class="inp1"><br>
            </div>
            <div class="form-item">
                <label for="campName" class="label1">Blood Bank</label><br>
                <input type="text" class="inp1"><br>
            </div>
            <div class="form-item">
                <label for="campName" class="label1">Description</label><br>
                <textarea class="inp2"></textarea>
            </div>


        </form>
    </div>
    <div class="sec2-2">
        
        <div class="add_camp_pic">

            <!-- <p class="heading">Change profile pic</p> -->

            <!-- <div class="visible">
                <i class="fa-solid fa-circle-exclamation"></i>
                <small>error message</small>
            </div> -->

            <form method="post" enctype="multipart/form-data" class="file_form" id="addpic">

              
                  
                    <input type="file" name="file" id="file" class="file">
                </label>
                <br>

                <button type="submit" class="save" name=submit>Add Photo</button>

            </form>

        </div>

        <div class="sec2-btn">
            <button type="submit" form="addpic" class="addBtn" >Add</button>
        </div>


    </div>

</div>