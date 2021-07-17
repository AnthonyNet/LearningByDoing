<?php include "partials/header.php" ?>
</header>

<body>
<?php include "data/slova_anglictina.php";
			
     
      $sort_by_10 = array_chunk($data_anglictina, 10, true);
    /*
      echo "<pre>";
      print_r($sort_by_10);
      echo "</pre>";
    */
      $i_sort_by_10 = 1;

      $slova = [	"udržovat, zachovat" => "maintain",
      "protilátka" => "antibody",
      "dospělý" => "mature",
      "rozvinutý" => "developed",
      "rozdělit" => "distribute",
      "uvolnit" => "release",
      "buď a nebo" => "either or",
      "nezralý" => "immature",
      "vázat se" => "bind",
      "rozpoznat" => "recognize",
      "důsledky" => "consequences",
      "překážka" => "obstacle",
      "čelit" => "face",
      "představovat hrozbu" => "pose a threat",
      "přispět k problému" => "contribute to the problem",
      "zmírnit" => "mitigate",
      "vlastnost" => "feature",
      "překážet, bránit" => "hinder",
      "hledat" => "seek",
      "chřipka" => "Influenza",
      "nedostatek" => "Scarcity",
      "hodnotit" => "evaluate",
      "stejně" => "equally"];

      $sort_by_5 = array_chunk($slova, 5, true);
      ?>
    
    <?php 

    function kazdychPet($sort_by_5){
      foreach($sort_by_5 as $sorted){
        echo '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h2>Ahoj</h2>
          </div>
          
          <div class="carousel-item">HEJ</div>;
     
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>';
       }
    }

    function okno($sort_by_5){
      foreach($sort_by_5 as $sorted){
        foreach($sorted as $key=>$value){/*
          echo '<div class="carousel-item">';
          echo $key;
          echo '</div>';*/

          echo '<pre>';
          print_r($key);
          echo '</pre>';
        }
    }
  }
    kazdychPet($sort_by_5);

    okno($sort_by_5)

    
    /*
  foreach($sort_by_5 as $sorted){

   
   
   echo '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
      </div>';

      foreach($sorted as $nevim) {

        echo '<pre>';
        print_r($nevim);
        echo '</pre>';

       echo '<input class="btn btn-primary" type="button" value="Input">'.$nevim;
      }
      echo ' <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>';
  }*/
     
  ?>
  
   

    
  

	

		
            </body>
        <?php include "partials/footer.php"?>


    