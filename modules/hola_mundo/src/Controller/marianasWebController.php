<?php
namespace Drupal\modules\hola_mundo\src\controller;
class marianasWebController{
    public function marianas(){
        $element = array(
            '#markup' => a('Marianas Web A tus servicios'),
        ); return $element;
    }
}
?>
