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

<?php 
$sort_by_10 = array_chunk($routeArr, 10, true);
/*
echo '<pre>';
print_r($sort_by_10);
echo '</pre>';*/
?>

<section class="irregularExerciseCover">
  <?php addInputs2($routeArr, $trans, $sort_by_10); ?>
</section>
 

<script type="text/javascript"> let irrVerbs2 = var foo = <?php 
$str = file_get_contents('../json/irregular_verbs.json');
echo json_encode($str); ?>; </script>
<?php include "../partials/footer.php" ?>