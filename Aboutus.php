<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>

       body
        {
            background-image: url(33091.jpg);
            background-attachment: fixed;
            background-size: cover;
        }
        img
        {
            padding-bottom: 20px;
   
        }

        .col-md-3
        {
            margin-bottom: 70px;
        }

        #button
        {
            position: fixed;
        }
        button
        {
            position:fixed;
        }

        #model
        {
            position: fixed;
        }
    </style>
</head>
<body>
    <?php
    include('Nav.php');

    ?>


<!-- Image Slider -->




<div style="background: #444;" id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li> 

    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img    style="width: 89em; height: 40em; opacity: calc(0.3);" src="33091.jpg">
            <div class="carousel-caption">
                <big><center><h1 style="position: relative; top: -480px;">About Us</h1></center></big>
                <big><center><h1 style="position:relative; top: -432px; font-size: 80px; ">F.A.R</h1></center></big>
             <h1 style="margin-top: -10em; color: aqua;">Financial Assistantance For Rwanda</h1>
                <h1>Plan For Your Future</h1>
                <h3>Starting From 5000Rwf</h3>
            </div>
        </div>
        <div class="carousel-item ">
            <img   style="width: 89em; height: 40em; opacity: calc(0.3);"  src="buss.jpg">
            <div class="carousel-caption">
                <big><center><h1 style="position: relative; top: -480px;">About Us</h1></center></big>
                <big><center><h1 style="position:relative; top: -432px; font-size: 80px;">F.A.R</h1></center></big>
               <h1 style="margin-top: -10em; color: aqua;">Financial Assistantance For Rwanda</h1>
                <h1>Avoid Poverty</h1>
                <h3>Starting From 5000Rwf</h3>
            </div>
        </div>
        <div class="carousel-item ">
            <img    style="width: 89em; height: 40em; opacity: calc(0.3);" src="buss2.jpg">
            <div class="carousel-caption">
                <big><center><h1 style="position: relative; top: -480px;">About Us</h1></center></big>
                <big><center><h1 style="position:relative; top: -432px; font-size: 80px;">F.A.R</h1></center></big>
                <h1 style="margin-top: -10em; color: aqua;">Financial Assistantance For Rwanda</h1>
                <h1>Lest's Biuld Our Future Rwanda</h1>
                <h3>Starting From 5000Rwf</h3>
            </div>
        </div>
    </div>
    <div id="button" style="position: relative; top: -620px; left:1130px; width: 130px;" class="col-md-2 mt-5">


    <div class="form-group">
           

             
            <a  type="button" id="model" class="btn btn-info" data-toggle="modal" data-target="#myModal">Join Now</a>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
             <div class="modal-dialog">

               <!-- Modal content-->
                 <div class="modal-content">
                    <div class="modal-header">

                      <h4 class="modal-title">Fund Assistant</h4>
                    </div>
                    <div class="modal-body">


                    <form action="#">
            <div class="form-group">
                <label for="" class="form-label">First Name</label>
                <input type="text" name="" id="" class="form-control" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Last Name</label>
                <input type="text" name="" id="" class="form-control" placeholder="Last Name">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Phone Number</label>
                <input type="tel" name="" id="" class="form-control" value="+250">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Email Address</label>
                <input type="text" name="" id="" class="form-control" placeholder="emailexample@gmail.com">
            </div>

            <div class="form-group">
                <label for="" class="form-label">ID</label>
                <input type="text" name="" id="" class="form-control" placeholder="ID Number">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Bank Accout</label>
                <input type="text" name="" id="" class="form-control" placeholder="Bank Account">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Reason Why We Should Help You</label>
                <textarea type="text" name="" id="" class="form-control" placeholder="First Name"></textarea>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Amount</label>
                <input type="number" name="" id="" class="form-control" placeholder="Amount Of Money (Rwf) ">
            </div>

            <div>
                <input id="" type="submit" name="" value="Submit" class="btn btn-success">
            </div>

                    </form>



                     </div>
                    <div class="modal-footer">
                 <a type="button" class="btn btn-warning" data-dismiss="modal">Close</a>
                </div>
                  </div>
              
              </div>
              </div>
            </div>
</div>
</div>


    <center><h1>About Our Team</h1></center>
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4">
                <img width="370px" src="buss4.jpg" alt="" srcset=""><br/>
                <p>Lorem ipsum dolor, sit amet </p>
            </div>
            <div class="col-md-8">
                <center><h5>Our Team</h5></center>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam 
                    accusantium debitis quas provident iure blanditiis. Optio quidem 
                    ducimus assumenda aliquam modi odio iure eum veniam fugiat? Eum voluptates facilis.<br />
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam 
                    accusantium debitis quas provident iure blanditiis. Optio quidem 
                    ducimus assumenda aliquam modi odio iure eum veniam fugiat? Eum voluptates facilis ea!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam 
                    accusantium debitis quas provident iure blanditiis. Optio quidem 
                    ducimus assumenda aliquam modi odio iure eum veniam fugiat? Eum voluptates facilis
                </p>
            </div>
        </div>

        <br/><br/>

        <div class="row">

            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/33091.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/buss3.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/buss.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/team1.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>

            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/team2.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/team3.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/team4.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/buss4.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div><br/>

            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/buss.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/buss2.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/team1.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
            <div class="col-md-3">
            <img width="230px" style="margin-left: 20px;" src="/team4.jpg" alt="" srcset="">
            <center><h6>Lorem</h6></center>
            <center><p>Lorem Epsum</p></center>
            </div>
        </div>

        <center><h6 class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste aut quis repellendus numquam ab. Sapiente ipsam distinctio doloribus saepe voluptatum delectus sunt quam. Blanditiis doloribus autem, harum sequi nemo facere?</h6></center>
    </div>

    

    <?php
    include('Footer.php');
    ?>
</body>
</html>