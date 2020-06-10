<?php
session_start();
if (!isset($_SESSION['adnames'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php'; ?>

    <style type="text/css">
    .nav-link img {
        border-radius: 30%;
        width: 86px;
        height: 86px;
        border: 7px solid deeppink;
        box-shadow: 0 4px 3px green;
        margin-right: 20px;

    }

    body {
        color: #566787;
        background-image: linear-gradient(darkred, black);
        font-family: 'Varela Round', sans-serif;
        font-size: 13px;
    }

    .table-wrapper {
        background-image: linear-gradient(black, black);
        padding: 20px 25px;

        margin: 30px 0;
        border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
        padding-bottom: 15px;
        background-image: linear-gradient(black, red);
        color: #fff;
        box-shadow: 4px 5px 6px 7px red;
        padding: 16px 30px;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }

    .table-title .btn-group {
        float: right;
    }

    .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }

    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }

    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }

    table.table tr th,
    table.table tr td {

        padding: 12px 15px;
        vertical-align: middle;
    }

    table.table tr th:first-child {
        width: 80px;
    }

    table.table tr th:last-child {
        width: 199px;

    }




    table.table th i {
        font-size: 13px;

        cursor: pointer;
    }

    table.table td:last-child i {

        font-size: 22px;

    }

    table.table td a {
        font-weight: bold;
        color: #566787;

        text-decoration: none;


    }

    table.table td a:hover {
        color: #2196F3;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #F44336;
    }

    table.table td i {
        font-size: 19px;
    }

    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;

    }



    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="table-wrapper" style="box-shadow: 4px 5px 6px 7px red;">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="text-white" style="font-family: 'Metal Mania', cursive;">Welcome to Admin Page</h1>
                        <h2 class="text-white">Manage <b>all data</b></h2>
                        <div class=" d-flex mt-3">
                            <a href="#" class="nav-link"><img src="<?php echo $_SESSION['adminimg']; ?>" alt="Avatar">

                                <span class="position-relative"
                                    style="top:10px; font-size: 1.4rem; color:greenyellow; font-family: 'Amaranth', sans-serif;">
                                    <?php echo $_SESSION['adnames']; ?></span>
                                <a href="logout.php" class="btn btn-danger pt-2 mt-3"
                                    style="height:36px; width:100px; border-radius:15px;">Logout</a>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                    </div>
                </div>
            </div>
            <div class="text-center pl-3 pt-2">
                <h2 class="m-auto pb-4 pt-2 text-center text-white" style="font-family: 'Bree Serif', serif;">All Tables
                    List</h2>
                <a href="" class="btn btn-outline-success active mt-2">User Register</a>
                <a href="" class="btn btn-outline-success mt-2">Home Products </a>
                <a href="" class="btn btn-outline-success mt-2">Product Categories</a>
                <a href="" class="btn btn-outline-success mt-2">Order Details</a>
                <a href="" class="btn btn-outline-success mt-2">Admin Table </a>
            </div>
            <br>
            <table class="mt-4 table table-responsive table-striped">
                <thead class="w-100">
                    <tr class="bg-dark text-white">

                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Images</th>
                        <th>Password</th>
                        <th colspan="4" class="text-center">Operations</th>
                    </tr>
                </thead>
                <tbody class="text-white">
                    <?php

                    include 'connection.php';

                    $selectdata = "SELECT * FROM register";
                    $fire = mysqli_query($scon, $selectdata);
                    $rowschek = mysqli_num_rows($fire);


                    while ($getdata = mysqli_fetch_array($fire)) {


                    ?>
                    <tr>
                        <td><?php echo $getdata['id']; ?></td>
                        <td><?php echo $getdata['fname']; ?></td>
                        <td><?php echo $getdata['email']; ?></td>
                        <td><?php echo $getdata['mobile']; ?></td>
                        <td><?php echo $getdata['adddress']; ?></td>
                        <td><img src="<?php echo $getdata['iimage']; ?>" style="width:40px; height:40px;" alt=""></td>
                        <td><?php echo $getdata['pass']; ?></td>
                        <td>
                        <td><a href="userupdate.php?upd=<?php echo $getdata['id']; ?>" data-toggle="tooltip"
                                data-placement="bottom" title="Update"><i class="text-primary fa fa-edit"></i></a></td>
                        <td><a href="userdelet.php?dels=<?php echo $getdata['id']; ?>" data-toggle="tooltip"
                                data-placement="bottom" title="Delet!"><i class="fa fa-trash"
                                    style="color: red;"></i></a></td>
                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>