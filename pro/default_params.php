<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center">Section 23</h1>
    <h3 class="text-center mb-5">Default params</h3>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <h3>Normální zápis:</h3>
            <code><kbd>function</kbd> rollDie(numSides){</code><br>          
                    <code><kbd>return</kbd> Math.floor(Math.random() * numSides) +1</code><br>
                                        <code>}</code>

                <p class="mt-5">Funkci spustím zavoláním:</p>
                <code>rollDie(6)</code>
        </div>
        <div class="col-md-6">
            <h3>Default params - nový zápis</h3>
            <code><kbd>function</kbd> rollDie2(numSides = 6){ <br>
                <kbd>return</kbd> Math.floor(Math.random() * numSides) +1 <br>
            }</code>

            <p class="mt-5">Funkci spustím zavoláním:</p>
                <code>rollDie2()</code>
             <p>Zde nemusím posílat do funkce číslo, protože je přímo v ní:
                 <strong>numSides = 6</strong>
             </p>   
        </div>
    </div>
</div>
<?php
 include_once "../partials/footer.php";
?>