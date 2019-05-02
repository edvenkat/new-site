<?php include_once "header.php"; ?>


<style>
#product_search_table.table>thead>tr>th,#product_search_table.table>tbody>tr>td {
    border:0px;
}
#add_product {
    margin-bottom:10px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4>Product Details</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form>
                <table class="table table-bordered" id="product_search_table">
                    <tbody>
                        <tr>
                            <td style="text-align:center"><input type="text" class="form-control" name="product_name" id="product_name" value="" placeholder="Product Name" /></td>
                            <td style="text-align:center"><input type="text" class="form-control" name="product_price" id="product_price" value="" placeholder="Product Price" /></td>
                        </tr>
                        <tr>
                            <td style="text-align:center"><input type="text" class="form-control" name="start_date" id="start_date" value="" placeholder="Start Date" /></td>
                            <td style="text-align:center"><input type="text" class="form-control" name="end_date" id="end_date" value="" placeholder="End Date" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:right"><input type="submit" class="btn btn-primary" name="product_search" id="product_search" value="Search"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" align="right">
            <a href="add-product.php" class="btn btn-primary" id="add_product">Add Product</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" style="text-align:center;width:10%">Action</th>
                            <th style="text-align:left">Product Name</th>
                            <th style="text-align:center">Product Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center"><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td style="text-align:center"><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td style="text-align:left">Test Product 1</td>
                            <td style="text-align:center">12</td>
                        </tr>
                        <tr>
                            <td style="text-align:center"> <a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td style="text-align:center"> <a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td style="text-align:left">Test Product 2</td>
                            <td style="text-align:center">12</td>
                        </tr>
                        <tr>
                            <td style="text-align:center"> <a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td style="text-align:center"> <a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td style="text-align:left">Test Product 3</td>
                            <td style="text-align:center">12</td>
                        </tr>
                        
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>