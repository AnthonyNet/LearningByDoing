<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
<h1 class="text-center text-primary">Section 24</h1>
<h3 class="text-center mb-4 text-primary">247. Manipulating attributes</h3>
    <div class="row align-items-md-stretch text-primary">
        <div class="col-md-6">
            <h3>Změna atributů obrázku:</h3>
            
            <img id="egg" src="https://www.flaticon.com/svg/static/icons/svg/528/528166.svg" width="200px" alt="egg">
            <h5>Vytvořím proměnnou a označím element</h5>
            const img = document.querySelector('img')
           
            
        </div>
        <div class="col-md-6">
        <h3>Zjistím zda funguje</h3>
            <code>img.src</code>

            <h3>Změním nastavení atributu</h3>
               <code>img.setAttribute('src', 'https://www.flaticon.com/svg/static/icons/svg/3523/3523063.svg')
</code>

<h3>Stejně můžu změnit např. alt=""</h3>
<code>img.alt

img.setAttribute('alt', 'chicken')</code>               
        </div>
    </div>
               
        </div>
  
<?php
 include_once "../partials/footer.php";
?>