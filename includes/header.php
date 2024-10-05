<!-- 
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top bg-color-main" style="background-color:#1d2330">

      <div class="container">
        
      <h2 class="brand"><a href="index.php"> VietNam<span style="color: #ff591cbb">N</span>ews </a></h2>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav ml-auto">
          </li>
                 <li class="nav-item">
              <a class="nav-link" href="index.php"> <i class="fa fa-home"></i> Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="category.php?catid=2"><i class="fa fa-bullhorn"></i> Chính trị</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="category.php?catid=3"><i class="fa fa-sport"></i> Thể thao</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="category.php?catid=7"><i class="fa fa-money"></i> Kinh doanh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="category.php?catid=5"> <i class="fa fa-entertain"></i> Giải trí</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="category.php?catid=8"><i class="fa fa-bitcoin"></i> 	Crypto</a>
           </li>
             <li class="nav-item  w-f-u">
              <a class="nav-link" href="Write-for-us.php" > <i class="fa fa-book"></i> Phản hồi</a>
            </li>
  
  
          </ul>
        </div>
      </div>
    </nav> -->

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
  /* h4 {
      text-align: center;
      font-size: 60px;
      margin-top: 0px;
    } */
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
  /* width: 1100px; */
}
/* .row{
  margin: 0 100px;
} */
.Time-Weather{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin: 0 100px;
  border-bottom: 1px solid #e5e5e5;
  padding-top: 10px;
}
</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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
        <a href="index.php" ><li class="nav" id="c-color"> <i class="fas fa-home"></i></li></a>
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
     <iframe id="aswift_0" name="aswift_0" style="width:980px;height:120px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="980" height="120" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-0771410550134874&amp;output=html&amp;h=120&amp;slotname=1712503937&amp;adk=1401391392&amp;adf=2090548247&amp;pi=t.ma~as.1712503937&amp;w=980&amp;lmt=1684939892&amp;format=980x120&amp;url=https%3A%2F%2Fvietnamnet.vn%2Fthe-gioi&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTEzLjAuNTY3Mi4xMjciLFtdLDAsbnVsbCwiNjQiLFtbIkdvb2dsZSBDaHJvbWUiLCIxMTMuMC41NjcyLjEyNyJdLFsiQ2hyb21pdW0iLCIxMTMuMC41NjcyLjEyNyJdLFsiTm90LUEuQnJhbmQiLCIyNC4wLjAuMCJdXSwwXQ..&amp;dt=1684939892450&amp;bpp=7&amp;bdt=2004&amp;idt=78&amp;shv=r20230518&amp;mjsv=m202305170101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D625af8b29780a746-22663421cee000ee%3AT%3D1684157632%3ART%3D1684939627%3AS%3DALNI_MYkkIJVksjuc9FC31F6P3zJq2105g&amp;gpic=UID%3D00000c099afbea2a%3AT%3D1684767416%3ART%3D1684939627%3AS%3DALNI_MYnKGKyHa9lzU2xHFhzw5vQhiXt3w&amp;correlator=1011350849724&amp;frm=20&amp;pv=2&amp;ga_vid=1039515607.1684157627&amp;ga_sid=1684929763&amp;ga_hid=1163457743&amp;ga_fc=1&amp;ga_cid=1566057120.1684157627&amp;u_tz=420&amp;u_his=12&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=185&amp;ady=129&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44759876%2C44759927%2C44759842%2C44788441%2C44789779&amp;oid=2&amp;pvsid=1762442065134677&amp;tmod=1908349215&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fvietnamnet.vn%2Fgiai-tri&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;xpc=tPgTbkOnbK&amp;p=https%3A//vietnamnet.vn&amp;dtd=101" data-google-container-id="a!1" data-google-query-id="CMagl56ajv8CFQFXDwIdnLkKRQ" data-ex-slot-check="iframe_ex_slot_1" data-load-complete="true"></iframe>
    </div>