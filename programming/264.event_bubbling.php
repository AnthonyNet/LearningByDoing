<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center">Section 25</h1>
    <h3 class="text-center mb-5"><?php echo  $pageName_forTitles; ?></h3>
    
    <div class="row  d-flex justify-content-center text-primary">
        <h3>Co to je:</h3>

    <code>
     <pre>
        &lt;section onclick=&quot;alert('section clicked')&quot;&gt;
          &lt;p onclick=&quot;alert('paragraph clicked')&quot;&gt; I am paragraph: 
           &lt;button onclick=&quot;alert('button clicked')&quot;&gt;click&lt;/button&gt;
          &lt;/p&gt; 
        &lt;/section&gt;
     </pre>
    </code>

    <pre>
        <code>
        <kbd>const</kbd> button_bubble= document.querySelector('#btn_bubble')
            <kbd>const</kbd> container_bubble = document.querySelector('#container_bubble')

            button_bubble.addEventListener('click', <kbd>function</kbd> (e) {
                button_bubble.style.backgroundColor = makeRandColorBubble()
            
                e.stopPropagation();
            });

            container_bubble.addEventListener('click', <kbd>function</kbd> () {
                container_bubble.classList.toggle('hide');
            });

            <kbd>const</kbd> makeRandColorBubble = () => {
                    <kbd>const</kbd> r = Math.floor(Math.random() *255);
                    <kbd>const</kbd> g = Math.floor(Math.random() *255);
                    <kbd>const</kbd> b = Math.floor(Math.random() *255);
                    return `rgb(${r}, ${g}, ${b} )`;
                };

        </code>
    </pre>

        <section onclick="alert('section clicked')">
            <p onclick="alert('paragraph clicked')">
                I am paragraph:
                <button onclick="alert('button clicked')">click</button>
            </p>
        </section>

        

        <div id="container_bubble">
        <h3>Change color:</h3>
            Click to Hide
            <button id="btn_bubble">Change color</button>
            <br>
            <br>
        
                <p>Aby se mi neschoval celý container po kliknutí na button, přidám do funkce proměnnou "e" a e.stopPropagation();</p>
                <p>To je něco jako prevent default</p>
        <script>
            
            const button_bubble= document.querySelector('#btn_bubble')
            const container_bubble = document.querySelector('#container_bubble')

            button_bubble.addEventListener('click', function (e) {
                button_bubble.style.backgroundColor = makeRandColorBubble()
            
                e.stopPropagation();
            });

            container_bubble.addEventListener('click', function () {
                container_bubble.classList.toggle('hide');
            });

            const makeRandColorBubble = () => {
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
 require_once "../partials/footer.php";
?>