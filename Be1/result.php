
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
    <?php require_once "start_top_serch.php" ?>
    <!--close-top-serch-->
    <!--sidebar-menu-->
    <?php require_once 'sidebar_menu.php'; ?>
    <!--end sidebar-->
    <!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                        class="icon-home"></i> Home</a></div>
            <h6>Result: found 19 item(s) with keyword "bao"</h6>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>Products</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered
                                    table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Title</th>
                                        <th>Excerpt</th>
                                        <th>Category</th>
                                        <th>Feature</th>
                                        <th>View</th>
                                        <th>Author</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/dji-0263-jpg-1729139222-172913-8141-5071-1729140557.jpg" />
                                        </td>
                                        <td>Hơn 9.300 tàu cá không đủ điều kiện hoạt động</td>
                                        <td>Cả nước còn 9.322 tàu cá không đủ điều kiện hoạt động, ảnh hưởng xuất khẩu
                                            thủy sản sang các thị trường lớn, theo Bộ Nông nghiệp và Phát triển nông
                                            thôn</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>2024-10-17 16:25:00</td>
                                        <td>
                                            <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/z5938359481080-68ba0bd3600a30d-8951-8520-1729150929.jpg" />
                                        </td>
                                        <td>Đề xuất người Việt Nam ở nước ngoài được ứng cử đại biểu Quốc hội</td>
                                        <td>Chủ tịch Liên hiệp hội Việt Nam tại châu Âu đề xuất bổ sung quy định cho
                                            phép công dân Việt Nam ở nước ngoài được quyền tham gia bầu cử, ứng cử đại
                                            biểu Quốc hội</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>2024-10-17 16:28:48</td>
                                        <td>
                                            <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/Xe-ta-ng-U-c-jpeg-9457-1729152238.jpg" />
                                        </td>
                                        <td>Australia viện trợ 49 xe tăng Abrams cho Ukraine</td>
                                        <td>Chính phủ Australia thông báo gửi 49 chiếc M1A1 Abrams đã qua sử dụng cho
                                            Ukraine, sau khi bắt đầu tiếp nhận vũ khí thế hệ mới</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>4</td>
                                        <td>2024-10-17 16:33:23</td>
                                        <td>
                                            <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/b47fc48f2b0c9252cb1d-172915501-3102-6319-1729155022.jpg" />
                                        </td>
                                        <td>Chủ tịch Quốc hội đến Vientiane, bắt đầu thăm Lào</td>
                                        <td>Chủ tịch Quốc hội Trần Thanh Mẫn thăm chính thức Lào và tham dự Đại hội đồng
                                            Liên Nghị viện ASEAN lần thứ 45 (AIPA-45) ngày 17-19/10</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>6</td>
                                        <td>2024-10-17 16:36:41</td>
                                        <td>
                                            <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/qua-trinh-lap-rap-ten-lua-star-8728-3703-1729130652.jpg" />
                                        </td>
                                        <td>Elon Musk lên kế hoạch thu tàu vũ trụ Starship bằng 'đũa' năm 2025</td>
                                        <td>Sau thành công bắt tầng đẩy Super Heavy bằng "đũa" hôm 13/10, SpaceX lên kế
                                            hoạch tương tự với tầng trên Starship vào năm sau.</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>7</td>
                                        <td>2024-10-17 16:39:05</td>
                                        <td>
                                            <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <li class='active'><a href='result.php?keyword=bao&page=1'> 1 </a></li>
                                    <li><a href='result.php?keyword=bao&page=2'> 2 </a></li>
                                    <li><a href='result.php?keyword=bao&page=3'> 3 </a></li>
                                    <li><a href='result.php?keyword=bao&page=4'> 4 </a></li>
                                </ul>
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