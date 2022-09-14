<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trần Bình Trọng </title>
    <link rel="icon" href="./asset/img/web/iconweb.jpg"  >
    <link rel="stylesheet" href="./asset/main.css">
    <link rel="stylesheet" href="./asset/fonts/themify-icons/themify-icons.css">
</head>
<body>    
    <!-- <script src="main.js"></script> -->
 
    <div class="heading-page" id="begin-page">
        <h1> Danh Sách
            <br>
             Giáo Viên-Cán Bộ-Nhân Viên </h1>
    </div>
    <div class="come-back come-back-js">
        <a href="#begin-page"><i class=" come-back-icon ti-arrow-up"></i></a>
   </div>
   <!-- subject mobile -->
    <div class="selection-overlay">
        <div class="selection-mobile">
            <div class="selection-mobile-close js-menu-close">
                <i class=" close-selection ti-close"></i>
            </div>
            <ul class="selection-subject-list">
                <li><a href="#begin-page">Page</a></li>
                <li><a href="#math">Toán học</a></li>
                <li><a href="#literature">Ngữ Văn</a></li>
                <li><a href="#english">Ngoại Ngữ</a></li>
                <li><a href="#physics">Vật Lí</a></li>
                <li><a href="#chemistry">Hóa Học</a></li>
                <li><a href="#biological">Sinh Học</a></li>
                <li><a href="#hictory">Lịch sử</a></li>
                <li><a href="#Geographic">Địa Lí</a></li>
                <li><a href="#Informatics">Tin Học</a></li>
                <li><a href="#technology">Công Nghệ</a></li>
                <li><a href="#civic-education">Giáo dục công dân</a></li>
                <li><a href="#physical education">thể dục</a></li>
                <li><a href="#defence-security">quốc phòng-an ninh</a></li>
                <li><a href="#Staff">nhân viên</a></li>
                <li><a href="#pagefooter">Footer</a></li>


            </ul>       
        </div>
    </div>
    <!-- subject pc -->
    <div class="selection-subject">
            <ul class="selection-subject-content">
                <li><a href="#math">Toán học</a></li>
                <li><a href="#literature">Ngữ Văn</a></li>
                <li><a href="#english">Ngoại Ngữ</a></li>
                <li><a href="#physics">Vật Lí</a></li>
                <li><a href="#chemistry">Hóa Học</a></li>
                <li><a href="#biological">Sinh Học</a></li>
                <li><a href="#hictory">Lịch sử</a></li>
                <li><a href="#Geographic">Địa Lí</a></li>
                <li><a href="#Informatics">Tin Học</a></li>
                <li><a href="#technology">Công Nghệ</a></li>
                <li><a href="#civic-education">Giáo dục công dân</a></li>
                <li><a href="#physical education">thể dục</a></li>
                <li><a href="#defence-security">quốc phòng-an ninh</a></li>
                <li><a href="#Staff">nhân viên</a></li>
            </ul>               
    </div>
    <div class="menu">
        <button class="js-menu"><i class="menu-icon ti-menu "></i></button>
    </div>  
      <!-- search  -->
    <div class="search">
            <input type="text" id="myInput" placeholder="Search.." title="" autocomplete="off">
            <ul id="myUL" class="search-list">
                <li><a href='#'></a></li>
            </ul>
    </div>
<!-- begin row 1 -->
<div class='modal' id='modal-js'>  
<?php
    $conn = new mysqli('localhost', 'root', '' , 'datamembertbt');
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM infor_member";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()){
        $manystar = '';
        for($s=0 ;$s<$row['star']; $s++) {
            $manystar=$manystar.''."<i class='star ti-star'></i>";
        }
        $backgrColor='red';
        if ($row['fullname']=="Trần Thái Vinh") {
            $backgrColor='yellow';
        } 
        echo
        "<div class='modal-container'>
        <div class='modal-heading'>   
            <div class='number'></div>                                 
            <h1 id='".$row['fullname']."'>".$row['fullname']."</h1> 
            <div class='star-position' style='background-color:".$backgrColor.";' >".$manystar."</div> 
        </div>
        <div class='modal-content'>
        <img  onerror='this.src='te.png' src='".$row['avatar']."' >                
        </div>
        <div class='modal-footer'>                       
            <p class='footer-content'>Thời gian giảng dạy: ".$row['experience']." năm</p>
            <p class='footer-content'>Chuyên môn: ".$row['specialize']."</p>
            <div class='social-network'>
                <a href='".$row['facebook']."' title='Facebook' target='_blank' >
                    <div class='network-icon-hover'>
                        <i class=' network-icon ti-facebook'></i>
                    </div>
                </a>
                <a class='network-icon-hover' href='mailto:".$row['email']."' title='Email'  onclick='alert(\"".$row['email']."\")'>
                    <div class='network-icon-hover'>
                        <i class=' network-icon ti-email'></i>
                    </div>
                </a>    
                <a href='tel://".$row['phone_number']."' title='Phone number'>
                    <div class='network-icon-hover'>      
                        <i class=' network-icon ti-mobile  -'></i>
                    </div>
                </a>
                <a href='https://zalo.me/".$row['zalo']."' title='Zalo' target='_blank'>
                    <div class='network-icon-hover'>
                        <i class='network-icon  ti-id-badge'></i>
                    </div>
                </a>     
            </div>         
        </div>
    </div>";    
}
?>  
</div>  
<!-- end row 1 -->

    <div class="page-footer" id="pagefooter">
        <div class="row-footer">
            <div class="hight-school">
                <div class="heading">
                     <h2>Trần Bình Trọng</h2>
                </div>
                <div class="content">
                    <div class="picture">
                        <img src="./asset/img/web/logotbt.png" alt="">
                    </div>
                    <div class="information">
                        <p>Cơ quan: Trường THPT Trần Bình Trọng</p>
                        <p>Địa chỉ: 08 Trường Chinh, Thị trấn Cam Đức, Cam Lâm, Khánh Hòa</p>
                        <p>Website: http://tbtrong.khanhhoa.edu.vn</p>
                        <p>Email: c3tbtrong@gmail.edu.vn </p>
                    </div>
                </div>               

            </div>
            <div class="private">
                <div class="heading">
                    <h2>Nguyễn Nhật Huy</h2>
               </div>
               <div class="content">
                   <div class="picture">
                       <img src="./asset/img/avatar/nguyennhathuy3x4.jpg" alt="">
                   </div>
                   <div class="information">
                       <p>Học tại: Trường THPT Trần Bình Trọng</p>
                       <p>Facebook: <a href="https://www.facebook.com/huy.nguyennhat.7359/" target="_blank">Nguyễn Nhật Huy</a> 12A1</p>
                       
                       <p>Email: nguyennhathuy21112005@gmail.com</p>
                   </div>
               </div>   
            </div>
        </div>
        <div class="last-row">
            <p>copyright © 2022 </p>
        </div>

    </div>

    
    <script src="main.js"></script>




</body>
</html>