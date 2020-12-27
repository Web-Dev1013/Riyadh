<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | jeweler - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/data-table/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/responsive.css">
</head>

<body>
    <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">Riyadh</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            if (session()->get("permission") == 0) {
                                echo "<li class='navItem'><a id='manage' class=''><span class='glyphicon glyphicon-user'></span> User Manage </a></li>";
                            }
                            ?>
                            <li class="navItem active"><a id="offer"><span class="glyphicon glyphicon-th"></span> My Offer </a></li>
                            <li class="navItem"><a id="logout" class=""><span class="glyphicon glyphicon-log-out"></span> LogOut </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" id="data_table">
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1> User Offer </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_offer_modal"><i class="glyphicon glyphicon-plus"></i> Add </button>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <colgroup>
                                            <col width="5%">
                                            </col>
                                            <col width="5%">
                                            </col>
                                            <col width="25%">
                                            </col>
                                            <col width="20%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="10%">
                                            </col>
                                            <col width="10%">
                                            </col>
                                            <col width="10%">
                                            </col>
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id"> No. </th>
                                                <th data-field="subject" data-editable="true"> Subject </th>
                                                <th data-field="task" data-editable="true"> Real Estate Type </th>
                                                <th data-field="district" data-editable="true"> District </th>
                                                <th data-field="price" data-editable="true"> Price </th>
                                                <th data-field="date" data-editable="true"> Date </th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="offer">
                                                    <button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Del </button>
                                                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#offer_modal"><i class="glyphicon glyphicon-send"></i> Offer </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="offer_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div id="add_offer_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Add Offer </h4>
                </div>
                <div class="modal-body">
                    <div class="modal-input">
                        <form class="application-form inline-form">
                            <div class="container-fluid">
                                <div class="field-row container-fluid px-0">
                                    <input type="text" id="subject" name="subject" class="form-control field text-field user-name-field" placeholder="Subject..." autocomplete="off" required>
                                </div>
                                <div class="field-row container-fluid px-0">
                                    <div class="col-sm-5 px-0">
                                        <input type="text" id="district" name="district" class="form-control field text-field user-name-field" placeholder="District..." autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" id="estate_type" name="estate_type" class="form-control field text-field user-name-field" placeholder="Real Estate Type..." autocomplete="off" required>
                                    </div>
                                    <div class="col-sm-2 px-0">
                                        <input type="text" id="price" name="price" class="form-control field text-field user-name-field" placeholder="Price..." autocomplete="off" required>
                                    </div>
                                </div>
                                <label class="description-label" for="description"> Description: </label>
                                <textarea class="form-control" id="description" name="description"> </textarea>
                            </div>
                            <hr>
                            <div class="modal-image container-fluid">
                                <div class="col-md-6 col-sm-12">
                                    <div class="sparkline8-list responsive-mg-b-30">
                                        <div class="sparkline8-hd">
                                            <div class="main-sparkline8-hd upload-title">
                                                <span class=""> Real Estate Photo </span>
                                                <form method="post" action="<?php echo base_url('FileUpload/upload'); ?>" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="file" name="file" class="form-control">
                                                        <button class="btn btn-primary"> Select </button>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-danger">Upload</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sparkline8-graph">
                                            <div class="google-map-single"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="sparkline8-list responsive-mg-b-30">
                                        <div class="sparkline8-hd">
                                            <div class="main-sparkline8-hd">
                                                <h1> Google Map </h1>
                                            </div>
                                        </div>
                                        <div class="sparkline8-graph">
                                            <div class="google-map-single">
                                                <div id="map"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="field-row" style="text-align: center;">
                                <button id="user_add" class="btn btn-success"> Add </button>
                                <button id="close" type="button" class="btn btn-warning" data-dismiss="modal"> Close </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="add_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Add User </h4>
                </div>
                <div class="modal-body">
                    <div class="modal-input">
                        <form class="application-form">
                            <div class="field-row">
                                <input type="text" id="userName" name="userName" class="field text-field user-name-field" placeholder="User Name" autocomplete="off" required>
                                <span class="message"></span>
                            </div>
                            <div class="field-row">
                                <input type="email" id="email" name="email" class="field text-field email-field" placeholder="Email" required>
                                <span class="message"></span>
                            </div>
                            <div class="field-row">
                                <input type="password" id="pass" name="pass" class="field text-field" placeholder="Password">
                            </div>
                            <div class="field-row">
                                <input type="password" id="confirm-pass" name="confirm-pass" class="field text-field" placeholder="Confirm Password">
                                <span class="message"></span>
                            </div>
                            <div class="field-row">
                                <input type="tel" id="phone" name="phone" class="field text-field tel-field" placeholder="Phone Number" required>
                                <span class="message"></span>
                            </div>
                            <div class="field-row">
                                <label class="radio-inline"><input type="radio" class="radio" value="1" name="optradio"> Manager </label>
                                <label class="radio-inline"><input type="radio" class="radio" value="2" name="optradio"> Normal User </label>
                            </div>
                            <hr>
                            <div class="field-row" style="text-align: center;">
                                <button id="user_add" class="btn btn-success"> Add </button>
                                <button id="close" type="button" class="btn btn-warning" data-dismiss="modal"> Close </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="all-content-wrapper" id="user_manage">
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1> User Management </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="user_toolbar">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_modal"><i class="glyphicon glyphicon-plus"></i> Add </button>
                                    </div>
                                    <table id="user_table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#user_toolbar">
                                        <colgroup>
                                            <col width="5%">
                                            </col>
                                            <col width="5%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="12%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="15%">
                                            </col>
                                            <col width="10%">
                                            </col>
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id"> No. </th>
                                                <th data-field="username" data-editable="true"> User Name </th>
                                                <th data-field="email" data-editable="true"> Email </th>
                                                <th data-field="password" data-editable="true"> Password </th>
                                                <th data-field="phone" data-editable="true"> Phone Number </th>
                                                <th data-field="permission" data-editable="true"> Permission </th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="offer">
                                                    <button class="btn table-data-del btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Del </button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/main.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/data-table/bootstrap-table-export.js"></script>
    <script src="<?php echo base_url() ?>/Riyadh/assets/js/google.maps/google.maps-active.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiNUO68DkrsFKFz744_LWMqCNI_GqYciQ&callback=initMap"></script>
</body>

</html>
<script>
    // Init user data display
    // function init_Data(){
    $.ajax({
        url: "<?php echo base_url("Riyadh/public/index.php/home/init_Data") ?>",
        type: "post",
        async: false,
        success: function(res) {
            var res = JSON.parse(res);
            var table_data = "";
            for (x in res) {
                table_data += "<tr id=" + res[x].id + "><td></td><td>" + x + "</td><td>" + res[x].username + "</td><td>" + res[x].email + "</td><td>" + res[x].pass + "</td><td>" + res[x].phone + "</td><td>" + res[x].permission + "</td><td class='offer'><button class='btn btn-primary data-save btn-xs'><i class='save-icon glyphicon glyphicon-save'></i> Save </button>&nbsp;<button class='btn btn-danger data-delete btn-xs'><i class='delete-icon glyphicon glyphicon-trash'></i> Del </button></td></tr>";
            }
            $("#user_table tbody").html(table_data);
        }
    });
    // }

    // init_Data();
    var checked_radio = "";
    $("input[type='radio']").click(function() {
        checked_radio = $(this).val();
    });

    $("#user_add").click(function(e) {
        e.preventDefault();
        if ($("#userName").val() != "" && $("#email").val() != "" && $("#pass").val() == $("#confirm-pass").val()) {
            var userName = $("#userName").val();
            var pass = $("#pass").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var permission = checked_radio;
            console.log(permission);
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/add_user") ?>",
                type: "post",
                data: {
                    userName: userName,
                    pass: pass,
                    email: email,
                    phone: phone,
                    permission: permission
                },
                async: false,
                success: function(res) {
                    if (res == "success") {
                        $(".close").click();
                        location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
                    } else if (res == "already") {

                    }
                }
            });
        }
    });

    // User Save & Delete
    $("#user_table tbody").click(function(e) {
        // e.preventDefault();
        //  Delete
        var checked_row_id = $(e.target).parents("tr").attr("id");
        if ($(e.target).hasClass("data-delete") == true || $(e.target).hasClass("delete-icon") == true) {
            $(e.target).parents("tr").remove();
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/delete_user") ?>",
                type: "post",
                data: {
                    id: checked_row_id
                },
                success: function(res) {
                    location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
                }
            })
        }
        //  Save
        if ($(e.target).hasClass("data-save") == true || $(e.target).hasClass("save-icon") == true) {
            console.log($("#" + checked_row_id).children().eq(2).children().html());
            var username = $("#" + checked_row_id).children().eq(2).children().html();
            var email = $("#" + checked_row_id).children().eq(3).children().html();
            var pass = $("#" + checked_row_id).children().eq(4).children().html();
            var phone = $("#" + checked_row_id).children().eq(5).children().html();
            var permission = $("#" + checked_row_id).children().eq(6).children().html();
            $.ajax({
                url: "<?php echo base_url("Riyadh/public/index.php/home/save_data") ?>",
                type: "post",
                data: {
                    id: checked_row_id,
                    username: username,
                    email: email,
                    pass: pass,
                    phone: phone,
                    permission: permission
                },
                success: function(res) {
                    console.log(res);
                }
            });
        }
    });

    // log out event
    $("#logout").click(function() {
        $.ajax({
            url: "<?php echo base_url("Riyadh/public/index.php/home/logout") ?>",
            type: "post",
            async: false,
            success: function() {
                location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
            }
        });
    });
</script>