<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center">Section 25</h1>
    <h3 class="text-center mb-5"><?php echo  $pageName_forTitles; ?></h3>
    
    <div class="row  d-flex justify-content-center text-primary">
        
        <button class="button_260 butt_261">Klikni a ukaž data v konzoli</button>
        <script>
            document.querySelector('.butt_261').addEventListener('click', function(evt) {
                console.log(evt)
            });
        </script>
        
        <script>
          window.addEventListener('keydown', function (e){
              switch (e.code) {
                  case 'ArrowUp':
                  console.log('UP!');
                  break;
                  case 'ArrowDown': 
                  console.log('DOWN!');
                  break;
                  case 'ArrowLeft':
                  console.log('LEFT');
                  break;
                  case 'ArrowRight':
                  console.log('RIGHT');
                  break;
                  default: console.log('IGNORED KEY!');
              }
          });
      </script>
    </div>
<div class="row  d-flex justify-content-center text-primary">    
<div class="col">
   <h3>Zaznamenávej šipky a vypiš do konzole</h3>
   <details>
       <pre> window.addEventListener('keydown', function (e){
              switch (e.code) {
                  case 'ArrowUp':
                  console.log('UP!');
                  break;
                  case 'ArrowDown': 
                  console.log('DOWN!');
                  break;
                  case 'ArrowLeft':
                  console.log('LEFT');
                  break;
                  case 'ArrowRight':
                  console.log('RIGHT');
                  break;
                  default: console.log('IGNORED KEY!');
              }
          });</pre>
   </details>
</div>
                 
</div>
</div>

<?php
 include_once "../partials/footer.php";
?>