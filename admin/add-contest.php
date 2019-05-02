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
                            <th colspan="2" style="text-align:left">Add Contest</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center">Contest Name</td>
                            <td style="text-align:center"><input type="text" class="form-control" name="contest_name" id="contest_name" value="" placeholder="Contest Name" /></td>
                        </tr>
                        <tr>
                            <td style="text-align:center">Product Name</td>
                            <td style="text-align:center"><input type="text" class="form-control" name="product_name" id="product_name" value="" placeholder="Product Name" /></td>
                        </tr>
                        <tr>
                            <td style="text-align:center">Contest Min.price</td>
                            <td style="text-align:center"><input type="text" class="form-control" name="contest_min_price" id="contest_min_price" value="" placeholder="Contest Min Prize" /></td>
                        </tr>
                        <tr>
                            <td style="text-align:center">Contest Entry Price</td>
                            <td style="text-align:center"><input type="text" class="form-control" name="contest_entry_price" id="contest_entry_price" value="" placeholder="Contest Entry Price" /></td>
                        </tr>
                        <tr>
                            <td style="text-align:center">Contest Size</td>
                            <td style="text-align:center"><input type="text" class="form-control" name="contest_size" id="contest_size" value="" placeholder="Contest size" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:right"><input type="submit" class="btn btn-primary" name="add_contest" id="add_contest" value="Add"></td>
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