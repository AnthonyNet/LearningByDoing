<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center">Section 25</h1>
    <h3 class="text-center mb-5"><?php echo  $pageName_forTitles; ?></h3>
    
    <div class="row  d-flex justify-content-center text-primary">
        <h3>Form Events</h3>
        <form action="/dogs" id="tweetForm">
            <input class='tweet' type="text" name="username" placeholder="username">
            <input class='tweet' type="text" name="tweet" placeholder="tweet">
            <button>Post tweet</button>
    </form>
       
    <h3>Tweets:</h3>
    <ul id="tweets">

    </ul>
    </div>
    <div class="row  d-flex justify-content-center text-primary">
    <code>HTML:</code>
<details>
    <pre>
    &lt;div class=&quot;row  d-flex justify-content-center text-primary&quot;&gt;
        &lt;h3&gt;Form Events&lt;/h3&gt;
        &lt;form action=&quot;/dogs&quot; id=&quot;tweetForm&quot;&gt;
            &lt;input class='tweet' type=&quot;text&quot; name=&quot;username&quot; placeholder=&quot;username&quot;&gt;
            &lt;input class='tweet' type=&quot;text&quot; name=&quot;tweet&quot; placeholder=&quot;tweet&quot;&gt;
            &lt;button&gt;Post tweet&lt;/button&gt;
    &lt;/form&gt;
       
    &lt;h3&gt;Tweets:&lt;/h3&gt;
    &lt;ul id=&quot;tweets&quot;&gt;

    &lt;/ul&gt;
    &lt;/div&gt;
    </pre>
</details>
    </div>

    
    <div class="row  d-flex justify-content-center text-primary mt-5">
        <code>První varianta:</code>
        <details>
        <pre>
        const tweetForm = document.querySelector('#tweetForm');
            tweetForm.addEventListener('submit', function(e) {
            const usernameInput = document.querySelectorAll('.tweet')[0];
            const tweetInput = document.querySelectorAll('.tweet')[1];
            console.log(usernameInput.value, tweetInput.value);
            console.log(tweetForm.elements.username);
            e.preventDefault();
            });
            </pre>
        </details>
           
    </div>

<div class="row  d-flex justify-content-center text-primary">
    <code>Druhá, lepší varianta:</code>
        <pre><details>
        <kbd>const</kbd> tweetForm = document.querySelector('#tweetForm');
        <kbd>const</kbd> tweetsContainer = document.querySelector('#tweets');
        
         tweetForm.addEventListener('submit', <kbd>function</kbd>(e) {
             e.preventDefault();

        <kbd>const</kbd> usernameInput = tweetForm.elements.username;
        <kbd>const</kbd> tweetInput = tweetForm.elements.tweet;
                    addTweet(usernameInput.value, tweetInput.value)
                    usernameInput.value = '';
                    tweetInput.value = '';
                    });

        <kbd>const</kbd> addTweet = (username, tweet) => {
        <kbd>const</kbd> newTweet = document.createElement('li');
        <kbd>const</kbd> bTag = document.createElement('b');
                    bTag.append(username);
                    newTweet.append(bTag);
                    newTweet.append(`- ${tweet}`)
                    tweetsContainer.append(newTweet);   
                                                        }
                    </details></pre>
    </div>

    <div class="row  d-flex justify-content-center text-primary">
     <h3>Exercise 61</h3>
     <details><pre>
 &#x3C;h1&#x3E;Grocery List&#x3C;/h1&#x3E;
    &#x3C;form action=&#x22;/nowhere&#x22;&#x3E;
        &#x3C;label for=&#x22;item&#x22;&#x3E;Enter A Product&#x3C;/label&#x3E;
        &#x3C;input type=&#x22;text&#x22; id=&#x22;product&#x22; name=&#x22;product&#x22;&#x3E;
        &#x3C;label for=&#x22;item&#x22;&#x3E;Enter A Quantity&#x3C;/label&#x3E;
        &#x3C;input type=&#x22;number&#x22; id=&#x22;qty&#x22; name=&#x22;qty&#x22;&#x3E;
        &#x3C;button&#x3E;Submit&#x3C;/button&#x3E;
    &#x3C;/form&#x3E;</pre>

    <h3>Javascript:</h3>
    <pre>
    <kbd>const</kbd> form = document.querySelector('form');
    <kbd>const</kbd> postContainer = document.querySelector('#list');

    form.addEventListener('submit', <kbd>function</kbd>(e) {
    e.preventDefault();
    
    <kbd>const</kbd> product = document.querySelector('#product')
    <kbd>const</kbd> qty = document.querySelector('#qty')
    <kbd>const</kbd> newLi = document.createElement('li')
    
    newLi.innerText = product.value + ' ' + qty.value
    
    postContainer.appendChild(newLi)
    product.value = "";
    qty.value = "";
   
    });
    </pre></details>
</div>

</div>

<script>
    const tweetForm = document.querySelector('#tweetForm');
    const tweetsContainer = document.querySelector('#tweets');

    tweetForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const usernameInput = tweetForm.elements.username;
        const tweetInput = tweetForm.elements.tweet;
        addTweet(usernameInput.value, tweetInput.value)
        usernameInput.value = '';
        tweetInput.value = '';
    });

    const addTweet = (username, tweet) => {
        const newTweet = document.createElement('li');
       const bTag = document.createElement('b');
       bTag.append(username);
       newTweet.append(bTag);
       newTweet.append(`- ${tweet}`)
       tweetsContainer.append(newTweet);   
    }
</script>
<?php
 include_once "../partials/footer.php";
?>