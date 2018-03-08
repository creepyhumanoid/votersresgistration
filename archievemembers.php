
<?php                          

include('session.php');   
include('navbar.php');    
  $db = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');

  $e = "SELECT * from tblvotersinfo where status_id = 2";

  $result = mysqli_query($db, $e);

?> 
<body>
  
   <div class="container center" >
    <?php 
          $conn = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');
          $seluid = "SELECT * FROM tblbarangay where ID = 1";
                        $selid = mysqli_query($conn,$seluid);
                        $fetchd = mysqli_fetch_assoc($selid);
          
        ?>
       <h5 class="center" style="font-size: 50px;text-transform: uppercase; margin-top: 100px;">Archieve Voters</h5>
      


  

</body>
     <table id="example" class="table table-striped table-bordered center" cellspacing="0" width="100%">
    <thead>
     <tr >
            <th >ID</th>
            <th>First Name</th>
            <th >Middle Name</th>
            <th >Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Barangay</th>
            <th>Date Member</th>
            <th>Status</th>

          
            <th >Action</th>
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

              echo "<td >" .$db["address"] ."</td>";

              echo "<td >" .$fetchbarangay["barangay"] ."</td>";

                 echo "<td>" .$date ."</td>";
              echo "<td>" .$fetchstat["status"] ."</td>";
              #header ("Content-type: image/jpeg"); 
              echo "<td><button type='button' class='btn btn-danger' data-toggle='modal'  data-target='#restore-".$db['ID']."'>Restore</button></td>";
              echo "</tr>";

            ?>

             

           


              <!-- Modal Restore-->
              <div class="modal fade"  id="restore-<?php echo $db['ID']; ?>" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Restore member</h4>
                    </div>
                    <div class="modal-body">
                   <form action="restore.php" method="POST">
                    
                       <div class="container">
                           <p>Do you want to restore this member?</p>    
                      </div>
                    <div class="modal-footer">
                         <input type="submit" class='btn  btn-primary' id="btn" value="Save"/>
                           <input type="hidden" name="id" id="id" value="<?php  echo $db['ID']; ?>">
                      <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                    </div>
                   </form>
                 </div>
           </div>
          </div>
      <?php

  }

  ?>



</body>

<script type="text/javascript">
  $('.dropdown-toggle').dropdown();

  $('#myModal').modal('toggle');
</script>
<?php include('footer.html'); ?>