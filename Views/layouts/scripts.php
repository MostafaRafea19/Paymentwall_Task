<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Submit add product form
        $('#save').click(function () {
            let sku = $("#sku").val();
            let name = $("#name").val();
            let price = $("#price").val();
            let type = $("#productType").val();
            let size = $("#size").val();
            let weight = $("#weight").val();
            let height = $("#height").val();
            let width = $("#width").val();
            let length = $("#length").val();
            console.log(type);
            $.post('/store-product', {
                'sku': sku,
                'name': name,
                'price': price,
                'type': type,
                'size': size,
                'weight': weight,
                'height': height,
                'width': width,
                'length': length
            })
                .done(function (data) {
                    // console.log(data);
                    window.location.href = "http://<?= $_SERVER['SERVER_NAME'] ?>";
                })
                .fail(function (jqXHR, textStatus, errorThrown) {
                    $('.list-group').remove();
                    // console.log(eval(errorThrown));
                    $('#product_form .container').prepend(
                        `<ul class="list-group mb-2" style="list-style: none"></ul>`
                    )
                    let errors = eval(errorThrown);
                    errors.forEach(function (error) {
                        $('#product_form .container .list-group').append(
                            '<li class="alert alert-danger mb-1" role="alert">' +
                            error +
                            `</li>`
                        )
                    })

                })
        });

        // Determine special attribute according to type switcher
        $('#productType').change(function () {
            let option = $('#productType').val();
            let dvd = $('#dvd-form');
            let book = $('#book-form');
            let furniture = $('#furniture-form');
            switch (option) {
                case "DVD":
                    dvd.removeClass('d-none');
                    book.addClass('d-none');
                    furniture.addClass('d-none');
                    break;
                case "Book":
                    dvd.addClass('d-none');
                    book.removeClass('d-none');
                    furniture.addClass('d-none');
                    break;
                case "Furniture":
                    dvd.addClass('d-none');
                    book.addClass('d-none');
                    furniture.removeClass('d-none');
                    break;
                default:
                    dvd.addClass('d-none');
                    book.addClass('d-none');
                    furniture.addClass('d-none');
                    break;
            }
        });

        // Mass Delete
        $('#delete-product-btn').click(function () {
            $('#products_form').submit();
        })
    });
</script>