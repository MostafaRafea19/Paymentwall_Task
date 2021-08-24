<form id="product_form" class="py-4">
    <div class="container">
        <div class="row justify-content-center justify-content-md-start">
            <div class="col-lg-4 col-md-7 col-9">
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" class="form-control" id="sku">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price">
                </div>
                <label for="productType">Product Type</label>
                <select class="custom-select mb-3" id="productType">
                    <option value="" selected>Type Switcher</option>
                    <option value="DVD" id="DVD">DVD-disc</option>
                    <option value="Book" id="Book">Book</option>
                    <option value="Furniture" id="Furniture">Furniture</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-7 col-9 offset-lg-2">
                <div class="form-group d-none" id="dvd-form">
                    <label for="size">Size (MB)</label>
                    <input type="text" class="form-control" id="size">
                    <p class="my-2 text-secondary">
                        "Please provide DVD size in mega bytes"
                    </p>
                </div>
                <div class="form-group d-none" id="book-form">
                    <label for="weight">Weight (KG)</label>
                    <input type="text" class="form-control" id="weight">
                    <p class="my-2 text-secondary">
                        "Please provide book weight in kilo grams"
                    </p>
                </div>
                <div id="furniture-form" class="d-none">
                    <div class="form-group">
                        <label for="height">Height (CM)</label>
                        <input type="text" class="form-control" id="height">
                    </div>
                    <div class="form-group">
                        <label for="width">Width (CM)</label>
                        <input type="text" class="form-control" id="width">
                    </div>
                    <div class="form-group">
                        <label for="length">Length (CM)</label>
                        <input type="text" class="form-control" id="length">
                    </div>
                    <p class="my-2 text-secondary">
                        "Please provide dimensions in HxWxL format"
                    </p>
                </div>
            </div>
        </div>
    </div>
</form>