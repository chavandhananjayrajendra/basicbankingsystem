<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<div class="container">
    <h2 class="text-center pt-4" style="color : white;">Our Customers</h2>
    <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:white;">
                    <thead style="color : white;">
                        <tr>
                        <th scope="col" class="text-center py-2">Account no.</th>
                        <th scope="col" class="text-center py-2">Account holder name</th>
                        <th scope="col" class="text-center py-2">E-Mail</th>
                        <th scope="col" class="text-center py-2">Account Balance(in Rs.)</th>
                        
                        </tr>
                    </thead>
                    <tbody>
            <?php 
                while($rows=mysqli_fetch_assoc($result)){
            ?>
                <tr style="color : white;">
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name']?></td>
                    <td class="py-2"><?php echo $rows['email']?></td>
                    <td class="py-2"><?php echo $rows['balance']?></td>
                    <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transfer money</button></a></td> 
                </tr>
            <?php
                }
            ?>