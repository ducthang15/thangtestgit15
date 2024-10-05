 <div class="col-md-14" >

          <!-- Search Widget -->
          <!-- <div class="card mb-4">
            <h5 class="card-header">Tìm kiếm </h5>
            <div class="card-body">
                   <form name="search" action="search.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" placeholder="Tìm kiếm..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </form>
              </div>
            </div>
          </div> -->

          <!-- Categories Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Danh mục</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
while($row=mysqli_fetch_array($query))
{
?>

                    <li>
                      <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
<?php } ?>
                  </ul>
                </div>
       
              </div>
            </div>
          </div> -->

          <div class="banner1"><iframe src="https://static.eclick.vn/html5/vs_001/ads/e/ebox/2023/04/27/00000/300x500/dfp/pc/std/fixed/index.html?link=https%3A%2F%2Fadclick.g.doubleclick.net%2Fpcs%2Fclick%3Fxai%3DAKAOjsuMkEOqA4iwUI-wsk2PNtuE4Pa9xS7yvbiNomOwOTMIw_ytOWDEwtlsL8IlliWBF3XICwlS3iKON6azWkhM5nrlsIdBOfWSotx6Rr6XJsd7xBtxt8IW0R2mO1fK1-lZeRTz5mXH3dPQbtlWI9ZIFazdhGEwXAmNlRCiBnBboP0OR0uE3izILX0UYN9S31ivqizOYcAmReFDXztTS_eq7OdwfZuiGSVu_ws7QdhMUy8aCxMu5NEP-WWqmKX0MEzrjzOpuH-6Z4gQFfnt-QtMmvS_O1KOGdfDIotn_3w6De9znaidP8237Oqp4ZIIlcNOcShfkqfPFu6cG73FKI1pFw%26sai%3DAMfl-YS1RImDbRQYfnjQDrda9v8ctCGIrITeTo4qz44VUmuJvzhXZZBn7uCVBFYB5lmYyN8YWqHJhKiCrQ8brd4_Ia1Q3GTZO8gTINz_KKrNci9YEx_Mli4Ba9UJ3hWlAx_WLJjKWsK2%26sig%3DCg0ArKJSzP9Cq8vA8a17EAE%26fbs_aeid%3D%5Bgw_fbsaeid%5D%26urlfix%3D1%26adurl%3Dhttps%253A%252F%252Febox.vnexpress.net%252F%253Futm_source%253DVnExpress%2526utm_medium%253DWeb%2526utm_campaign%253Dflashsale_0105_300x500%2526utm_content%253DeBox&amp;otherlink=&amp;campaign_name=eBox%20-%20Defaut%20bo%202&amp;index_brand=PB1001.167_Gi%C3%A1o%20d%E1%BB%A5c&amp;index_industrial=P1001_Gi%C3%A1o%20d%E1%BB%A5c%20-%20du%20h%E1%BB%8Dc" frameborder="0" scrolling="no" style="display: block; margin: 0px; padding: 0px; border-radius: 0px; border: 0px; min-width: 0px; min-height: 0px; background-image: none; background-color: transparent; width: 300px; height: 500px; max-width: 300px; max-height: 500px;"></iframe></div>
          

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Tin gần đây</h5>
            <div class="card-body">
                      <ul class="mb-0">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc limit 11");
while ($row=mysqli_fetch_array($query)) {

?>

  <li >
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>
        </div>
