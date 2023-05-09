<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavup'); ?>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminaddnews.css">

<div class="">
    <h1 class="h1">Update News</h1>
</div>

<?php foreach ($rows as $value) : ?>

    <div class="form-add">
        <form method="post" id="form">


            <div class="name">
                <label for="blood-bank-name">Title :</label>
                <input class="Bname" type="text" id="title" name="title" value="<?= $value->title?>"><br>
            </div>

            <div class="name">
                <label for="blood-bank-name">Description :</label>
                <input class="Bname12" type="text" id="description" name="description" value="<?= $value->description?>">
            </div>


            <div class="d4">
                <div class="city">
                    <label for="telephone-number">Image : </label>
                    <button class="add_image" type="submit">Select</button>
                </div>
            </div>


            <div class="d3">
                <div class="city">
                    <label for="no">Link : </label>
                    <input class="d3-no" type="text" id="link" name="link" value="<?= $value->link?>"><br>
                </div>
            </div>

            <div class="add">
                <button class="add_bank" href="<?= ROOT ?>/AdminNews" type="submit">Update</button>
            </div>

        </form>
    </div>



<?php endforeach; ?>