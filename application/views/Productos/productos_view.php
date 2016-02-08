<!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Product Filter Page</span>
            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Product</a></li>
                <li class="active">Product Filter Page</li>
            </ul>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v4 ===-->

		<!--=== Content Part ===-->
    <div class="content container">
        <div class="row">
            <div class="col-md-3 filter-by-block md-margin-bottom-60">
                <h1>Filter By</h1>

                <div class="panel-group" id="accordion-v2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-v2" href="#collapseTwo">
                                    Marcas
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled checkbox-list">
																		<?php
																		foreach ($listadoMarcas as $marca) { ?>
																			<li>
	                                        <label class="checkbox">
	                                            <input type="checkbox" name="checkbox" value="<?php echo $marca->id;?>" checked />
	                                            <i></i>
	                                            <?php echo $marca->nombre;?>
	                                            <small><a href="#">(<?php echo $marca->cantidad;?>)</a></small>
	                                        </label>
	                                    </li>
																		<?php	}	?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <div class="panel-group" id="accordion-v3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-v3" href="#collapseThree">
                                    Estado
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled checkbox-list">
																		<li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            Nuevo
                                            <small><a href="#">(<?php echo $estadoProductos[0]->nuevo;?>)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" checked />
                                            <i></i>
                                            Semi-nuevo
                                            <small><a href="#">(<?php echo $estadoProductos[0]->seminuevo;?>)</a></small>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <button type="button" class="btn-u btn-brd btn-brd-hover btn-u-lg btn-u-sea-shop btn-block">Buscar</button>
            </div>

            <div class="col-md-9">
                <div class="row margin-bottom-5">
                    <div class="col-sm-4 result-category">
                        <h2>Items</h2>
                        <small class="shop-bg-red badge-results">10 Results</small>
                    </div>
                    <div class="col-sm-8">
                        <ul class="list-inline clear-both">
                            <li class="grid-list-icons">
                                <a href="shop-ui-filter-list.html"><i class="fa fa-th-list"></i></a>
                                <a href="shop-ui-filter-grid.html"><i class="fa fa-th"></i></a>
                            </li>
                            <li class="sort-list-btn">
                                <h3>Sort By :</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Popularity <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Best Sales</a></li>
                                        <li><a href="#">Top Last Week Sales</a></li>
                                        <li><a href="#">New Arrived</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sort-list-btn">
                                <h3>Show :</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        20 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">10</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">3</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--/end result category-->

                <div class="filter-results">
                    <div class="row illustration-v2 margin-bottom-30">
											<?php
											foreach ($totalProductos as $producto) {?>
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="<?php echo $url;?>images/productos/<?php echo (isset($producto->imagen))?$producto->imagen:'default.jpg';?>" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Vista Previa</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
                                <?php echo (($producto->seminuevo) == 1)?'<div class="shop-rgba-dark-green rgba-banner" style="top:50px!important;">Seminuevo</div>':'';?>
                                <?php echo (($producto->nuevo) == 1)?'<div class="shop-rgba-red rgba-banner">Nuevo</div>':'';?>
                            </div>
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html"><?php echo $producto->nombre;?></a></h4>
                                        <span class="gender text-uppercase"><?php echo $producto->marca;?></span>
                                        <span class="gender"><?php echo $producto->parte;?></span>
                                    </div>
                                    <div class="product-price">
                                        <span class="title-price">S/. 100.00</span>
                                        <span class="title-price line-through">S/. 250.00</span>
                                    </div>
                                </div>
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
												<?php } ?>

                    </div>
                </div><!--/end filter resilts-->

                <div class="text-center">
                    <ul class="pagination pagination-v2">
                        <?php echo $this->pagination->create_links() ?>
                    </ul>
                </div><!--/end pagination-->
            </div>
        </div><!--/end row-->
    </div><!--/end container-->
    <!--=== End Content Part ===-->

		<!--=== Shop Suvbscribe ===-->
<div class="shop-subscribe">
		<div class="container">
				<div class="row">
						<div class="col-md-8 md-margin-bottom-20">
								<h2>subscribe to our weekly <strong>newsletter</strong></h2>
						</div>
						<div class="col-md-4">
								<div class="input-group">
										<input type="text" class="form-control" placeholder="Email your email...">
										<span class="input-group-btn">
												<button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
										</span>
								</div><?php echo $url;?>
						</div>
				</div>
		</div><!--/end container-->
</div>
<!--=== End Shop Suvbscribe ===-->
