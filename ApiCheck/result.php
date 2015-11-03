<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Testing API's using Voice.</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">API Testing</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Faq's</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Faq's</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Result Page</h1>
      <div class="row center">
 <div class="row">

<?php 

$testId=$_POST['testId'];
$testName=$_POST['testName'];
$url=$_POST['urls'];
$requests=$_POST['requests']; 
$email=$_POST['email']; 
$status=false;

echo "<h2>Test ID: $testId</h2>";
echo "<h2>Test Name:$testName</h2>";
echo "<h2>URL to be Tested: $url</h2>";
echo "<h2>Email: $email</h2>";

for ($i=0; $i <$requests ; $i++) { 
  
$Jurl=file_get_contents($url);
if(json_decode($Jurl, true)) {
echo "<h2> Request Number: ".$i."</h2>";
var_dump(json_decode($Jurl, true));
$status=true;
}
else {

echo "<div class='fail message'>The Json File isn'nt valid </div><br>";

}

}
if($status) {

  echo "<div class='sucess message'>Test Was Passed Successfully</div>";
}

?>
</div>
        

<script>
  var a=document.querySelector('.message').innerHTML;
  console.log(a);


  function word() {


    responsiveVoice.speak(a);
  
  }

  word();
</script>












      </div>
 
      <br><br>

    </div>
  </div>




  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About The Project</h5>
          <p class="grey-text text-lighten-4">Testing tool utility for API's using Voice. Built using PhantomJS and CasperJS</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
     Buit at the beautiful campus of <a class="orange-text text-lighten-3" href="http://vit.ac.in">VIT University</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
