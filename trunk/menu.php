<?php
/*!
 * **************************************************************
 ****************  ProQuiz V2 ******************************
 ***************************************************************/
 /* documentation at: http://proquiz.softon.org/documentation/
 /* Designed & Maintained by
 /*                                    - Softon Technologies
 /* Developer
 /*                                    - Manzovi
 /* For Support Contact @
 /*                                    - proquiz@softon.org
 /* Release Date : 02 Feb 2011
 /* Licensed under GPL license:
 /* http://www.gnu.org/licenses/gpl.html
 */
?><ul>
<?php
    foreach($headMenu as $value){
        if(check_level($value) && check_auth($value)){
            if(preg_match('/'.$value['link'].'/',$_SERVER['PHP_SELF'],$matches)){
               echo '<li><a class="current" href="'.$value['link'].'">'.$value['title'].'</a></li>';
            }else{
               echo '<li><a href="'.$value['link'].'">'.$value['title'].'</a></li>';
            }    
        }
        
    }
   
?>
</ul>