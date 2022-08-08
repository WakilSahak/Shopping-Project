<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery.min.js">  </script>
    <script type="text/javascript" src="js/bootstrap.min.js">  </script>
    <title>Section Parts</title>
</head>
<body>
<!-- slider part -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image/son-1.jpg" alt="son" style="width:100%; height:600px">
      </div>

      <div class="item">
        <img src="image/girl-1.jpg" alt="girl" style="width:100%; height:600px">
      </div>

      <div class="item">
        <img src="image/man-1.jpg" alt="man" style="width:100%; height:600px">
      </div>

      <div class="item">
        <img src="image/woman-1.jpg" alt="woman" style="width:100%; height:600px">
      </div>

      <div class="item">
        <img src="image/family-3.jpg" alt="family" style="width:100%; height:600px">
      </div>

      <div class="item">
        <img src="image/bride & groom-3.jpg" alt="bride & groom" style="width:100%; height:600px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</body>
</html>