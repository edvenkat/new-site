<?php include_once "header.php"; ?>


<style>
#contest_details_table.table>thead>tr>th,#contest_details_table.table>tbody>tr>td {
    border:0px;
}
#add_product {
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
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <form>
                <table class="table table-bordered" id="contest_details_table">
                    <tbody>
                        <tr>
                            <td style="text-align:center"><input type="text" class="form-control" name="contest_name" id="contest_name" value="" placeholder="Contest Name" /></td>
                            <td style="text-align:center"><input type="text" class="form-control" name="product_name" id="product_name" value="" placeholder="Product Name" /></td>
                        </tr>
                        <tr>
                            <td style="text-align:center"><input type="text" class="form-control" name="start_date" id="start_date" value="" placeholder="Start Date" /></td>
                            <td style="text-align:center"><input type="text" class="form-control" name="end_date" id="end_date" value="" placeholder="End Date" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:right"><input type="submit" class="btn btn-primary" name="contest_details_search" id="contest_details_search" value="Search"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align:center">User Name</th>
                            <th style="text-align:center">User Bid amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left">Test User 1</td>
                            <td style="text-align:center">12</td>
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