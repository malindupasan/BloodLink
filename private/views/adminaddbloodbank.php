<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavup'); ?>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminaddbloodbank.css">




<div class="">
    <h1 class="h2">Add Blood Bank</h1>
</div>

<div class="form-add">
    <form method="post" id="form">
        <div class="name">
            <label for="blood-bank-name">Blood Bank Name </label>
            <input class="Bname" type="text" id="name" name="name"><br>
        </div>

        <div class="d2">
            <div class="name">
                <label for="telephone-number">Telephone No. </label>
                <input class="d2-tel" type="tel" id="telephone" name="telephone"><br>
            </div>
        </div>

        <div class="d3">
            <div class="city">
                <label for="no">No. </label>
                <input class="d3-no" type="text" id="house_no" name="house_no"><br>
            </div>

            <div class="city">
                <label for="city">City </label>
                <input class="d3-city" type="text" id="city" name="city"><br>
            </div>
        </div>

        <div class="d3">
            <label for="street">Street</label>
            <input class="d4-street" type="text" id="street" name="street"><br>
        </div>

        <div class="d3">
            <label class="loc" for="map">Location</label>
            <input class="d4-map" type="text" id="map" name="map"><br>
        </div>

        <div class="add">
            <button class="add_bank" type="submit">Add</button>
        </div>


    </form>
</div>