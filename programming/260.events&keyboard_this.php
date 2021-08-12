<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center change_color">Section 25</h1>
    <h3 class="text-center mb-5 change_color">260. Events & keyboard this</h3>
    <h5 class="text-center change_color">Klikni a změň barvu</h5>
    <div class="row  d-flex justify-content-center text-primary">
        
        
        
       <style>
           .button_260 {
               width: 100px;
               height: 100px;
               margin: 20px;
           }       
       </style>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>
        <button class="button_260">Click me</button>

            <script>
                 const makeRandColor2 = () => {
                    const r = Math.floor(Math.random() *255);
                    const g = Math.floor(Math.random() *255);
                    const b = Math.floor(Math.random() *255);
                    return `rgb(${r}, ${g}, ${b} )`;
                }

                const buttons = document.querySelectorAll('.button_260');
                const nadpis_color_change = document.querySelectorAll('.change_color')

                for(let button of buttons) {
                    button.addEventListener('click', colorize)
                }

                for(let nadpis of nadpis_color_change){
                    nadpis.addEventListener('click', colorize)
                }

                function colorize() {
                    this.style.backgroundColor = makeRandColor2();
                        this.style.color = makeRandColor2();
                }
/*
                button.addEventListener('click', function(){
                    const newColor = makeRandColor();
                    let back = document.querySelector('#backChange')
                    back.style.backgroundColor = 'olive'
                  
                  
                   back.style.backgroundColor = newColor;
                   const msg = document.querySelector('#msg');
                    msg.innerText = newColor;
                });*/

               
            </script>
    </div>
<div class="row  d-flex justify-content-center text-primary">    
<div class="col-6">
    <h3>Jak na to</h3>

     <details> 
         <p>Vytvořím proměnné se zaokrouhlení čísla na celá čísla</p>
    <pre>const makeRandColor2 = () => {
     const r = Math.floor(Math.random() *255);
     const g = Math.floor(Math.random() *255);
     const b = Math.floor(Math.random() *255);
     return `rgb(${r}, ${g}, ${b} )`};</pre>
     </details>
</div>
<div class="col-6">
    <h3>Proměnné loopy a funkce</h3>
<details><pre>
const buttons = document.querySelectorAll('.button_260');
    const nadpis_color_change = document.querySelectorAll('.change_color')

    for(let button of buttons) {
        button.addEventListener('click', colorize)
    }

    for(let nadpis of nadpis_color_change){
        nadpis.addEventListener('click', colorize)
    }

    function colorize() {
        this.style.backgroundColor = makeRandColor2();
            this.style.color = makeRandColor2();
    }
</pre></details>
</div>
                 
</div>
</div>

<?php
 include_once "../partials/footer.php";
?>