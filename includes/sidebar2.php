          <!-- Banner -->
<style>
      @media screen and (max-width: 820px) {
      }
</style>

  <div class="banner1">
  <iframe src="https://cdnstoremedia.com/adt/banners/nam2015/4043/min_html5/2023-05-06/thuongphamthuy/300x600/300x600/300x600.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttps%253A%252F%252Fvietnamnet.vn%252F%26rid%3Db5cabbef-64e4-44b4-932d-6201f8704496141-646b276c%26sspb%3D14700%26lsn%3D1684744043734%26ce%3D1%26lc%3D21%26cr%3D1684157630%26ui%3D8884157630458003136%26uuid%3D%26profileID%3D%26bi%3D0%26cmpg%3D80412%26items%3D340560%26zid%3D518140%26pr%3D34145515901%26cid%3D-1%26tp%3D11%26tpn%3D4%26alg%3D1102%26dg%3D566880bed79dfde87aaa103bc7bbf60c%26xtr%3DeyJhc2lkIjoxMTk4N30%253D%26sspz%3D2025970%26adc_cpa%3D1%26cov%3D1%26re%3Dhttps%253A%252F%252Fcaohoc.fpt.edu.vn%252F%253Futm_source%253DAdmicro_AdX%2526utm_campaign%253DAdX%2526utm_content%253Dvietnamnet.vn&amp;temp=0&amp;loc=21&amp;weath=&amp;autoplay=0&amp;admid=adnzone_518140_0_340560&amp;vast=https%3A%2F%2Fsspapi.admicro.vn%2Fssp_request%2Fvideo%3Fu%3Dvietnamnet.vn%252F%26z%3D518140%26p%3D1%26w%3D650%26h%3D300%26%26pid%3D%26tags%3D5%26adstype%3D%26vtype%3D8%26vid%3D%26bannerid%3D340560" width="300" height="600" frameborder="0" scrolling="no"></iframe>
  </div>
  
  
  <h2><a href="category.php?catid=2" class="News-heading">CHÍNH TRỊ</a></h2>
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
  
  
  $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=2 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
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
  
  
  
                    <h2><a href="category.php?catid=8" class="News-heading">Crypto </a></h2>
                    <h6 style="border-top: 2px solid white; color: grey;  font-family: Arial, sans-serif;"><svg viewBox="0 0 512 512" class="svg-clock"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> bây giờ</h6>
                    <div class="imgprops" style="height:auto;">
                    <div style="height:62px; background-color: #232937; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Arial, sans-serif;"></div></div>
                    <div style="height:433px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 100%;"><div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Bảng giá đồng Crypto</a>&nbsp;</div></div>
                    </div>
