<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="/stylesheets/theme.css" type="text/css">
</head>

<body>
  <div class="py-3 bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center d-md-flex justify-content-between align-items-center">
          <ul class="nav d-flex justify-content-center">
             <li class="nav-item text-dark" style=""> <a class="nav-link active" href="concert_info.php">HOME</a> </li>
            <li class="nav-item text-dark"> <a class="nav-link" href="buy_ticket.php">BUY TICKET</a> </li>
            <li class="nav-item"> <a class="nav-link" href="line_up.php">LINE UP</a> </li>
            <li class="nav-item"> <a class="nav-link" href="location.php">LOCATION</a> </li>
          </ul>
        </div>
        <div class="col-md-6 text-center d-md-flex justify-content-between align-items-center">
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul> <a class="btn btn-primary" href="contact_us.php">Contact us</a>
          <div class="btn-group"> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">USER</button>
            <div class="dropdown-menu"> <a class="dropdown-item" href="user-profile.php">MY PROFILE</a>
              <div class="dropdown-divider"></div> <a class="dropdown-item" href="user-my_ticket.php" style="">MY TICKET</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="home_page.php" style="">LOG OUT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">C STANDING Ticket</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1 text-left">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="btn-group"> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Quantity</button>
            <div class="dropdown-menu"> <a class="dropdown-item" href="#">1</a>
              <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">2</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">3</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">4</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">5</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="">Total Cost</h1>
        </div>
        <div class="col-md-6">
          <h1 class="">Cost</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li class="nav-item"> <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">Credit Card / Debit Card</a> </li>
            <li class="nav-item"> <a class="nav-link" href="" data-toggle="tab" data-target="#tabtwo">Counter Service</a> </li>
          </ul>
          <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
              <div class="row">
                <div class="mx-auto col-lg-6 col-10">
                  <h1>Credit Card / Debit Card</h1>
                  <form class="text-left">
                    <div class="form-group"> <input type="text" class="form-control" id="form16" placeholder="Card Number"> </div>
                    <div class="form-group"> <label for="form17"></label> <input type="text" class="form-control" id="form17" placeholder="Card Holder Name"> </div>
                    <input type="date" class="form-control" id="form17" placeholder="Card Holder Name">
                    <div class="form-group"> <label for="form18"></label> <input type="email" class="form-control" id="form18" placeholder="CVC/CVV"> </div>
                    <div class="form-group">
                      <div class="form-check"> <input class="form-check-input" type="checkbox" id="form21" value="on"> <label class="form-check-label" for="form21">Accept Term of Service</label> </div>
                    </div><a class="btn btn-primary" href="user-my_ticket.php">Payment</a>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabtwo" role="tabpanel">
              <p class="lead text-center">Please bring this QR-code to counter service within 30 minuits.</p><img class="img-fluid d-block mx-auto" src="DBee_QRcode.png">
            </div>
            <div class="tab-pane fade" id="tabthree" role="tabpanel">
              <p class="">Tab pane three. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center">
    <div class="container">
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center"> <i class="d-block fa fa-stop-circle fa-2x mr-md-5 text-primary"></i>
          <ul class="nav mx-md-auto d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link active" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2"> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0">© 1993-2018 DBMusic. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
