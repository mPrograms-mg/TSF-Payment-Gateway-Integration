<!DOCTYPE html>
<html>
<head>
    <title>TSF Bank</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <style>
      .header2
      {
        min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(img/image.jpg);
        background-position: center;
        background-size: cover;
        position: relative;
      }
      label
      {
        color: white;
        
      }
      
    </style>
</head>
<body>
<section class="header2">
 <?php
      include 'navbar.php';
 ?>
<div> <br>

       <form class="form-horizontal"  method="post" action="simple.php"  style="margin-left:22%;">
            <h1 style="color: white; margin-left:27%; top:40%;">Contact Us</h1><br>
          <div class="form-group">
            <label class="control-label col-sm-2"  required>Name</label>
            <div class="col-sm-5">          
                  <input type="text" class="form-control"  name="name">
            </div>
          </div>
        
          <div class="form-group">
            <label class="control-label col-sm-2" for="amt" required>Email</label>
            <div class="col-sm-5">          
                  <input type="email" class="form-control" id="amt"  name="amt">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="amt" required>Message</label>
            <div class="col-sm-5">          
                   <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>

          <div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
            <button class="btn btn-default" name="submit" type="submit"  style="font-weight: bold;">Submit
            </button></a>
           </div>
          </div>

       </form>
    </div>
</section>
<div class="absolute">        
  <footer class="text-center mt-5 py-2" style="margin-top:0%;"> 
        <p>&copy 2021 Made by <b>Mahesh Kshirsagar</b></p>
  </footer>
</div>
</body>
</html>