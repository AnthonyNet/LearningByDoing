<?php
 require_once "../partials/header.php";
?>
<div class="container-xl">
<h1 class="text-center text-primary">Section 23</h1>
<h3 class="text-center mb-4 text-primary">238. Destructuring Arrays</h3>
    <div class="row align-items-md-stretch text-primary">
        <div class="col-md-6">
            <h3>Array:</h3>
            <pre>
            const scores = [
                88955, 85265, 243552, 111562, 
                98574, 12121, 55520
                ]
            </pre>
        </div>
        <div class="col-md-6">
            <h3>Vytvořím proměnné</h3>
            <pre>const [gold, silver, bronze, ...everyoneElse] = scores;</pre>

            <p class="mt-5">Vypíšu pomocí:</p>
                <p>gold</p>
                <p>silver</p>
                <p>everyoneElse</p>
               
        </div>
    </div>



    <h3 class="text-center mb-4 text-primary">238. Destructuring Objects</h3>
    <div class="row align-items-md-stretch text-primary">
        <div class="col-md-6">
            <h3>Object:</h3>
            <pre>
            <code class="text-info">const</code> user = {
                    firstName: 'Tony',
                    lastName: 'Tlustej',
                    email: 'tlustejtony@seznam.cz',
                    born: '1998',
                    numberOfComments: '1132',
                    country:'Czech Republic'
                }
            </pre>
        </div>
        <div class="col-md-6">
            <h3>Vytvořím proměnné</h3>
            <pre><kbd>const</kbd>{
             firstName, lastName, email, born, numberOfComments, country
            } = user</pre>

            <p class="mt-5">Vypíšu pomocí:</p>
                <p>email</p>
                <p>born</p>
                <p>firstName</p>
               
        </div>
    </div>

    <h3 class="text-center mb-4 text-primary">239. Destructuring Params</h3>
    <div class="row align-items-md-stretch text-primary">
        <div class="col-md-6">
            <h3>Object:</h3>
            <pre>
            <kbd>const</kbd> movies = [
                    {
                        title: 'Heathers',
                        rating: '4.5 stars',
                        year: 1998
                    },
                    {
                        title: 'Europa Report',
                        rating: '2.5 stars',
                        year: 2020
                    },
                    {
                        title: 'Fellowship of the Ring',
                        rating: '5 stars',
                        year: 2000
                    },
                    {
                        title: 'Silver Linings Playbook',
                        rating: '5 stars',
                        year: 1987
                    }
                        ]
            
            </pre>
        </div>
        <div class="col-md-6">
            <h3>Vytvořím funkci s použitím map:</h3>
     <pre>
     movies.map(movie =>{
     <kbd>return</kbd> `${movie.title} (${movie.year}) is rated ${movie.rating}`
                })
    </pre>
                <h3>Lepší varianta:</h3>
    <pre class="text-warning">
    movies.map(({title, rating, year}) => {
    <kbd>return</kbd> `${title} (${year}) is rated ${score}`
})
    </pre>

           
               
        </div>
    </div>
</div>
<?php
 include_once "../partials/footer.php";
?>