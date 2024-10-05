<?php 
session_start();
include('includes/config.php');

    ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <title>VietNamNews</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="favicon.ico" type="image/png">
        <link rel="apple-touch-icon" href="favicon.ico">
        <meta name="description" content="">  
        <meta name="keywords" content=" ">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta property="og:url" content="">
        <meta property="og:image" content="#">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="theme-color" content="#ffffff">
        <meta name="msapplication-navbutton-color" content="#ffffff">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
         <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
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
    /* .banner{
        display: none !important;
    } */
   }
   @media screen and (width: 912px){
     .banner{
        display: none !important;
     }
   }
   @media screen and (width: 1024px){
     .banner{
        display: none !important;
     }
   }
   @media screen and (min-width: 912px) and (max-width: 1280px) {
      .side820{
        display: none !important;
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
    /* .header-box{
      height: 248px !important;
    } */
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
    flex: 10%;
    background-color: #fff;
    padding: 20px;
    }
    /* Main column */
    .main {   
      flex: 12%;
      background-color: white;
      padding: 20px;
    }
    
    /*  image */
    .imgprops {
      width: 100%;
      border-right: 1px solid #ced4da;
      padding-right: 20px;
    }
    @media screen and (max-width: 800px) {
      .side{
      flex: 50%;
      }
      .main{
        flex: 50%;
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
      margin-left: 70px !important;
    }
    /* .header-box{
      height: 248px !important;
    } */
    }
  .top-nav{
    margin-left: auto;
    margin-right: auto;
    
  }
  .nav{
    width: auto;
    height: 40px;
    border: none;
    line-height: 20px;
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

  #c-color{
        text-transform: uppercase;
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
     background-color: #f5f5f5 !important;
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
  width: 1100px;
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
<!-- <a class="weatherwidget-io" href="https://forecast7.com/en/14d06108d28/vietnam/" data-label_1="VIETNAM" data-label_2="Hanoi" data-font="Times New Roman" data-theme="weather_one" >VIETNAM Hanoi</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<hr> -->

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
    <div class="banner"><iframe width="980" height="90" src="https://img.vietnamnetad.vn/html/2023/5/980x90_agribank%209.5/980x90_agribank%209.5/980x90_agribank%209.5.html?clickVNN=https://log.vads.net.vn/ad/click-tracking?action_name=PwXOVpZfr1OBTrui_@$_s69iBzUKrsNo_@$_hu5WdPDp8jvsJG_@$_4QOZ_@$_xkcB_@$_DgzNCtZVi5@AbcxJTg74U8YReVRS_@$_v2lWcN64h7_@$_7m4jLXeCjvq@KHXbohCyMu2N@dpGVUwKVYIMn2Y@@qJDDEbLZ4Q@4Ufgag7m0J6ElzsdwuoxSY@6QHSq@msLv4@NupnecrnwYnl2VDSO9yQKF25Pei8YE43KpRqarqAHbCI68NHqZr7mBXt66OnDr5jMq@W4MBahcMEdtdCzdmvRPkxmBlTjeBavEVc7gwz4vaT8xbzewY1fI5jGqaimVKoT1tp@FsuqW6W0KsCzdIXpSh3cVR9ZlRQ==" marginwidth="0" allowtransparency="true" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe></div>
  <!-- start row 1 -->
      <div class="row">
        <div class="side">
          <h5 class="categorytitlediff" > <a href="category.php?catid=6" class="News-heading">TIN NÓNG</a></h5>
          <div class="imgprops" style="height:auto;">
  

                      <!-- Blog Post -->   
   <?php 
         if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
      } else {
          $pageno = 1;
      }
      $no_of_records_per_page = 4;
      $offset = ($pageno-1) * $no_of_records_per_page;


      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
      $result = mysqli_query($con,$total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=6 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
     
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" >
                 <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>


                </div>          
                  
</div>
<!-- side -======================================- -->


<div class="side">
          <h5 class="categorytitlediff" > <a href="category.php?catid=7" class="News-heading">KINH DOANH</a></h5>
          <div class="imgprops" style="height:auto;">
  

                      <!-- Blog Post -->   
   <?php 
         if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
      } else {
          $pageno = 1;
      }
      $no_of_records_per_page = 4;
      $offset = ($pageno-1) * $no_of_records_per_page;


      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
      $result = mysqli_query($con,$total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=7 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
     
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" >
                 <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>


    </div>                  
</div>

<!-- Main -=======================================- -->
                <div class="main">
              
                  <div class="imgprops" style="height:auto;">
                
      <!-- Blog Post -->
   <?php 
   
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 4;
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

<span style="float:right; padding-top: 10px;" ><i>Danh mục : </i> <a style="color:#113277" href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </span>
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
                 $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? ' ' : '');
               } else {
                 unset($string[$k]);
               }
               
             }
             if(!$full) $string = array_slice($string, 0, 1);
             return $string ? implode(', ', $string) . ' trước' : 'bây giờ';
           }
           ?>

                </div>
                 
                 </div>
                <div class="side side820">
                 
                  <div class="imgprops" style="height:auto;">
                 <!-- Sidebar Widgets Column -->
<?php include('includes/sidebar.php');?>
                </div>
    </div>    
</div>
<!-- end row 1 -->

<div class="banner">
  <iframe width="1100" height="250" src="https://img.vietnamnetad.vn/html/2023/5/1100x250-mobi/1100x250-mobi/1100x250-Mobi.html?clickVNN=https://log.vads.net.vn/ad/click-tracking?action_name=qApCt33BPSS6jmmdFPW4G3ooKbW3vJ3uUocNuMBre3qUT21G5U3LFWI7vS1PTe2bDTeJhCTk3LJZS_@$_IwJGjPAq8GHSX9CHyJ1vOLIFyy8j@zJu0_@$_pw@UlO8bViDOHu08mtdmyPG@jOHZ4WySfhyGRLemOuSizz5sDHeByj_@$_70Z@HNRDXR26Y_@$_2qIrDOXAXJc0m48H6aXB4pCfGDLR2DzmAmVKzGNnNCT3lZPpXhouRSXOxRYl5l3GXHjFv6nAaJT_@$_fl07KUd142oS8cPA_@$_FwKLLuwtPJUe6@tcSs_@$_K7tP2@LOc7CHBwFJvh5ycYYr6oX" marginwidth="0" allowtransparency="true" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
</div>

<!-- start row 2 -->
<div class="row">
        <div class="side">



                 <h3><a href="category.php?catid=3" class="News-heading">THỂ THAO</a></h3>
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


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=3 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
               <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>

                </div>
                <h2><a href="category.php?catid=5" class="News-heading">GIẢI TRÍ</a></h2>
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


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=5 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
               <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>
                </div><br>        
        
                <h2><a href="category.php?catid=13" class="News-heading">GIÁO DỤC</a></h2>
                  <div class="imgprops" style="height:auto;">
                 <!-- Blog Post -->   
   <?php 
         if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
      } else {
          $pageno = 1;
      }
      $no_of_records_per_page = 2;
      $offset = ($pageno-1) * $no_of_records_per_page;


      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
      $result = mysqli_query($con,$total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=13 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
               <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>
                </div><br> 
                  
</div>
<!-- side -======================================- -->


<div class="side">



                 <h3><a href="category.php?catid=9" class="News-heading">SỨC KHỎE</a></h3>
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


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=9 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
               <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>

                </div>
                <h2><a href="category.php?catid=8" class="News-heading">CRYPTO</a></h2>
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


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=8 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
               <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>
                </div><br>   
                
 <h2><a href="category.php?catid=17" class="News-heading">CÔNG NGHỆ</a></h2>
                  <div class="imgprops" style="height:auto;">
                 <!-- Blog Post -->   
   <?php 
         if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
      } else {
          $pageno = 1;
      }
      $no_of_records_per_page = 2;
      $offset = ($pageno-1) * $no_of_records_per_page;


      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
      $result = mysqli_query($con,$total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=17 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
               <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>
                </div><br>                 
</div>

<!-- side -======================================- -->


<div class="side">



                 <h3><a href="category.php?catid=10" class="News-heading">THẾ GIỚI</a></h3>
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


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=10 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
               <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>

                </div>
                <h2><a href="category.php?catid=16" class="News-heading">PHONG CÁCH</a></h2>
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


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=16 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
               <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>
                </div><br>
                
 <h2><a href="category.php?catid=18" class="News-heading">PHÁP LUẬT</a></h2>
                  <div class="imgprops" style="height:auto;">
                 <!-- Blog Post -->   
   <?php 
         if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
      } else {
          $pageno = 1;
      }
      $no_of_records_per_page = 2;
      $offset = ($pageno-1) * $no_of_records_per_page;


      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
      $result = mysqli_query($con,$total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=18 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;">
<svg viewBox="0 0 512 512" class="svg-clock" ><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> <?php echo time_elapsed_string($row['postingdate']);?>      

</h6>         
<div class="card mb-4">
<img class="postimgtopt" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
          <div class="card-body" >
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
               <h2 class="card-title-font"><?php echo htmlentities($row['posttitle']);?></h2>
            </a>
          </div>
        
        </div>
<?php } ?>
                </div><br> 
</div>


    <div class="side side820">
                 
                  <div class="imgprops" style="height:auto;">
                 <!-- Sidebar Widgets Column -->
<?php include('includes/sidebar2.php');?>
                </div>
    </div>    
</div>
<!-- end row 2 -->


 <!-- Pagination -->
 <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">〈〈 </a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">〈 </a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link"> 〉</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link"> 〉〉</a></li>
    </ul>
 
<div class="banner">
  <div id="dta-100007-container" class="dta-unit" data-partner="adsense" data-filled="true" style="padding: 20px; margin: 44px auto; opacity: 1;"><div class="tpm_attribution"><a target="_blank" href="https://dtadnetwork.com?utm_source=dantri.com.vn"><span><em>Quảng cáo của</em> <strong>DTads</strong></span></a></div><ins class="adsbygoogle" data-ad-client="ca-pub-6148665912136120" data-ad-slot="3266127283" data-full-width-responsive="true" style="display: inline-block; min-width: 728px; min-height: 90px; max-width: 980px; max-height: 250px; width: 728px; height: 90px;" data-adsbygoogle-status="done" data-ad-status="filled"><div id="aswift_4_host" style="border: none; height: 90px; width: 728px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;" tabindex="0" title="Advertisement" aria-label="Advertisement"><iframe id="aswift_4" name="aswift_4" style="left:0;position:absolute;top:0;border:0;width:728px;height:90px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="728" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-6148665912136120&amp;output=html&amp;h=90&amp;slotname=3266127283&amp;adk=3282376471&amp;adf=721011828&amp;pi=t.ma~as.3266127283&amp;w=728&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1684749432&amp;rafmt=12&amp;format=728x90&amp;url=https%3A%2F%2Fdantri.com.vn%2F&amp;fwr=0&amp;fwrattr=true&amp;rh=90&amp;rw=728&amp;sfro=1&amp;wgl=1&amp;adsid=ChAI8KWsowYQ5POFq4rivKNbEjkAETf-ef0V022WBdmDXrV61oT0t9UHdUtteMuRGQM-oB8w7TBqUELsQIeXax1HPoVoyVNzUmEObP0&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTEzLjAuNTY3Mi4xMjciLFtdLDAsbnVsbCwiNjQiLFtbIkdvb2dsZSBDaHJvbWUiLCIxMTMuMC41NjcyLjEyNyJdLFsiQ2hyb21pdW0iLCIxMTMuMC41NjcyLjEyNyJdLFsiTm90LUEuQnJhbmQiLCIyNC4wLjAuMCJdXSwwXQ..&amp;dt=1684749423452&amp;bpp=2&amp;bdt=2583&amp;idt=1469&amp;shv=r20230517&amp;mjsv=m202305160101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D88fc40ea10de3378-22ae9ad037e100cf%3AT%3D1684585613%3ART%3D1684585613%3AS%3DALNI_MaixLOnCUdHjhppb5PT4p2ZFXqLVw&amp;gpic=UID%3D00000c08e72854ab%3AT%3D1684585613%3ART%3D1684749423%3AS%3DALNI_Mak4zC59cSsZsybkZiii9fQ8bZ4Kg&amp;prev_fmts=0x0%2C480x250%2C1088x250%2C1088x250&amp;nras=1&amp;correlator=5336847577879&amp;frm=20&amp;pv=1&amp;ga_vid=142490716.1684585612&amp;ga_sid=1684749423&amp;ga_hid=1128009591&amp;ga_fc=1&amp;u_tz=420&amp;u_his=3&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=311&amp;ady=12276&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=11424&amp;eid=44759876%2C44759927%2C44759837%2C44788441%2C44790154%2C44769662&amp;oid=2&amp;pvsid=3961411445129160&amp;tmod=179394465&amp;uas=1&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7CoeEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=1152&amp;bc=31&amp;jar=2023-05-22-09&amp;ifi=13&amp;uci=a!d&amp;btvi=4&amp;fsb=1&amp;xpc=z60feypb6Q&amp;p=https%3A//dantri.com.vn&amp;dtd=8905" data-google-container-id="a!d" data-google-query-id="CJn919vUiP8CFReelgodDQoB-g" data-load-complete="true"></iframe></div></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
  </div>
</div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up" aria-hidden="true" style='font-size:48px;color:black'></i></button>
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

              <!-- <footer> -->
                <!-- Footer -->
      <?php include('includes/footer.php');?>

               <!-- </footer> -->
               <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>