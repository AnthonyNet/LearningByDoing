<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
    <h1 class="text-center">Section 25</h1>
    <h3 class="text-center mb-5"><?php echo  $pageName_forTitles; ?></h3>
    
    <div class="row  d-flex justify-content-center text-primary">
        <h3>Kód z lekce 262</h3>
        <form action="/dogs" id="tweetForm">
            <input class='tweet' type="text" name="username" placeholder="username">
            <input class='tweet' type="text" name="tweet" placeholder="tweet">
            <button>Post tweet</button>
    </form>
       
    <h3>Tweets:</h3>
    <ul id="tweets">
           <li>I Am LI!!! 1</li>
           <li>I Am LI!!! 2</li>
           <li>I Am LI!!! 3</li>
    </ul>
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
        <h3>console.log(e) - vypíše info o elementu do konzole</h3>
        <details>
            <pre>
            tweetsContainer.addEventListener('click', function (e){
             console.log('Click on UL!');
             console.log(e);
    });
            </pre>
        </details>
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
    };
    
    tweetsContainer.addEventListener('click', function (e){
        //e.target.remove(); vymaže vše  --- nodeName požadavek upřesní;
        e.target.nodeName === 'LI' && e.target.remove();
    });

</script>
<?php
 include_once "../partials/footer.php";
?>