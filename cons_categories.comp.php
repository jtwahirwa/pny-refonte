
<head>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="/design/css/homepage.css">
</head>

<a href="/blog"><div class="col-sm-3 flex-align">
<h3>NEWS</h3>
</div></a>



                      <?php foreach($solutionsConsumers AS $uneSolution) {
                          $subSolutions = $uneSolution->getAllSubsolutionsActive() ;


                                  foreach($subSolutions AS $uneSubsolution) {
                                      if(in_array($uneSubsolution->getIdSubsolution(), $tabSolutionsToDisplay)){


                                      $nameUrl = toolsPny::chaineToUrl(toolsPny::cleanString($uneSubsolution->getUrlSubsolution()));
                                      $rootPicture = '/products/'.$uneSubsolution->getPicture();



                                      $imageSubSolution = (file_exists(MEDIA_PATH.$rootPicture) && !(is_dir(MEDIA_PATH.$rootPicture))) ? MEDIA_URL.$rootPicture : '/images/not-found-200x200.jpg' ;

                                  ?>


<!--

<a href="/<?php echo $language ;?>/consumer/explore-all-products/<?php echo $uneSubsolution->getIdSubsolution().'-'.$nameUrl ;?>">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="<?php echo $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?>" class="categ-img" src="<?php echo $imageSubSolution ;?> ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl"><?php echo $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?></span></div>
</div>

</a>

-->

<?php }
 }
 ?>


<!-- </div>-->

 <?php

 }?>


<a href="/<?php echo $language ;?>/consumer/explore-all-products/13-graphics-cards">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="  " class="categ-img" src="/data/pictos/icon_graphics-card.svg ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl">Graphics cards</span></div>
</div>

</a>
<a href="/<?php echo $language ;?>/consumer/explore-all-products/14-solid-state-drives">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="  " class="categ-img" src="/data/pictos/icon_MicroSD_flash-cards.ai.png ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl">SSD</span></div>
</div>

</a>
<a href="/<?php echo $language ;?>/consumer/explore-all-products/15-memory">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="  " class="categ-img" src="/data/pictos/icon_flash-cards_.png ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl">PC Memory</span></div>
</div>

</a>
<a href="/<?php echo $language ;?>/consumer/explore-all-products/1-usb-flash-drives">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="  " class="categ-img" src="/data/pictos/icon_flash-cards_.png ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl">USB</span></div>
</div>

</a>
<a href="/<?php echo $language ;?>/consumer/explore-all-products/6-flash-memory">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="  " class="categ-img" src="/data/pictos/icon_flash-cards_.png ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl">Memory cards</span></div>
</div>

</a>
<a href="/<?php echo $language ;?>/consumer/explore-all-products">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="  " class="categ-img" src="/data/pictos/icon_power_.png ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl">Power Solutions</span></div>
</div>

</a>
<a href="/<?php echo $language ;?>/consumer/explore-all-products">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="  " class="categ-img" src="/data/pictos/icon_flash-cards_.png ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl">Accessories</span></div>
</div>

</a>
<a href="/<?php echo $language ;?>/consumer/explore-all-products/<?php echo $uneSubsolution->getIdSubsolution().'-'.$nameUrl ;?>">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="  " class="categ-img" src="/data/pictos/XLR8.svg ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl">XLR8 Gaming</span></div>
</div>

</a>
<a href="/<?php echo $language ;?>/consumer/explore-all-products/2-microsd-cards">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="  " class="categ-img" src="/data/pictos/icon_flash-cards_.png ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl">Mobile Memory </span></div>
</div>

</a>





<!--[CDATA[
 <a class="news" href="/blog"><div class="col-1" style = "background-color:black; width: 20%; color:white; float: left"><h3>NEWS</h3></div></a>

-->
<div class="clear-both"></div>







