<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center text-primary">Section 23</h1>
    <h3 class="text-center mb-4 text-primary">Spread in Arrays</h3>
    <div class="row align-items-md-stretch text-success">
        <div class="col-md-6">
            <h3>Zapíšeme:</h3>
            <pre><bold>function</bold> raceResults(gold, silver, ...everyoneElse){
    console.log(`GOLD MEDAL GOES TO: ${gold}`)
    console.log(`SILVER MEDAL GOES TO: ${silver}`)
    console.log(`AND THANKS TO EVERYONE ELSE: ${everyoneElse}`)
}</pre>
            </pre>
        </div>
        <div class="col-md-6">
            <h3>Zavoláme:</h3>
           <pre>
           raceResults('Tammy', 'Milan', 'Heges', 'Titan', 'Jantar', 'Bukva')
           </pre>
           <h3>Výsledek:</h3>
           <pre>
            GOLD MEDAL GOES TO: Tammy 
            SILVER MEDAL GOES TO: Milan 
            AND THANKS TO EVERYONE ELSE: Heges,Titan,Jantar,Bukva
           </pre>
        </div>
    </div>

    
</div>
<?php
 include_once "../partials/footer.php";
?>



