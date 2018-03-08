
<?php                          

include('session.php');   
include('navbar.php');    
  $db = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');

  $e = "SELECT * from tblvotersinfo where status_id = 1 and barangay = 14";

  $result = mysqli_query($db, $e);

?> 
<body>
  
   <div class="container center" >
    <?php 
          $conn = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');
          $seluid = "SELECT * FROM tblbarangay where ID = 14";
                        $selid = mysqli_query($conn,$seluid);
                        $fetchd = mysqli_fetch_assoc($selid);
          
        ?>
       <h5 class="center" style="font-size: 50px;text-transform: uppercase; margin-top: 100px;">Barangay <?php echo $fetchd['barangay'] ;?>  <button type="button" class="btn btn-success" data-toggle="modal" style="float: right;" data-target="#myModal">Register member</button></h5>
      


    <!-- Modal ADD-->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Register member</h4>
                    </div>
                    <div class="modal-body">
                     <form action="sibacanadd.php" method="POST">
                    <div class="row">
                      <div class=" col-sm-4">
                        <label>First Name</label>
                        <input name="fname" id="fname" type="text" class="form-control validate" autofocus="" placeholder="First name">
                      </div>
                       <div class="col-sm-4">
                        <label>Middle Initial</label>
                        <input onKeyPress="if(this.value.length==2) return false;" name="mi" id="mi" type="text" class="form-control validate" placeholder="Middle Initial">
                      </div>
                      <div class="col-sm-4">
                        <label>Last Name</label>
                        <input name="lname" id="lname" type="text" class="form-control validate" placeholder="Last name">
                      </div>
                    </div>
                     <div class="row" style="margin-top: 20px;">
                      <div class=" col-sm-6">
                        <label>Age</label>
                        <input type="number" name="age" id="age"  class="form-control validate" placeholder="Age">
                      </div>
                       <div class="col-sm-6">
                        <label>Gender</label>
                        <select class="form-control" id="gndr" name="gndr">
                        <option value=""  disabled selected>Choose Gender</option>

                           <?php
                            $con = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');
                            $genderall = "SELECT * FROM tblgender";
                            $selgender = mysqli_query($con,$genderall);
                            while ($con=mysqli_fetch_assoc($selgender)){
                              echo "<option value='".$con['ID']."'>".$con['gender']."</option>";
                            }
                           
                          ?> 
                      </select>
                      </div>
                    </div>
                       <div class="row">
                        <div class=" col-sm-11" style="margin-top: 20px; margin-left: 20px;">
                          <label>Address</label>
                          <input name="address" id="address" type="text" class="form-control validate" placeholder="Address">
                        </div>
                      </div>
              
                    </div>
                    <div class="modal-footer">
                         <input type="submit" class='btn  btn-primary' id="btn" value="Save"/>
                      <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                    </div>
                   </form>
                     </div>
           </div>
          </div>


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
              echo "<td><button type='button' class='btn btn-success' data-toggle='modal'  data-target='#edit-".$db['ID']."'>Edit</button><button type='button' class='btn btn-danger' data-toggle='modal'  data-target='#archieve-".$db['ID']."'>Archieve</button></td>";
              echo "</tr>";

            ?>

            
              <!-- Modal Edit-->
              <div class="modal fade"  id="edit-<?php echo $db['ID']; ?>" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit member</h4>
                    </div>
                    <div class="modal-body">
                    <form action="sibacanedit.php" method="POST">
                    <div class="row">
                      <div class=" col-sm-4">
                        <label>First Name</label>
                        <input name="fname" id="fname" type="text" class="form-control validate" autofocus="" placeholder="First name" value="<?php  echo $db['fname']; ?>">
                      </div>
                       <div class="col-sm-4">
                        <label>Middle Initial</label>
                        <input onKeyPress="if(this.value.length==2) return false;" name="mi" id="mi" type="text" class="form-control validate" placeholder="Middle Initial"  value="<?php  echo $db['mi']; ?>">
                      </div>
                      <div class="col-sm-4">
                        <label>Last Name</label>
                        <input name="lname" id="lname" type="text" class="form-control validate" placeholder="Last name" value="<?php  echo $db['lname']; ?>">
                      </div>
                    </div>
                     <div class="row" style="margin-top: 20px;">
                      <div class=" col-sm-6">
                        <label>Age</label>
                        <input type="number" name="age" id="age"  class="form-control validate" placeholder="Age" value="<?php  echo $db['age']; ?>">
                      </div>
                       <div class="col-sm-6">
                        <label>Gender</label>
                        <select class="form-control" name="gndra" id="gndra">
                        <option disabled selected>Choose Gender</option>

                          <?php

                            $con = mysqli_connect("localhost","root","","voters");

                            $genall = "select * from tblgender";

                            $selgen = mysqli_query($con,$genall);

                            while ($con=mysqli_fetch_assoc($selgen)){

                              if ($fetchgen["gender"] == $con['gender']) {

                                echo "<option selected='selected' value='".$con['ID']."'>".$con['gender']."</option>";

                              } else {

                                echo "<option value='".$con['ID']."'>".$con['gender']."</option>";

                              }

                            } 

                          ?>

                        </select>

                      </div>
                    </div>
                       <div class="row">
                        <div class=" col-sm-11" style="margin-top: 20px; margin-left: 20px;">
                          <label>Address</label>
                          <input name="address" id="address" type="text" class="form-control validate" placeholder="Street Address" value="<?php  echo $db['address']; ?>">
                        </div>
                      </div>
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



              <!-- Modal Archieve-->
              <div class="modal fade"  id="archieve-<?php echo $db['ID']; ?>" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Archieve member</h4>
                    </div>
                    <div class="modal-body">
                   <form action="sibacanarchieve.php" method="POST">
                    
                       <div class="container">
                           <p>Do you want to archieve this member?</p>    
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