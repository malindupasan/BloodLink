<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminbloodbankhome.css">




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

        <div class="">
            <h1 class="h1"><?= $rows[0]->name ?></h1>
        </div>

        <div class="form-add">
            <form method="post" id="form">
                <div class="d">
                    <div class="close">
                        <div class="d3">
                            <div class="city">
                                <label for="blood-bank-name">Name</label>
                                <label class="infor" id="name" name="name">: <?= $rows[0]->name ?></label>
                            </div>
                        </div>

                        <div class="d2">
                            <div class="">
                                <label for="telephone-number">Mobile </label>
                                <label class="infor" id="telephone" name="telephone">: <?= $rows[0]->telephone ?></label>
                            </div>
                        </div>

                        <div class="d3">
                            <div class="city">
                                <label for="no">House No. </label>
                                <label class="infor" id="house_no" name="house_no">: <?= $rows[0]->house_no ?></label>
                            </div>
                        </div>

                        <div class="street">
                            <label for="street">Street</label>
                            <label class="infor" id="street" name="street">: <?= $rows[0]->street ?></label>
                        </div>

                        <div class="d2">
                            <div class="city">
                                <label for="city">City </label>
                                <label class="infor" id="city" name="city">: <?= $rows[0]->city ?></label>
                            </div>
                        </div>

                        <div class="d3">
                            <div class="city">
                                <label for="no">Province </label>
                                <label class="infor" id="house_no" name="house_no">: <?= $rows[0]->province ?></label>
                            </div>
                        </div>

                        <div class="d2">
                            <div class="city">
                                <label for="city">District </label>
                                <label class="infor" id="city" name="city">: <?= $rows[0]->district ?></label>
                            </div>
                        </div>


                    </div>

                    <div class="map">
                        <label class="loc" for="map">Location</label>
                        <label class="map-in" type="text" id="map" name="map"><?= $rows[0]->latitude . " " . $rows[0]->longitude ?></label>
                    </div>


                </div>

            </form>
        </div>
    </div>

</div>