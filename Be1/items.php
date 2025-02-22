<?php
require_once "model/Item_Database.php";
$item_Database = new Item_Database();
if (isset($_GET["keyword"])) {
    $keyword = $_GET["keyword"];
    $perPage = 5;
    $page = $_GET["page"] ?? 1;
    $items = $item_Database->search_pagination($keyword, $page, $perPage);
} else {
    $items = $item_Database->getAllItems();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobile Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/logo.png" type="image/icon type" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/uniform.css" />
    <link rel="stylesheet" href="css/select2.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-media.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css" />
    <style type="text/css">
        ul.pagination {
            list-style: none;
            float: right;
        }

        ul.pagination li.active {
            font-weight: bold;
        }

        ul.pagination li {
            display: flex;
            padding: 10px;
        }
    </style>
</head>

<body>
    <!--Header-part-->
    <div id="header">
        <h1>
            <a href="#"><img src="./images/logo.png" alt="" /></a>
        </h1>
    </div>
    <!--close-Header-part-->
    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class="dropdown" id="profile-messages">
                <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i
                        class="icon icon-user"></i>
                    <span class="text">Welcome Super Admin</span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="icon-user"></i> My Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="icon-check"></i> My Tasks</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="logout.html"><i class="icon-key"></i> Log Out</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown" id="menu-messages">
                <a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i
                        class="icon icon-envelope"></i>
                    <span class="text">Messages</span>
                    <span class="label label-important">5</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a>
            </li>
            <li class="">
                <a title="" href="#"><i class="icon icon-share-alt"></i>
                    <span class="text">Logout</span></a>
            </li>
        </ul>
    </div>
    <!--start-top-serch-->
    <div id="search">
        <form action="items.php" method="GET">
            <input name="keyword" type="text" placeholder="Search here..." />
            <button type="submit" class="tip-bottom" title="Search">
                <i class="icon-search icon-white"></i>
            </button>
        </form>
    </div>
    <!--close-top-serch-->
    <!--sidebar-menu-->
    <?php require_once 'sidebar_menu.php'; ?>
    <!--end sidebar-->
    <!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a>
            </div>
            <h1>Manage Items</h1>
        </div>
        <div class="container-fluid">
            <hr />
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"><a href="add_item.php"> <i class="icon-plus"></i> </a></span>
                            <h5>Items</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
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
                                    <?php foreach ($items as $item): ?>
                                        <tr class="">
                                            <td width="250">
                                                <img src="images/<?= $item["image"] ?>" />
                                            </td>
                                            <td><?= $item["title"] ?></td>
                                            <td>
                                                <?= $item["excerpt"] ?>
                                            </td>
                                            <td><?= $item["category_name"] ?></td>
                                            <td><?= $item["featured"] ?></td>
                                            <td><?= $item["views"] ?></td>
                                            <td><?= $item["author_name"] ?></td>
                                            <td><?= $item["created_at"] ?></td>
                                            <td>
                                                <a href="processce_item.php" class="btn btn-success btn-mini">Edit</a>
                                                <a href="processe_item.php?action=Delete&item_id=<?=$item["id"]?>&item_image=<?=$item['image']?>"
                                                onclick="return confirm('Bạn có chắc muốn xóa tác giả: <?=$item['name']?>')"
                                                class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    <!-- <tr class="">
                                        <td width="250">
                                            <img src="images/gianhatop172906697249071729066-9647-2559-1729959592.png" />
                                        </td>
                                        <td>Giá nhà ngày càng xa tầm với</td>
                                        <td>Giá nhà ngày càng leo thang, bỏ xa thu nhập người lao động, ngay cả với nhân
                                            viên tài chính, ngân hàng - nhóm ngành có mức lương cao nhất - cũng không
                                            theo kịp.</td>
                                        <td>Thời sự</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Nguyễn Tiến</td>
                                        <td>2024-10-31 08:41:02</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/nguyennhatanh11642147020861116-5894-3859-1730117002.jpg" />
                                        </td>
                                        <td>Giới trẻ nói về sức hút của truyện Nguyễn Nhật Ánh</td>
                                        <td>Nhiều fan cho rằng Nguyễn Nhật Ánh không cần đổi lối viết bởi giọng văn tình
                                            cảm và thuần Việt của ông là bản sắc.</td>
                                        <td>Giải trí</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Thanh Danh</td>
                                        <td>2024-10-31 08:33:21</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/ungdung-1729473244-5785-1729481462.jpg" />
                                        </td>
                                        <td>Nhà khoa học thiết kế giải pháp hỗ trợ bệnh nhân nữ ung thư</td>
                                        <td>Nhóm nhà khoa học trường Đại học VinUni và đối tác quốc tế phát triển giải
                                            pháp số, ứng dụng AI hỗ trợ sức khỏe miễn phí cho 150 phụ nữ sau phẫu thuật
                                            ung thư</td>
                                        <td>Khoa học</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Viết Tuân</td>
                                        <td>2024-10-31 08:31:44</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/pmc-qatar-2-4300-1730309058.jpg" />
                                        </td>
                                        <td>Thủ tướng Phạm Minh Chính bắt đầu thăm Qatar</td>
                                        <td>Thủ tướng Phạm Minh Chính và phu nhân đến Qatar, bắt đầu chuyến thăm chính
                                            thức nước này.</td>
                                        <td>Thế giới</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Chúc Ly</td>
                                        <td>2024-10-31 08:28:49</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/Israel-6752-1729226852.png" />
                                        </td>
                                        <td>Cuộc chạm trán bất ngờ khiến thủ lĩnh Hamas thiệt mạng</td>
                                        <td>Khi binh sĩ Lữ đoàn 828 Israel chạm trán nhóm tay súng ở thành phố Rafah, họ
                                            không ngờ đối phương là thủ lĩnh Hamas Yahya Sinwar cùng các cận vệ.</td>
                                        <td>Quân sự</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>An Bình</td>
                                        <td>2024-10-18 15:42:07</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/2-SO-2-1729181158.jpg" />
                                        </td>
                                        <td>Người Cần Thơ 'vật lộn' khi triều cường gây ngập gần một mét</td>
                                        <td>Triều cường khiến một số khu vực TP Cần Thơ ngập gần một mét, nhiều người
                                            không kịp trở tay, cuộc sống đảo lộn, kinh doanh ế ẩm, học sinh đi thuyền
                                            tới trường.</td>
                                        <td>Thời sự</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>An Bình</td>
                                        <td>2024-10-18 15:38:22</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/AFP-20240803-369X2YQ-v2-HighRe-8119-4578-1729211956.jpg" />
                                        </td>
                                        <td>Hezbollah lần đầu tập kích Israel bằng 'tên lửa dẫn đường chính xác'</td>
                                        <td>Nhóm vũ trang Hezbollah tuyên bố chuyển sang giai đoạn mới trong xung đột
                                            với Israel, lần đầu tấn công mục tiêu bằng tên lửa dẫn đường chính xác.</td>
                                        <td>Quân sự</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Thùy Lâm</td>
                                        <td>2024-10-18 09:35:50</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/sinwar-5680-1729188509-5826-1729208259.jpg" />
                                        </td>
                                        <td>Israel công bố video 'khoảnh khắc cuối cùng của thủ lĩnh Hamas'</td>
                                        <td>Quân đội Israel công bố video từ drone trinh sát, được cho là hình ảnh thủ
                                            lĩnh Hamas Yahya Sinwar ngay trước khi bị hạ sát.</td>
                                        <td>Quân sự</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Như Tâm</td>
                                        <td>2024-10-18 09:32:34</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/guardiola-1729200055-9330-1729200140.jpg" />
                                        </td>
                                        <td>Guardiola càng muốn ở lại nếu Man City xuống hạng</td>
                                        <td>Theo truyền thông Anh, HLV Pep Guardiola sẽ gia hạn hợp đồng với Man City
                                            nếu đội bóng bị trừng phạt vì vụ 115 cáo buộc.</td>
                                        <td>Thể thao</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Hoàng An</td>
                                        <td>2024-10-18 09:01:44</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/beckham-7267-1729163973.jpg" />
                                        </td>
                                        <td>Beckham khuyên CĐV Man Utd kiên nhẫn với tỷ phú Ratcliffe</td>
                                        <td>AnhTheo cựu danh thủ David Beckham, tỷ phú Jim Ratcliffe cần có thời gian để
                                            đưa Man Utd trở lại đỉnh cao</td>
                                        <td>Thể thao</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Thanh Quý</td>
                                        <td>2024-10-18 08:59:48</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/afp-20241018-36kc6mn-v1-highre-4397-4543-1729238649.jpg" />
                                        </td>
                                        <td>Bà Harris mất dần ưu thế thăm dò trước ông Trump</td>
                                        <td>Bà Harris được cho là gặp bất lợi trước thềm bầu cử, khi một số khảo sát cho
                                            thấy lợi thế dẫn trước ông Trump trong các cuộc thăm dò đã rút ngắn</td>
                                        <td>Thế giới</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Như Tâm</td>
                                        <td>2024-10-18 00:00:00</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/aaf20c6668b04ab039d98ca5c59b42-9879-6931-1728625993.jpg" />
                                        </td>
                                        <td>Cuộc đời ẩn dật của nhà văn Gerald Murnane</td>
                                        <td>Nhà văn Australia Gerald Murnane - tên tuổi được kỳ vọng thắng giải Nobel
                                            2024 - chưa bao giờ đi máy bay hoặc rời khỏi đất nước, sáng tác bằng trí
                                            tưởng tượng.</td>
                                        <td>Giải trí</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Châu Anh</td>
                                        <td>2024-10-17 16:45:22</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/VNE-Ya-5286-1729053266.jpg" />
                                        </td>
                                        <td>Tàu phá băng hạt nhân mạnh nhất thế giới</td>
                                        <td>NgaTàu Rossiya nặng 69.700 tấn với hai lò phản ứng RITM-400 có thể phá băng
                                            dày gần 4 m, gần gấp đôi công suất của các tàu phá băng lớp Arktika.</td>
                                        <td>Khoa học</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>An Khang</td>
                                        <td>2024-10-17 16:42:36</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/tram-vu-tru-quoc-te-1163-16410-1315-3029-1729134694.jpg" />
                                        </td>
                                        <td>Rò rỉ trên ISS đáng lo ngại nhất với an toàn của phi hành gia</td>
                                        <td>NASA và Nga đã xác định 50 "khu vực đáng lo ngại" trên Trạm Vũ trụ Quốc tế
                                            (ISS) trong đó vụ rò rỉ chất làm mát từ 2019 vẫn là nguy cơ hàng đầu.</td>
                                        <td>Khoa học</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Bảo Anh</td>
                                        <td>2024-10-17 16:41:07</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
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
                                        <td>Khoa học</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Minh Thư</td>
                                        <td>2024-10-17 16:39:05</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
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
                                        <td>Thế giới</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Sơn Hà</td>
                                        <td>2024-10-17 16:36:41</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/5563187178137268496a-My-1842-1729154132.jpg" />
                                        </td>
                                        <td>Máy bay 70 triệu USD lao xuống núi, hai phi công Mỹ mất tích</td>
                                        <td>Máy bay tác chiến điện tử EA-18G của hải quân Mỹ lao xuống núi ở bang
                                            Washington khi bay huấn luyện, hai phi công mất tích.</td>
                                        <td>Thế giới</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Nguyễn Tiến</td>
                                        <td>2024-10-17 16:34:47</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
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
                                        <td>Thế giới</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Thanh Danh</td>
                                        <td>2024-10-17 16:33:23</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/z5939327811243-2357e52c4b4dfc3-9215-5759-1729153420.jpg" />
                                        </td>
                                        <td>Người dân trồng cây, dựng lán chờ đền bù dự án</td>
                                        <td>Kon Tum32 hộ dân ở huyện Đăk Glei trồng 5.640 cây cà phê, thanh long, sầu
                                            riêng, làm hàng rào, dựng lán chờ đền bù dự án đường</td>
                                        <td>Thời sự</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Trần Hóa</td>
                                        <td>2024-10-17 16:31:43</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
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
                                        <td>Thời sự</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Viết Tuân</td>
                                        <td>2024-10-17 16:28:48</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/dji-0263-jpg-1729139222-172913-8141-5071-1729140557.jpg" />
                                        </td>
                                        <td>Hơn 9.300 tàu cá không đủ điều kiện hoạt động</td>
                                        <td>Cả nước còn 9.322 tàu cá không đủ điều kiện hoạt động, ảnh hưởng xuất khẩu
                                            thủy sản sang các thị trường lớn, theo Bộ Nông nghiệp và Phát triển nông
                                            thôn</td>
                                        <td>Thời sự</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Chúc Ly</td>
                                        <td>2024-10-17 16:25:00</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/5563187178137268496a-My-1842-1729154132 (1).jpg" />
                                        </td>
                                        <td>Máy bay tác chiến điện tử Mỹ lao xuống núi, hai phi công mất tích</td>
                                        <td>Máy bay tác chiến điện tử EA-18G của hải quân Mỹ lao xuống núi ở bang
                                            Washington khi bay huấn luyện, hai phi công mất tích.</td>
                                        <td>Quân sự</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Nguyễn Tiến</td>
                                        <td>2024-10-17 09:37:10</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/taylor-swift-release-eras-tour-6397-4323-1729056654.jpg" />
                                        </td>
                                        <td>Taylor Swift ra mắt sách ảnh về concert 'The Eras Tour'</td>
                                        <td>Ca sĩ Taylor Swift phát hành sách ảnh về chuyến lưu diễn "The Eras Tour", dự
                                            kiến ra mắt vào ngày 29/11</td>
                                        <td>Giải trí</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Phương Thảo</td>
                                        <td>2024-10-16 08:53:31</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/my-tam-1-7483-1728977033.jpg" />
                                        </td>
                                        <td>Mỹ Tâm sẽ hát trong lễ hội âm nhạc Hozo</td>
                                        <td>Ca sĩ Mỹ Tâm lần đầu tham gia lễ hội âm nhạc quốc tế Hozo ở TP HCM, trình
                                            diễn cùng ban nhạc Hoài Sa, vào cuối năm</td>
                                        <td>Giải trí</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Mai Nhật</td>
                                        <td>2024-10-15 08:56:27</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td width="250">
                                            <img src="images/lee-3726-1728550909.jpg" />
                                        </td>
                                        <td>HLV tuyển Anh được so sánh với Guardiola</td>
                                        <td>AnhTheo hậu vệ John Stones, HLV tạm quyền Lee Carsley đang hướng tuyển Anh
                                            chơi theo cách mà Pep Guardiola triển khai ở Man City.</td>
                                        <td>Thể thao</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Thanh Quý</td>
                                        <td>2024-10-10 09:02:13</td>
                                        <td>
                                            <a href="#" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <?php if (isset($_GET["keyword"])): ?>
                                <div class="row" style="margin-left: 18px">
                                    <ul class="pagination">
                                        <?php $total = $item_Database->search_pagination_total($keyword);
                                        $url = $_SERVER["PHP_SELF"] . "?keyword=" . $keyword;
                                        echo $item_Database->nagivationBar($url, $page, $perPage, $total); ?>
                                    </ul>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12">2017 &copy; TDC - Lập trình web 1</div>
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