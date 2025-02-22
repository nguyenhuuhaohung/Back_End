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
            <h1>Update New Items</h1>
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
                            <form action="additem.php" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Title </label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="title"
                                            value="Giá nhà ngày càng xa tầm với" /> *
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Excerpt</label>
                                    <div class="controls">
                                        <textarea class="span11" name="excerpt">
                                        Giá nhà ngày càng leo thang, bỏ xa thu nhập người lao động, ngay cả với nhân viên tài chính, ngân hàng - nhóm ngành có mức lương cao nhất - cũng không theo kịp.                                    </textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Content</label>
                                    <div class="controls">
                                        <textarea class="span11" name="content">
                                        Giá nhà ngày càng leo thang, bỏ xa thu nhập người lao động, ngay cả với nhân viên tài chính, ngân hàng - nhóm ngành có mức lương cao nhất - cũng không theo kịp.

Trong 20 nhóm ngành kinh tế (trừ cơ quan, tổ chức quốc tế) được Tổng cục Thống kê khảo sát thu nhập bình quân từ năm 2010 đến nay, lao động ngành tài chính - ngân hàng - bảo hiểm có 10 năm dẫn đầu, vào các giai đoạn 2010-2011 và 2013-2020. Thu nhập nhóm này năm 2010 là 4,8 triệu, và tăng lên 11,5 triệu vào 2023.

Còn theo báo cáo tài chính của các ngân hàng thương mại thuộc VN30 và Agribank, thu nhập bình quân từ lương, thưởng mỗi tháng của một nhân viên ngân hàng tăng từ 21 triệu đồng năm 2014 lên 36 triệu đồng năm 2023, tức mức tăng 6-7% mỗi năm.

"Nhân viên ngân hàng luôn nằm trong nhóm ngành có thu nhập cao nhất, trung bình từ 25 đến 40 triệu đồng mỗi tháng", bà Nguyễn Thu Trang, Giám đốc thương hiệu Manpower, Manpowergroup Việt Nam - tập đoàn chuyên về tuyển dụng, tư vấn nhân sự, khẳng định.

Dù lương ở mức cao so với mặt bằng chung, gần 10 năm qua, mức tăng thu nhập của nhân viên ngân hàng cũng không theo kịp giá nhà. Theo số liệu từ Savills Việt Nam, giá sơ cấp bình quân giai đoạn năm 2014-2023 của các căn hộ hạng C, B và A lần lượt tăng 11%, 10% và 16% mỗi năm. Mặt bằng giá đi ngang giai đoạn 2015-2017, nhưng sau đó tăng mạnh đã kéo giãn khoảng cách giữa thu nhập và giá nhà.

Đơn cử, năm 2014, thu nhập trung bình hàng tháng của nhân viên tài chính ngân hàng - nhóm lao động có lương cao nhất - tương đương giá 0,7 m2 căn hộ hạng B, hoặc 1,05 m2 hạng C. Đến năm 2023, mức lương nhóm này chỉ đủ mua 0,5 m2 căn hộ hạng B và 0,72 m2 hạng C.

Dù thu nhập của người dân tăng, việc sở hữu nhà vẫn khó khăn do giá tăng nhanh hơn đáng kể. Theo Báo cáo Lao động việc làm của Tổng cục Thống kê, thu nhập bình quân của một lao động Việt Nam mỗi tháng tăng từ 4,5 triệu đồng năm 2014 lên 7,5 triệu đồng năm 2022 - mức tăng 7% mỗi năm, bằng một nửa so với tốc độ tăng giá sơ cấp của căn hộ.

Đến quý III, với thu nhập trung bình 7,6 triệu đồng mỗi tháng, ước tính một hộ gia đình gồm hai lao động phải dành hoàn toàn 21-23 năm thu nhập để sở hữu một căn hộ diện tích 55-60 m², với điều kiện giá nhà không tăng. Nếu tỷ lệ tiết kiệm ở mức 50% sau khi chi trả sinh hoạt phí, số năm sẽ tăng gấp đôi.


Dữ liệu từ Numbeo - nền tảng thống kê chi phí sống toàn cầu - cho thấy, chỉ số Giá nhà trên thu nhập (HPR) của Việt Nam giữa năm 2024 đạt 22,8 điểm, thuộc nhóm cao nhất Đông Nam Á. Con số này gấp gần ba lần Malaysia và cao hơn nhiều quốc gia phát triển như Nhật Bản, Singapore hay Hàn Quốc.

Chỉ số HPR càng cao, việc sở hữu nhà càng khó khăn. Từ năm 2014, chỉ số HPR của Việt Nam đã tăng 27%, từ mức 17,8 điểm, phản ánh rõ rệt sự chênh lệch giữa tốc độ gia tăng thu nhập và giá nhà. Đồng thời, khả năng chi trả cho khoản vay của người Việt cũng rất thấp, chỉ đạt 0,4 điểm - thấp hơn hầu hết nước Đông Nam Á được thống kê, ngoại trừ Philippines.


Tình trạng này nghiêm trọng hơn ở các thành phố lớn. TP HCM ghi nhận chỉ số HPR lên tới 32,4 điểm, cao hơn 1,4 lần bình quân cả nước. Trong khi đó, khả năng chi trả khoản vay chỉ ở mức 0,3 điểm, phản ánh khó khăn trong tiếp cận nhà ở. Còn tại Hà Nội, chỉ số HPR thấp hơn bình quân cả nước với 20,6 điểm, nhưng vẫn nằm trong nhóm cao của Châu Á.

"Giá nhà đất tăng nhanh hơn nhiều lần mức tăng tiền lương sẽ làm gia tăng nhanh chóng bất bình đẳng thu nhập", TS Lê Kiên Cường, Trường Đại học Ngân hàng TP HCM, cùng cộng sự đưa ra nhận định trong nghiên cứu năm 2021 Thị trường bất động sản và bất bình đẳng thu nhập tại Việt Nam: Thực trạng và hàm ý chính sách. Theo ông, một số hộ gia đình ngày càng giảm khả năng sở hữu nhà trong tương lai do phải sử dụng tích lũy cho việc thuê nhà.

Bà Giang Huỳnh, Giám đốc bộ phận nghiên cứu và S22M tại Savills Việt Nam, cũng cho rằng nếu giá nhà tiếp tục tăng nhanh hơn thu nhập, khoảng cách giàu nghèo sẽ ngày càng lớn. Những người có thu nhập trung bình trở xuống khó tiếp cận nhà ở, dẫn đến hệ lụy nghiêm trọng với sự ổn định của thị trường và xã hội.

Theo GS Đặng Hùng Võ, nguyên Thứ trưởng Bộ Tài nguyên và Môi trường cảnh báo, việc giá nhà tăng nhanh, vượt quá thu nhập từ lương, không chỉ tạo áp lực lên an sinh xã hội, mà còn thúc đẩy nạn đầu cơ bất động sản. Dòng tiền đầu cơ thường nằm chờ tăng giá, không đi vào sản xuất kinh doanh, gây tác động xấu đến lạm phát và giá trị đồng tiền.

"Không kìm hãm được chuyện đầu cơ và bất đối xứng giữa các phân khúc nhà ở đã dẫn đến hệ quả tất yếu là đưa thị trường bất động sản hiện nay đến cuối đường hầm", ông nói.

Ngoài ra, ông Võ cũng chỉ ra thị trường bất động sản có vai trò quan trọng với sản xuất kinh doanh và kinh tế vĩ mô. Thị trường này bấp bênh sẽ ảnh hưởng tiêu cực đến toàn bộ nền kinh tế như những năm gần đây. Thực tế, bài toán về nhà ở phù hợp với khả năng tài chính của người dân là thách thức của không chỉ riêng Việt Nam. Nhiều thành phố lớn trên thế giới cũng gặp áp lực này khi nhu cầu nhà ở tăng cao do lượng người nhập cư đổ về.

Bà Giang Huỳnh cho biết, tại TP HCM và Hà Nội, nguồn cung không đáp ứng đủ nhu cầu. Nguyên nhân một phần từ tắc nghẽn pháp lý trong phê duyệt dự án, làm chậm việc bổ sung nguồn cung mới. Bên cạnh đó, sự gia tăng của giá đất cùng chi phí xây dựng cũng đẩy giá bán nhà đi lên.

Theo báo cáo của Sở Xây dựng TP HCM, chỉ số giá xây dựng tại thành phố tăng mạnh từ 103 điểm năm 2020 lên 123 điểm vào năm 2023, so với mức gốc năm 2015. Chi phí đầu vào tăng khiến các chủ đầu tư đặt giá bán đầu ra cao hơn nhằm đảm bảo hiệu quả dự án.

<img src="https://i1-vnexpress.vnecdn.net/2024/10/26/PC-2-8857-1729066982-3450-1729882444.png?w=680&h=0&q=100&dpr=1&fit=crop&s=DrYpuZomN9MuXepRpnocug">
Nhìn vào dữ liệu 2018 đến nay, TS Đinh Thế Hiển cũng nhận thấy thu nhập và giá căn hộ ngày càng bị nới rộng. Theo ông, nguyên nhân một phần do chênh lệch cung cầu giữa các phân khúc cao cấp và bình dân trong thị trường. Các sản phẩm mới được tung ra chưa đáp ứng nhu cầu ở thực do căn hộ hạng sang chiếm tỷ trọng lớn. Bên cạnh đó, nhiều người mua là các nhà đầu tư, muốn đảm bảo khả năng sinh lợi nên liên tục đẩy giá lên cao.

Ông cũng cho rằng, sự hỗn loạn trên thị trường bất động sản một phần do một số địa phương buông lỏng quản lý, đặc biệt là khu vực phía Nam - thị trường bất động sản lớn nhất cả nước.

Theo GS Đặng Hùng Võ, cải cách thuế liên quan bất động sản là điều cần thiết để ổn định thị trường. Trong đó, thuế bất động sản thứ hai sẽ giúp loại trừ phần giá ảo trong sản phẩm do hiện tượng đầu cơ. Để làm được, một trong những giải pháp quan trọng là nâng cấp hạ tầng quản lý về dữ liệu nhằm minh bạch hóa thông tin trên thị trường bất động sản.

"Việc này đòi hỏi một lộ trình cụ thể và cần nghiên cứu đa chiều mới có thể áp dụng thành công", GS Võ nhấn mạnh.

Đồng quan điểm, TS Đinh Thế Hiển cho rằng cần minh bạch hóa quản lý, thực thi luật mới thông qua các nghị định để ổn định thị trường. Trong đó, vấn đề quan trọng trước mắt là gỡ vướng mắc về pháp lý cho các dự án, để sớm tăng nguồn cung mới                                    </textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose
                                        an image</label>
                                    <div class="controls">
                                        <input type="file" name="fileUpload" id="fileUpload">
                                        <img src="../img/gianhatop172906697249071729066-9647-2559-1729959592.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a
                                        category</label>
                                    <div class="controls">
                                        <select name="cate" id="cate">
                                            <option selected value="1">Thời sự</option>
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
                                            <option selected value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">View
                                    </label>
                                    <div class="controls">
                                        <input type="number" class="span11" name="view" value="0" /> *
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
                                            <option selected value="5">Nguyễn Tiến</option>
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
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Update</button>
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