<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center">Section 24</h1>
    <h3 class="text-center mb-5">248. Default params</h3>
    <div class="row align-items-md-stretch text-primary">
        <div class="col-md-6">
        <h1>
        <span>R</span>
        <span>A</span>
        <span>I</span>
        <span>N</span>
        <span>B</span>
        <span>O</span>
        <span>W</span>
    </h1>
            <h3>Normální zápis:</h3>
            <code>const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];</code>

            <h3>Vytvořím proměnnou</h3>
            <code>const letter = document.querySelectorAll('span')</code>
        </div>
        <div class="col-md-6">
            <h3>For zápis (nedoporučuje se)</h3>
            <pre>for (i = 0; i < letter.length; i++) {
  letter[i].style.color = colors[i]
}</pre>

            <h3>For - of zápis</h3>
                <pre>let i = -1
        for (const val of letter) { 
            i+= 1
            val.style.color = colors[i]
            }</pre>

            <h3>For - in zápis</h3>
            <pre>for(let i in colors){
    letter[i].style.color = colors[i];
}</pre>
        </div>
    </div>
</div>
<?php
 include_once "../partials/footer.php";
?>