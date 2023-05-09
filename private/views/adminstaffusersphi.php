<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>


<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminstaffusersphi.css">


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
            <div class="b11">
                <p class="">Blood Bank</p>
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
            <div class="">
                <p class="pp">Add Staff Users</p>
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



        <div class="">
            <h1 class="h1">Staff Users</h1>
        </div>


        <div class="heading">

            <div class="add_bank13">
                <button class="add_bank12" onclick="openForm()">Add User
                </button>
            </div>




            <div class="navlinks">

                <a class="a" href="<?= ROOT ?>/adminstaffusers">
                    <div class="tocheck ">
                        <div class="cont">Doctor</div>
                    </div>
                </a>

                <a class="a" href="<?= ROOT ?>/adminstaffuserslabstaff">
                    <div class="checked ">
                        <div class="cont">Lab Staff</div>

                    </div>
                </a>

                <a class="a" href="<?= ROOT ?>/adminstaffusersphi">
                    <div class="rejected activenav">
                        <div class="cont">PHI</div>

                    </div>
                </a>

            </div>

            <div class="s_tag">
                <form>
                    <input type="text" placeholder="&#xf002; Search PHI..." class="jssearch" oninput=get_data()>

                </form>
                <a href="<?= ROOT ?>/adminstaffusersphi"><button class="reset">Reset</button></a>

            </div>



        </div>


        <div class="city">

            <div id="myForm" class="form-popup">
                <form method="post" class="form-container">

                    <h2>Add PHI</h2>

                    <div class="name1">
                        <label class="lable22" for="blood-bank-name">Name </label>
                        <input class="Bname" type="text" id="name" name="name"><br>
                        <small>error message</small>
                    </div>

                    <div class="l2">

                        <div class="d3">
                            <label class="lable22" for="no">Email </label>
                            <input class="d3-no" type="text" id="email" name="email"><br>
                            <small>error message</small>
                        </div>

                        <div class="d3">
                            <label class="lable22" for="no">NIC </label>
                            <input class="d3-no" type="text" id="nic" name="nic"><br>
                            <small>error message</small>
                        </div>

                    </div>

                    <div class="name1">
                        <label class="lable22" for="blood-bank-name">Street </label>
                        <input class="Bname" type="text" id="street" name="street"><br>
                        <small>error message</small>
                    </div>

                    <div class="l2">

                        <div class="d3">
                            <label class="lable22" for="no">House No. </label>
                            <input class="d3-no" type="text" id="house_no" name="house_no"><br>
                            <small>error message</small>
                        </div>

                        <div class="d3">
                            <label class="lable22" for="no">City </label>
                            <input class="d3-no" type="text" id="city" name="city"><br>
                            <small>error message</small>
                        </div>

                    </div>

                    <div class="l2">

                        <div class="d3 ">
                            <label class="lable22" for="street">Telephone No.</label>
                            <input class="d4-street error" type="text" id="telephone" name="telephone">
                            <small>error message</small>
                        </div>

                        <div class="d3">
                            <label class="lable22" for="street">Medical ID</label>
                            <input class="d4-street" type="text" id="medical_id" name="medical_id"><br>
                            <small>error message</small>
                        </div>

                    </div>

                    <div class="l2">

                        <div class="d3">
                            <label class="lable22" for="street">Blood Bank ID</label>
                            <input class="d4-street" type="text" id="blood_bank_id " name="blood_bank_id "><br>
                            <small>error message</small>
                        </div>

                    </div>

                    <div class="l2">

                        <div class="d3">
                            <label class="lable22" for="city">Password </label>
                            <input class="d3-city" type="text" id="password" name="password"><br>
                            <small>error message</small>
                        </div>

                        <div class="d3">
                            <label class="lable22" for="city">Confirm Password </label>
                            <input class="d3-city" type="text" id="password" name="password"><br>
                            <small>error message</small>
                        </div>

                    </div>

                    <div class="but2">
                        <input type="submit" class="add_bank1" name="addtocart">
                        <button type="button" class="add_bank1" onclick="closeForm()">Close</button>
                    </div>

                </form>
            </div>

        </div>


        <!-- 
<div class="row_1">

    <div class="navlinks">

        <a class="a" href="<?= ROOT ?>/adminstaffusers">
            <div class="tocheck">
                <div class="cont">Doctor</div>
            </div>
        </a>

        <a class="a" href="<?= ROOT ?>/adminstaffuserslabstaff">
            <div class="checked ">
                <div class="cont">Lab Staff</div>

            </div>
        </a>

        <a class="a" href="<?= ROOT ?>/adminstaffusersphi">
            <div class="rejected activenav">
                <div class="cont">PHI</div>

            </div>
        </a>

    </div>
</div> -->

        <div class="table jstable">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Medical ID</th>
                        <th>Name</th>
                        <th>User NIC</th>
                        <th>Blood Bank</th>
                        <th>Tel Number</th>
                        <th>Email</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data[0] as $value) : ?>
                        <tr>
                            <td><?= $data[0][$i]->medical_id ?></td>
                            <td><?= $data[0][$i]->name ?></td>
                            <td><?= $data[0][$i]->nic ?></td>
                            <td><?= $data[0][$i]->blood_bank_name ?></td>
                            <td><?= $data[0][$i]->telephone ?></td>
                            <td><?= $data[0][$i]->email ?></td>
                            <td>

                                <div class="edit">
                                    <div class="city1">
                                        <button id="editBtn<?= $value->id ?>" name="edit" class="edit1" onclick="openForm1(this.id)">Edit
                                        </button>

                                        <div id="myForm<?= $value->id ?>" class="form-popup myForm1">
                                            <form method="post" class="form-container">

                                                <h2>Edit PHI</h2>


                                                <div class="name1" hidden>
                                                    <label class="lable22" for="blood-bank-name">ID </label>
                                                    <input class="Bname" type="text" id="id" name="id" value="<?= $value->id ?>" readonly><br>
                                                </div>

                                                <div class="name1">
                                                    <label class="lable22" for="blood-bank-name">Name </label>
                                                    <input class="Bname" type="text" id="name" name="name" value="<?= $value->name ?>"><br>
                                                    <small>error message</small>
                                                </div>

                                                <div class="l2">

                                                    <div class="d3">
                                                        <label class="lable22" for="no">Email </label>
                                                        <input class="d3-no" type="text" id="email" name="email" value="<?= $value->email ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="d3">
                                                        <label class="lable22" for="no">NIC </label>
                                                        <input class="d3-no" type="text" id="nic" name="nic" value="<?= $value->nic ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <div class="name1">
                                                    <label class="lable22" for="blood-bank-name">Street </label>
                                                    <input class="Bname" type="text" id="street" name="street" value="<?= $value->street ?>"><br>
                                                    <small>error message</small>
                                                </div>

                                                <div class="l2">

                                                    <div class="d3">
                                                        <label class="lable22" for="no">House No. </label>
                                                        <input class="d3-no" type="text" id="house_no" name="house_no" value="<?= $value->house_no ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="d3">
                                                        <label class="lable22" for="no">City </label>
                                                        <input class="d3-no" type="text" id="city" name="city" value="<?= $value->city ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <div class="l2">

                                                    <div class="d3 ">
                                                        <label class="lable22" for="street">Telephone No.</label>
                                                        <input class="d4-street error" type="text" id="telephone" name="telephone" value="<?= $value->telephone ?>">
                                                        <small>error message</small>
                                                    </div>

                                                    <div class="d3">
                                                        <label class="lable22" for="street">Blood Bank ID</label>
                                                        <input class="d4-street" type="text" id="blood_bank_id " name="blood_bank_id" value="<?= $value->blood_bank_id ?>"><br>
                                                        <small>error message</small>
                                                    </div>

                                                </div>

                                                <input name="editForm" value=1 type="hidden">

                                                <div class="but2">
                                                    <input type="submit" class="add_bank1">
                                                    <button type="button" class="add_bank1" id="closeBtn<?= $value->id ?>" onclick="closeForm1(this.id)">Close</button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>

                            </td>

                        </tr>

                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>

</div>








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
                    var str = "<table><thead><tr><th>Medical ID</th><th>Name</th><th>User NIC</th><th>Blood Bank</th><th>Telephone</th><th>Email</th><th></th></tr><thead>";
                    for (var i = obj.length - 1; i >= 0; i--) {
                        console.log(obj[i].name);
                        str += "<tr class='hov'><td>" + obj[i].medical_id +
                            "</td> <td>" + obj[i].name +
                            "</td> <td>" + obj[i].nic +
                            "</td> <td>" + obj[i].blood_bank_name +
                            "</td> <td>" + obj[i].telephone +
                            "</td> <td>" + obj[i].email +
                            "</td> <td>" + `<div class="edit">
                            <div class="city1">
                                <button id="editBtn${obj[i].id}" name="" class="edit1" onclick="openForm1(this.id)">Edit
                                </button>



                                <div id="myForm${obj[i].id}" class="form-popup myForm1">
                                    <form method="post" class="form-container">

                                        <h2>Edit Doctor</h2>

                                        <div class="name1">
                                            <label class="lable22" for="blood-bank-name">ID </label>
                                            <input class="Bname" type="text" id="id" name="id" value="${obj[i].id}" readonly><br>
                                        </div>

                                        <div class="name1">
                                            <label class="lable22" for="blood-bank-name">Blood Bank Name </label>
                                            <input class="Bname" type="text" id="name" name="name" value="${obj[i].name}"><br>
                                        </div>

                                        <div class="d3">
                                            <label class="lable22" for="no">Email </label>
                                            <input class="d3-no" type="text" id="email" name="email" value="${obj[i].email}"><br>
                                        </div>

                                        <div class="name1">
                                            <label class="lable22" for="blood-bank-name">Telephone No. </label>
                                            <input class="Bname" type="text" id="telephone" name="telephone" value="${obj[i].telephone}"><br>
                                        </div>


                                        <div class="d3">
                                            <label class="lable22" for="no">NIC </label>
                                            <input class="d3-no" type="text" id="nic" name="nic" value="${obj[i].nic}"><br>
                                        </div>

                                        <div class="street">
                                            <label class="lable22" for="street">Medical ID</label>
                                            <input class="d4-street" type="text" id="medical_id" name="medical_id" value="${obj[i].medical_id}"><br>
                                        </div>

                                        <div class="street">
                                            <label class="lable22" for="street">Blood Bank ID</label>
                                            <input class="d4-street" type="text" id="blood_bank_id " name="blood_bank_id" value="${obj[i].blood_bank_id}"><br>
                                        </div>

                                        <input name="editForm" value=1 type="hidden">

                                        <div class="but2">
                                            <input type="submit" class="add_bank1" >
                                            <button type="button" class="add_bank1" id="closeBtn${obj[i].id}" onclick="closeForm1(this.id)">Close</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>` +
                            "</td> </tr>";
                    }
                    resultdiv.innerHTML = str;
                    // console.log('Hello');
                }
            }
        })
        ajax.open('post', '<?= ROOT ?>/adminstaffusersphi/index2', true);
        ajax.send(form);
    }
</script>