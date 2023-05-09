<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>

<script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminhome.css">

<div class="overlay" id="overlay"></div>


<div class="main1">

    <div class="left">
        <div class="b12">
            <p></p>
        </div>

        <a class="a11" href="<?= ROOT ?>/AdminDashBoard">
            <div class="b11">
                <p class="">Dash Board</p>
            </div>
        </a>

        <a class="a11" href="<?= ROOT ?>/AdminHome">
            <div class="b11_1">
                <p class="pp">Blood Bank</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminBloodStocks">
            <div class="b11">
                <p>View Blood Stocks</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminDonationCamps">
            <div class="b11">
                <p>View Blood Donation <br> Camps</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminStaffUsers">
            <div class="b11">
                <p>Add Staff Users</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminPublicUsers">
            <div class="b11">
                <p>Public Users</p>
            </div>
        </a>



        <a class="a11" href="<?= ROOT ?>/AdminBugs">
            <div class="b11">
                <p>Bugs</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminNews">
            <div class="b11">
                <p>News</p>
            </div>
        </a>

    </div>

    <div class="right">


        <h1 class="h1">Blood Bank</h1>
        <div class="heading">
            <button class="add_bank" onclick="openForm()">Add Blood Bank
            </button>

            <!-- <button class="add_bank" onclick="openForm()">Add Blood Bank
    </button> -->

            <div class="s_tag">

                <form>
                    <input type="text" placeholder="&#xf002; Search Camps..." class="jssearch" oninput=get_data()>

                </form>
                <a href="<?= ROOT ?>/adminhome"><button class="reset">Reset</button></a>

            </div>

        </div>



        <div class="city">

            <div id="myForm" class="form-popup">
                <form method="post" class="form-container" id="Add_BB">

                    <h2>Enter Blood Bank</h2>

                    <div class="name1 ">
                        <label class="lable22" for="blood-bank-name">Blood Bank Name </label>
                        <input class="Bname success" type="text" id="name" name="name">
                        <small>error message</small>
                    </div>


                    <div class="l2">

                        <div class="d3 ">
                            <label class="lable22" for="street">Telephone No.</label>
                            <input class="d4-street error" type="text" id="telephone" name="telephone">
                            <small>error message</small>
                        </div>

                        <div class="d3">
                            <label class="lable22" for="city">House No. </label>
                            <input class="d3-city" type="text" id="house_no" name="house_no">
                            <small>error message</small>
                        </div>

                    </div>


                    <div class="l2">

                        <div class="d3">
                            <label class="lable22" for="street">City</label>
                            <input class="d4-street" type="text" id="city" name="city">
                            <small>error message</small>
                        </div>

                        <div class="d3">
                            <label class="lable22" for="city">Street </label>
                            <input class="d3-city" type="text" id="street" name="street">
                            <small>error message</small>
                        </div>

                    </div>


                    <div class="l2">

                        <div class="d3">
                            <label class="lable22" for="street">District</label>
                            <select class="d3-city" id="district" name="district">
                                <option value="Ampara">Ampara</option>
                                <option value="Anuradhapura">Anuradhapura</option>
                                <option value="Badulla">Badulla</option>
                                <option value="Batticaloa">Batticaloa</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Galle">Galle</option>
                                <option value="Gampaha">Gampaha</option>
                                <option value="Hambantota">Hambantota</option>
                                <option value="Jaffna">Jaffna</option>
                                <option value="Kalutara">Kalutara</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Kegalle">Kegalle</option>
                                <option value="Kilinochchi">Kilinochchi</option>
                                <option value="Kurunegala">Kurunegala</option>
                                <option value="Mannar">Mannar</option>
                                <option value="Matale">Matale</option>
                                <option value="Matara">Matara</option>
                                <option value="Monaragala">Monaragala</option>
                                <option value="Mullaitivu">Mullaitivu</option>
                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                <option value="Polonnaruwa">Polonnaruwa</option>
                                <option value="Puttalam">Puttalam</option>
                                <option value="Ratnapura">Ratnapura</option>
                                <option value="Trincomalee">Trincomalee</option>
                                <option value="Vavuniya">Vavuniya</option>
                            </select>
                            <small>error message</small>
                        </div>

                        <div class="d3">
                            <label class="lable22" for="city">Province </label>
                            <!-- <input class="d3-city" type="text" id="province" name="province"> -->
                            <select class="d3-city" id="province" name="province">
                                <option value="Central">Central</option>
                                <option value="Eastern">Eastern</option>
                                <option value="Northern">Northern</option>
                                <option value="North Central">North Central</option>
                                <option value="North Western">North Western</option>
                                <option value="Sabaragamuwa">Sabaragamuwa</option>
                                <option value="Southern">Southern</option>
                                <option value="Uva">Uva</option>
                                <option value="Western">Western</option>
                            </select>
                            <small>error message</small>
                        </div>

                    </div>


                    <div class="map">
                        <label class="lable22" class="loc" for="map">Location</label>
                        <input class="map-in" type="text" id="map" name="map">

                    </div>


                    <div class="but2">
                        <input type="submit" class="add_bank1" name="">
                        <!-- <button name="add"><input type="submit" class="add_bank1" name=""></button> -->
                        <button type="button" class="add_bank1" onclick="closeForm()">Close</button>
                    </div>

                </form>
            </div>

        </div>



        <div class="report">
            <h1 class="report2">Blood Bank Details</h1>
        </div>


        <div class="table jstable">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>City</th>
                        <th>Street</th>
                        <th>House NO</th>
                        <th>Tel Number</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($rows3 as $value) : ?>
                        <tr>

                            <td><?= $value->name ?></a></td>
                            <td><?= $value->city ?></td>
                            <td><?= $value->street ?></td>
                            <td><?= $value->house_no ?></td>
                            <td><?= $value->telephone ?></td>
                            <td>


                                <div class="edit">
                                    <div class="city1">
                                        <button id="editBtn<?= $value->blood_bank_id ?>" class="edit1" onclick="openForm1(this.id)">Edit
                                        </button>

                                        <div id="myForm<?= $value->blood_bank_id ?>" class="form-popup myForm1">
                                            <form method="post" class="form-container">

                                                <h2>Edit Blood Bank</h2>


                                                <div class="name1" type="hidden">
                                                    <!-- <label class="lable22" for="blood-bank-name" type="hidden">ID </label> -->
                                                    <input class="Bname" type="hidden" id="blood_bank_id" name="blood_bank_id" value="<?= $value->blood_bank_id ?>" readonly>
                                                </div>


                                                <div class="name1 ">
                                                    <label class="lable22" for="blood-bank-name">Blood Bank Name </label>
                                                    <input class="Bname success" type="text" id="name" name="name" value="<?= $value->name ?>">
                                                    <small>error message</small>
                                                </div>


                                                <div class="l2">

                                                    <div class="d3 ">
                                                        <label class="lable22" for="street">Telephone No.</label>
                                                        <input class="d4-street error" type="text" id="telephone" name="telephone" value="<?= $value->telephone ?>">
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="d3">
                                                        <label class="lable22" for="city">House No. </label>
                                                        <input class="d3-city" type="text" id="house_no" name="house_no" value="<?= $value->house_no ?>">
                                                        <small>error message</small>
                                                    </div>

                                                </div>


                                                <div class="l2">

                                                    <div class="d3">
                                                        <label class="lable22" for="street">City</label>
                                                        <input class="d4-street" type="text" id="city" name="city" value="<?= $value->city ?>">
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="d3">
                                                        <label class="lable22" for="city">Street </label>
                                                        <input class="d3-city" type="text" id="street" name="street" value="<?= $value->street ?>">
                                                        <small>error message</small>
                                                    </div>

                                                </div>


                                                <div class="l2">

                                                    <div class="d3">
                                                        <label class="lable22" for="street">District</label>
                                                        <select class="d3-city" id="district" name="district">
                                                            <option value="Ampara" <?php echo (trim($value->district) == "Ampara" ? "selected" : ""); ?>>Ampara</option>
                                                            <option value="Anuradhapura" <?php echo (trim($value->district) == "Anuradhapura" ? "selected" : ""); ?>>Anuradhapura</option>
                                                            <option value="Badulla" <?php echo (trim($value->district) == "Badulla" ? "selected" : ""); ?>>Badulla</option>
                                                            <option value="Batticaloa" <?php echo (trim($value->district) == "Batticaloa" ? "selected" : ""); ?>>Batticaloa</option>
                                                            <option value="Colombo" <?php echo (trim($value->district) == "Colombo" ? "selected" : ""); ?>>Colombo</option>
                                                            <option value="Galle" <?php echo (trim($value->district) == "Galle" ? "selected" : ""); ?>>Galle</option>
                                                            <option value="Gampaha" <?php echo (trim($value->district) == "Gampaha" ? "selected" : ""); ?>>Gampaha</option>
                                                            <option value="Hambantota" <?php echo (trim($value->district) == "Hambantota" ? "selected" : ""); ?>>Hambantota</option>
                                                            <option value="Jaffna" <?php echo (trim($value->district) == "Jaffna" ? "selected" : ""); ?>>Jaffna</option>
                                                            <option value="Kalutara" <?php echo (trim($value->district) == "Kalutara" ? "selected" : ""); ?>>Kalutara</option>
                                                            <option value="Kandy" <?php echo (trim($value->district) == "Kandy" ? "selected" : ""); ?>>Kandy</option>
                                                            <option value="Kegalle" <?php echo (trim($value->district) == "Kegalle" ? "selected" : ""); ?>>Kegalle</option>
                                                            <option value="Kilinochchi" <?php echo (trim($value->district) == "Kilinochchi" ? "selected" : ""); ?>>Kilinochchi</option>
                                                            <option value="Kurunegala" <?php echo (trim($value->district) == "Kurunegala" ? "selected" : ""); ?>>Kurunegala</option>
                                                            <option value="Mannar" <?php echo (trim($value->district) == "Mannar" ? "selected" : ""); ?>>Mannar</option>
                                                            <option value="Matale" <?php echo (trim($value->district) == "Matale" ? "selected" : ""); ?>>Matale</option>
                                                            <option value="Matara" <?php echo (trim($value->district) == "Matara" ? "selected" : ""); ?>>Matara</option>
                                                            <option value="Monaragala" <?php echo (trim($value->district) == "Monaragala" ? "selected" : ""); ?>>Monaragala</option>
                                                            <option value="Mullaitivu" <?php echo (trim($value->district) == "Mullaitivu" ? "selected" : ""); ?>>Mullaitivu</option>
                                                            <option value="Nuwara Eliya" <?php echo (trim($value->district) == "Nuwara Eliya" ? "selected" : ""); ?>>Nuwara Eliya</option>
                                                            <option value="Polonnaruwa" <?php echo (trim($value->district) == "Polonnaruwa" ? "selected" : ""); ?>>Polonnaruwa</option>
                                                            <option value="Puttalam" <?php echo (trim($value->district) == "Puttalam" ? "selected" : ""); ?>>Puttalam</option>
                                                            <option value="Ratnapura" <?php echo (trim($value->district) == "Ratnapura" ? "selected" : ""); ?>>Ratnapura</option>
                                                            <option value="Trincomalee" <?php echo (trim($value->district) == "Trincomalee" ? "selected" : ""); ?>>Trincomalee</option>
                                                            <option value="Vavuniya" <?php echo (trim($value->district) == "Vavuniya" ? "selected" : ""); ?>>Vavuniya</option>
                                                        </select>
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="d3">
                                                        <label class="lable22" for="city">Province </label>
                                                        <!-- <input class="d3-city" type="text" id="province" name="province"> -->
                                                        <select class="d3-city" id="province" name="province">
                                                            <option value="Central" <?php echo (trim($value->province) == "Central" ? "selected" : ""); ?>>Central</option>
                                                            <option value="Eastern" <?php echo (trim($value->province) == "Eastern" ? "selected" : ""); ?>>Eastern</option>
                                                            <option value="Northern" <?php echo (trim($value->province) == "Northern" ? "selected" : ""); ?>>Northern</option>
                                                            <option value="North Central" <?php echo (trim($value->province) == "North Central" ? "selected" : ""); ?>>North Central</option>
                                                            <option value="North Western" <?php echo (trim($value->province) == "North Western" ? "selected" : ""); ?>>North Western</option>
                                                            <option value="Sabaragamuwa" <?php echo (trim($value->province) == "Sabaragamuwa" ? "selected" : ""); ?>>Sabaragamuwa</option>
                                                            <option value="Southern" <?php echo (trim($value->province) == "Southern" ? "selected" : ""); ?>>Southern</option>
                                                            <option value="Uva" <?php echo (trim($value->province) == "Uva" ? "selected" : ""); ?>>Uva</option>
                                                            <option value="Western" <?php echo (trim($value->province) == "Western" ? "selected" : ""); ?>>Western</option>
                                                        </select>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <input name="editForm" value=1 type="hidden">

                                                <div class="but21">
                                                    <input type="submit" class="add_bank1">
                                                    <!-- <button name="update"><input id ="" type="submit" class="add_bank1" ></button> -->
                                                    <button type="button" id="closeBtn<?= $value->blood_bank_id ?>" class="add_bank1" onclick="closeForm1(this.id)">Close</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="upc"><a class="bankname" a href="<?= ROOT ?>/AdminBloodbankHome?id=<?= $value->blood_bank_id  ?>"> View </div>
                            </td>

                        </tr>




                    <?php $i++;
                    endforeach; ?>
                </tbody>

            </table>




        </div>

    </div>


</div>







































<!-- 
<div class="report">
    <h1 class="report1">Reports</h1>
</div>


<div class="r_div">
    <form class="form1" action="" method="post">
        <div class="from1">
            <label for="from">From</label>
            <input class="input1" type="date" name="from" id="from" class="from">
        </div>

        <div class="to">
            <label class="lable1" for="to">To</label>
            <input class="input1" type="date" name="to" id="to" class="to">
        </div>

        <div class="but">
            <button class="button1" type="submit" class="submit">Submit</button>
        </div>

    </form>
</div> -->


<script src="<?= ROOT ?>/js/AdminAddbloodbank.js"></script>


<script>
    function openForm() {
        document.getElementById("myForm").classList.add("show");
        document.querySelector(".overlay").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").classList.remove("show");
        document.querySelector(".overlay").style.display = "none";
    }

    function openForm1(id) {
        id = id.replace("editBtn", "");
        document.getElementById("myForm" + id).classList.add("show");
        document.querySelector(".overlay").style.display = "block";
        document.getElementById("form").submit();
    }

    function closeForm1(id) {
        id = id.replace("closeBtn", "");
        document.getElementById("myForm" + id).classList.remove("show");
        document.querySelector(".overlay").style.display = "none";
    }

    function get_data() {
        var text = document.querySelector(".jssearch").value;
        var form = new FormData();

        form.append('text', text);
        var ajax = new XMLHttpRequest();
        ajax.addEventListener('readystatechange', (e) => {
            if (ajax.readyState == 4 && ajax.status == 200) {
                //res
                // console.log(ajax.responseText);
                var obj = JSON.parse(ajax.responseText);
                console.log(obj);
                var resultdiv = document.querySelector(".jstable");
                if (resultdiv) { // check if the element exists
                    var str = "<table><thead><tr><th>Name</th><th>City</th><th>Street</th><th>House NO</th><th>Tel Number</th><th></th><th></th></tr></thead>";
                    for (var i = obj.length - 1; i >= 0; i--) {
                        console.log(obj[i].name);
                        str += "<tr class='hov'><td>" + obj[i].name +
                            "</td> <td>" + obj[i].city +
                            "</td> <td>" + obj[i].street +
                            "</td> <td>" + obj[i].house_no +
                            "</td> <td>" + obj[i].telephone +
                            "</td> <td>" + `                        
                                            <div class="edit">
                                                <div class="city1">
                                                    <button id="editBtn${obj[i].blood_bank_id}" class="edit1" onclick="openForm1(this.id)">Edit
                                                    </button>

                                                    <div id="myForm${obj[i].blood_bank_id}" class="form-popup myForm1">
                                                        <form method="post" class="form-container">

                                                            <h2>Edit Blood Bank</h2>

                                                                        
                                                            <div class="name1" type="hidden">
                                                                <!-- <label class="lable22" for="blood-bank-name" type="hidden">ID </label> -->
                                                                <input class="Bname" type="hidden" id="blood_bank_id" name="blood_bank_id" value="<?= $value->blood_bank_id ?>" readonly>
                                                            </div>


                                                            <div class="name1 ">
                                                                <label class="lable22" for="blood-bank-name">Blood Bank Name </label>
                                                                <input class="Bname success" type="text" id="name" name="name" value="<?= $value->name ?>">
                                                                <small>error message</small>
                                                            </div>


                                                            <div class="l2">

                                                                <div class="d3 ">
                                                                    <label class="lable22" for="street">Telephone No.</label>
                                                                    <input class="d4-street error" type="text" id="telephone" name="telephone" value="<?= $value->telephone ?>">
                                                                    <small>error message</small>
                                                                </div>

                                                                <div class="d3">
                                                                    <label class="lable22" for="city">House No. </label>
                                                                    <input class="d3-city" type="text" id="house_no" name="house_no" value="<?= $value->house_no ?>">
                                                                    <small>error message</small>
                                                                </div>

                                                            </div>


                                                            <div class="l2">

                                                                <div class="d3">
                                                                    <label class="lable22" for="street">City</label>
                                                                    <input class="d4-street" type="text" id="city" name="city" value="<?= $value->city ?>">
                                                                    <small>error message</small>
                                                                </div>

                                                                <div class="d3">
                                                                    <label class="lable22" for="city">Street </label>
                                                                    <input class="d3-city" type="text" id="street" name="street" value="<?= $value->street ?>">
                                                                    <small>error message</small>
                                                                </div>

                                                            </div>


                                                            <div class="l2">

                                                                <div class="d3">
                                                                    <label class="lable22" for="street">District</label>
                                                                    <select class="d3-city" id="district" name="district" >
                                                                        <option value="Ampara" <?php echo (trim($value->district) == "Ampara" ? "selected" : ""); ?>>Ampara</option>
                                                                        <option value="Anuradhapura" <?php echo (trim($value->district) == "Anuradhapura" ? "selected" : ""); ?>>Anuradhapura</option>
                                                                        <option value="Badulla" <?php echo (trim($value->district) == "Badulla" ? "selected" : ""); ?>>Badulla</option>
                                                                        <option value="Batticaloa" <?php echo (trim($value->district) == "Batticaloa" ? "selected" : ""); ?>>Batticaloa</option>
                                                                        <option value="Colombo" <?php echo (trim($value->district) == "Colombo" ? "selected" : ""); ?> >Colombo</option>
                                                                        <option value="Galle" <?php echo (trim($value->district) == "Galle" ? "selected" : ""); ?>>Galle</option>
                                                                        <option value="Gampaha" <?php echo (trim($value->district) == "Gampaha" ? "selected" : ""); ?>>Gampaha</option>
                                                                        <option value="Hambantota" <?php echo (trim($value->district) == "Hambantota" ? "selected" : ""); ?>>Hambantota</option>
                                                                        <option value="Jaffna" <?php echo (trim($value->district) == "Jaffna" ? "selected" : ""); ?>>Jaffna</option>
                                                                        <option value="Kalutara" <?php echo (trim($value->district) == "Kalutara" ? "selected" : ""); ?>>Kalutara</option>
                                                                        <option value="Kandy" <?php echo (trim($value->district) == "Kandy" ? "selected" : ""); ?>>Kandy</option>
                                                                        <option value="Kegalle" <?php echo (trim($value->district) == "Kegalle" ? "selected" : ""); ?>>Kegalle</option>
                                                                        <option value="Kilinochchi" <?php echo (trim($value->district) == "Kilinochchi" ? "selected" : ""); ?>>Kilinochchi</option>
                                                                        <option value="Kurunegala" <?php echo (trim($value->district) == "Kurunegala" ? "selected" : ""); ?>>Kurunegala</option>
                                                                        <option value="Mannar" <?php echo (trim($value->district) == "Mannar" ? "selected" : ""); ?>>Mannar</option>
                                                                        <option value="Matale" <?php echo (trim($value->district) == "Matale" ? "selected" : ""); ?>>Matale</option>
                                                                        <option value="Matara" <?php echo (trim($value->district) == "Matara" ? "selected" : ""); ?>>Matara</option>
                                                                        <option value="Monaragala" <?php echo (trim($value->district) == "Monaragala" ? "selected" : ""); ?>>Monaragala</option>
                                                                        <option value="Mullaitivu" <?php echo (trim($value->district) == "Mullaitivu" ? "selected" : ""); ?>>Mullaitivu</option>
                                                                        <option value="Nuwara Eliya" <?php echo (trim($value->district) == "Nuwara Eliya" ? "selected" : ""); ?>>Nuwara Eliya</option>
                                                                        <option value="Polonnaruwa" <?php echo (trim($value->district) == "Polonnaruwa" ? "selected" : ""); ?>>Polonnaruwa</option>
                                                                        <option value="Puttalam" <?php echo (trim($value->district) == "Puttalam" ? "selected" : ""); ?>>Puttalam</option>
                                                                        <option value="Ratnapura" <?php echo (trim($value->district) == "Ratnapura" ? "selected" : ""); ?>>Ratnapura</option>
                                                                        <option value="Trincomalee" <?php echo (trim($value->district) == "Trincomalee" ? "selected" : ""); ?>>Trincomalee</option>
                                                                        <option value="Vavuniya" <?php echo (trim($value->district) == "Vavuniya" ? "selected" : ""); ?>>Vavuniya</option>
                                                                    </select>
                                                                    <small>error message</small>
                                                                </div>

                                                                <div class="d3">
                                                                    <label class="lable22" for="city">Province </label>
                                                                    <select class="d3-city" id="province" name="province">
                                                                        <option value="Central" <?php echo (trim($value->province) == "Central" ? "selected" : ""); ?>>Central</option>
                                                                        <option value="Eastern" <?php echo (trim($value->province) == "Eastern" ? "selected" : ""); ?>>Eastern</option>
                                                                        <option value="Northern" <?php echo (trim($value->province) == "Northern" ? "selected" : ""); ?>>Northern</option>
                                                                        <option value="North Central" <?php echo (trim($value->province) == "North Central" ? "selected" : ""); ?>>North Central</option>
                                                                        <option value="North Western" <?php echo (trim($value->province) == "North Western" ? "selected" : ""); ?>>North Western</option>
                                                                        <option value="Sabaragamuwa" <?php echo (trim($value->province) == "Sabaragamuwa" ? "selected" : ""); ?>>Sabaragamuwa</option>
                                                                        <option value="Southern" <?php echo (trim($value->province) == "Southern" ? "selected" : ""); ?>>Southern</option>
                                                                        <option value="Uva" <?php echo (trim($value->province) == "Uva" ? "selected" : ""); ?>>Uva</option>
                                                                        <option value="Western" <?php echo (trim($value->province) == "Western" ? "selected" : ""); ?>>Western</option>
                                                                    </select>
                                                                    <small>error message</small>
                                                                </div>

                                                            </div>

                                                            <input name="editForm" value=1 type="hidden">

                                                            <div class="but21">
                                                                <input type="submit" class="add_bank1">                                                    
                                                                <button type="button" id="closeBtn<?= $value->blood_bank_id ?>" class="add_bank1" onclick="closeForm1(this.id)">Close</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>` +
                            "</td> <td>" + `<div class="upc"><a class="bankname" a href="<?= ROOT ?>/AdminBloodbankHome?id=${obj[i].blood_bank_id}"> View </div>` +
                            "</td> </tr>";
                    }
                    resultdiv.innerHTML = str;
                    // console.log('Hello');
                }
            }
        })
        ajax.open('post', '<?= ROOT ?>/adminhome/index1', true);
        ajax.send(form);
    }
</script>