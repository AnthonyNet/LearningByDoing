
</div>

<div class="col-2 bg-dark">
            

            <ul class="nav-left-ul">Programování
            <?php if($page_name == 'index'){
                        $menu_programming = glob('programming/*.php');
                        createMenu($page_name, $menu_programming);
                        }else{
                            $menu_programming = glob('../programming/*.php');
                        createMenu($page_name, $menu_programming);
                        }
                    ?>
               
                <li class="list-group-item bg-secondary">TEXT</li>
                <li class="list-group-item bg-secondary">TEXT</li>
                <li class="list-group-item bg-secondary">TEXT</li>
                <li class="list-group-item bg-secondary">TEXT</li>
                <li class="list-group-item bg-secondary">TEXT</li>
            </ul>
        </div>
      </div>
      <div class="go-top">                  
     <p class="go-top-text">Back To Top</p>
 </div>

</section>


  
</div>
</div>  

 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script>
        // TO MAKE THE MAP APPEAR YOU MUST
        // ADD YOUR ACCESS TOKEN FROM
        // https://account.mapbox.com
        mapboxgl.accessToken = 'pk.eyJ1IjoiZW50eTIiLCJhIjoiY2txYXdmenQyMGNuaTJvazF3emRldHo1eCJ9.XofvVLDcp31TYZFyw3dPVA';
        var map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [49.331581432953996, 15.823583752242365], // starting position [lng, lat]
        zoom: 9 // starting zoom
        });
        </script>


<script src="../js/jquery.js"></script>
<script src="../js/irregular_verbs.js"></script>
<script src="../js/script.js"></script>

</body>
</html>