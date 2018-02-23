<html lang="fr">
<head>
  <title>TripMyLife ©</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="JavaScript" src="js/workby.js"></script>


  </head>
<body>
<?php include ('pages/nav.php');?>

<div class="container">


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!--  -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="search_trip">
        

      </div>
      <div class="item active">
        <img src="pictures/nyc.png" alt="New York" style="width:100%;">
      </div>

      <div class="item">
        <img src="pictures/surf.png" alt="Hossegor" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="pictures/nice.png" alt="rice" style="width:100%;">
      </div>
    </div>

  </div>
</div>

<div class="panel panel-default search-pannel">
      <div class="panel-heading">Let's Go</div>
      <div class="panel-body">Search By:
      <form name="chose_by" action="" method="POST">
      <select name="workortrip" class="form-control" OnChange="select_change_triporwork();">
        <option value="1">Destination</option>
        <option value="2">Work</option>
     </select>
     <div id="form_trip" style="display: inline;">
       <p>Chose your destination : </p>
        <input class="form-control" type="text" placeholder="Chose Destination">        
     </div> 
     
     <div id="form_work" style="display: none;">
      <p>Select a job category : </p>
        <select name="categ_job" class="form-control">
          <option value="1">Will be load from db</option>
          <option value="2">Will be load from db</option>
          <option value="2">...</option>
        </select>
     </div> 
     <p>Chose your dates : </p>
      <input class="form-control formdate" type="date" value="Check-in">
      <input class="form-control formdate" type="date" value="Check-out">
      <p>How Many Person?: </p>
      <select id="nb_person" class="form-control" name="nb_person">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7+</option>
     </select>
        

      <input type="submit" value="GO">
    </form>

      
        
      </div>
    </div>



    
    <div class="container indexResult">
  <h3>Last publications</h3>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        
        
      </div>
    </div>
  </div>
   <h3>Best Works Categories</h3>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        
        
      </div>
    </div>
  </div>
   <h3>Best Destinations</h3>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        <div class="border pictures-box"> <img src="cinqueterre.jpg" class="img-responsive" alt="Will be upload soon"> </div>
        
        
      </div>
    </div>
  </div>
</div>












</body>