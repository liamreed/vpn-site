<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VPN service - Features</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,400' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="features.html">Features</a>
                    </li>
                    <li>
                        <a href="order.php">Order</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="docs/index.html">Docs</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <a id="home"></a>
    <div class="intro-header" style="padding-top:90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <h1 style="color:#fff">Order</h1>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
	<a id="features"></a>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Order</li>
        </ul>

    <div class="container">
    <form id="orderForm" class="form-horizontal" action="scripts/mail/send.php" method="post"> <!-- POST form contents to scripts/mail/send.php -->
      <fieldset>
        <legend>Send Email</legend>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input name="emailAddress" type="text" class="form-control" id="inputEmail" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="textArea" class="col-lg-2 control-label">Message</label>
          <div class="col-lg-10">
            <textarea name="emailBody" class="form-control" rows="3" id="textArea"></textarea>
            <span class="help-block"></span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-1 col-lg-offset-11">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </fieldset>
    <div id="sendSuccess" class="alert alert-success" role="alert" hidden="true"><strong>Thanks!</strong>     Your order inquiry has been sent!</div>
    <div id="sendError" class="alert alert-danger" role="alert" hidden="true"><strong>Oops!</strong>     Submission does not include working SMTP details: Put $("#sendSuccess").show(); in Chrome console to see the success message</div>
    </form>
    </div>

	<a id="contact"></a>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Learn more about our service</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="features.html" class="btn btn-primary btn-lg"><i class="fa fa-info-circle fa-fw"></i> <span class="network-name">Features</span></a>
                        </li>
                        <li>
                            <a href="faq.html" class="btn btn-primary btn-lg"><i class="fa fa-question fa-fw"></i> <span class="network-name">FAQ</span></a>
                        </li>
                        <li>
                            <a href="docs/index.html" class="btn btn-primary btn-lg"><i class="fa fa-mortar-board fa-fw"></i> <span class="network-name">Docs</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="features.html">Features</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="order.php">Order</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="docs/index.html">Docs</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; anovpn 2015. <a href="tos.html">ToS</a> <a href="privacy.html">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Catch the form POST send and check for success (trigger alerts) -->
    <script>
            $(function() {
                $("#orderForm").on("submit", function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: $(this).attr("action"),
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function(data) {
                            $("#sendSuccess").show();
                        },
                        error: function( jqXhr, textStatus, errorThrown ){
                            console.log( errorThrown );
                            $("#sendError").show();
                        }
                    });
                });
            });
    </script>

</body>
</html>
