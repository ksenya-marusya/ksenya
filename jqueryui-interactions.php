<?php
include "header.php";
?>
 <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12"> 
<h1 class="text-center">  Dragged Interaction</h1>
  
<div class="col-lg-4 col-md-4"><img src="img/4.jpg" class="img-responsive drag" > </div>
<div class="col-lg-4 col-md-4"><img src="img/2.jpg" class="img-responsive drag" > </div>
<div class="col-lg-4 col-md-4"><img src="img/3.jpg" class="img-responsive drag" > </div>

     </div> 
     <div class="row">
       <div class="col-lg-12 col-md-12">
         <h1 class="text-center">Droppable and Droggable</h1>
       </div>
       <div class="col-lg-6 col-md-6">
         <img src="img/5.jpg" width="150px" height="150px" class="dragpic" alt="">
         <img src="img/6.jpg" width="150px" height="150px" class="dragpic" alt="">
         <img src="img/1.jpg" width="150px" height="150px" class="dragpic" alt="">
       </div>

       <div class="col-lg-6 col-md-6"> 
         <img src="img/trashcan-empty-icon.png" class="drop" alt="">
       </div>
     </div> 
   </div>
   <div class="row">
     <div class="col-lg-12 col-md-12">
       <h1 class="text-center">Sortable</h1>
     </div>
     <div class="col-lg-6 col-md-6">
       <ul id="sort">
         <li class="ui-state-default">Punkt 1</li>
         <li class="ui-state-default">Punkt 2</li>
         <li class="ui-state-default">Punkt 3</li>
         <li class="ui-state-default">Punkt 4</li>
       </ul>
     </div>
     <div class="col-lg-6 col-md-6">
       <ul id="sort1">
         <li class="ui-state-default">Punkt 1</li>
         <li class="ui-state-default">Punkt 2</li>
         <li class="ui-state-default">Punkt 3</li>
         <li class="ui-state-default">Punkt 4</li>
       </ul>
     </div>
   </div>
 </div>

<?php
include "footer.php";
?>