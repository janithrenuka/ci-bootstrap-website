<!DOCTYPE html>
<html lang="en">

<head>

<title>Foods for Life</title>
<meta charset="utf-8">
<meta name="viewport " content="width=device-width,initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css')?>">
<script src="<?php echo base_url('js/jquery.js')?>" ></script>
<script src="<?php echo base_url('js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('js/main.js')?>"></script> 

</head>

<body class="bodyclass">
     
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
  
       <div class="head-title">
           <br>
           <h1><b>&nbsp;&nbsp;<u>Importance of Foods for Life</u></b></h1>
       </div>
           <br>
           <div class="topic">
           <ol>
               <b>
               <li><a href="#1">Whole grain and fibre</a></li>
               <li><a href="#2">Cooking and shopping</a></li>
               <li><a href="#3">Food choice</a></li>
               
               </b>
           </ol>
           </div>
       
        <div class="topic-title">
            <ol>
                <!--1 st-->
                <p>
                    <a name="1"></a>
                </p>
               <h3 >1.Whole grain and fibre</h3>
               <br>
               <img src="<?php echo base_url('image/whole_grain.png')?>" width="400px" height="200px">
               <br>
               <br>
               <p class="details">Starches are complex carbohydrates, found in staple foods 
                   like bread, pasta, potatoes, rice, couscous. In a balanced diet, starchy 
                   foods are our main source of energy, and it is recommended that about 
                   a third of our diets are made up of these types of foods.

                   Starchy foods, but also fruits and vegetables, also provide fibres, which 
                   are important for digestive health. It is recommended that we consume at 
                   least 25 g of fibre a day, from beans and pulses, whole grains, fruits and vegetables.
               
               </p>

               <!--2 nd-->
               <p>
                <a name="2"></a>
              </p>
              <h3 >2.Cooking and shopping</h3>
              <br>
              <img src="<?php echo base_url('image/cooking ans shopping.png')?>" width="400px" height="200px">
              <br>
              <br>
              <p class="details">There is an increasing variety of food available to us. How do we 
                  decide which food to buy and prepare? How can we eat healthy, even when 
                  shopping on a budget? Should we eat fresh, dried or frozen products? Maintaining 
                  a healthy, sustainable diet relies on access to a variety of different foods. 
                  It’s important to consider the origin, quality and safety of what we eat. 
                  Lots of options are available for us to meet our daily dietary recommendations, 
                  whether it’s from a supermarket, an organic farmer’s market, or even from our own garden.
           
              </p>

              <!--3 rd-->
              <p>
                <a name="3"></a>
              </p>
              <h3 >3.Food Choice</h3>
              <br>
              <img src="<?php echo base_url('image/food chice.png')?>" width="400px" height="200px">
              <br>
              <br>
              <p class="details">Food choice refers to how people decide on what to buy and eat. 
                  A complex set of factors that vary from person to person and depend on culture, 
                  heritage and up-bringing all influence food choice. We may look for price if we need 
                  to stick to a budget, or look for allergen information if we have a food allergy. 
                  But food choice can also be influenced by other characteristics that correspond to 
                  personal preferences (e.g., sustainability labels for fair trade, organic labels or 
                  health-related information such as health claims). Further personal factors influencing 
                  food choice can be habits (“I always buy this”) or taste. It can also depend on our 
                  mood and other factors such as appetite or being in a rush.
           
              </p>

               

            </ol>
        </div>

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