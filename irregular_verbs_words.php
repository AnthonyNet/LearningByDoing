<?php include "partials/header.php" ?>
    


<?php
//Get the content of the JSON file using file_get_contents():

//$str = file_get_contents('irregular_verbs.json');

$str = file_get_contents('json/irregular_verbs.json');

//Now decode the JSON using json_decode():

$json = json_decode($str, true); // decode the JSON into an associative array
$obj = json_decode (json_encode ($json), FALSE);

$route = $obj->verbs;

$routeArr= $json['verbs'];

$preklady = ["vzniknout", "awake", "být", "rodit", "porazit", "stát se", "začít", "ohnout", "sázet", "spoutat, svázat", "kousnout"  ];


require "data/irregular_verbs_english.php";

?>



<table class="table table-dark table-hover">
  <thead>
        
      <tr>
          <th colspan="5">Irregular verbs english</th>
      </tr>
        
    </thead>
  <tr>
    <th scope="col">CZ</th>
      <th scope="col">Base</th>
      <th scope="col">Past Simple</th>
      <th scope="col">Past Participle</th>
      <th scope="col">Answer</th>
  </tr>


  <?php addInputs($routeArr, $trans); ?>
  </table>
 


<?php include "partials/footer.php" ?>