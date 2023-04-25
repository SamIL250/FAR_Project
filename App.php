<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <style>
        body
        {
            background-image: url(33091.jpg);
            background-attachment: fixed;
            background-size: cover;
        }

        #imge
        {
            width: 250px;
            margin-left: 20px;
            border-radius: 10px;
            transition: 1s;
        }
        #imge:hover
        {
            opacity: 0.7;
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }

        .panel {
    border: 1px solid #339966; 
    border-radius:0 !important;
    transition: 1s;
    border-radius: 15px;
    
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
    transform: scale(1.01);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: powderblue !important;
    opacity: 1.9  ;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }

  #contact
  {
    padding: 70px;
  }
    </style>
</head>

<body>
    
<?php
include "Nav.php";
include('Home_slider.php');
?>

<!-- Image slider -->

<div class="jumbotron">
<div class="container-fluid row">
    <div class="col-md-3">
        <img id="imge" src="buss4.jpg" alt="" srcset="">
        <div style="background: #222; width: 250px; margin-left:-8.5px; margin-bottom: -20px; border-radius: 0px 0px 10px 10px; opacity: 0.5; color:white;" class="carousel-caption">
            <h3>School Assistance</h3>
        </div>
    </div>
    <div class="col-md-3">
        <img id="imge" src="croudfunding_set_4.jpg" alt="" srcset="">
        <div style="background: #222; width: 250px; margin-left:-9px; margin-bottom: -20px; border-radius: 0px 0px 10px 10px; opacity: 0.5; color: white;" class="carousel-caption">
            <h3>Medical Assistance</h3>
        </div>
    </div>
    <div class="col-md-3">
        <img id="imge" src="buss3.jpg" alt="" srcset="">
        <div style="background: #222; width: 250px; margin-left:-8.5px; margin-bottom: -20px; border-radius: 0px 0px 10px 10px; opacity: 0.5; color:white;" class="carousel-caption">
            <h3>Shop Opening</h3>
        </div>
    </div>
    <div class="col-md-3">
        <img id="imge" src="buss.jpg" alt="" srcset="">
        <div style="background: #222; width: 250px; margin-left:-9px; margin-bottom: -20px; border-radius: 0px 0px 10px 10px; opacity: 0.5; color: white;" class="carousel-caption">
            <h3>Vehicle Assistance</h3>
        </div>
    </div>
    <a href="" class="btn btn-warning mt-4 ml-5">Find Out For More >>>></a>
</div>
</div>

<!-- Our Mission -->
<center><h1 style="color: white;">Our Mission</h1></center>
<div class="jumbotron">
    <div class="row">
        <div class="col-md-4">
        <img id="imge" src="buss4.jpg" alt="" srcset="">
        <div style="background: white; width: 250px; margin-left:-26.5px; margin-bottom: -5px; border-radius: 0px 0px 10px 10px; opacity: 0.8; color: coral;" class="carousel-caption">
            <h3>Lower Feeds</h3>
        </div>
        </div>
        <div class="col-md-8">
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut provident 
             at fugiat nesciunt non voluptas sequi pariatur eveniet dolore, ad quisquam id 
            tempora nihil tenetur cum consequatur deleniti sit. Lorem
            ctetur adipisicing elit. Aut provident asperiores at fugiat nesciunt non voluptas
             sequi pariatur eveniet dolore, ad quisquam id tempora nihil tenetur cum consequatur deleniti si</p>
             <br>
             <h3>What We Care For</h3>
             <br>
             <p>ctetur adipisicing elit. Aut provident asperiores at fugiat nesciunt non voluptas sequi 
                pariatur eveniet dolore, ad quisquam id tempora nihil tenetur cum consequatur deleniti si</p>

        </div>
    </div>
</div>


<!-- Funding Info -->
<center><h1 style="color: white;">Funding Info</h1></center>

<div class="jumbotron">
<div class="row">
    <div class="col-md-7">
    <img id="imge" src="croudfunding_set_4.jpg" alt="" srcset="">
        <div style="background: white; width: 250px; margin-left:-72.5px; margin-bottom: 29px; border-radius: 0px 0px 10px 10px; opacity: 0.8; color: coral;" class="carousel-caption">
            <h3>Lower Feeds</h3>
        </div>
        <img id="imge" src="buss4.jpg" alt="" srcset="">
        <div style="background: white; width: 250px; margin-left: 202px; margin-bottom: 29px; border-radius: 0px 0px 10px 10px; opacity: 0.8; color: coral;" class="carousel-caption">
            <h3>Lower Feeds</h3>
        </div>
    </div>
    <div class="col-md-5">
        <h4 class="text-center">Funding Lorem Epsum</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta suscipit accusantium culpa. Ullam sapiente 
             ex neque quam eligendi deserunt consectetur quaerat, quibusdam distinctio laboriosam eaque assumenda non sunt veniam.<br />
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eaque dolores earum suscipit vel delectus commodi assumenda 
             aliquid, officia dolorum odit praesentium neque eveniet unde a dolorem. Autem, numquam earum!
        </p>
        <a href="#" class="btn btn-warning mt-3 ml-4">Find Out For More>>></a>

    </div>
</div>

</div>

<!-- Payment Methods  -->

<div id="pricing" class="jumbotron bg-white">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Weekely</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>600Rwf</h3>
          <h4>per week</h4>
          <a class="btn btn-lg">Sign Up</a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Monthly</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>170 000Rwf</h3>
          <h4>per month</h4>
          <a class="btn btn-lg">Sign Up</a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Annualy</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>2 000 000Rwf</h3>
          <h4>per year</h4>
          <a href="#" class="btn btn-lg">Sign Up</a>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Contact -->

<div  id="contact" style="margin-top:130px;" class="container bg-white ">
     
        <h2>Contact</h2>
        <br />
        <p>Kigali, Rwanda</p>
        <p>Phone: +250 783183517</p>
        <p>Email: ...hotel12@gmail.com</p>
        <p>If You Have some questions, <br />go ahead and ask them:</p> <br />
        <form action="feed_db_conn.php" method="post">
        <input type="text" class="form-control" id="usr" placeholder="First Name" name="first_name"> <br />
        <input type="text" class="form-control" id="usr" placeholder="Last Name" name="second_name"> <br />
        <input type="email" class="form-control" id="usr" placeholder="Email" name="e_mail"> <br />
        <textarea class="form-control" rows="5" id="comment" name="text_area"></textarea> <br />
        <a type="submit" class="btn btn-success">Submit</a>
        </form>
    
</div>
<br/>

<!-- Location -->
<center><h1 style="color: white;">Our Location</h1></center>
<div class="jumbotron">
<iframe style="border: 1px solid black; margin-left: 3px; width: 100%; height: 460px; margin-top: 20px; border-radius: 1px;" 
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.
		4450037615347!2d30.047136513287214!3d-1.9763344333662738!2m3!1f0
		!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca5e9d9c31f7b%3A0
		x30f8b9d22a6989fa!2sEcole%20Technique%20St%20Joseph%20de%20Nyamirambo!
		5e0!3m2!1sen!2srw!4v1674046045496!5m2!1sen!2srw" width="267" height="180" 
		style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
</div>

<?php
include('Footer.php')
?>
</body>
</html>