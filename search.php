<?php 
session_start();
error_reporting(0);
include('includes/config.php');

    ?>

<!DOCTYPE html>
<html lang="vi">

  <head>

  <link rel="shortcut icon" href="favicon.ico" type="image/png">
        <link rel="apple-touch-icon" href="favicon.ico">
        <meta name="description" content="VietNamNews">  
        <meta name="keywords" content="magazine, News, trending, media">
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

    <title>VietNamNews | Trang tìm kiếm</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/modern-business.css" rel="stylesheet"> -->

    <style>
      .row{
        display: flex;
        flex-wrap: nowrap !important;
      }
    </style>
  </head>

  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php 
        if($_POST['searchtitle']!=''){
$st=$_SESSION['searchtitle']=$_POST['searchtitle'];
}
$st;
             




     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.PostTitle like '%$st%' and tblposts.Is_Active=1 LIMIT $offset, $no_of_records_per_page");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "Không bản ghi nào được tìm thấy";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>

          <div class="card mb-4">
      
            <div class="card-body">
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
                  <h4 class="card-title"><?php echo htmlentities($row['posttitle']);?></h4>
              </a>
            </div>
            <div class="card-footer text-muted">
              Được đăng vào lúc <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>

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
<?php } ?>
       

      

          <!-- Pagination -->

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
   
          <div class="banner">
            <iframe id="google_decrypt_frame_2007575913" title="Advertisement" scrolling="no" frameborder="0" marginwidth="0" marginheight="0" width="970" height="250" src="https://googleads.g.doubleclick.net/pagead/adfetch?adk=2054616889&amp;adsafe=medium&amp;client=ca-pub-3028258428956246&amp;format=970x250_as&amp;ip=116.101.81.0&amp;output=html&amp;unviewed_position_start=1&amp;url=https://vnexpress.net/kinh-doanh&amp;sub_client=bidder-540839264&amp;aceid=MA0AHwAOD7QAIRi0ACJqNAHEgzQB1IM0AZKHNAEXiTQBmok0AU6KNAGNijQB2Io0AeSKNAE4izQBPIs0AVKLNAFeizQBYYs0AWiLNAFrizQBdos0AXmLNAF-izQBf4s0AYCLNAGBizQBgos0AYmLNAGVizQBmYs0AZqLNAGzizQBtIs0AbiLNAG5izQBvYs0AcGLNAHDizQBS3NBAVNzQQFYHlwCzx5cAjAfXALgH1wC5x9cAvMfXAIv-4gCTvyIAnD8iAJS_YgCJ0KqAihCqgIpQqoCFUeqArhlqgKUaqoCX5uqAoCbqgKBm6oCgpuqAs6gqgKiqKoC5KyqAriwqgKg5aoCEu6qAtfxqgJ08qoC9PWqAkD4qgIl-6oCQfuqAoEDqwJRC6sCchKrAoYYqwJcIasChCerAlQoqwL7K6sCsy6rApwwqwKLMqsCKTOrAkQzqwJGNasC1DarAjE3qwLdN6sCJTqrAik6qwItOqsClzurAg08qwIjPKsC8j2rAk0-qwJcPqsCJT-rAqhBqwL6QasCMkSrAlpEqwK0RKsCwUirAi1JqwLhSasCbEqrAkdMqwKrTKsCYE6rArhOqwLAT6sC9FCrAgJRqwIKUasCEFGrAjxSqwJLU6sCaVWrAkNYqwJSWKsCalurAiBcqwI3XasCoV-rAsxgqwLlYqsCGWOrAhJkqwIkZqsCe2arAn9mqwKNZqsCi2irAq5pqwK8aasC52mrAuVqqwLbbKsCf22rApluqwKybqsC426rAnZvqwJAcKsCYXGrAnRxqwLacasC7XGrAkRyqwJKcqsCtnKrAhtzqwJvc6sCw3OrAkd0qwL8dasCqXarAjN3qwJ8d6sCmXerArJ3qwLqd6sCBXirAnN4qwJCeqsC-3qrAuJ7qwLpe6sC-nurAmbtBQNCssUFgwf5CCoN_QgvyfsSV8r7EnDM-xK21vsSSgr8ErUK_BJVD_wScRD8ErwR_BLIEfwSBhL8EscS_BI3E_wSeRP8Ep8T_BKdW9AT91ZrGlsAkinXzrUu&amp;awbid_c=AKAmf-DYKfegXuqw44Zm-FV-g11HPSokFlBqd5J8_CpNvIw3dBWCclCSaMvjIYuPVXwe4e4miS9KSGCa_qVGCFzk3Ye3Ru5_OfRf_ydwDp3w0eCP-QppUJA4rGS7j5LTd3dlj4bsIJAoXgmpAQxu_dkEjzkZ5hl1E4SFMUD0_detcT97cFd9TQiJioWobOLhIKtMUPZl7ZcUHXTkxLkv-tm2lIC-hrY4x8uCwsRJmXqH74bX2WLEmTBcMotWeky57P7QopBrNwXSmdFcoN40PO2WJMS50_oDAiTdEsZ0ZRILT_IVC3AeC_j9m7NMquRJ3rS0hOOMul9wY3dtCxmoccOvtQkeFAzzzwLksj8dnYkvLhB3xmAnrOrJiKGY4DmoxXr2nS4YS10gPpY7357alck9ClA2hb74obiHTgyU1Q_MpdkyxE8K80ZlNTqqHdE1f7UF6g8S0vDDyp9_kUPDVKHb6o3NaZhq3hDPM8_phG2xeAhswt334066LzOE33_LlaZfx9cMof6V9vm-VNFmzVNHGXLTxX1R_Q&amp;awbid_d=AKAmf-B9VPKpQA61GZkXFOG0U-yEaghGG7JwXopLFOQoRF5UpM0InQz-lF_DMUnfEPXXuoGj1P-AtqPI1zYl_MXMwr93BqioVK8MD8Y3aASNpTTsC-Up6-ATN7WzQP2n4QRWXP0LSYJSFP0vRKlMOt9tqEfAFX4XeVkRN3s9OGF6wnh-Y1ukt0iAuwXVBhgn7C3emvIPGtq85ovngWR1SvUPtyK8jDVWRWrF5MLQKt8iJRjYD4fgnGzJA2zEGPvDIwxQfeDF0-onIEc52djxvVhiLpT9saWo4xoRE4-W5MWSnmxG34gB4V_nqiqQaHik3pkRLgzyNlR51XyhilZcJ9YGPwDaVM_8X6XSML5OMKyStlSeQP2hPYZwgyKnDiUt5UKwxZu_xIT1Jw8Kth9S6bairCTCeLNrARpzQCHpu6g8FezCaL0iNTng0-sxWd794EyML9hmByFAup6PP2DBv-iYj9UF-qi2jSerqttX8jruYDNw0dKIYrQHqJ7L6HpEUofa6lJVexC-qyLk1J8XDi86DTMF_zmSMaEm0gStAXf8gp4dVvl50rqsi_u4GSLAXj5VYjaxTDcMvwR6jGMaGAuO5H_Ox0n0zE6ud__dCfu926HiSmD7AJCfx8Zb8v0CHEL91ixxHJ40Iz_tq2cgbVzYWq6e-GAv_6mTOOZ0eCwAEUoKDnsBTgqZ2evuCO1cPkqdWzdIBnFa_tWFbAx__071kpKUHlCkHcRO0nxs0Ml9FIldwNRQmQvKFK8fEAyN6K0YBa_gVXLSdOovmqWSawd49qc2ZgyKk7hhoUT_JvNVpQOoUyHlkzEbTWfniL07qFymS5svdaBN7UqU6SCkm1yua8p6mDrBYRRZs0PaUrN6cDX8jDalm38ixCTmjmQcMb0CQDREt7ogCbRY0yRbl2XihPyqQNvCqhSsJwYn9EmrylbswEN1rELSxXKZKNpFKGH9m_1touXrjXwJUFFk8YJ4sS7a2zf6UmZg7QUXHg8Y_GV7M3IuuMmzWAvJpb_y4-qA33JD1W1am5ZqA2aydLGhNmdNk6KYvmjFYigad7wkoPx6BpbP4X4ZQGOuy5i_w_dh5_w0rnnrRMpARsn9ZakE-F-uZJl8vIocfTX6U1zfdiFixuMWwEJHHvqlrSbNuaimnC9CCnPiWr3KnhaqpptajfIwGe2br_0sIYkt3LV0TuAoKoYAPmbSWObmaus698kb-YwvoXxvy5-Had4VVzFE5t9mfEcUq27szXOBj_lkBufd8pQ1OayMIjz-w80e5xRZOf4Yn3Bd6eL6qDOBasL9N4ISTdA6Ok5ZPZEjqk1sRYgRpbVzbwAhZHSq1chm3zRQjoeDZ62qFhlC8D45DhGOGWQFkz86HdMduAbevpVOBX5dEn_xG3zlOKwGEZweEKHwjQV7gQd-V_8sJYHAri69xuebZdeywq8tYNJBy3bzCsbLH2CiRpaEDOnbSvFInl1sdz8RymIgaEGqbDcdgf55RO17n5S3Ef6NuccAX3NmYa9INGG8eh1XieQq5sRvo5J3isvQHdGmMReVxhonLucMHvvJJqw2gCwaBX13btaS9v-z2YHVWDXF8mYcjBIIhzC8R8yJWRYCHkIDy9RP5hq5ynpkNeFCHHo4fPW6T7y2VWv1GayITfTT6b8TBsr5-9QUTBWZDREEODA9IFafNZqsJnRj1i1FgYldT1rexrtuFLl6xzOngkSbAX25zFtPKPRgG-GIOld9nulVTpO1_doNTA1Za_n5tFAsdk6J5fjiKE9ghtLEeiVX2bqGNr-lmRcthwmT0EvNaLDoYWbV_nkEzEL1_Q9r3NrQ9iHlR4n0M_8Yr7RMO1MBVi4HI5pmRSkd6pmmDX5wA6L3BFuTb7rPt2zlz1WB3kIDO31KZ4zxsfGHWIEVrPK7YZl6emcWEANcxC73H_uZ&amp;cid=CAQSQABygQiDW9wA6C-Mdnj_zS6FMSwY0_9nUyPJIIO7tAoEtXS_P_88Gqtc-kDZigVHlKwxPFtFHPjN7TxpYPsB3HwYAQ&amp;a_cid=AKAmf-BOTqueME0Ox0hwS9OaLr8lOL4oPyB5tk5HRomXLMovki2fvKJQ2YDhF7IQvsX635ctKTrUYmRTMMc47Lkmy4134slE3Q&amp;exk=2007575913&amp;rfl=https%3A%2F%2Fvnexpress.net%2F&amp;a_pr=9:AAABiE4SDuweb03wIRxnv5lr313HtsfLi0QSjA"></iframe>
          </div>
    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
