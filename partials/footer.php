
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
               
                
            </ul>
        </div>
      </div>
      <div class="go-top">                  
     <p class="go-top-text">Back To Top</p>
 </div>

</section>


  
</div>
</div>  

 



<script src="https://kit.fontawesome.com/6e149a8e5e.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../js/jquery.js"></script>
<script src="../js/irregular_verbs.js"></script>
<script src="../js/script.js"></script>

</body>
</html>