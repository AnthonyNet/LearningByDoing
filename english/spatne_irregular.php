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



<section class="natureBody text-center">
  <div class="wrap">
 

 

<script type="text/javascript">
  let foo = <?php 
  echo json_encode($routeArr); ?>;

function getRandomInt(max) {
        return Math.floor(Math.random() * max);
      }
 
</script>

<script>

function createTabsByJS(foo){
      let wrapIrregular = document.querySelector('.wrap');

      let wrap_cnt = "";

      for (let index = 0; index < 10; index++) {
        
        wrap_cnt = `<div class="card cardIrr text-center mb-2" style="width: 18rem; margin: 0 auto;" id="${foo[index].cz}">
                    <div class="card-header d-flex justify-content-center ">
                      <h3 class=" text-primary mb-1">${foo[index].cz}</h3>
                     
                    </div>

           <ul class="list-group list-group-flush">
                <li class="list-group-item"><input id="slovo_ID" data-verb="${foo[index].base}" type="text"></li>
                <li class="list-group-item"><input id="slovo_ID" data-verb="${foo[index].pastSimple}" type="text"></li>
                 <li class="list-group-item"><input id="slovo_ID" data-verb="${foo[index].pastParticiple}" type="text" ></li>
                 <li class="list-group-item">Správná odpověď:</li>
                 <li class="list-group-item answerCard">${foo[index].base} ${foo[index].pastSimple} ${foo[index].pastParticiple}</li>
           </ul>
                  </div>`;

             wrapIrregular.innerHTML += wrap_cnt;
      }
    };

    createTabsByJS(foo);


</script>
</div>
</section>
<?php include "../partials/footer.php" ?>

