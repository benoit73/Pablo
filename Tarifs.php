
<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "picasso";

$conn = new mysqli($host, $user, $pass);
            
try { $dsn = "mysql:host=" . $host . ";dbname=" . $dbname; $pdo = new PDO($dsn, $user, $pass);
   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 } catch(PDOException $e) {
      echo "DB Connection Failed: " . $e->getMessage();
     }
 $stmt = $pdo->query('SELECT * FROM tarif');

?>







<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Tarif</title>
    <link rel="stylesheet" type="text/css" href="styleBen.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>


  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid ">
        <a class="navbar-brand " href="#">Pablo Expo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="site .html">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="les oeuvres.html">Les oeuvres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a propos video.html">A propos de Picaso</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Google map.html">Informations pratiques</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Tarifs.php">Tarifs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <p id="test">Les prix sont suseptibles de changer selon l'humeur de la CEO. </p>
        </div>
        <div class="col">
          
        <table class="tarifTab">
            <thead>
              <tr>
                <th scope="col">Catégorie</th>
                <th scope="col">Prix</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              while($row = $stmt->fetch())
              {?> <tr>
              <th scope="row">>
                <?php 
                
                echo $row['Categorie'];?>
              </th> 
              <td><?php echo $row['Prix'];?></td>
               <?php 
              } 
              ?> 
              </tbody>
          </table>
        </div>

        <div class="col github"></div>
      </div>
    </div>









  </body>
  </html>
