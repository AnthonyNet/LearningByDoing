<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center text-primary">Section 23</h1>
    <h3 class="text-center mb-4 text-primary">233. Spread in Arrays</h3>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <h3>Zápis:</h3>
           <code>
           <kbd>const</kbd> cats = ['Blue', 'Scout', 'Rocket'];<br>
           <kbd>const</kbd> dogs = ['Rusty', 'Wyatt'];
        </code>
        </div>
        <div class="col-md-6">
            <h3>Zapíšeme:</h3>
           <code><kbd>const</kbd> allPets = [...cats, ...dogs]</code>
           <h3>Výsledek:</h3>
           <code>Array(5) [ "Blue", "Scout", "Rocket", "Rusty", "Wyatt" ]</code>
        </div>
    </div>

    <h3 class="text-center text-primary mb-4">Spread in Objects</h3>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <h3>Zápis:</h3>
           <code>
               <kbd>const</kbd> dataFromForm = {<br>
                    email: 'blueman@gmail.com',<br>
                    password: 'tobias123!',<br>
                    username: 'tfunke'<br>
               }
        </code><br>
        <code><kbd>const</kbd> newUser = {...<kbd>dataFromForm</kbd>, id: 2345, isAdmin: false}</code>
        </div>
        <div class="col-md-6">
            <h3>Zavolám:</h3>
           <code>newUser</code>
           <h3>Výsledek:</h3>
           <code><kbd>Object</kbd> { email: "blueman@gmail.com", password: "tobias123!", username: "tfunke", id: 2345, isAdmin: false }</code>
        </div>
        
    </div>
</div>
<?php
 include_once "../partials/footer.php";
?>