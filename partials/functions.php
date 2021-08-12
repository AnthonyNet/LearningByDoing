<?php
//Vytvoř menu

function createMenu($page_name, $glob_files){

    foreach( $glob_files as $file) {
        $page = basename($file, '.php');
        $replace = array('_words', '_', 'remind');
        $replace_with = array('', ' ', '');
        $final_name = str_replace($replace,$replace_with, $page);
        $final_name = ucwords($final_name, ".");

//Vytvoří Menu a označí navštívenou page, else všechny ostatní
        if($page_name == $page) echo '<li class="list-group-item"><strong>'. "&#9733;" . $final_name ."&#9733;" . '</strong></li>';
        else echo '<li class="list-group-item"><a class="text-decoration-none" href="'. $file . '">'.  $final_name .'</a></li>';
        
    }
}

//Vytvoř tabulku v Irregular verbs
 function addInputs($routeArr, $preklady){

    $i=-1;
    
   
    foreach($routeArr as $value){
        echo '<tr>';
        echo '<td>'. ucFirst($preklady[++$i]).'</td>';
        echo '<td><input id="slovo_ID" data-verb="'.$value["base"].'" type="text" class="'.$value["base"]. '"></td>';
        echo '<td><input id="slovo_ID" data-verb="'.$value["past-simple"]. '" type="text" class="'.$value["past-simple"]. '"></td>';
        echo '<td><input id="slovo_ID" data-verb="'.$value["past-participle"]. '" type="text" class="'.$value["past-participle"]. '"></td>';
       /* echo '<td>'. $value["past-simple"].'</td>';
        echo '<td>'. $value["past-participle"].'</td>';*/
        echo '<td class="answer">'. $value["base"]." ". $value["past-simple"]." ". $value["past-participle"]. '</td>';
        echo '</tr>';
    }

    }


    //Vytvoř menu v English / Deutsch 

    function createMenuWords($seznam){

        $sort_by_8 = array_chunk($seznam, 8, true);
    
        $i_sort_by_8 = 1;

        for($i = 1; $i <= count($sort_by_8); $i++){
            //echo '<li><a href="anglictina_slova">' . $i . '</a></li>';
        echo '<li><a href=' . "#anglictina_slova{$i}" . '>' . $i . '</a></li>';
        }
        echo '</ul>';

        echo '<div  class="bg-secondary" id="container">';
        
        foreach ($sort_by_8 as $sorted){
            
            echo '<div class="cover_8_words show" id=' . 'anglictina_slova' . $i_sort_by_8 . '>';
            echo '<h1 class="h1_words"> Words nr.' . $i_sort_by_8 . '</h1>';
            $i_sort_by_8++;
            foreach ($sorted as $lang => $cze) {
                echo '<div class="words_cover">';
                echo '<dt class="bg-dark"><a href="#">' . str_replace("*", "'", $cze) . '</a></dt>';
                echo "<dd>" . str_replace("*", "'", $lang) . "</dd>";
                echo '</div>';
            }
            echo '</div>';
        }
        echo '</div>';
    }



// zkouším

//Vytvoř tabulku v Irregular verbs
function addInputs2($routeArr, $preklady, $sort_by_10){

    $i=-1;
    $i2=0;
    $i3=0;
    
    

    foreach($routeArr as $value){
       echo '<table class="table table-dark table-hover text-center">';
        echo  '<thead># '.++$i2.' </thead>';
        echo '<tr>';
        echo '<th># '. ++$i3." ".ucFirst($preklady[++$i]).'</th>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input id="slovo_ID" data-verb="'.$value["base"].'" type="text" class="'.$value["base"]. '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input id="slovo_ID" data-verb="'.$value["past-simple"]. '" type="text" class="'.$value["past-simple"]. '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td><input id="slovo_ID" data-verb="'.$value["past-participle"]. '" type="text" class="'.$value["past-participle"]. '"></td>';
        echo '</tr>';
       /* echo '<td>'. $value["past-simple"].'</td>';
        echo '<td>'. $value["past-participle"].'</td>';*/
        echo '<td class="answer">'. $value["base"]." ". $value["past-simple"]." ". $value["past-participle"]. '</td>';
        echo '</table>';
        
    }
   
    }

    //irregular 2
    
    function addInputs3($routeArr, $preklady, $sort_by_10){

        $i=-1;
        $i2=0;
        $i3=0;
        $i4=0;
        
        foreach ($sort_by_10 as $gallery_cover){
            echo '<div class="slide-container">';

            echo '<div class="slideNat active mb-5">Ahoj</div>';
            
            foreach($gallery_cover as  $value){
                
                echo '<div class="slideNat mb-5">';
                echo '<table class="table table-dark table-hover text-center">';
                echo  '<thead># '.++$i2.' </thead>';
                echo '<tr>';
                echo '<th># '. ++$i3." ".ucFirst($preklady[++$i]).'</th>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><input id="slovo_ID" data-verb="'.$value["base"].'" type="text" class="'.$value["base"]. '"></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><input id="slovo_ID" data-verb="'.$value["past-simple"]. '" type="text" class="'.$value["past-simple"]. '"></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><input id="slovo_ID" data-verb="'.$value["past-participle"]. '" type="text" class="'.$value["past-participle"]. '"></td>';
                echo '</tr>';
            /* echo '<td>'. $value["past-simple"].'</td>';
                echo '<td>'. $value["past-participle"].'</td>';*/
                echo '<td class="answer">'. $value["base"]." ". $value["past-simple"]." ". $value["past-participle"]. '</td>';
                echo '</table>';
                echo '</div>';
            }
                       
            echo '</div>'; 
        }

       
    }
        






?>