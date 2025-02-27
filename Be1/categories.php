<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobile Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/logo.png" type="image/icon type">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/uniform.css" />
    <link rel="stylesheet" href="css/select2.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-media.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        ul.pagination {
            list-style: none;
            float: right;
        }

        ul.pagination li.active {
            font-weight: bold
        }

        ul.pagination li {
            display: flex;
            padding: 10px
        }
    </style>
</head>

<body>
    <!--Header-part-->
    <div id="header">
        <h1><a href="#"><img src="./images/logo.png" alt=""></a></h1>
    </div>
    <!--close-Header-part-->
    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown"
                    data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span
                        class="text">Welcome Super Admin</span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.html"><i class="icon-key"></i> Log
                            Out</a></li>
                </ul>
            </li>
            <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages"
                    class="dropdown-toggle"><i class="icon icon-envelope"></i>
                    <span class="text">Messages</span> <span class="label label-important">5</span> <b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                    <li class="divider"></li>
                    <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
                </ul>
            </li>
            <li class=""><a title="" href="#"><i class="icon icon-cog"></i>
                    <span class="text">Settings</span></a></li>
            <li class=""><a title="" href="#"><i class="icon
                            icon-share-alt"></i> <span class="text">Logout</span></a>
            </li>
        </ul>
    </div>
    <!--start-top-serch-->
    <div id="search">
        <form action="result.html" method="get">
            <input name="keyword" type="text" placeholder="Search here..." />
            <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
        </form>
    </div>
    <!--close-top-serch-->
    <!--sidebar-menu-->
    <?php require_once 'sidebar_menu.php'; ?>
    <!--end sidebar-->
    <!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                        class="icon-home"></i> Home</a></div>
            <h1>Manage Categories</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="form_add_category.php"> <i
                                        class="icon-plus"></i>
                                </a></span>
                            <h5>Categories</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Parent</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img style="width:100px" src="images/images.jpg"></td>
                                        <td>Thời sự</td>
                                        <td>thoi-su</td>
                                        <td>No</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img style="width:100px" src="images/images.jpg"></td>
                                        <td>Thế giới</td>
                                        <td>the-gioi</td>
                                        <td>No</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img style="width:100px" src="images/images.jpg"></td>
                                        <td>Khoa học</td>
                                        <td>khoa-hoc</td>
                                        <td>No</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img style="width:100px" src="images/images.jpg"></td>
                                        <td>Giải trí</td>
                                        <td>giai-tri</td>
                                        <td>No</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img style="width:100px" src="images/images.jpg"></td>
                                        <td>Thể thao</td>
                                        <td>the-thao</td>
                                        <td>No</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img style="width:100px" src="images/images.jpg"></td>
                                        <td>Quân sự</td>
                                        <td>quan-su</td>
                                        <td>No</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <li class="active">1</li>
                                    <li>2</li>
                                    <li>3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END CONTENT -->
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
    </div>
    <!--end-Footer-part-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.uniform.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/matrix.js"></script>
    <script src="js/matrix.tables.js"></script>
</body>

</html>