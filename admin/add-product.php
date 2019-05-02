<?php include_once "header.php"; ?>

<style>
.table>thead>tr>th,.table>tbody>tr>td {
    border:0px;
}
.table>thead {
    background:#337ab7;
    color:#fff;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <form>
                <table class="table table-bordered" id="add_product_table">
                    <thead>
                        <tr>
                            <th colspan="2" style="text-align:left">Add Product</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center">Product Name</td>
                            <td style="text-align:center"><input type="text" class="form-control" name="product_name" id="product_name" value="" placeholder="Product Name" /></td>
                        </tr>
                        <tr>
                            <td style="text-align:center">Product Description</td>
                            <td style="text-align:center"><textarea class="form-control" name="product_desc" id="product_desc"></textarea></td>
                        </tr>
                        <tr>
                            <td style="text-align:center">Product Price</td>
                            <td style="text-align:center"><input type="text" class="form-control" name="product_price" id="product_price" value="" placeholder="Product Price"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:right"><input type="submit" class="btn btn-primary" name="add_product" id="add_product" value="Add"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>