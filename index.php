

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Genesis Lodge Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body{
        background-color: #526477;
    }
    .ColumnHeader
    {
        background-color: white;
        border-radius: 25px;
    } 
    h2{
        font-family: Garamond, Times, serif;
        color: #3f658a;
    }
    li{
        background-color: #1d5a74;
    } 
    li a:hover{
        color:#5b899d;
    }
    nav{
        background-color: #526477;
        color: aquamarine;
    }
    .MainContent{
        border-width: 0 10px;
        border-style: solid;
        border-color: #1d5a74;
    }
    .logo{
            width: 250px;
        }
    a{
        color:white;
    }
    nav{
        padding-left: 25%;
    }
    
    @media (max-width: 1200px) {
        nav{
        padding-left: 15%;
        }
        .logo{
            width: 250px;
        }
    }
    @media (max-width: 820px) {
        nav{
        padding-left: 15%;
        }
        .logo{
            width: 250px;
        }

    }
    @media (max-width: 1020px) {
        nav{
        padding-left: 12.5%;
        }
        .logo{
            width: 250px;
        }
    }
    @media (max-width: 768px) {
        nav{
        padding-left: 0%;
        }
        .logo{
            width: 30%;
        }
    }
    p{
        font-size: 1.25em;
    }
    ul{
        font-size: 1.25em;
    }
  </style>
</head>
<body>
    <br/>
<div class="row ">
    <div class="col-md-4">

    </div>
    <div class="col-md-4 text-center ColumnHeader">
        
        <img src="./images/GenisisLodge.png" class="img-reponsive logo">
        <br/>
        <br/>
        21 Church St. E.<br/>
        Brampton, Ontario<br/>
        L6V 1E8<br/>

        
    </div>
    <div class="col-md-4">

    </div>
    
</div>
<br/>
<div class="row">
    <div class="col-md-3">
        
    </div>
    <div class="col-md-6">
        <nav class="navbar  navbar-dark">
            <div class="container-fluid">
            <div class="navbar-header">
      
        </div>
        <ul class="nav navbar-nav text-center">
            <li class="active"><a href="./index.html"> About Us</a></li>
            <li><a href="./services.html"> Our Services</a></li>
            <li><a href="./contact.html"> Contact Us</a></li>
        </ul>
    </div>
    </nav>
    </div>
    <div class="col-md-3">
        
    </div>

</div>




  
<div class="container ColumnHeader MainContent">

    
    <div class="row">
        <div class="col-md-2 "></div>

        <div class="col-md-6 col-lg-12 ">
            <h1 class="text-center" style=" color: #1d5a74; font-family: Garamond, Times, serif;"> Contact Us</h1>
      
              
        </div>
        <div class="col-md-3 col-lg-2">

        </div>

    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 ">
            <h2>CONTACT US</h2>
            <p>
                PHONE: (905) 450-0277<br/>
FAX (905) 450-6764<br/>

Intake: Nathalie Anderson:<br/>
 nsmith.genesislodge@rogers.com<br/>



or feel free to leave a message in our general mailbox (Press '0') or use the form below.<br/>
            </p>
          
        </div>
        
        <div class="col-md-6 col-sm-6">
            <br/>
            <br/>
            <img class="img-reponsive text-center" src="http://genesislodge.com/images/house.jpg">
        </div>
  

    </div>
    <div class="row">
        <div class="col-md-3 col-sm-3">
            Find us at 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.048417655746!2d-79.7617566!3d43.68875680000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b159607e567f3%3A0x7bc709969fcfd8c1!2s21%20Church%20St%20E%2C%20Brampton%2C%20ON%20L6V%201E8!5e0!3m2!1sen!2sca!4v1672433873338!5m2!1sen!2sca" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="col-md-4 col-sm-4">
            <h2 class="text-center"> Information Request</h2>
            <?php   echo "Form Submitted Successfully";   


?>
        
<br/>
<br/>
Welcome <?php echo $_POST["ContactName"]; ?><br>
Email:  <?php echo $_POST["Email"]; ?><br>
Phone:  <?php echo $_POST["PhoneNumber"]; ?><br>
Question:  <?php echo $_POST["Question"]; ?> <br>

Email Sent to Genesis Lodge
<?php 
mail("constantine2920@hotmail.com","Request For Information: " + $_POST["ContactName"] ,
+
" PhoneNumber: "+ $_POST["PhoneNumber"] +
" Question:"+$_POST["Question"]);
?>

            <br/>
        </div>
        <div class="col-md-3 col-sm-3">
            
        </div>
    </div>
</div>
<br/>
<script>

</script>
</body>
</html>
