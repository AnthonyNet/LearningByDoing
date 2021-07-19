<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center">Section 24</h1>
    <h3 class="text-center mb-5">249. Class list</h3>
    <div class="row align-items-md-stretch text-primary">
        <div class="col-md-6">
        <ul class="list-group" id="list">
        <li class="list-group-item seznam">Hello</li>
        <li class="list-group-item seznam bg-info">Hello</li>
        <li class="list-group-item seznam">Hello</li>
        <li class="list-group-item seznam">Hello</li>
        <li class="list-group-item seznam bg-info">Hello</li>
        <li class="list-group-item seznam">Hello</li>
    </ul>


        </div>
        <div class="col-md-6">
            <h3>Označím</h3>
<code>let list = document.querySelectorAll('.seznam')</code>

<pre>for (const val of list) {
val.classList.toggle('bg-info')
}</pre>
        </div>
    </div>
</div>
<?php
 include_once "../partials/footer.php";
?>