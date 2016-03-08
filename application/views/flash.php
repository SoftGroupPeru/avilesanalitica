<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script type="text/javascript">
            function ajustarFullScreen(objeto) {
                /*Este script calcula el ancho y el alto de la pantalla en pixeles y despues
                 *Ajusta cualquier objeto dom (HTML) que le pases saludos
                 */
                objeto.height = screen.height - 150; //Alto de la pantalla, le resto pixeles por el menu inicio de "Windows", muevele como gustes
                objeto.width = screen.width //Ancho de la pantalla, ese si cabe exactamente

            }
        </script>
    </head>
    <body>
        
        <?php
        ob_start();
        header("refresh: 5; url = ".base_url()."index.php/home/index2"); ?>

        <embed
            id="objeto"
            type="application/x-shockwave-flash"
            src= "<?php echo base_url();?>flash/index.swf"
            scale="exactfit"
            ></embed>
        <script type="text/javascript">
            //Tuve que activar el script aqui porque no funciono el evento onLoad del embed =\
            ajustarFullScreen(document.getElementById('objeto'));
            //window.open("inicio.php", "_self");
        </script>

        <?php ob_end_flush();
        ?>
    </body>
</html>