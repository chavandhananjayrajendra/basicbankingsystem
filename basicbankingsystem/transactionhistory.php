<!DOCTYPE html>
<marquee direction="left" scrollmount="1">
<a style="margin:auto;width:50%;padding:550px;font-size:70px; font-weight: bold;color:white; ">Transaction History!!</a>
</marquee>
<body style="background-color:#ff0000;">
<?php include 'config.php'; ?>

<center>
 <div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; background-color:Pink;">
            <div
                style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">All Customers</h1>
            </div>
            <?php

    $conn = mysqli_connect($servername, $username, $password,"sparksbank");
    if(!$conn){
        die("Connection not established: ".mysqli_connect_error());
    }else{
    
        $sql = "SELECT * FROM `transactions`";
        $result = mysqli_query($conn, $sql);
?>
          <div class="table-responsive-sm">
          <table class="table table-hover table-striped table-condensed table-bordered">
                <thead >
                    <tr>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Reciever</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>

                <style>
                    .mybtn {

                        box-shadow: 2px 2px 10px black;
                        border-radius: 30px;
                        font-weight: bold;
                        background-color: lightgreen;
                        color: green;
                    }

                    .mybtn:active {
                        background-color: green;
                        color: lightgreen;
                    }
                </style>
                <?php
echo "<tbody >";
        while($row = mysqli_fetch_assoc($result)){
        if(!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount'])))
            {echo    '
            <tr>
              <td>'.$row['sender'].'</td>
              <td>'.$row['receiver'].'</td>
              <td>'.$row['amount'].'</td>
              <td>'; ?> <?php if($row['status'] == "succeed"){echo '<b><p style="color:green;">Succeed</p></b>';}else{echo '<b><p style="color:red;">Failed</p></b>';} ?>
              <?php echo '</td>
              </tr>';}
    }
    
    }
    echo "</tbody>";
?>
        </div>
        
        
    </center>
</body>

</html>