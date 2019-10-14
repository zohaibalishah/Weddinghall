<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Town Portal</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/mystyle.css">
    <link href="style.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid navbar-inverse admin-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <a href="#"><span class="glyphicon glyphicon-user"></span> Sign In</a>
                    <a href="#"><span class="glyphicon glyphicon-pencil"></span> Sign Up</a>
                </div>
                <div class="col-md-offset-5 col-md-4 col-sm-offset-2 col-sm-6">
                    <div class="navbar-right">
                        <span class="glyphicon glyphicon-earphone"> 1234 55656 767</span>
                        <a href="#"><span class="glyphicon glyphicon-envelope"></span> example@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="">
          </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Mission</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/slider1.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>Slide First</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="item">
                <img src="images/slider2.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>Slide Second</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!------->

    <div class="container">
        <div class="row">
            <h2> Search form</h2>
            <form>
                <div class="form-group">
                    <label></label>
                    <input type="" class="form-control" placeholder="Owner-name">
                </div>
                <div class="form-group">
                    <label></label>
                    <input type="" class="form-control" placeholder="House NO">
                </div>
                <div class="form-group">
                    <label></label>
                    <input type="" class="form-control" placeholder="Street NO">
                </div>

                <button type="submit" class="btn btn-default form-control">Search</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h2>Rent House</h2>
            <div class="col-md-4">
                <a href="#">
                    <div class="rent-house">
                        <img src="3.jpeg">
                        <div class="rent-house-detail">
                            <div class="row">
                                <div class="col-xs-4"><b><i class="fa fa-bed"></i></b>:4</div>
                                <div class="col-xs-4"><b><i class="fa fa-align-center"></i></b>:2</div>
                                <div class="col-xs-4"><b><i class="fa fa-car"></i></b>:yes</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="#">
                    <div class="rent-house">
                        <img src="3.jpeg">
                        <div class="rent-house-detail">
                            <div class="row">
                                <div class="col-xs-4"><b><i class="fa fa-bed"></i></b>:4</div>
                                <div class="col-xs-4"><b><i class="fa fa-align-center"></i></b>:2</div>
                                <div class="col-xs-4"><b><i class="fa fa-car"></i></b>:yes</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="#">
                    <div class="rent-house">
                        <img src="3.jpeg">
                        <div class="rent-house-detail">
                            <div class="row">
                                <div class="col-xs-4"><b><i class="fa fa-bed"></i></b>:4</div>
                                <div class="col-xs-4"><b><i class="fa fa-align-center"></i></b>:2</div>
                                <div class="col-xs-4"><b><i class="fa fa-car"></i></b>:yes</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <br><br>
        <p class="text-center"> <a class="btn btn-default" href="#"> View More</a></p>
    </div>

    <div class="container">
        <div class="row">
            <h2>Our Team</h2>
            <div class=" col-md-4">
                <div class="our-team text-center">
                    <img src="4.jpg">
                    <h4>team name</h4>
                    <h4>team designation</h4>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="our-team text-center">
                    <img src="4.jpg">
                    <h4>team name</h4>
                    <h4>team designation</h4>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="our-team text-center">
                    <img src="3.jpeg">
                    <h4>team name</h4>
                    <h4>team designation</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" col-md-4">
                <div class="our-team text-center">
                    <img src="4.jpg">
                    <h4>team name</h4>
                    <h4>team designation</h4>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="our-team text-center">
                    <img src="4.jpg">
                    <h4>team name</h4>
                    <h4>team designation</h4>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="our-team text-center">
                    <img src="3.jpeg">
                    <h4>team name</h4>
                    <h4>team designation</h4>
                </div>
            </div>
        </div>
        <p class="text-center"> <a class="btn btn-default"> view more</a></p>
    </div>


</body>

</html>