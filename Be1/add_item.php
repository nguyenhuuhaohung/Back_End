<?php
require_once 'model/Item_Database.php';
require_once 'processe_item.php';
$item_Database = new Item_Database();


?>

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
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                    Home</a></div>
            <h1>Add New Items</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Item info</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <!-- BEGIN FORM -->
                             
                            <form action="processe_item.php" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                <input type="hidden" name="action" value="Add">
                                <div class="control-group">
                                    <label class="control-label">Title </label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="title" /> *
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Excerpt</label>
                                    <div class="controls">
                                        <textarea class="span11" name="excerpt"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Content</label>
                                    <div class="controls">
                                        <textarea class="span11" name="content"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose
                                        an image</label>
                                    <div class="controls">
                                    <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a
                                        category</label>
                                    <div class="controls">
                                        <select name="category" id="cate" >
                                            <option value="1">Thời sự</option>
                                            <option value="2">Thế giới</option>
                                            <option value="3">Khoa học</option>
                                            <option value="4">Giải trí</option>
                                            <option value="5">Thể thao</option>
                                            <option value="6">Quân sự</option>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Featured
                                    </label>
                                    <div class="controls">
                                        <select name="featured" id="featured">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">View
                                    </label>
                                    <div class="controls">
                                        <input type="number" class="span11" name="view" /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Author</label>
                                    <div class="controls">
                                        <select name="author" id="cate">
                                            <option value="1">Chúc Ly</option>
                                            <option value="2">Viết Tuân</option>
                                            <option value="3">Trần Hóa</option>
                                            <option value="4">Thanh Danh</option>
                                            <option value="5">Nguyễn Tiến</option>
                                            <option value="6">Sơn Hà</option>
                                            <option value="7">Minh Thư</option>
                                            <option value="8">Bảo Anh</option>
                                            <option value="9">An Khang</option>
                                            <option value="10">Châu Anh</option>
                                            <option value="11">Phương Thảo</option>
                                            <option value="12">Mai Nhật</option>
                                            <option value="13">Thanh Quý</option>
                                            <option value="14">Hoàng An</option>
                                            <option value="15">Thùy Lâm</option>
                                            <option value="16">Như Tâm</option>
                                            <option value="17">An Bình</option>
                                        </select> *
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-success" name="action" value="Add">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <!-- END FORM -->
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