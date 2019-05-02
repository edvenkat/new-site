<?php include_once "header.php"; ?>


<style>
#contest_search_table.table>thead>tr>th,#contest_search_table.table>tbody>tr>td {
    border:0px;
}
#add_contest {
    margin-bottom:10px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4>Contest Details</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form>
                <table class="table table-bordered" id="contest_search_table">
                    <tbody>
                        <tr>
                        <td style="text-align:center"><input type="text" class="form-control" name="contest_name" id="contest_name" value="" placeholder="Contest Name" /></td>
                            <td style="text-align:center"><input type="text" class="form-control" name="product_name" id="product_name" value="" placeholder="Product Price" /></td>
                        </tr>
                        <tr>
                            <td style="text-align:center"><input type="text" class="form-control" name="start_date" id="start_date" value="" placeholder="Start Date" /></td>
                            <td style="text-align:center"><input type="text" class="form-control" name="end_date" id="end_date" value="" placeholder="End Date" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:right"><input type="submit" class="btn btn-primary" name="contest_search" id="contest_search" value="Search"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" align="right">
            <a href="add-contest.php" class="btn btn-primary" id="add_contest">Add Contest</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" style="text-align:center;width:10%">Action</th>
                            <th style="text-align:left">Contest Name</th>
                            <th style="text-align:left">Product Name</th>
                            <th style="text-align:center">Contest Min Price</th>
                            <th style="text-align:center">Contest Entry Price</th>
                            <th style="text-align:center">Contest size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center"><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td style="text-align:center"><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td style="text-align:left">Test Contest 1</td>
                            <td style="text-align:left">Test Product 1</td>
                            <td style="text-align:center">112</td>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">2</td>
                        </tr>
                        <tr>
                            <td style="text-align:center"><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td style="text-align:center"><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td style="text-align:left">Test Contest 2</td>
                            <td style="text-align:left">Test Product 2</td>
                            <td style="text-align:center">112</td>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">2</td>
                        </tr>
                        <tr>
                            <td style="text-align:center"><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td style="text-align:center"><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                            <td style="text-align:left">Test Contest 3</td>
                            <td style="text-align:left">Test Product 3</td>
                            <td style="text-align:center">112</td>
                            <td style="text-align:center">12</td>
                            <td style="text-align:center">2</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>