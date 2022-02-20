<?php foreach($datasource->children() as $product){ ?>
    <div class="modal fade" id="<?php echo $product->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $product->name; ?> - <span><?php echo $product->id; ?> | <span><?php echo $product->category; ?></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="h-10 w-10 rounded-full" src="<?php echo $product->image; ?>" title="source: imgur.com"  alt="">
                <p>Precio: $<?php echo $product->price ?></p>
                <p><?php echo $product->description ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
<?php } ?>