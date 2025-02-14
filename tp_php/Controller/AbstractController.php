<?php 


abstract class AbstractController{
  
    protected function render( string $template_name , array $data = [] ){
        extract($data);
 
        require_once "vue/front/header.php";
        require_once "vue/$template_name.php";
        require_once "vue/front/footer.php";
     }
}