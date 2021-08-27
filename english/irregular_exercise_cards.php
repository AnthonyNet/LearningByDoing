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
  <div class="row row-cols-3 mb-3">


 
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions2" aria-controls="offcanvasWithBothOptions2">Vyber slovo</button>



<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Vyber slovo</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-primary">
  
  </div>
</div>
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions2" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h3 class="offcanvas-title text-primary" id="offcanvasWithBothOptionsLabel">Vyber slovo</h3>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-primary">
  <ul class=" list-group menu-karty2">



  <script>
      let createIrrDropMenu2 = () => {
                  
                  let foo2 = <?php 
                      echo json_encode($routeArr); ?>;
                      let menuKarty =  document.querySelector('.menu-karty2')
                      let wrapKarty = "";
              
                      let pole = foo2;
                      let arrX = new Array()
                    
        
                      for (let one of pole){
                          arrX.push(one.base) 
                      }
                      arrX.sort()
        
                    for (let pokus of arrX){
                      wrapKarty +=`<li class="list-group-item "><a class="dropdown-item" href="#${pokus}">${pokus}</a></li>`;
                    }
        
                      /*
                      for (let index = 0; index < foo2.length; index++) {
                        wrapKarty +=`<li><a class="dropdown-item" href="#${foo2[index].cz}">${foo2[index].cz}</a></li>`;
                      }*/
                    
                      menuKarty.innerHTML += wrapKarty;
                  };
        
                  createIrrDropMenu2()
      </script>
  </ul>
  </div>
</div>


<button class="btn btn-primary showAllCards" type="submit">Ukaž vše</button>

</div>






<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <ul class= ' list-group menu-karty d-flex flex-row flex-wrap justify-content-between'>
  
  
  <!-- Vytvoř menu pomocí JS -->

  <!-- DROPDOWN MENU 1 SEZNAM VŠECH SLOVÍČEK -->
  <script>

    let createIrrDropMenu1 = () => {
         
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
          wrapKarty +=`<li class="list-group-item list-group-item-primary w-25 d-inline-block"><a class="dropdown-item" href="#${pokus}">${pokus}</a></li>`;
        }

          /*
          for (let index = 0; index < foo2.length; index++) {
            wrapKarty +=`<li><a class="dropdown-item" href="#${foo2[index].cz}">${foo2[index].cz}</a></li>`;
          }*/
        
          menuKarty.innerHTML += wrapKarty;
      };

      createIrrDropMenu1()
    



  </script>
</ul>
  
</div>


 

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

