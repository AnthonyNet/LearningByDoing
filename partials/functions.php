<?php
//Vytvoř menu

function createMenu($page_name, $glob_files){

    foreach( $glob_files as $file) {
        $page = basename($file, '.php');
        $replace = array('_words', '_', 'remind');
        $replace_with = array('', ' ', '');
        

        if($page_name == $page) echo '<li class="list-group-item"><strong>'. "&#9733;" . ucfirst(str_replace($replace,$replace_with, $page)) ."&#9733;" . '</strong></li>';
        else echo '<li class="list-group-item"><a href="'. $file . '">'.  ucfirst(str_replace($replace,$replace_with, $page)) .'</a></li>';
        
    }
}

//Vytvoř tabulku v Irregular verbs
 function addInputs($routeArr, $preklady){

    $i=-1;
    
   
    foreach($routeArr as $value){
        echo '<tr>';
        echo '<td>'. ucFirst($preklady[++$i]).'</td>';
        echo '<td><input id="slovo_ID" data-verb="'.$value["Base"].'" type="text" class="'.$value["Base"]. '"></td>';
        echo '<td><input id="slovo_ID" data-verb="'.$value["Past-simple"]. '" type="text" class="'.$value["Past-simple"]. '"></td>';
        echo '<td><input id="slovo_ID" data-verb="'.$value["Past-Participle"]. '" type="text" class="'.$value["Past-Participle"]. '"></td>';
       /* echo '<td>'. $value["Past-simple"].'</td>';
        echo '<td>'. $value["Past-Participle"].'</td>';*/
        echo '<td class="answer">'. $value["Base"]." ". $value["Past-simple"]." ". $value["Past-Participle"]. '</td>';
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
?>