<?php
    class Celular {
        var $modelo;
        var $cor;
        var $carga;
        var $chip;
        var $torre;
        var $ligar;

        function torre() {
            if ($this->torre == false) {
                echo "<p> ERRO!! Seu celular está sem sinal.</p>";
            } else {
                echo "<p> Estamos completando sua chamada..</p>";
            }
        }  
        function ligar() {
            $this-> chip = true;
        }
        function naoligar() {
            $this-> chip = false;
        }
    }
?>