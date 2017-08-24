<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plan of Action</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
           <link href="css/main.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    
   <?php include("menu.html");?>

   <header id="myCarousel"  class="carousel slide thetop">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" ></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/1.jpg');"></div>
                
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/2.jpg');"></div>
               
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/3.jpg');"></div>
                
            </div>
            
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/4.jpg');"></div>
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" id="rightcar" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

</header>
    
    <div class="container-fluid">
        <div class="row" id="dd">
            <div class=" col-xs-12 col-md-5 col-lg-5">
                 <div class="form-body">
			<form role="form">
          	<div class="form-group category">
     
				<select  class="form-control form-element" name='location' id="area"  >
                                  
                                    <option class='drop-down' value='null' selected disabled> Select Location </option>		
					<option class='drop-down' value='Delhi'> North Delhi </option>			
					<option class='drop-down' value='Noida'>South Delhi </option>			
					<option class='drop-down' value='Gurgaon'> West Delhi </option>			
								
				</select>
              
</div>
                            
                        </form>
                 </div>
            </div>
                <div class="col-xs-12 col-md-5 col-lg-5">
                 <div class="form-body">
			<form role="form">
          	<div class="form-group category">
     
				<select  class="form-control form-element" name='location' id="activity"  >
                                    <option class='drop-down' value='null'  selected disabled>Select Activity </option>		
					<option class='drop-down' value='Travel'>Travel</option>			
					<option class='drop-down' value='Events'> Events </option>			
					<option class='drop-down' value='Food'>Food </option>			
					<option class='drop-down' value='Hiking'> Hiking </option>			
				</select>
                        
              <br>
                </div>
                        </form>
                 </div>
                </div>
                
              <div class=" col-xs-12 col-md-2 col-lg-2">
                 <div class="form-body">
			<form role="form">
          	<div class="form-group category">
     
<button type="button" id="gobtn" class="btn btn-default btn-success btn-block submit-btn go-btn"><span class="glyphicon glyphicon-search"></span>&nbsp; GO -></button>
</div>
                        </form>
                 </div>
            </div>
            </div>
            
        </div>
    <!--Main Section-->
    <div id="imgslider"> <?php include("imgslider.html");
    ?>
    </div>
    <div class="container-fluid" id="right">
             
           <?php include("blog.html");?>
        
    </div>
    <div class="container-fluid">
            
           <?php include("inspiration.html");?>
        
    </div>
    <!-- Newsletter
   
<div class="container-fluid" id="newsletter">
      <div class="row">
        <div class="col-xs-12">
          <h1>Subscibe to our daily newsletters!</h1>
        </div>
      </div>
          <div class="row" id="email">
          <div class="col-xs-12 col-md-7 col-lg-7 col-lg-offset-2">
                
			<form role="form">
                            <div class="form-group category">
                                <input type="email" value="Your Email Address" class="form-control">                                                                            
                               </div></form></div>
               <div class="col-lg-2 col-md-2 col-xs-12">
<button type="button" id="gobtn" class="btn btn-default btn-success btn-block bg-success"></span>&nbsp;Subscribe</button>
                                </div>
                      </div>
    </div>
    -->
    <?php include("footer.html");?>
</body>

</html>
