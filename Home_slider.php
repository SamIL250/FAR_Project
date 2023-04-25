<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <style>
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

<div style="background: #444;" id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li> 

    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img    style="width: 89em; height: 40em; opacity: calc(0.3);" src="buss.jpg">
            <div class="carousel-caption">
                <big><center><h1 style="position:relative; top: -432px; font-size: 80px; ">F.A.R</h1></center></big>
             <h1 style="margin-top: -10em; color: aqua;">Financial Assistantance For Rwanda</h1>
                <h1>Plan For Your Future</h1>
                <h3>Starting From 5000Rwf</h3>
            </div>
        </div>
        <div class="carousel-item ">
            <img   style="width: 89em; height: 40em; opacity: calc(0.3);"  src="buss2.jpg">
            <div class="carousel-caption">
                <big><center><h1 style="position:relative; top: -432px; font-size: 80px; ">F.A.R</h1></center></big>
               <h1 style="margin-top: -10em; color: aqua;">Financial Assistantance For Rwanda</h1>
                <h1>Avoid Poverty</h1>
                <h3>Starting From 5000Rwf</h3>
            </div>
        </div>
        <div class="carousel-item ">
            <img    style="width: 89em; height: 40em; opacity: calc(0.3);" src="33091.jpg">
            <div class="carousel-caption">
                <big><center><h1 style="position:relative; top: -432px; font-size: 80px; ">F.A.R</h1></center></big>
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


            <form action="db_conn.php" method="post">
            <div class="form-group">
                <label for="" class="form-label">First Name</label>
                <input type="text" name="f_name" id="" class="form-control" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Last Name</label>
                <input type="text" name="l_name" id="" class="form-control" placeholder="Last Name">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Phone Number</label>
                <input type="tel" name="phone" id="" class="form-control" value="+250">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Email Address</label>
                <input type="text" name="email" id="" class="form-control" placeholder="emailexample@gmail.com">
            </div>

            <div class="form-group">
                <label for="" class="form-label">ID</label>
                <input type="text" name="id" id="" class="form-control" placeholder="ID Number">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Bank Accout</label>
                <input type="text" name="bank" id="" class="form-control" placeholder="Bank Account">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Reason Why We Should Help You</label>
                <textarea type="text" name="reason" id="" class="form-control" placeholder="First Name"></textarea>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Amount</label>
                <input type="number" name="amount" id="" class="form-control" placeholder="Amount Of Money (Rwf) ">
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





















<script src="bootstrap.min.js"></script>
<script src="jquery.js"></script>
<script src="popper.min.js"></script>
</body>
</html>