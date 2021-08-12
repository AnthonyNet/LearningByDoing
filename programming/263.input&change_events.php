<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center">Section 25</h1>
    <h3 class="text-center mb-5"><?php echo  $pageName_forTitles; ?></h3>
    
    <div class="row  d-flex justify-content-center text-primary">
        
      
<h3>Moje řešení:</h3>
<details>
<pre>
let input = document.querySelector('#username')
let nadpis = document.querySelector('h1')


input.addEventListener('input', function(e){
    
   nadpis.innerText = "";
   nadpis.append("Welcome, " + input.value);
  if(nadpis.innerText == "Welcome,") {
      nadpis.innerText = "Enter Your Username";
  }
})
</pre>
</details>

<h3>Refactoring</h3>
<details>
<pre>
input.addEventListener('input', function(e){
    if(input.value === ""){
        nadpis.innerText = "Enter Your Username"
    }else {
        nadpis.innerText = ""
        nadpis.append("Welcome, "+ input.value)
    }
})
</details>

<h3>Správná odpověď, kterou mi to vzalo:</h3>
<details>
    <pre>
    input.addEventListener('input', function(e){
    if(input.value === ""){
        nadpis.innerText = "Enter Your Username"
    }else {
        nadpis.innerText = ""
        nadpis.innerText = ("Welcome, "+ input.value)
    }
})
    </pre>
</details>

</pre>
    </div>
</div>

<?php
 require_once "../partials/footer.php";
?>