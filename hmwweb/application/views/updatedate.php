<!DOCTYPE html>
<html lang="en">

<head>

<title>Monthly Workout</title>
<meta charset="utf-8">
<meta name="viewport " content="width=device-width,initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css')?>">
<script src="<?php echo base_url('js/jquery.js')?>" ></script>
<script src="<?php echo base_url('js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('js/main.js')?>"></script> 

</head>

<body>

    <nav class="navbar navbar-dark bg-black text-white navbar-expand-md">
     <a class="navbar-brand" href="<?php echo base_url('index.php/home_controller/viewhome')?>">Healthy Men & Women</a>
     <img src="<?php echo base_url('image/fitness.png')?>"  alt="Logo" style="width: 40px;height: 40px;">
     <img src="<?php echo base_url('image/workout.png')?>"  alt="Logo" style="width: 40px;height: 40px;">
     <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
         <span class="navbar-toggle-icon"></span> 
     </button>
    
     <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home_controller/viewhome')?>">Home |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home_controller/viewworkoutreport')?>">My Workout |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#footer">Contact</a>
            </li>
            
        </ul>
       </div>
    </nav>
   
    <form method="POST" class="form-inline" >
        <header class="page-header header container-fluid">
          <div class="overlay">
             <div class="description">
                 <div class="form-row">

                 <?php

                   foreach($data as $row){

                    ?>

                  <div class="col-md-4 mb-3">
                      <label class="label" for="day"><b>Day</b></label>
                      <input class="input" type="text"  name="day" value="<?php echo $row->day ?>" >
                  </div>
  
                  <div class="col-md-4 mb-3">
                      <label class="label" for="wdistance"><b>Walking</b></label>
                      <input class="input" type="text"  name="wdistance" value="<?php echo $row->wdistance ?>" >
                  </div>
  
                  <div class="col-md-4 mb-3">
                      <label class="label" for="rdistance"><b>Running</b></label>
                      <input class="input" type="text" name="rdistance" value="<?php echo $row->rdistance ?>" >
                  </div>
  
                  <div class="col-md-4 mb-3">
                      <label class="label" for="cdistance"><b>Cycling</b></label>
                      <input class="input" type="text" name="cdistance" value="<?php echo $row->cdistance ?>" >
                  </div>
                     
                  <div class="col-md-4 mb-3">
                      <label class="label" for="wtrain"><b>Weight Training</b></label>
                      <input class="input" type="text"  name="wtrain" value="<?php echo $row->wtrain ?>" >
                  </div>
  
                  <div class="col-md-4 mb-3">
                      <label class="label" for="pushup"><b>Push Ups</b></label>
                      <input class="input" type="text"  name="pushup" value="<?php echo $row->pushup ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label class="label" for="situp"><b>Sit Ups</b></label>
                    <input class="input" type="text"  name="situp" value="<?php echo $row->situp ?>" >
                </div>

                <div class="col-md-4 mb-3">
                    <label class="label" for="stretching"><b>Stretching Exercise</b></label>
                    <input class="input" type="text"  name="stretching" value="<?php echo $row->stretching ?>" >
                </div>
                <br>
                <br>
                
  
                </div>
                <input class="btn btn-outline-secondary btn-md" type="submit" name="update" value="Update">
                </div>

                <?php 
                   }
                ?>
             </div>
           </div>
          </div>
       </header>
      </form>
    
          
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