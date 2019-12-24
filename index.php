<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">

    <title>Frecord</title>
  </head>
  <body>

    <!-- div for nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Frecord</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-5" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">OOAD <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mad.php">MAD</a>
            </li>
            </ul>
        </div>
    </div>
    </nav>

    <!-- end of navbar -->
    <div class="container jumbotron p-3 mt-3">
        <form action="process_ooad.php" method="post">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control mt-2" name="regNo" id="" placeholder="Type register number here">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mt-2" name="name" id="" placeholder="Type full name here">
                </div>
                <div class="col-auto">
                    <input type="submit" name="submit" class="btn btn-primary mt-2" value="Submit">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mt-2">Print</button>
                </div>
                <br>
                <!--<p class="lead pl-4 pt-3 pb-0">Your register number and name will automatically get appended to the footer of each page.</p>-->
            </div>
        </form>
    </div><!-- end of outer container -->
</body>
</html>