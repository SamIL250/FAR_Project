<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Funding</title>
    <style>
         body
        {
            background-image: url(33091.jpg);
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php
    include('Nav.php');
    include('Home_slider.php');
    ?>

    <center><h1>Funding</h1></center>
    <br />

    <center><h4 class="text-muted">Fill Out The Following FieldS And Recieve Your Assistance!</h4></center><br>

    <div class="jumbotron">
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
                <label for="" class="form-label">Credit Card</label>
                <input type="text" name="bank" id="" class="form-control" placeholder="Credit Card Number">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Reason Why We Should Help You</label>
                <textarea type="text" name="reason" id="" class="form-control" placeholder="First Name"></textarea>
            </div>

            <div class="form-group">
                <label for="" class="form-label">Amount</label>
                <input type="number" name="amount" id="" class="form-control" placeholder="Amount Of Money (Rwf) ">
            </div>

            <div class="form-group">
            <a type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mymodal">Submit</a>

             <!-- Modal -->
             <div id="mymodal" class="modal fade" role="dialog">
             <div class="modal-dialog">

               <!-- Modal content-->
                 <div class="modal-content">
                    <div class="modal-header">
                     
                      <h4 class="modal-title">Fund Assistant</h4>
                    </div>
                    <div class="modal-body">
                                    <p>Thank you for using <h3>Fund Assistant</h3></p>
                     </div>
                    <div class="modal-footer">
                 <a type="button" class="btn btn-warning" data-dismiss="modal">Close</a>
                </div>
                  </div>
              
              </div>
              </div>
            </div>
        </form>
    </div>



<?php
include('Footer.php');
?>

    

<script src="bootstrap.min.js"></script>
<script src="jquery.js"></script>
<script src="popper.min.js"></script>
</body>
</html>