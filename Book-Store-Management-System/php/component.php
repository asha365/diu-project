<?php
    function inputElement($placeholder,$name,$value){
    $element = "
    <div class=\"input-form\">
    <input type=\"text\" name='$name' value='$value' class=\"form-control\" autocomplete=\"off\" id=\"validationCustom01\" placeholder='$placeholder'  value=\"ID\" required><br><br>
    </div>
    ";
    echo $element;
    }


    function buttonElement($btnId, $btnClass, $text, $name, $attribute){
        $button = "
        <button name='$name' class='$btnClass' '$attribute' id='$btnId'>$text</button>
        
        ";
        echo $button;
    }
?>   