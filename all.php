
<?php                          

include('session.php');   
include('navbar.php');    
  $db = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');

  $e = "SELECT * from tblvotersinfo where status_id = 1";

  $result = mysqli_query($db, $e);

?> 
<body>
	
	 <div class="container center" >
        <h5 class="center" style="font-size: 50px;text-transform: uppercase; margin-top: 100px;">All Registered Voters</h5>

     <table id="example" class="table table-striped table-bordered center" cellspacing="0" width="100%">
    <thead>
     <tr >
            <th >ID</th>

            <th>First Name</th>

            <th >Middle Name</th>

            <th >Last Name</th>

            <th>Age</th>

            <th>Gender</th>
            <th>Barangay</th>

            <th>Date Member</th>
            <th>Status</th>

          
          </tr>
    </thead>
    <tbody>
        <?php

              while ($db=mysqli_fetch_assoc($result)){

              $con = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');
             
              $idstat = $db["status_id"];
                $statall = "SELECT * FROM tblstatus WHERE `ID`='$idstat'";
                $selstat = mysqli_query($con,$statall);
                $fetchstat = mysqli_fetch_assoc($selstat); 

   
              $idgen = $db["gender"];
                $genall = "SELECT * FROM tblgender WHERE `ID`='$idgen'";
                $selgen  = mysqli_query($con,$genall);
                $fetchgen = mysqli_fetch_assoc($selgen); 


              $iddeps = $db["barangay"];
                $barangayall = "SELECT * FROM tblbarangay WHERE `ID`='$iddeps'";
                $selbarangay = mysqli_query($con,$barangayall);
                $fetchbarangay = mysqli_fetch_assoc($selbarangay); 
                
                $datee = $db['created_at'];
                $date = date("M d, Y", strtotime($datee));
              echo "<tr >";

              echo "<td>"  .$db["ID"] ."</td></a>";

              echo "<td>" .$db["fname"] ."</td>";

              echo "<td>" .$db["mi"] ."</td>";

              echo "<td>" .$db["lname"] ."</td>";

              echo "<td>" .$db["age"] ."</td>";

              
              echo "<td >" .$fetchgen["gender"] ."</td>";


              echo "<td >" .$fetchbarangay["barangay"] ."</td>";

                 echo "<td>" .$date ."</td>";
              echo "<td>" .$fetchstat["status"] ."</td>";
              #header ("Content-type: image/jpeg"); 

              echo "</tr>";

            ?>



      <?php

  }

  ?>


</body>

<script type="text/javascript">
  $('.dropdown-toggle').dropdown();
</script>
<?php include('footer.html'); ?>