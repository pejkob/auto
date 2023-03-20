<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        body{
            background-image:url("image.png");
            background-size: 100%;
            background-repeat: no-repeat;
            
        }
        .menupont{
            color:#EA5455;
            padding-left: 10px;
            padding-right:10px;
        }
        .add{
            display: block;
            margin-left: auto;
            margin-right: 10px;
        }

       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #002B5B;">
        <h1 class="menupont">Webfejlesztés</h1>
        
        <div class="container-fluid">
          <a class="navbar-brand menupont" href="#">Home</a>
          <button class="navbar-toggler menupont" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
             
              <li class="nav-item dropdown menupont">
                <a class="nav-link dropdown-toggle menupont" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Témakörök
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item menupont" href="#">Bootstrap</a></li>
                  <li><a class="dropdown-item menupont" href="#">JavaScript  </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item menupont" href="#">Something else here</a></li>
                </ul>
              </li>
              
            </ul>
            
            
          </div>
          <button type="button"  data-bs-toggle="modal" data-bs-target="#modalPopUp" class="add btn" style="background-color: #86A3B8;">Projekt hozzáadása</button>
          
          <div class="modal fade" id="modalPopUp" tabindex="-1" aria-labelledby="modalPopUpLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="modalPopUpLabel">Új Projekt hozzáadása</h1>
                  </div>
                <div class="modal-body">
                   <form method="post">
                    <input type="text" name="card[name]" id="cardname">
                    <input type="text" name="card[description]" id="carddescription">
                    <input type="text" name="card[indexlink]" id="cardindexlink">

                   </form>
                </div>
                <div class="modal-footer">
                <form method="post">
                  <button type="button" name="button1" class="btn btn-success" data-bs-dismiss="modal">Save changes</button>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </form>
                <?php
                        if(isset($_POST['button1'])) {
                          $servername = "localhost";
                          $username = "webaruhaz_pr";
                          $password = "&rsuzu(%K%x!fn^D";
                          $dbname = "webaruhaz_pr";
                          $name=$_POST['card[name]'];
                          $description=$_POST['card[description]'];
                          $indexlink=$_POST['card[indexlink]'];

                          $conn = mysqli_connect($servername, $username, $password, $dbname);

                          $conn = mysqli_connect($servername, $username, $password, $dbname);
                          // Check connection
                          if (!$conn) {
                            die("Kapcsolódási hiba: " . mysqli_connect_error());
                            }

                          $sql = "INSERT INTO `cards`(`cardID`, `cardname`, `carddescription`, `cardindexlink`) VALUES (,$name,$description,$indexlink)";
                          $result = mysqli_query($conn, $sql);

                          if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            echo "siker";
                          }

                    
                        }
                      ?>
                 
                  
                </div>
              </div>
            </div>
          </div>

          <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>
        </div>
      </nav>
      <div class="container">
     
        

      </div>
    

    <script src="test.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>