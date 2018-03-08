<?php 
include('session.php');
include('navbar.php');
?>
<style>
  .card {
      
}
</style>
      <?php 
         $connection = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');

          $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 1 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countA = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 2 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countB = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 3 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countC = $count;
        
           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 4 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countD = $count;

          $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 5 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countE = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 6 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countF = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 7 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countG = $count;

             $sql = "SELECT * FROM tblvotersinfo WHERE barangay =8 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countH = $count;

             $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 9 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countI = $count;

          $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 10 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countJ = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 11 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countK = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 12 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countL = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 13 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countM = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 14 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 15 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 16 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 17 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 18 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 19 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 20 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 20 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countO = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 20 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countP = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 20 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countQ = $count;
          ?>  

  <div class="row" >
 <div class="card col-md-9 " style="  margin: 0 auto; float: none; margin-bottom: 10px;">
  <h3>Barangay Statistics</h3><hr>
  <div class="card-body">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" />
                                                  <script type="text/javascript"></script>
                                                  <canvas id="myBarChart"></canvas>

                                                     <script>
                                                      var ctx = document.getElementById("myBarChart").getContext('2d');
                                                      var myBarChart = new Chart(ctx, {
                                                          type: 'bar',
                                                          data: {
                                                              labels: ["Tenejero", "Bagong Silang", "Munting Batangas", "Ibayo", "Cataning", "Poblacion", "Malabia", "Talisay", "Bagumbayan", "Dona Francisca","Cupang Proper", "Cupang North", "Cupang West","Sibacan","Puerto Rivas Ibaba","Puerto Rivas Itaas","Tortugas","Central","Camacho","Puerto Rivas Lote","Dangcol","Cabog-Cabog","Tanato"],
                                                              datasets: [{
                                                                  label: 'Barangay Statistics',
                                                                  data: [<?php echo $countA; ?>,<?php echo $countB; ?>,<?php echo $countC; ?>,<?php echo $countD; ?>,<?php echo $countE; ?>,<?php echo $countF; ?>,
                                                                  <?php echo $countG;?>,
                                                                  <?php echo $countH;?>,
                                                                  <?php echo $countI;?>,
                                                                  <?php echo $countJ;?>,
                                                                  <?php echo $countK;?>,
                                                                  <?php echo $countL;?>,
                                                                  <?php echo $countM;?>,
                                                                  <?php echo $countN;?>
                                                                  ,<?php echo $countO;?>
                                                                  ,<?php echo $countP;?>,
                                                                  <?php echo $countQ;?>],
                                                                  backgroundColor: [
                                                                      '#ff8f00','#ff8f00','#ff8f00 ','#ff8f00','#ff8f00','#ff8f00','#ff8f00','#ff8f00 ','#ff8f00','#ff8f00',
                                                                      '#ff8f00','#ff8f00','#ff8f00 ','#ff8f00','#ff8f00','#ff8f00','#ff8f00','#ff8f00 ','#ff8f00','#ff8f00','#ff8f00','#ff8f00','#ff8f00 ','#ff8f00','#ff8f00','#ff8f00','#ff8f00','#ff8f00 ','#ff8f00','#ff8f00'],
                                                                 
                                                                  borderWidth: 1}]
                                                                  },
                                                          options: {
                                                              scales: {
                                                                  yAxes: [{
                                                                      ticks: {
                                                                          beginAtZero:true
                                                                              }
                                                                          }]
                                                                      }
                                                                  }
                                                              });
                                                      </script>
  </div>
</div>
</div>

  <?php 
          
         $sql = "SELECT `ID` FROM tblvotersinfo WHERE gender = 1 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countF = $count;

          
          $sql = "SELECT `ID` FROM tblvotersinfo WHERE gender = 2 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countM = $count;
          ?>
            <div class="row" style="margin-left: 300px">
<div class="card text-white col-md-4" style="">
  <div class="card-body">
    <h3>Male and Female Registered Voters Statistics</h3><hr>
           
           <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" />
                                  <script type="text/javascript"></script>
                                  <canvas id="mydoughnutChart" width="800" height="800" style="margin-top: 50px;"></canvas>
                                  <script>
                                      var ctx = document.getElementById("mydoughnutChart").getContext('2d');
                                      var myPolarChart = new Chart(ctx, {
                                          type: 'doughnut',

                                          data: {
                                             labels: ["Female", "Male"],
                                              datasets: [{
                                                  data: [<?php echo   $countF; ?>,<?php echo $countM; ?>],
                                                  backgroundColor: [
                                                     '#f48fb1','#1e88e5'],
                                                  borderWidth: 1}]
                                                },       
                                       });
                                  </script>
  </div>
</div>
<?php 
          
         $sql = "SELECT `ID` FROM tblvotersinfo WHERE gender = 1 and status_id = 2";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countF = $count;

          
          $sql = "SELECT `ID` FROM tblvotersinfo WHERE gender = 2 and status_id = 2";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countM = $count;
          ?>
<div class="card text-white col-md-4" style="">
  <div class="card-body">
    <h3>Male and Female Archieve Voters Statistics</h3><hr>
         <script type="text/javascript"></script>
                                  <canvas id="mypieChart" width="800" height="800" style="margin-top: 50px;"></canvas>
                                  <script>
                                      var ctx = document.getElementById("mypieChart").getContext('2d');
                                      var myPolarChart = new Chart(ctx, {
                                          type: 'pie',

                                          data: {
                                             labels: ["Female", "Male"],
                                              datasets: [{
                                                  data: [<?php echo   $countF; ?>,<?php echo $countM; ?>],
                                                  backgroundColor: [
                                                     '#f48fb1','#1e88e5'],
                                                  borderWidth: 1}]
                                                },       
                                       });
                                  </script><br><br><br>
  </div>
</div>
</div>

 <?php 
         $connection = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');

          $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 1 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countA = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 2 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countB = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 3 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countC = $count;
        
           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 4 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countD = $count;

          $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 5 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countE = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 6 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countF = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 7 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countG = $count;

             $sql = "SELECT * FROM tblvotersinfo WHERE barangay =8 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countH = $count;

             $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 9 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countI = $count;

          $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 10 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countJ = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 11 and status_id = 1";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countK = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 12 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countL = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 13 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countM = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 14 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 15 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 16 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 17 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 18 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;

           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 19 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 20 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countN = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 20 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countO = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 20 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countP = $count;


           $sql = "SELECT * FROM tblvotersinfo WHERE barangay = 20 AND MONTH(created_at)= MONTH(CURRENT_DATE())";
          $attrib = mysqli_query($connection,$sql);
          $count = mysqli_num_rows($attrib);
          $countQ = $count;
          ?>  
<div class="row">
<div class="card text-white col-md-10" style="margin: 0 auto; float: none; margin-bottom: 10px;">
  <div class="card-body">
    <h3>Monthly Barangay Statistics</h3><hr>
           
             <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" />
                                                  <script type="text/javascript"></script>
                                                  <canvas id="myLineChart"></canvas>
                                                     <script>
                                                      var ctx = document.getElementById("myLineChart").getContext('2d');
                                                      var myLineChart = new Chart(ctx, {
                                                          type: 'line',
                                                          data: {
                                                             labels: ["Tenejero", "Bagong Silang", "Munting Batangas", "Ibayo", "Cataning", "Poblacion", "Malabia", "Talisay", "Bagumbayan", "Dona Francisca","Cupang Proper", "Cupang North", "Cupang West","Sibacan","Puerto Rivas Ibaba","Puerto Rivas Itaas","Tortugas","Central","Camacho","Puerto Rivas Lote","Dangcol","Cabog-Cabog","Tanato"],
                                                              datasets: [{
                                                                  label: 'Barangay Statistics',
                                                                  data: [<?php echo $countA; ?>,<?php echo $countB; ?>,<?php echo $countC; ?>,<?php echo $countD; ?>,<?php echo $countE; ?>,<?php echo $countF; ?>,
                                                                  <?php echo $countG;?>,
                                                                  <?php echo $countH;?>,
                                                                  <?php echo $countI;?>,
                                                                  <?php echo $countJ;?>,
                                                                  <?php echo $countK;?>,
                                                                  <?php echo $countL;?>,
                                                                  <?php echo $countM;?>,
                                                                  <?php echo $countN;?>
                                                                  ,<?php echo $countO;?>
                                                                  ,<?php echo $countP;?>,
                                                                  <?php echo $countQ;?>],
                                                             
                                                                 
                                                                     backgroundColor: [
                                                                      'rgba(255, 99, 132, 0.2)',
                                                                      'rgba(54, 162, 235, 0.2)',
                                                                      'rgba(255, 206, 86, 0.2)',
                                                                      'rgba(75, 192, 192, 0.2)',
                                                                       'rgba(75, 192, 192, 0.2)'
                                                                      
                                                                  ],
                                                                  borderColor: [
                                                                      'rgba(255,99,132,1)',
                                                                      'rgba(54, 162, 235, 1)',
                                                                      'rgba(255, 206, 86, 1)',
                                                                      'rgba(75, 192, 192, 1)',
                                                                      'rgba(75, 192, 192, 1)'],
                                                                  borderWidth: 1}]
                                                                  },
                                                          options: {
                                                              scales: {
                                                                  yAxes: [{
                                                                      ticks: {
                                                                          beginAtZero:true
                                                                              }
                                                                          }]
                                                                      }
                                                                  }
                                                              });
                                                      </script>
  </div>
</div>