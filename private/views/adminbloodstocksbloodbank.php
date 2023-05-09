<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<?php $i = 0 ?>


<link rel="stylesheet" href="<?= ROOT ?>/css/adminbloodstocksbloodbank.css">




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
            <div class="">
                <p class="pp">View Blood Stocks</p>
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
            <h1 class="h1">Stocks - <?= $rows[0]->name ?></h1>
        </div>


        <div class="chrtarea">
            <div class="canarea">
                <canvas id="chart"></canvas>
            </div>
        </div>


        <div class="thisMonth">
            <h1 class="this">Red Blood</h1>
        </div>


        <div class="table">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>A+</th>
                        <th>A-</th>
                        <th>B+</th>
                        <th>B-</th>
                        <th>AB+</th>
                        <th>AB-</th>
                        <th>O+</th>
                        <th>O-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td><?= $rows1[0]->Ap_amount ?></td>
                        <td><?= $rows2[0]->An_amount ?></td>
                        <td><?= $rows3[0]->Bp_amount ?></td>
                        <td><?= $rows4[0]->Bn_amount ?></td>
                        <td><?= $rows5[0]->ABp_amount ?></td>
                        <td><?= $rows6[0]->ABn_amount ?></td>
                        <td><?= $rows7[0]->Op_amount ?></td>
                        <td><?= $rows8[0]->On_amount ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="thisMonth">
            <h1 class="this">White Blood</h1>
        </div>


        <div class="table">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>A+</th>
                        <th>A-</th>
                        <th>B+</th>
                        <th>B-</th>
                        <th>AB+</th>
                        <th>AB-</th>
                        <th>O+</th>
                        <th>O-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td><?= $rows9[0]->Ap_amount ?></td>
                        <td><?= $rows10[0]->An_amount ?></td>
                        <td><?= $rows11[0]->Bp_amount ?></td>
                        <td><?= $rows12[0]->Bn_amount ?></td>
                        <td><?= $rows13[0]->ABp_amount ?></td>
                        <td><?= $rows14[0]->ABn_amount ?></td>
                        <td><?= $rows15[0]->Op_amount ?></td>
                        <td><?= $rows16[0]->On_amount ?></td>
                    </tr>
                </tbody>
            </table>
        </div>



        <div class="thisMonth">
            <h1 class="this">Plasma</h1>
        </div>


        <div class="table">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>A+</th>
                        <th>A-</th>
                        <th>B+</th>
                        <th>B-</th>
                        <th>AB+</th>
                        <th>AB-</th>
                        <th>O+</th>
                        <th>O-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td><?= $rows17[0]->Ap_amount ?></td>
                        <td><?= $rows18[0]->An_amount ?></td>
                        <td><?= $rows19[0]->Bp_amount ?></td>
                        <td><?= $rows20[0]->Bn_amount ?></td>
                        <td><?= $rows21[0]->ABp_amount ?></td>
                        <td><?= $rows22[0]->ABn_amount ?></td>
                        <td><?= $rows23[0]->Op_amount ?></td>
                        <td><?= $rows24[0]->On_amount ?></td>
                    </tr>
                </tbody>
            </table>
        </div>




        <div class="thisMonth">
            <h1 class="this">Platelets</h1>
        </div>


        <div class="table">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>A+</th>
                        <th>A-</th>
                        <th>B+</th>
                        <th>B-</th>
                        <th>AB+</th>
                        <th>AB-</th>
                        <th>O+</th>
                        <th>O-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td><?= $rows25[0]->Ap_amount ?></td>
                        <td><?= $rows26[0]->An_amount ?></td>
                        <td><?= $rows27[0]->Bp_amount ?></td>
                        <td><?= $rows28[0]->Bn_amount ?></td>
                        <td><?= $rows29[0]->ABp_amount ?></td>
                        <td><?= $rows30[0]->ABn_amount ?></td>
                        <td><?= $rows31[0]->Op_amount ?></td>
                        <td><?= $rows32[0]->On_amount ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>





<script src="<?= ROOT ?>/scripts/bbbsscript1.js"></script>