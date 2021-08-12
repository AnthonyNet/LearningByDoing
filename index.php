<?php
 include "partials/header.php";
?>
    
    
<!--Showcase-->


          <div>
              <h1 class="text-primary text-center">#sorryYako</h1>
          </div>
          

<div class="container-xl">
<h1 class="text-center text-primary">AddEventListener</h1>
<h3 class="text-center mb-4 text-primary">Pamatuj</h3>
    <div class="row align-items-md-stretch text-primary">
    <div class="col-md-6 mb-5">
        <code>Vytvoř x krát UL LI ve VsCode</code>
        <kbd>ul>li*3{text $}</kbd>
    </div>
    <div class="col-md-6 mb-5">
        <code>Vytvoř parent element/child element</code>
        <kbd>.flex-parent>.flex-child</kbd>
    </div>
    

        <div class="col-md-6">
        <code>let hello = document.querySelector('#hello') <br>
hello.addEventListener('click', ()=>{
  console.log('hello')
})</code>
        </div>

        <div class="col-md-6">
            <code>Tag < details > zobrazí podrobnosti</code>
            <details>Nekůkaj!</details>
        </div>
        
        <div id="backChange" class="col-md-6">
        <h1 class="text-dark">Fakt smrdíš</h1>
            <h1  id="msg" class="text-dark">Fakt smrdíš</h1>
            <button>Click me</button>
            <script>
                const button = document.querySelector('button');

                button.addEventListener('click', function(){
                    const newColor = makeRandColor();
                    let back = document.querySelector('#backChange')
                    back.style.backgroundColor = 'olive'
                  
                  
                   back.style.backgroundColor = newColor;
                   const msg = document.querySelector('#msg');
                    msg.innerText = newColor;
                });

                const makeRandColor = () => {
                    const r = Math.floor(Math.random() *255);
                    const g = Math.floor(Math.random() *255);
                    const b = Math.floor(Math.random() *255);
                    return `rgb(${r}, ${g}, ${b} )`;
                };
            </script>
        </div>
    </div>           
 </div>



<?php
 include "partials/footer.php";
?>