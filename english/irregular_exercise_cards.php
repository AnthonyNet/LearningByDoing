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
  <ul class="nav nav-tabs mb-4">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Vyber kartu</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Seznam</a>
    <ul class="dropdown-menu menu-karty">


      <!-- Vytvoř menu pomocí JS -->

      <!-- DROPDOWN MENU 1 SEZNAM VŠECH SLOVÍČEK -->
      <script>
        let foo2 = <?php 
        echo json_encode($routeArr); ?>;
        let menuKarty =  document.querySelector('.menu-karty')
        let wrapKarty = "";
 
        let pole = foo2;
        let arrX = new Array()
       

        for (let one of pole){
            arrX.push(one.cz) 
        }
        arrX.sort()
        
       for (let pokus of arrX){
        wrapKarty +=`<li><a class="dropdown-item" href="#${pokus}">${pokus}</a></li>`;
       }

/*
        for (let index = 0; index < foo2.length; index++) {
          wrapKarty +=`<li><a class="dropdown-item" href="#${foo2[index].cz}">${foo2[index].cz}</a></li>`;
        }*/
      
        menuKarty.innerHTML += wrapKarty;

      </script>
    </ul>
  </li>


   <!-- DROPDOWN MENU 1 SEZNAM VŠECH SLOVÍČEK -->

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Jednotlivá slova</a>
    <ul class="dropdown-menu menu-karty2">
      <script>
        let verbsC = <?php 
  echo json_encode($routeArr); ?>;
       let menuKarty2 =  document.querySelector('.menu-karty2')
        let wrapKarty2 = "";

       
        for (let index = 0; index < verbsC.length; index++) {
        
          wrapKarty2 +=`<li class="kartaMenu"><a class="dropdown-item" href="#${verbsC[index].cz}">${verbsC[index].cz}</a></li>`;
        }
      
        menuKarty2.innerHTML += wrapKarty2;

        
      </script>
      
      
    </ul>
    
  </li>


  <li class="nav-item showAllCards">
    <a class="nav-link" href="#">Vše</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
 

<!-- VYTVOŘ ELEMENTY KARTY POMOCÍ JS -->
 

<script type="text/javascript">
  let foo = <?php 
  echo json_encode($routeArr); ?>;
</script>

<script>

function createTabsByJS2(foo){
      let wrapIrregular = document.querySelector('.wrap');

      let wrap_cnt = "";

      for (let index = 0; index < foo.length; index++) {
       

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

    createTabsByJS2(foo);

</script>
</div>
</section>
<?php include "../partials/footer.php" ?>

