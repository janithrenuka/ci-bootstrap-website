<!DOCTYPE html>
<html lang="en">

<head>

<title>Workout Report</title>
<meta charset="utf-8">
<meta name="viewport " content="width=device-width,initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css')?>">
<script src="<?php echo base_url('js/jquery.js')?>" ></script>
<script src="<?php echo base_url('js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('js/main.js')?>"></script> 
<script src="<?php echo base_url('js/bmi.js')?>"></script> 

</head>

<body>

    <nav class="navbar navbar-dark bg-black text-white navbar-expand-md">
     <a class="navbar-brand" href="<?php echo base_url('index.php/home_controller/viewhome')?>">Healthy Men & Women</a>
     <img src="<?php echo base_url('image/fitness.png') ?>"  alt="Logo" style="width: 40px;height: 40px;">
     <img src="<?php echo base_url('image/workout.png') ?>"  alt="Logo" style="width: 40px;height: 40px;">
     <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
         <span class="navbar-toggle-icon"></span> 
     </button>
    
     <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home_controller/viewhome')?>">Home |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home_controller/viewworkout')?>">Enter Daily Workout |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#footer">Contact</a>
            </li>
        </ul>
       </div>
    </nav>
    <header class="page-header header container-fluid">
         <div class="overlay">
            <div class="description">
                <h1>Welcome to the Healthy Men & Women!</h1>
                <p><b>Keep Your Progress on Daily Workouts.
                 <br>
                     In Here, You Can See Your Progress on Daily Workouts.</b></p>
                
            </div>
         </div>
    </header>
      <br>

      <style>
        
    
    </style>

       <table class="table" class="center" width="100%">
           <thead class="thead-dark">
            <tr>
              <th>Day</th>
              <th>Waliking Distance</th>
              <th>Running Distance</th>
              <th>Cycling Distance</th>
              <th>Weight Training Time</th>
              <th>Push Ups</th>
              <th>Sit Ups</th>
              <th>Stretching Time</th>
            </tr>
          </thead>

            <?php
               foreach ($data as $row){
                   echo "<tr>";
                   echo "<td>".$row->day."</td>";
                   echo "<td>".$row->wdistance."</td>";
                   echo "<td>".$row->rdistance."</td>";
                   echo "<td>".$row->cdistance."</td>";
                   echo "<td>".$row->wtrain."</td>";
                   echo "<td>".$row->pushup."</td>";
                   echo "<td>".$row->situp."</td>";
                   echo "<td>".$row->stretching."</td>";
                   echo "<td><a href='updatedate?id=".$row->id."'>Update</a></td>";
                   echo "<td><a href='deletedate?id=".$row->id."'>Delete</a></td>";
                   echo "</tr>";  
               }
           
           ?>
           
           
       
       </table>

         

       <br>
       <br>
       <center>
       <a href="pdfdetails" class="text-decoration-none"><img src="<?php echo base_url('image/report-card.png') ?>" type="submit" name="createacc"/></a>
       </center>
        <!--<center>
       <input type="button" class="btn btn-primary" name="deletetable" value="Delete Table" onclick="<?php echo base_url('index.php/home_controller/deletedata')?>">
        </center>
        <center>
        <input type="button" class="btn btn-primary" name="deletetable" value="Delete Table" >
        </center>-->
       <br>
       <br>
    
       <footer id="footer" class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <h6 class="text-uppercase font-weight-bold">Keep Your Body Healthy</h6>
                        <p>We aim to live a healthy life and it has become a hot topic of 
                            debate in the media and society to describe what healthy living is. </p>
                        <p>Healthy living is having the opportunity, capability and motivation 
                            to act in a way that positively affects your physical and mental 
                            well-being. Paying attention to what you eat, being physically active, 
                            and learning more about your food and yourself can help you meet your 
                            health goals. </p>
                        <p>Being aware of the specific requirements for different health conditions 
                            and lifestages is also important as health isn’t “one size fits all”.</p>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                         <h6 class="text-uppercase font-weight-bold">Contact</h6>
                         <p>3821  Castle Street, New York, NY, USA.
                         <br/>info@healthym&w.com
                         <br/>+ 01 234 567 88
                         <br/>+ 01 234 567 89</p>
                    </div>
                </div>
            </div>
         <div class="footer-copyright text-center">© 2019 Copyright:
            healthym&w.com</div>
       </footer>
      
       
</body>

</html>