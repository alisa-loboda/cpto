<?php
include "header.php";
?>
 <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12">
      <h1 class="text-center">
        Dragged Interaction
      </h1>
    </div>
     <div class="col-lg-4 col-md-4">
      <img src="img/Koala.jpg" class="img-responsive drag">
     </div>
     <div class="col-lg-4 col-md-4">
        <img src="img/Tulips.jpg" class="img-responsive drag">
     </div>
     <div class="col-lg-4 col-md-4">
       <img src="img/Lighthouse.jpg" class="img-responsive drag">
     </div>
   </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h1 class="text-center">
          Droppable and Draggable
        </h1>
      </div>
      <div class="col-lg-8 col-md-8">
        <img src="img/Lighthouse.jpg" width="150px" height="150px" class="dragpic" alt="">
        <img src="img/Tulips.jpg" width="150px" height="150px" class="dragpic"  alt="">
        <img src="img/Desert.jpg" width="150px" height="150px" class="dragpic" alt="">
      </div>
      <div class="col-lg-4 col-md-4">
        <img src="img/trashcan-empty-icon.png" class="drop" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h1 class="text-center">
          Sortable
        </h1>
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