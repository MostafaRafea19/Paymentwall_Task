<form method="post" class="container py-4" id="products_form" action="/mass-delete">
    <div class="row justify-content-center justify-content-sm-start">
        <?php foreach ($products as $key => $product) { ?>
            <div class="col-10 col-sm-6 col-md-4 col-lg-3 my-3">
                <div class="card border border-secondary rounded-lg">
                    <div class="card-body text-center">
                        <div class="custom-control custom-checkbox text-left">
                            <input type="checkbox" class="custom-control-input delete-checkbox"
                                   name="products[]" id="product<?= $product['id'] ?>"
                                   value="product<?= $product['id'] ?>">
                            <label class="custom-control-label" for="product<?= $product['id'] ?>"></label>
                        </div>
                        <h5 class="card-title"><?= $product['sku'] ?></h5>
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $product['price'] ?> $</h6>
                        <?= $product['size'] ? '<p class="card-text">' . 'Size: ' . $product['size'] . ' MB' . '</p>' : '' ?>
                        <?= $product['weight'] ? '<p class="card-text">' . 'Weight: ' . $product['weight'] . 'KG' . '</p>' : '' ?>
                        <?= $product['height'] ? '<p class="card-text">' . 'Dimensions: ' . $product['height'] . 'x' . $product['width'] . 'x' . $product['length'] . '</p>' : '' ?>
                        <form action="/payment" method="post">
                            <input type="hidden" value="<?= $product['id'] ?>" name="product_id">
                            <button class="btn btn-info" type="submit">Buy</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</form>
