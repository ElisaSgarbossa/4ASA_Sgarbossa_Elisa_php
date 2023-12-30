<!DOCTYPE html>

<?php
            foreach ($dati as $val => $array) {
                echo "Chiave esterna: $val <br>";
            
                foreach ($array as $item => $valore) {
                    echo "La chiave è: $item, il valore è: $valore <br>";
                }
            }
            ?>
</html>