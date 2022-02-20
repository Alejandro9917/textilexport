<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Página de inicio</h3>
										<h2>Úiltimos productos</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
                        <?php foreach($datasource->children() as $product){ ?>
						<div class="col-md-6 col-lg-4 col-xl-3">
                            <div id="product-1" class="single-product">
                                <div class="part-1">
                                    <img src="<?php echo $product->image ?>" class="img-thumbnail" alt="...">
                                </div>
                                <div class="part-2">
                                    <h3 class="product-title"><?php echo $product->name ?></h3>
                                    <h4 class="product-price"><?php echo $product->price ?></h4>
                                </div>
                            </div>
						</div>
                        <?php } ?>
				</div>
		</div>
</section>