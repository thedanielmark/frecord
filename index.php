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
        <form action="process_request.php" method="post">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control mt-2" name="regNo" id="regNo" placeholder="Type register number here">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mt-2" name="name" id="name" placeholder="Type full name here">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mt-2">Download</button>
                </div>
                <div class="col-auto">
                    <button type="" class="btn btn-primary mt-2">Print</button>
                </div>
                <br>
                <p class="lead pl-4 pt-3 pb-0">Your register number and name will automatically get appended to the footer of each page.</p>
            </div>
        </form>
    </div><!-- end of outer container -->

    <div class="container col-xs-12 col-md-8 mt-3 mb-5">

    <h4 class="pb-2">List of experiments in Object Oriented Analysis and Design</h4>
    
    <ul class="list-group list-group-flush">

        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    1. Identify a software system that needs to be developed.
                </label>
            </div>
        </li>

        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    2. Document the Software Requirements Specification (SRS) for the identified system.
                </label>
            </div>
        </li>
        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                <label class="form-check-label" for="defaultCheck3">
                    3. Identify use cases and develop the Use Case model.
                </label>
            </div>
        </li>

        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                <label class="form-check-label" for="defaultCheck4">
                    4. Identify the conceptual classes and develop a Domain Model and also derive a Class Diagram from that.
                </label>
            </div>
        </li>

        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                <label class="form-check-label" for="defaultCheck5">
                    5. Using the identified scenarios, find the interaction between objects and represent them using UML Sequence and Collaboration Diagrams
                </label>
            </div>
        </li>

        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                <label class="form-check-label" for="defaultCheck6">
                    6. Draw relevant State Chart and Activity Diagrams for the same system.
                </label>
            </div>
        </li>

        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
                <label class="form-check-label" for="defaultCheck7">
                    7. Implement the system as per the detailed design
                </label>
            </div>
        </li>

        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck8">
                <label class="form-check-label" for="defaultCheck8">
                    8. Test the software system for all the scenarios identified as per the usecase diagram
                </label>
            </div>
        </li>

        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck9">
                <label class="form-check-label" for="defaultCheck9">
                    9. Improve the reusability and maintainability of the software system by applying appropriate design patterns
                </label>
            </div>
        </li>

        <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                <label class="form-check-label" for="defaultCheck10">
                    10. Implement the modified system and test it for various scenarios
                </label>
            </div>
        </li>

    </ul>
    
    </div><!-- end of main container -->


    <!-- Footer -->
    <footer class="page-footer font-small footer">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        A <a href="https://www.instagram.com/danielmarkd/" class="footer-links">Daniel Mark</a> and <a href="https://www.instagram.com/_hooo.x_/" class="footer-links">Harrison Mathew</a> Production 
        <br>
        <a href="https://danielmarkd.com" class="footer-links"> www.danielmarkd.com</a> <a href="https://instagram.com/pixellymedia" class="ml-2 footer-links">Pixelly</a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>