<?php include_once "header.php"; ?>
 
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
        <form action="dashboard.php" name="adminLogin" id="adminLogin" method="post">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="2" style="text-align:center">Admin Login</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control" name="username" id="username" value=""/></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control" name="userpass" id="userpass" value=""/></td>
                    </tr>
                    <tr>
                    <td colspan="2" style="text-align:center"><input type="submit" class="btn btn-primary" name="admin_login" id="admin_login" value="login"></td>
                    </tr>
                </tbody>
            </table>
        </form>
     </div>
    <div class="col-sm-4">
    </div>
  </div>
</div>

<?php include_once "footer.php"; ?>