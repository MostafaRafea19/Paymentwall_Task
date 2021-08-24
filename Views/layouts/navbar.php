<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <?php if ($_SERVER['REQUEST_URI'] == '/') { ?>
            <a class="navbar-brand " href="/">Product List</a>
            <div class="navbar-collapse text-right justify-content-end" id="navbarSupportedContent"
                 style="flex-basis: auto !important;">
                <a href="add-product" class="btn btn-success my-2 my-sm-0 mx-lg-1">ADD</a>
                <button class="btn btn-danger my-2 my-sm-0 mx-1" id="delete-product-btn">MASS DELETE
                </button>
            </div>
        <?php } ?>
        <?php if ($_SERVER['REQUEST_URI'] == '/add-product') { ?>
            <a class="navbar-brand" href="/add-product">Product Add</a>
            <div class="navbar-collapse text-right justify-content-end" id="navbarSupportedContent">
                <button class="btn btn-success my-2 my-sm-0 mx-lg-1" id="save">Save</button>
                <a href="/" class="btn btn-light my-2 my-sm-0 mx-1">Cancel</a>
            </div>
        <?php } ?>
        <?php if ($_SERVER['REQUEST_URI'] == '/payment') { ?>
            <a class="navbar-brand " href="/">Product List</a>
            <div class="navbar-collapse text-right justify-content-end" id="navbarSupportedContent"
                 style="flex-basis: auto !important;">
                <a href="/" class="btn btn-light my-2 my-sm-0 mx-1">Cancel</a>
            </div>
        <?php } ?>
    </div>
</nav>