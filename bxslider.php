<?php
include "header.php";
?>
 <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12">
      <h1 class="text-center">
        Slider BxSlider
      </h1>
    </div>
       <div class="col-lg-12 col-md-12">
         <ul class="bxslider">
           <li><img src="img/Tulips.jpg" alt=""></li>
           <li><img src="img/Lighthouse.jpg" alt=""></li>
           <li><img src="img/Koala.jpg" alt=""></li>
           <li><iframe width="450px" height="340px" src="https://www.youtube.com/embed/zGjGH1RrqJs" frameborder="0" allowfullscreen></iframe></li>
         </ul>
         <div id="bx-pager">
            <a data-slide-index="0" href="">
              <img src="img/Tulips.jpg" width="50px" height="50px" />
            </a>
            <a data-slide-index="1" href="">
              <img src="img/Lighthouse.jpg" width="50px" height="50px" />
            </a>
            <a data-slide-index="2" href="">
              <img src="img/Koala.jpg" width="50px" height="50px" />
            </a>
      </div>
       </div>
     </div>
 </div>
 

<?php
include "footer.php";
?>