<?php $this->view('pageinit'); ?>
<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>History</title>


<link rel="stylesheet" href="<?=ROOT?>/css/bdchistorystyle.css">

    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">History of Campaigns</div>
            
            
        </div>

        <div class="search">
            <form>
                <input type="text" placeholder="&#xf002; Search Camps..." class="jssearch" oninput=get_data()>
            </form>
            <a href="<?=ROOT?>/bdchistory"><button class="reset">Reset</button></a>

        </div>

        <div class="tbl jstable">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Start Time</th>
                </tr>
            <thead>

            <?php foreach($rows as $row):
                $cdate=date("y-m-d");?>
                 
                    <div class="trows">
                    <tr class="hov">
                        <td><?=$row->camp_name ?></td>
                        <td><?=$row->house_no?>,<?=$row->street?>,<?=$row->city?></td>
                        <td><?=$row->date ?></td>
                        <td><?=$row->start_time ?></td>                      
                        <td><a href="<?=ROOT?>/reqdetails?id=<?=$row->camp_id?>"><button class="bdcvbtn"><i class="fas fa-eye" id="view_btn"></i></button></a></td>
                 
                    </tr>
                    </div>               
            <?php endforeach; ?>
        </table>
        </div>
    </div>
    <?php if($rows!=NULL) {?>

    <div class="pagination">
            <div class="pagin">
                <a href="<?=ROOT?>/bdchistory?page=1"><button class="pagebtn">First</button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/bdchistory?page=<?php 
                    if(!isset($_GET['page'])){
                        echo "1";
                    }elseif(($_GET['page']-1)<1){
                        echo "1";
                    } else{
                        echo $_GET['page']-1;
                    }
   
                ?>"><button class="pagebtn"><<</button></a>
            </div>
       <?php for($i=1;$i<=$ess['noofpgs'];$i++) { ?>
            <div class="pagin">
                <a href="<?=ROOT?>/bdchistory?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
            </div>
            
       <?php } ?> 
            <div class="pagin">
                <a href="<?=ROOT?>/bdchistory?page=<?php
                    if(!isset($_GET['page'])){
                        echo "2";
                    } elseif(($_GET['page']+1)>$ess['noofpgs']){
                        echo $ess['noofpgs'];
                    } else{
                        echo $_GET['page']+1;
                    }
  
                ?>"><button class="pagebtn">>></button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/bdchistory?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
            </div>
    
    </div><?php } ?>

</div>

<script>
    function get_data(){
        var text = document.querySelector(".jssearch").value;
         var form = new FormData();

        form.append('text', text);
        var ajax = new XMLHttpRequest();
        ajax.addEventListener('readystatechange', (e) => {
            if (ajax.readyState == 4 && ajax.status == 200) {
                //res
                // console.log(ajax.responseText);
                var obj=JSON.parse(ajax.responseText);
                console.log(obj);
                var resultdiv=document.querySelector(".jstable");
                var str="<table><thead><tr><th>Name</th><th>Location</th><th>Date</th><th>Start Time</th></tr><thead>";
                for (var i=obj.length-1;i>=0;i--){
                    console.log(obj[i].name);
                    str+=  "<tr class='hov'><td>" + obj[i].camp_name + "</td> <td>" + obj[i].address + "</td> <td>" +  obj[i].date + "</td> <td>" + obj[i].start_time + `</td> <td> <a href='http://localhost/Bloood%20Link%202/public/reqdetails?id=${obj[i].camp_id}'><button class="bdcvbtn"><i class="fas fa-eye" id="view_btn"></i></button></td> </tr>`;      

                }

                resultdiv.innerHTML = str;
            }
        })
        ajax.open('post', 'http://localhost/Bloood%20Link%202/public/bdchistory/index2', true);
        ajax.send(form);
    }
</script>

</body>
</html>