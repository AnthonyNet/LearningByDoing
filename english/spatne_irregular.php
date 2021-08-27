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
    <button onclick="console.log(getRandomInt(143));" class="btn_IrregularVerbsRand color-primary p-2">Zobraz slovo</button>
    <ul class="randVerbsList">

    </ul>
  </div>
</section>
 

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

      for (let index = 0; index < foo.length; index++) {
        
          wrap_cnt = '<table class="table table-dark table-hover" >';
          wrap_cnt += `<tr><td>${foo[index].cz}</td></tr>`;
          wrap_cnt += `<tr><td><input id="slovo_ID" data-verb="${foo[index].base}" type="text" ></td></tr>`;
          wrap_cnt += `<tr><td><input id="slovo_ID" data-verb="${foo[index].pastSimple}" type="text" ></td></tr>`;
          wrap_cnt += `<tr><td><input id="slovo_ID" data-verb="${foo[index].pastParticiple}" type="text" ></td></tr>`;
          wrap_cnt += `<tr><td>Správná odpověď:</tr></td>`;
          wrap_cnt += `<td class="answer"> ${foo[index].pastSimple} ${foo[index].pastSimple} ${foo[index].pastParticiple} </td>`;
          wrap_cnt += `</table>`;
          wrapIrregular.innerHTML += wrap_cnt;
      }
    };

    createTabsByJS(foo);

</script>

<?php include "../partials/footer.php" ?>

