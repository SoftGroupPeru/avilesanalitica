<!--=== Content Part ===-->
<div class="container content">
    <div class="row margin-bottom-30">
        <div class="col-md-9 mb-margin-bottom-30">
            <div class="tag-box tag-box-v2">
                <p>Si tiene alguna pregunta, no dude en escribirnos. Estamos aquí para servirle.</p>
            </div>

            <form action="<?php echo $url;?>assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
                <fieldset class="no-padding">
                    <label>Nombre <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-7 col-md-offset-0">
                            <div>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <label>Email <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-7 col-md-offset-0">
                            <div>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <label>Mensaje <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-11 col-md-offset-0">
                            <div>
                                <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <p><button type="submit" class="btn-u">Enviar</button></p>
                </fieldset>

                <div class="message">
                    <i class="rounded-x fa fa-check"></i>
                    <p>Gracias por escribirnos!</p>
                </div>
            </form>
        </div><!--/col-md-9-->

        <div class="col-md-3">
            <!-- Google Map -->
            <div id="map" class="map map-box map-box-space1 margin-bottom-40">
            </div><!---/map-->
            <!-- End Google Map -->

            <!-- Contacts -->
            <div class="headline"><h2>Contacto</h2></div>
            <ul class="list-unstyled who margin-bottom-30">
                <li><i class="fa fa-home"></i> Cl. Pedro Tejada # 487, LIMA PERÚ</li>
                <li><i class="fa fa-envelope"></i> ventas@aviles-analitica.com</li>
                <li><i class="fa fa-envelope"></i> servicio.tecnico@aviles-analitica.com</li>
                <li><i class="fa fa-phone"></i> (51-1) 260-9487</li>
                <li><i class="fa fa-globe"></i> http://www.avilesanalitica.com</li>
            </ul>
            <!-- End Contacts -->

            <!-- Business Hours -->
            <div class="headline"><h2>Business Hours</h2></div>
            <ul class="list-unstyled margin-bottom-30">
                <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                <li><strong>Saturday:</strong> 11am to 3pm</li>
                <li><strong>Sunday:</strong> Closed</li>
            </ul>
            <!-- End Business Hours -->
        </div><!--/col-md-3-->
    </div><!--/row-->


</div><!--/container-->
<!--=== End Content Part ===-->
