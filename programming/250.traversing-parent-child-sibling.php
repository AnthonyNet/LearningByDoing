<?php
 require_once "../partials/header.php";
?>
<div class="container-xl text-primary">
    <h1 class="text-center">Section 24</h1>
    <h3 class="text-center mb-5">251. AppendChild, createElement</h3>
    <h3 class="text-center">Properties & methods </h3>
    <p class="text-center">(the important ones)</p>
    <div class="row align-items-md-stretch text-primary">
    
        <div class="col-md-6">
            
        <ul class="list-group">
        <li class="list-group-item">classList</li>
        <li class="list-group-item">getAttribute()</li>
        <li class="list-group-item">setAttribute()</li>
        <li class="list-group-item">appendChild()</li>
        <li class="list-group-item">append()</li>
        <li class="list-group-item">prepend()</li>
        <li class="list-group-item">removeChild()</li>
        <li class="list-group-item">remove()</li>
        <li class="list-group-item">createElement</li>
        
             </ul>
        </div>

        <div class="col-md-6">
            
        <ul class="list-group">
        <li class="list-group-item">innerText</li>
        <li class="list-group-item">textContent</li>
        <li class="list-group-item">innerHTML</li>
        <li class="list-group-item">value</li>
        <li class="list-group-item">parrentElement</li>
        <li class="list-group-item">children</li>
        <li class="list-group-item">nextSibling</li>
        <li class="list-group-item">previousSibling</li>
        <li class="list-group-item">style</li>
        
            </ul>
        </div>
    </div>
</div> 

<div class="container-xl text-primary text-center">
    
<h3 class="text-center mb-5">Buttons exercise:</h3>


<code>let container = document.querySelector('#container_exercise')</code>
<pre>for (let i=0; i< 100; i++){
    let button = document.createElement('button')
    button.innerText = 'click'
    container.appendChild(button)
}</pre>


<div class="container" id="container_exercise">
</div>

</div>
<?php
 include_once "../partials/footer.php";
?>