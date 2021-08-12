<?php include "../partials/header.php" ?>
    


<?php
//Get the content of the JSON file using file_get_contents():

//$str = file_get_contents('irregular_verbs.json');

$str = file_get_contents('../json/irregular_verbs.json');

//Now decode the JSON using json_decode():

$json = json_decode($str, true); // decode the JSON into an associative array
$obj = json_decode (json_encode ($json), FALSE);

$route = $obj->verbs;

$routeArr= $json['verbs'];

require "../data/irregular_verbs_english.php";

?>



<section class="natureBody">
  <div class="wrap">

  </div>
</section>
 


<?php include "../partials/footer.php" ?>

