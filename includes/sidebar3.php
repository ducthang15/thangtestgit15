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

         <div class="banner" style="position: relative; width: 728px; height: 90px; box-sizing: content-box;"><iframe data-creative-load-listener="" id="200_276_express_html_inpage_0.if" src="https://s0.2mdn.net/sadbundle/8680802742148152172/728x90/index.html" width="728" height="90" frameborder="0" scrolling="no" allowfullscreen="true" style="width: 728px; height: 90px;"></iframe></div>
          

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
