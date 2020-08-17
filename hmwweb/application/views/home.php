<!DOCTYPE html>
<html lang="en">

<head>

<title>Home</title>
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
                <a class="nav-link" href="<?php echo base_url('index.php/home_controller/viewworkoutreport')?>">My Workout |</a>
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
                <p><b>This site will give you tips on how to keep your body fit and helps you to
                    progress your daily exercise schedule to keep your body 
                    fit .</b></p>
            
            </div>

         </div>
    </header>
    
  
    <div class="row">
    <div class="page-header header container-fluid">
        <div class="overlay">
           <div class="description">
               <h2>BMI Calculator</h2>
                <div class="form-group">
                    <label for="weight"><b>Weight</b></label>
                    <input id="weight" type="text" placeholder="Enter your weight(kg)" name="weight" required>
                </div>
                   
                <div class="form-group">
                    <label for="height"><b>Height</b></label>
                    <input id="height" type="text" placeholder="Enter your height(m)" name="height" required>
                </div>
                  
                 <div>
                     
                    <input class="btn btn-outline-secondary btn-md" type="submit" style="color: black;" value="Calculate" onclick="bmi()" />
                <br>
                <br>
                
                    <p id="result">Your result</p>
                
                 </div>
            </div>

      </div>
    </div>
 </div>

 <br>
 <br>
 
 <center>
     <div class="table">
     <table>
        <tr >
            <th ><b>BMI</b></th>
            <th ><b>Nutritional Status</b></th>
        </tr>

        <tr >
            <th ">Below 18.5</th>
            <th style="color: rgb(153, 155, 155);">Underweight</th>
        </tr>
        <tr >
           <th >18.5-24.</th>
           <th style="color: rgb(54, 235, 8);">Normal weight</th>
       </tr>
       <tr >
           <th >25.0-29.9</th>
           <th style="color: rgb(250, 100, 0);">Pre-obesity</th>
       </tr>
       <tr >
           <th >30.0-34.9</th>
           <th style="color: rgb(209, 28, 28);">Obesity class |</th>
       </tr>
       <tr >
           <th >35.0-39.9</th>
           <th style="color: rgb(224, 16, 16);">Obesity class ||</th>
       </tr>
       <tr >
           <th >Above 40</th>
           <th style="color: rgb(255, 0, 0);">Obesity class |||</th>
       </tr>
       
    </table>
  

     </div>
    </center>
<br>
<br>

  <div class="obesity">
  <h4 class="h4"><b><u>Obesity and Overweight</u></b></h4>
  <br>
  <img class="img" src="<?php echo base_url('image/obesity.png')?>" width="400px" height="200px">
  <br>
  
  <p class="wrap">Obesity and overweight are serious problems that pose a huge and 
      growing financial burden on national resources. The health consequences 
      of obesity and overweight are many and varied, ranging from an 
      increased risk of premature death to health problems such as 
      type 2 diabetes, cardiovascular diseases and psychological complaints. 
      The conditions are largely preventable through lifestyle changes such as 
      healthy diets and increased levels of physical activity to control 
      overweight and obesity. Obesity is a complex issue which requires active 
      participation of many groups including governments, health professionals, 
      the food industry, the media and consumers.</p>

    </div>

    <div class="container features">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Tips for Healthy Life</h3>
                <a href="<?php echo base_url('index.php/home_controller/viewhealthytips')?>">
                <img src="<?php echo base_url('image/healthy life.jpg')?>"  width="350px" height="200px">
                </a>
                <p>It’s easy to get confused when it comes to health and nutrition.
                    Even qualified experts often seem to hold opposing opinions.
                    Yet, despite all the disagreements, a number of wellness tips are well supported by research.
                    Here are the health and nutrition tips that are actually based on good science.</p>
            </div>

            <div class="col-md-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Foods for Life</h3>
                <a href="<?php echo base_url('index.php/home_controller/viewfoodforlife')?>">
                <img src="<?php echo base_url('image/whats-in-food-carbohydrates-eufic.png')?>"  width="350px" height="200px">
                </a>
                <p>A vast number of foods are both healthy and tasty. By filling your plate with fruits, 
                    vegetables, quality protein, and other whole foods, you’ll have meals that are colorful, 
                    versatile, and good for you.</p>
           </div>
           
           <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Exercise for Good Life</h3>
                <a href="<?php echo base_url('index.php/home_controller/viewexerciseforlife')?>">
                <img src="<?php echo base_url('image/exercise.png')?>"  width="350px" height="200px">
                </a>
                <p>Physical activity or exercise can improve your health and reduce the risk of developing 
                    several diseases like type 2 diabetes, cancer and cardiovascular disease. Physical 
                    activity and exercise can have immediate and long-term health benefits. Most importantly, 
                    regular activity can improve your quality of life.</p>
           </div>
        </div>

     </div>
       
      
      
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