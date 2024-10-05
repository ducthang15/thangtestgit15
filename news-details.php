<?php 
session_start();
include('includes/config.php');
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('Bình luận đã được xác nhận. Bình luận sẽ được hiển thị sau khi admin chấp thuận ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Có gì đó sai. Xin hãy thử lại.');</script>";  

endif;

}
}
}
?>

<!DOCTYPE html>
<html lang="vi">

  <head>

  <link rel="shortcut icon" href="favicon.ico" type="image/png">
        <link rel="apple-touch-icon" href="favicon.ico">
        <meta name="description" content="VietNamNews">  
        <meta name="keywords" content="News, trending, media, magazine">
        <meta property="og:url" content="#">
        <meta property="og:image" content="#">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="author" content="VietNamNews@gmail.com" >
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="style.css">
        <meta name="msapplication-navbutton-color" content="#ffffff">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="VietNamNews">

    <title>VietNamNews | Tin chi tiết</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <!-- Custom styles for this template -->
    <!-- <link href="css/modern-business.css" rel="stylesheet"> -->
    <style>
           * {
    box-sizing: border-box;
    margin: 0px;
  }
  
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    background-color: #fff;
  }  
  .main-side-container{
    display: -webkit-flex;
      display: flex;
      -webkit-flex-wrap: nowrap;
      flex-wrap: nowrap;
  }
  .main-side-container div a{
    font-size: 15pt;
  }
  .main-side-container div hr{
  height: 2px;
  width: 80%;
  border: none;
  border-radius: 7px;
  background-color:#fff;
  }
  
  .sub-side-container:first-child{
    color: #6282a5;
  }
  /* Responsive layout*/
  @media screen and (min-width: 820px) and (max-width: 912px) {
    .side{
      display: none !important;
    }
  }
  @media screen and (width: 280px) {
    .container-header {
      display: flex;
      flex-direction: column !important;
    }
    .header-right{
      display: none !important;
    }
    .container-header-left{
      padding-bottom: 20px !important;
      padding-left: 20px !important;
    }
    .fixed-bar{
      margin-bottom: 30px !important;
    }
  }
  @media screen and (width: 540px) {
    .search-bar {
      width: 261px;
    }
  }
  @media screen and (width: 768px) {
    .header-right{
      margin-left: 84px !important;
    }
  }
   @media screen and (max-width: 412px) {
    .header-box{
      height: 177px !important;
    }
   }
   @media screen and (max-width: 1280px) {
    .header-box{
      height: 248px !important;
    }
    .header-right a{
      border: none !important;
    }
   }
  @media screen and (max-width: 1080px) {
    .main-side-container{
      display: -webkit-flex;
        display: flex;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
    }
    .main-side-container div a{
      font-size: 14pt;
    }
  }@media screen and (max-width: 863px) {
  .main-side-container div a{
      font-size: 13pt;}
    }
    @media screen and (max-width: 820px) {
      .main-side-container div a{
          font-size: 12pt;
      }
      .w-f-u{
       margin-bottom: 10px;
        margin-left: 10px;
      }
      .banner{
        display: none !important;
      }
      .top-nav{
        display: none !important;
      }
      .fixed-bar{
        border: none !important;
      }
      .header-right a{
        border: none !important;
      }
      .repon-820{
        display: none !important;
      }
      .header-box{
        height: 140px !important;
      }
      .side820{
        display: none !important;
      }
      .row {
          margin: 0 40px !important;
      }
  }
  h4 {
      text-align: center;
      font-size: 60px;
      margin-top: 0px;
    }
    .svg-clock{
      width: 11px;
      fill:grey;
    }
    /* Increase the font size of the h1 element */
    .header h1 {
      font-size: 40px;
    }
    
    /* Column container */
    .row {  
      display: flex;
      flex-wrap: wrap;
    }
    
    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
      flex: 30%;
      background-color: #fff;
      padding: 20px;
    }
    /* Main column */
    .main {   
      flex: 70%;
      background-color: white;
      padding: 20px;
    }
    
    /*  image */
    .imgprops {
      width: 100%;
    }
   
    @media screen and (max-width: 800px) {
      .side{
       flex: 0%;
      }
      .main{
        flex: 100%;
      }
      
    }
    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 500px) {
      .row {   
        flex-direction: column;
        margin: 0 !important;
      }
      .banner{
        display: none !important;
      }
      .Time-Weather{
        display: none !important;
      }
      .fixed-bar{
        padding: 0 0 0 50px !important;
      }
      .repon-hide{
        display: none !important;
      }
      .header-right a{
        border: none !important;
      }
      .TimKiem{
        display: none !important;
      }
      .form-search{
        width: 100% !important;
        padding-left: 20px !important;
      }
      .header-box{
        height: 130px !important;
      }
      .container-header{
        border: none !important;
      }
    }
    
    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      .navbar a {
        float: none;
        width:100%;
      }
    }
    
    #main {
        transition: margin-left .5s;
      
      color: white;
    }
    
    @media screen and (max-height: 450px) {
      /* .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;} */
    }
  @media screen and (max-width: 700px){
  .top-nav{
      display: none;
  }
  }
  @media screen and (max-width: 1000px){
    .top-nav{
      margin-left: 0px !important;
    }
    }
  .top-nav{
    /* margin-bottom: 70px; */
    margin-left: auto;
    margin-right: auto;
  }
  .nav{
    width: auto;
    height: 40px;
    border: none;
    line-height: 10px;
  
  }
  .top-nav a{
  text-decoration: none;
  color: #000;
  font-family: Arial, sans-serif;
  }
  .top-nav a:hover{
    color: #5e9ab1;
  }
  .top-nav a li{
    list-style: none;
    float: left;
    font-size: 12pt ;
    margin-right: 20px;
  }

   .header-box{
     background-color: #fff;
     height:177px;
   }
   .News-heading{
     text-decoration: navy;
     font-size:12pt;
     display:flex;
     flex-direction:row;
   }
   .News-heading:before, .News-heading:after{
  content: "";
  flex: 1 1;
  border-bottom: 1px solid;
  margin:auto;
   }
   .News-heading:before{
     margin-right: 10px;
   }
   .News-heading:after{
     margin-left: 10px;
   }
   footer{
     background-color: #f5f5f5;
     margin: 0px;
   }
  
  .footer-main-container{
    display: -webkit-flex;
        display: flex;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .footer-main-container div{
    margin-left: 52px;
    width: 300px;
  }
  .footer-main-container div hr{
    width: 80%;
    margin-left: 0px;
  }
  .footer-main-container div p{
    color: #6282a5;
  }
  .footer-main-container div a{
    text-decoration: none;
    font-size: 15pt;
   color: #828da6;
   font-size: 13pt;
   line-height: 35px;
  }
  .footer-main-container div a:hover{
    color: #fff;
  }
  .sub-container:first-child{
    color: #fff;
  }
  .footer-terms{
    text-align: center;
    color:#828da6 ;
    font-size: 10pt;
  }
  .footer-terms a{
    color: #f1f1f1;
    text-decoration: none;
    font-size: 10pt;
  }
  
   .card-title-font{
     color:#113277;
     font-size: 15pt
   }
 .postimgtop{
  width:100%;
   /* height:320px; */
   border-radius:5px 5px 0 0;
 }
 .postimgtop-con{
   height: auto;
 }
 .postimgtopt{
  width:100%;
   height: auto;
   border-radius:5px 5px 0 0;
 }
 .fixed-bar{
  /* position: fixed; */
  top:0;
  width: 100%;
  z-index: 1;
  padding-left: 100px;
  padding-right: 100px;
  border-bottom: 1px solid #e5e5e5;
 }
 /*scroll to top*/
 @keyframes rotate {
   to {
     transform: rotate(2520deg);
   }
 }
 #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: white;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #dbdddf;
  /* animation-name: rotate;
     animation-duration: 3s;
     animation-timing-function: linear;
     animation-iteration-count: infinite; */
}
.header-right {
  float: right;
  margin-left: 100px;
  margin-top: 25px;
  padding-bottom: 25px;
}

.header-right a {
  display: inline-block;
  padding: 4px 8px;
  text-decoration: none;
  color: #000;
  margin-right: 5px;
  border-right: 1px solid #000;
}

.header-right a:hover {
  color: #5e9ab1;
}

.header-right a.w-f-u {
  background-color: #000;
  color: #ffffff;
}
.search-input{
    border: 1px solid #ababab;
    border-radius: 50px;
    color: #555;
    font-size: 14px;
    height: 32px;
    outline: none;
    width: 50%;
}
.container-header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding-bottom: 20px;
    border-bottom: 1px solid #e5e5e5;
}
.container-header-right {
  display: flex;
  flex-direction: column;
}
.search-bar {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.form-search{
  width: 70%;
}
.banner{
  margin: 0px auto;
  padding: 0px;
  text-align: center;
  /* width: 1100px; */
}
.row{
  margin: 0 100px;
}
.Time-Weather{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin: 0 100px;
  border-bottom: 1px solid #e5e5e5;
  padding-top: 10px;
}
</style>
</head>

<body>

<div class="Time-Weather">
  <div id="clockbox" style="color:#aaa; text-align: center;"></div>
                  <script type="text/javascript">
  var tday=["Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy"];
  var tmonth=["Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"];
  
  function GetClock(){
  var d=new Date();
  var nday=d.getDay(),ndate=d.getDate(),nmonth=d.getMonth(),nyear=d.getFullYear();
  var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
  
  if(nhour==0){ap=" AM";nhour=12;}
  else if(nhour<12){ap=" AM";}
  else if(nhour==12){ap=" PM";}
  else if(nhour>12){ap=" PM";nhour-=12;}
  
  if(nmin<=9) nmin="0"+nmin;
  if(nsec<=9) nsec="0"+nsec;
  
  var clocktext=""+tday[nday]+", "+ndate+" "+tmonth[nmonth]+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
  document.getElementById('clockbox').innerHTML=clocktext;
  }
  
  GetClock();
  setInterval(GetClock,1000);
  </script>
  
  <!-- weather widget start --><div id="m-booked-small-t3-69449"> <div class="booked-weather-160x36 w160x36-06" style="color:#333333; border-radius:4px; -moz-border-radius:4px; border:none"> <div style="color:#08488D;" class="booked-bl-simple-city">Hà Nội</div> <div class="booked-weather-160x36-degree"><span class="plus">+</span>36&deg;<span>C</span></div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/bw-160-36.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_69449(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-small-t3-69449'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=19487;type=13;scode=48144;ltid=3457;domid=1180;anc_id=44299;countday=undefined;cmetric=1;wlangID=33;color=fff5d9;wwidth=158;header_color=fff5d9;text_color=333333;link_color=08488D;border_form=3;footer_color=fff5d9;footer_text_color=333333;transparent=1;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=69449';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->
</div>

<section class="header-box fixed-bar ">

<div class="container-header">
  <div class="container-header-left"><a href="index.php"> <img src="./Logo.svg" alt="logo" style="padding-top:25px;"> </a></div>
  
  <div class="container-header-right">
    <div class="header-right">
      <a class="repon-hide" href="contact-us.php">Liên lạc <img src="./phone-call.svg" alt="lienlac" style="width: 20px;"></a>
      <a class="repon-hide repon-820" href="about-us.php">Giới thiệu</a>
      <a class="repon-hide repon-820" href="Advertise-with-us.php">Quảng cáo</a>
      <a class="repon-hide repon-820" href="Our-Terms.php">Điều khoản</a>
      <a class="repon-hide repon-820" href="Privacy-policy.php">Chính sách quyền riêng tư</a>
      <a class="repon-hide" href="http://localhost/VietNamNews/admin/">Đăng nhập <img src="./dang-nhap.svg" alt="login" style="width: 20px;"></a>
      <a class="repon-hide" href="Write-for-us.php" class="w-f-u"><i class="fa fa-book"></i> Phản hồi</a>
    </div>
  
    <div class="search-bar">
      <div class="TimKiem"></div>
      <form name="search" action="search.php" method="post" class="form-search">
        <input type="text" name="searchtitle" class="search-input" placeholder="Tìm kiếm..." required>
        <button type="submit">
          <i class="fa fa-search"></i>
        </button>
      </form>
    </div>
  </div>
</div>

    <div>
      <ul class="top-nav">
        <a href="index.php" ><li class="nav" id="c-color"> <i class="fa fa-home" aria-hidden="true"></i></li></a>
        <a href="category.php?catid=2"><li class="nav"> Chính trị</li></a>
        <a href="category.php?catid=3"><li class="nav">Thể thao</li></a>
        <a href="category.php?catid=7"><li class="nav"> Kinh doanh</li></a>
        <a href="category.php?catid=5"><li class="nav"> Giải trí</li></a>
        <a href="category.php?catid=6"><li class="nav"> Tin nóng</li></a>
        <a href="category.php?catid=9"><li class="nav"> Sức khỏe</li></a>
        <a href="category.php?catid=10"><li class="nav"> Thế giới</li></a>
        <a href="category.php?catid=16"><li class="nav"> Phong cách</li></a>
        <a href="category.php?catid=13"><li class="nav"> Giáo dục</li></a>
        <a href="category.php?catid=17"><li class="nav"> Truyền thông và công nghệ</li></a>
        <a href="category.php?catid=18"><li class="nav"> Pháp luật</li></a>
      
      </ul>
    </div>
</section>          
    <hr>  
    <div class="banner">
      <iframe src="https://cdnstoremedia.com/adt/banners/nam2015/4043/min_html5/2023-05-10/oanhdoankim/1160x250/1160x250/1160x250.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttps%253A%252F%252Fvietnamnet.vn%252Fgiai-tri%26rid%3Db621e543-1509-430c-808d-b165d497b35d141-646e23e3%26sspb%3D10650%26lsn%3D1684939746202%26ce%3D1%26lc%3D21%26cr%3D1684157630%26ui%3D8884157630458003136%26uuid%3D%26profileID%3D%26bi%3D0%26cmpg%3D80390%26items%3D340462%26zid%3D517177%26pr%3D34145623892%26cid%3D-1%26tp%3D11%26tpn%3D4%26alg%3D1102%26dg%3D566880bed79dfde87aaa103bc7bbf60c%26pgl%3D1%26xtr%3DeyJhc2lkIjo4MTQ5LCJwcm9maWxlaWQiOiIifQ%253D%253D%26sspz%3D2016960%26adc_cpa%3D1%26cov%3D1%26re%3Dhttps%253A%252F%252Fbenhvienthucuc.vn%252Fgoi-kham-suc-khoe-va-tam-soat-ung-thu%252F%253Futm_source%253Dadx_t5.2023%2526utm_medium%253Dbanner%2526utm_campaign%253Dgoiksktsutt5%2526utm_content%253Dadx_pc_t5.2023_goiksktsutt5_1160x250&amp;autoplay=0&amp;admid=adnzone_517177_0_340462&amp;vast=https%3A%2F%2Fsspapi.admicro.vn%2Fssp_request%2Fvideo%3Fu%3Dvietnamnet.vn%252Fgiai-tri%26z%3D517177%26p%3D1%26w%3D650%26h%3D300%26%26lsn%3D1684939746202%26dgid%3D566880bed79dfde87aaa103bc7bbf60c%26l%3D21%26loc%3D21%26i%3D8884157630458003136%26isdetail%3D0%26pid%3D%26tags%3D5%26adstype%3D%26vtype%3D8%26vid%3D%26bannerid%3D340462" width="1160" height="250" frameborder="0" scrolling="no"></iframe>
    </div>


<!-- Page Content -->
   <div class="row">
                
          <div class="main">
                <div class="imgprops" style="height:auto;">
 <!-- Blog Post -->
<?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblposts.PostFile,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
              <p><b>Danh mục : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> |
                <b>Danh mục con : </b><?php echo htmlentities($row['subcategory']);?> <b> | Được đăng vào lúc </b><?php echo htmlentities($row['postingdate']);?></p>
                <hr />

 <img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
  
              <p class="card-text"><?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?></p>
                  <?php
                  $filename = $row['PostFile'];
                  $filepath = './admin/postfile/' . $filename;
                  $extension = pathinfo($filename, PATHINFO_EXTENSION);
                  ?>
                  <?php if ($filepath && $extension && file_exists($filepath)): ?>
                    <a href="<?php echo $filepath; ?>" download>
                      <?php echo $filename; ?>
                      (<?php echo strtoupper($extension); ?>)
                    </a>
                  <?php else: ?>
                    <p></p>
                  <?php endif; ?>

            </div>
            <div class="card-footer text-muted">
             
           
            </div>
          </div>
<?php } ?>
       

</div>
<div class="imgprops" style="height:auto;">
<!---Comment Section --->
<div class="row"  >
   <div class="col-md-12">
<div class="card my-4">
            <h5 class="card-header">Bình luận:</h5>
            <div class="card-body">
              <form name="Comment" method="post">
      <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
 <div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Nhập họ tên của bạn" required>
</div>

 <div class="form-group">
 <input type="email" name="email" class="form-control" placeholder="Nhập email của bạn" required>
 </div>


                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3" placeholder="Bình luận" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Xác nhận</button>
              </form>
            </div>
          </div>

  <!---Comment Display Section --->

 <?php 
 $sts=1;
 $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
while ($row=mysqli_fetch_array($query)) {
?>
<div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="image">
            <div class="media-body">
              <h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br />
                  <span style="font-size:11px;"><b>lúc</b> <?php echo htmlentities($row['postingDate']);?></span>
            </h5>
           
             <?php echo htmlentities($row['comment']);?>            </div>
          </div>
<?php } ?>

        </div>
      </div>
    
                </div> 
  </div>

                 
                <div class="side">
                 
                  <div class="imgprops" style="height:auto;">
                 <!-- Sidebar Widgets Column -->
<?php include('includes/sidebar.php');?>
                </div>
                <h2><a href="category.php?catid=2" class="News-heading">Đọc thêm</a></h2>
                 <div class="imgprops" style="height:auto;">
                  <!-- Blog Post -->
   <?php 
   
   if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
      } else {
          $pageno = 1;
      }
      $no_of_records_per_page = 3;
      $offset = ($pageno-1) * $no_of_records_per_page;


      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
      $result = mysqli_query($con,$total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid #aaa; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

<span style="float:right" ><i>Danh mục : </i> <a style="color:#113277" href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </span>
</h6>         
<div  class=" postimgtop-con">
<img class="postimgtop" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">

          <div class="card-body" >             
     
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
                <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2> 
            </a>
          </div>
        
        </div>
<?php } ?>


<?php 
         function time_elapsed_string($datetime, $full = false){
           $now = new DateTime;
           $ago = new DateTime($datetime);
           $diff = $now->diff($ago);

           $diff->w = floor($diff->d / 7);
           $diff->d -= $diff->w * 7;

           $string = array(
             'y' => 'năm',
             'm' => 'tháng',
             'w' => 'tuần',
             'd' => 'ngày',
             'h' => 'giờ',
             'i' => 'phút',
             's' => 'giây',
           );
           foreach( $string as $k => &$v){
             if ($diff->$k) {
               $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
             } else {
               unset($string[$k]);
             }
             
           }
           if(!$full) $string = array_slice($string, 0, 1);
           return $string ? implode(', ', $string) . ' trước' : 'bây giờ';
         }
         ?>
  </div>
                 <div class="imgprops" style="height:auto;"></div>
              </div> 
</div>
      <!-- /.row -->

       <div class="banner">
     <iframe id="aswift_3" name="aswift_3" style="width:980px;height:250px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="980" height="250" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-0771410550134874&amp;output=html&amp;h=250&amp;slotname=3803533541&amp;adk=1815617759&amp;adf=3058105522&amp;pi=t.ma~as.3803533541&amp;w=980&amp;lmt=1684920906&amp;format=980x250&amp;url=https%3A%2F%2Fvietnamnet.vn%2F&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTEzLjAuNTY3Mi4xMjciLFtdLDAsbnVsbCwiNjQiLFtbIkdvb2dsZSBDaHJvbWUiLCIxMTMuMC41NjcyLjEyNyJdLFsiQ2hyb21pdW0iLCIxMTMuMC41NjcyLjEyNyJdLFsiTm90LUEuQnJhbmQiLCIyNC4wLjAuMCJdXSwwXQ..&amp;dt=1684920352287&amp;bpp=2&amp;bdt=3918&amp;idt=3&amp;shv=r20230518&amp;mjsv=m202305170101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D625af8b29780a746-22663421cee000ee%3AT%3D1684157632%3ART%3D1684849507%3AS%3DALNI_MYkkIJVksjuc9FC31F6P3zJq2105g&amp;gpic=UID%3D00000c099afbea2a%3AT%3D1684767416%3ART%3D1684914932%3AS%3DALNI_MYnKGKyHa9lzU2xHFhzw5vQhiXt3w&amp;prev_fmts=0x0%2C300x600&amp;nras=1&amp;correlator=6926972454293&amp;frm=20&amp;pv=1&amp;ga_vid=1039515607.1684157627&amp;ga_sid=1684914926&amp;ga_hid=2066675830&amp;ga_fc=1&amp;ga_cid=833191366.1684585660&amp;u_tz=420&amp;u_his=9&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=185&amp;ady=8847&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=7526&amp;eid=44759875%2C44759926%2C44759842%2C31074688%2C44782468%2C44788441%2C44792646&amp;oid=2&amp;psts=ABHeCvgGs2ZK3ofipb0JM3fVZm9XD4a-uGIhs91j21TqH0ET_muXR7OJQqtX04z3WvMJs-KTJL0Yw3S5aM2BlkfiaaW5rw&amp;pvsid=2199305573338336&amp;tmod=27859043&amp;uas=0&amp;nvt=2&amp;ref=https%3A%2F%2Fvietnamnet.vn%2F&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7CeEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=4&amp;uci=a!4&amp;btvi=1&amp;fsb=1&amp;xpc=F9qHYTfe08&amp;p=https%3A//vietnamnet.vn&amp;dtd=M" data-google-container-id="a!4" data-google-query-id="CN2x_sDTjf8CFRo0KgodxNwOiw" data-load-complete="true"></iframe>
   </div> 
      <button onclick="topFunction()" id="myBtn" title="lên header"><i class="fa fa-angle-up" aria-hidden="true" style='font-size:48px;color:black'></i></button>
    <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>   
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
