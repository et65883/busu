<!DOCTYPE html>

  <head>
  <?php include '功能列.php'; ?>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
   </head>
   <body>
   <!-- 回到頂端按鈕 start -->
<script>
//<![CDATA[
(function () {
$("body").append("<img id='goTopButton' style='display: none; z-index: 5; cursor: pointer;' title='回到頂端'/>");
var img = "圖片庫/next2.png",
locatioin = 0.9, // 按鈕出現在螢幕的高度
right = 30, // 距離右邊 px 值 
opacity = 0.8, // 透明度
speed = 500, // 捲動速度
$button = $("#goTopButton"),
$body = $(document),
$win = $(window);
$button.attr("src", img);
$button.on({
mouseover: function() {$button.css("opacity", 1);},
mouseout: function() {$button.css("opacity", opacity);},
click: function() {$("html, body").animate({scrollTop: 0}, speed);}
});
window.goTopMove = function () {
var scrollH = $body.scrollTop(),
winH = $win.height(),
css = {"top": winH * locatioin + "px", "position": "fixed", "right": right, "opacity": opacity};
if(scrollH > 20) {
$button.css(css);
$button.fadeIn("slow");
} else {
$button.fadeOut("slow");
}
};
$win.on({
scroll: function() {goTopMove();},
resize: function() {goTopMove();}
});
} )();
//]]>
</script>
<!-- 回到頂端按鈕 end, Design by WFU BLOG -->
   </body>
</html>


   <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="圖片庫/ST1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="圖片庫/trash.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="圖片庫/trash2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--跑數量-->
    <div class="site-section section-counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="mb-5"><img src="圖片庫/垃圾用量圖.jpg" alt="Image" class="img-fluid"></p>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="site-section-heading mb-3 font-secondary text-uppercase"> <span style="font-family:Microsoft JhengHei;">您知道嗎?</span>	</h2>
            <font size="4"><p class="mb-5"><span style="font-family:Microsoft JhengHei;">台灣一年使用塑膠吸管量多達30億根</span></p></font>
   

            <div class="row">
              <div class="col-lg-6">
                <div class="counter">
                  <font size="4"> <span class="mb-5"><span style="font-family:Microsoft JhengHei;">一年使用塑膠袋達</span></font>
				  </p>
				  <br>
                  <span class="number" data-number="165"></span><h2 class="quality"><span style="font-family:Microsoft JhengHei;">億個</span></h2>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="counter">
                  <font size="4"> <span class="mp-5"><span style="font-family:Microsoft JhengHei;">平均每人每年</p>使用的塑膠袋量為</span></font>
				  <br>
                  <span class="number" data-number="710"></span><h2 class="quality"><span style="font-family:Microsoft JhengHei;">個</span></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--關於我們-->
    
  <div class="site-half">
    <div class="img-bg-1" style="background-image: url('圖片庫/海龜2.jpg');" data-aos="fade"></div>
    <div class="container">
      <div class="row no-gutters align-items-stretch">
        <div class="col-lg-5 ml-lg-auto py-5">
          <span class="caption d-block mb-2 font-secondary font-weight-bold">about</span>
          <h2 class="site-section-heading text-uppercase font-secondary mb-5"><span style="font-family:Microsoft JhengHei;">不塑!不塑!</span></h2>
          <font size="3"> <p><span style="font-family:Microsoft JhengHei;">「用大家的力量，讓減塑變得更簡單。」</span></p></font>

           <font size="3"><p><span style="font-family:Microsoft JhengHei;">每個人都知道應該要環保，只是不知道該如何在生活中實踐。希望能透過這個橋樑，幫助大家減塑方便且落實。</span></p>  </font>
		   <font size="3"><p><span style="font-family:Microsoft JhengHei;">減少一次性塑膠垃圾。</span></p>  </font>
		   
		
		</div>
      </div>
    </div>
  </div>

  <div class="site-half block">
    <div class="img-bg-1 right" style="background-image: url('圖片庫/吸管.jpg');" data-aos="fade"></div>
    <div class="container">
      <div class="row no-gutters align-items-stretch">
        <div class="col-lg-5 mr-lg-auto py-5">
          <span class="caption d-block mb-2 font-secondary font-weight-bold">about</span>
          <h2 class="site-section-heading text-uppercase font-secondary mb-5"><span style="font-family:Microsoft JhengHei;">限塑計畫</span></h2>
          <p><span style="font-family:Microsoft JhengHei;">「方便」與「隨便」</span></p>
		  <p><span style="font-family:Microsoft JhengHei;">在21世紀，人類生活機能不斷的進步，當人類製作了方便，勢必會帶來一些「隨便」</span></p>
          <p><span style="font-family:Microsoft JhengHei;">在這人手一機的時代，我們製作了LINE聊天機器人與網站，這樣的結合，方便大家能夠隨手查詢附近環保商家、提供飲料杯折扣的店家、回收站...等等之類，</span></p>  
		  <p><span style="font-family:Microsoft JhengHei;">雖塑膠製品與我們形影不離，但我們仍然相信，透過這樣的理念與初心，能夠還給地球一個乾淨的樣貌。</span></p>
		</div>
      </div>
    </div>
  </div>
    
<!--最新消息or近期活動-->
  <div class="site-section ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold"></span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary"><span style="font-family:Microsoft JhengHei;">最新消息</span></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">
              <div class="media-image">
          
                <div class="media-image-body">

             <?php
              $xml = simplexml_load_file('https://e-info.org.tw/taxonomy/term/258/all/feed');
              $time=$xml->channel->item[0]->pubDate;

              echo '<a href="'.$xml->channel->item[0]->link.'" target="info"><img src="圖片庫/tr1.jpg" alt="Image" class="img-fluid"></a><br/>';

         
              
              echo '<a href="'.$xml->channel->item[0]->link.'" target="info">'.$xml->channel->item[0]->title.'</a><br/>'; //新聞標題+超連結

           

              echo  substr("'$time'",1,-6); //新聞報導時間


              echo '<br/>';

              echo '<a href="'.$xml->channel->item[0]->link.'" class="btn btn-primary text-white px-4" target="info">閱讀更多</a><br/>'; //閱讀更多超連結


            ?>
                </div>
              </div>
              <div class="media-image">
              <div class="media-image-body">

            <?php
              $xml = simplexml_load_file('https://e-info.org.tw/taxonomy/term/258/all/feed');
              $time=$xml->channel->item[1]->pubDate;

              echo '<a href="'.$xml->channel->item[1]->link.'" target="info"><img src="圖片庫/tr2.jpg" alt="Image" class="img-fluid"></a><br/>';

         
              
              echo '<a href="'.$xml->channel->item[1]->link.'" target="info">'.$xml->channel->item[1]->title.'</a><br/>'; //新聞標題+超連結

           

              echo  substr("'$time'",1,-6); //新聞報導時間


              echo '<br/>';

              echo '<a href="'.$xml->channel->item[1]->link.'" class="btn btn-primary text-white px-4" target="info">閱讀更多</a><br/>'; //閱讀更多超連結


            ?>
                </div>
              </div>
              <div class="media-image">
              <div class="media-image-body">

             <?php
              $xml = simplexml_load_file('https://e-info.org.tw/taxonomy/term/258/all/feed');
              $time=$xml->channel->item[2]->pubDate;

              echo '<a href="'.$xml->channel->item[2]->link.'" target="info"><img src="圖片庫/tr3.jpg" alt="Image" class="img-fluid"></a><br/>';

         
              
              echo '<a href="'.$xml->channel->item[2]->link.'" target="info">'.$xml->channel->item[2]->title.'</a><br/>'; //新聞標題+超連結

           

              echo  substr("'$time'",1,-6); //新聞報導時間


              echo '<br/>';

              echo '<a href="'.$xml->channel->item[2]->link.'" class="btn btn-primary text-white px-4" target="info">閱讀更多</a><br/>'; //閱讀更多超連結


            ?>
                </div>
              </div>
              <div class="media-image">
              <div class="media-image-body">

             <?php
              $xml = simplexml_load_file('https://e-info.org.tw/taxonomy/term/258/all/feed');
              $time=$xml->channel->item[3]->pubDate;

              echo '<a href="'.$xml->channel->item[3]->link.'" target="info"><img src="圖片庫/tr4.jpg" alt="Image" class="img-fluid"></a><br/>';

         
              
              echo '<a href="'.$xml->channel->item[3]->link.'" target="info">'.$xml->channel->item[3]->title.'</a><br/>'; //新聞標題+超連結

           

              echo  substr("'$time'",1,-6); //新聞報導時間


              echo '<br/>';

              echo '<a href="'.$xml->channel->item[3]->link.'" class="btn btn-primary text-white px-4" target="info">閱讀更多</a><br/>'; //閱讀更多超連結


            ?>
                </div>
              </div>
              <div class="media-image">
              <div class="media-image-body">

                  <?php
              $xml = simplexml_load_file('https://e-info.org.tw/taxonomy/term/258/all/feed');
              $time=$xml->channel->item[4]->pubDate;

              echo '<a href="'.$xml->channel->item[4]->link.'" target="info"><img src="圖片庫/tr5.jpg" alt="Image" class="img-fluid"></a><br/>';

         
              
              echo '<a href="'.$xml->channel->item[4]->link.'" target="info">'.$xml->channel->item[4]->title.'</a><br/>'; //新聞標題+超連結

           

              echo  substr("'$time'",1,-6); //新聞報導時間


              echo '<br/>';

              echo '<a href="'.$xml->channel->item[4]->link.'" class="btn btn-primary text-white px-4" target="info">閱讀更多</a><br/>'; //閱讀更多超連結


            ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	
<!--卡片組-->
<div class="site-half ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
         <span class="caption d-block mb-2 font-secondary font-weight-bold"></span> 
            <h2 class="site-section-heading text-uppercase text-center font-secondary"><span style="font-family:Microsoft JhengHei;">外部連結</span></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">
              <div class="media-image">
                <img src="圖片庫/outside/不塑之客3.jpg" alt="" class="img-fluid">
                <div class="media-image-body">
                  <p><a href="https://www.facebook.com/groups/1079506418766157/" class="btn btn-primary text-white px-4"><span style="font-family:Microsoft JhengHei;">點我看更多</span></a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="圖片庫/outside/不塑好物3.jpg" alt="" class="img-fluid">
                <div class="media-image-body">
                  <p><a href="https://www.facebook.com/groups/216282152208777/" class="btn btn-primary text-white px-4">點我看更多</a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="圖片庫/outside/環保集點3.png" alt="" class="img-fluid">
                <div class="media-image-body">
                  <p><a href="https://www.greenpoint.org.tw/GPHome/" class="btn btn-primary text-white px-4">點我看更多</a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="圖片庫/outside/潮減塑3.png" alt="" class="img-fluid">
                <div class="media-image-body">
                  <p><a href="https://www.facebook.com/groups/loveoneearth/" class="btn btn-primary text-white px-4">點我看更多</a></p>
                </div>
              </div>
              <div class="media-image">
                <img src="圖片庫/outside/綠色和平3.png" alt="" class="img-fluid">
                <div class="media-image-body">
                  <p><a href="https://www.greenpeace.org/taiwan/" class="btn btn-primary text-white px-4">點我看更多</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	  
<div class="py-5 bg-primary">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center mb-3 mb-md-0">
            <h2 class="text-uppercase text-white mb-4" data-aos="fade-up">你有找到我們還沒找到的環保商店嗎?</h2>
            <button type="button" class="btn btn-bg-primary font-secondary text-uppercase" data-aos="fade-up" data-aos-delay="100" data-toggle="modal" data-target="#exampleModal"><font size="5.5">和我們說吧!</font></a>
          </div>
        </div>
      </div>
    </div>
	<!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">請完成以下表格</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">選擇類別(EX:飲料店、無痕購物、回收站)</label>
                            <input type="choosetype" name="choosetype" class="form-control" id="exampleInputaddress">
                        </div>
      <div class="form-group">
                            <label for="exampleInputPassword1">商家所在位置(EX:台北市中山區)</label>
                            <input type="address" name="address" class="form-control" id="exampleInputaddress">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">商店名稱</label>
                            <input type="storename" name="storename" class="form-control" id="exampleInputstorename">
                        </div>
         <div class="form-group">
                            <label for="exampleInputPassword1">備註(優惠類型、優惠內容…)</label>
                            <input type="maincontent" name="maincontent" class="form-control" id="exampleInputmaincontent">
                        </div>


                      
  
            
                        <a class="btn btn-outline-success" data-target="#exampleModal" >送出</a>

                    </form>
     
                </div>
    
    

            </div>
        </div>
    </div>
<!--底下-->
<?php include 'footer.php'; ?>



