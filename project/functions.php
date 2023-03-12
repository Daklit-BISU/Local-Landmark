<?php 

    function dd($value){
        echo'<pre>';
            var_dump($value);
        echo'</pre>';

        die();
    }
    
    function getURI(){
        return $_SERVER['REQUEST_URI'];
    }

    function isUrl($value){
        return $_SERVER['REQUEST_URI'] == "$value";
    }

    function authorize($condition, $status = Response::FORBIDDEN_ERR){
        if(!$condition){
            abort($status);
        }
    }
?>