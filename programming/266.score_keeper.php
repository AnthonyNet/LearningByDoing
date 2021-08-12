<?php
 require_once "../partials/header.php";
?>
<style>
    .winner{color:green;}
    .loser{color:red;}
</style>
<div class="container-xl">
    <h1 class="text-center">Section 26</h1>
    <h3 class="text-center mb-5"><?php echo  $pageName_forTitles; ?></h3>
    
    <div class="d-flex justify-content-start">
      
        <h1>
        <span id="p1Display">0</span> to <span id="p2Display">0</span>
        </h1>
    
            <select name="" id="playto">
                
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            
            <button id="p1Button">+1 Player One</button>
            <button id="p2Button">+1 Player Two</button>
            <button id="resetBtn">Reset</button>

    </div>
    <div class="row text-primary">
        <h3>HTML</h3>
        <details>
            <pre>
            &lt;h1&gt;
        &lt;span id=&quot;p1Display&quot;&gt;0&lt;/span&gt; to &lt;span id=&quot;p2Display&quot;&gt;0&lt;/span&gt;
        &lt;/h1&gt;
    
            &lt;select name=&quot;&quot; id=&quot;playto&quot;&gt;
                
                &lt;option value=&quot;3&quot;&gt;3&lt;/option&gt;
                &lt;option value=&quot;4&quot;&gt;4&lt;/option&gt;
                &lt;option value=&quot;5&quot;&gt;5&lt;/option&gt;
                &lt;option value=&quot;6&quot;&gt;6&lt;/option&gt;
                &lt;option value=&quot;7&quot;&gt;7&lt;/option&gt;
                &lt;option value=&quot;8&quot;&gt;8&lt;/option&gt;
                &lt;option value=&quot;9&quot;&gt;9&lt;/option&gt;
                &lt;option value=&quot;10&quot;&gt;10&lt;/option&gt;
            &lt;/select&gt;
            
            &lt;button id=&quot;p1Button&quot;&gt;+1 Player One&lt;/button&gt;
            &lt;button id=&quot;p2Button&quot;&gt;+1 Player Two&lt;/button&gt;
            &lt;button id=&quot;resetBtn&quot;&gt;Reset&lt;/button&gt;
            </pre>
            <pre>
            &lt;style&gt;
                .winner{color:green;}
                .loser{color:red;}
            &lt;/style&gt;
            </pre>
        </details>
    </div>

    <div class="row text-primary">
        <h3>JS</h3>
        <details>
            <pre>
                <code>
                <kbd>const</kbd> p1Button = document.querySelector('#p1Button');
                <kbd>const</kbd> p2Button = document.querySelector('#p2Button');
                <kbd>const</kbd> resetButton = document.querySelector('#resetBtn');
                <kbd>const</kbd> p1Display = document.querySelector('#p1Display');
                <kbd>const</kbd> p2Display = document.querySelector('#p2Display');
                <kbd>const</kbd> winningScoreSelect = document.querySelector('#playto');

                    <kbd>let</kbd> p1Score = 0;
                    <kbd>let</kbd> p2Score = 0;
                    <kbd>let</kbd> winningScore = 3;
                    <kbd>let</kbd> isGameOver = false;

                    p1Button.addEventListener('click', function(){
                    if(!isGameOver) {
                        p1Score +=1;
                    if(p1Score ===winningScore){
                        isGameOver = true;
                        p1Display.classList.add('winner');
                        p2Display.classList.add('loser');
                    }
                    p1Display.textContent = p1Score;
                    }  
                    })

                    p2Button.addEventListener('click', function(){
                    if(!isGameOver) {
                        p2Score +=1;
                        if(p2Score === winningScore){
                        isGameOver = true;
                        p2Display.classList.add('winner');
                        p1Display.classList.add('loser');
                    }
                    p2Display.textContent = p2Score;
                    }   
                    })

                    winningScoreSelect.addEventListener('change', function(){
                    winningScore = parseInt(this.value)
                    reset();
                    })

                    resetButton.addEventListener('click', reset) 

                    function reset(){
                    isGameOver=false;
                    p1Score = 0;
                    p2Score = 0;
                    p1Display.textContent = 0;
                    p2Display.textContent = 0;
                    p1Display.classList.remove('winner', 'loser');
                    p2Display.classList.remove('winner', 'loser');
                    
                    }
                </code>
            </pre>
        </details>
    </div>
  
</div>

<script>
    const p1Button = document.querySelector('#p1Button');
    const p2Button = document.querySelector('#p2Button');
    const resetButton = document.querySelector('#resetBtn');
    const p1Display = document.querySelector('#p1Display');
    const p2Display = document.querySelector('#p2Display');
    const winningScoreSelect = document.querySelector('#playto');

let p1Score = 0;
let p2Score = 0;
let winningScore = 3;
let isGameOver = false;

p1Button.addEventListener('click', function(){
 if(!isGameOver) {
    p1Score +=1;
   if(p1Score ===winningScore){
     isGameOver = true;
     p1Display.classList.add('winner');
     p2Display.classList.add('loser');
}
   p1Display.textContent = p1Score;
}  
})

p2Button.addEventListener('click', function(){
 if(!isGameOver) {
    p2Score +=1;
    if(p2Score === winningScore){
    isGameOver = true;
     p2Display.classList.add('winner');
     p1Display.classList.add('loser');
}
   p2Display.textContent = p2Score;
}   
})

winningScoreSelect.addEventListener('change', function(){
winningScore = parseInt(this.value)
  reset();
})

resetButton.addEventListener('click', reset) 

function reset(){
  isGameOver=false;
  p1Score = 0;
  p2Score = 0;
  p1Display.textContent = 0;
  p2Display.textContent = 0;
  p1Display.classList.remove('winner', 'loser');
  p2Display.classList.remove('winner', 'loser');
  
}

</script>

<?php
 include_once "../partials/footer.php";
?>