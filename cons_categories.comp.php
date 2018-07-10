<style>

a {
  color: #000;

}
</style>



<style type="text/css">

  .col-1{
    display: inline-block;
    text-align: center;
    width: 153.8px;
    height: 140.8px;
    padding: 30px ;
    font-family: "Roboto",Arial,sans-serif;
    font-size: 12px;

    max-width: 100%;




  -webkit-transition: background-color 3s ease-out;
  -moz-transition: background-color 3s ease-out;
  -o-transition: background-color 3s ease-out;
  transition: background-color 3s ease-out;


  }
.col-1:hover{
background-color:#079bd5;
font-family: "Roboto",Arial,sans-serif;
color: white;
cursor: pointer;
height: 140.8px ;
max-width :  140.8px;



  color: hsl(400, 45% 75%, 45% );
  animation: wheelHueColor 10s infinite;
  background-color: #FF4500;

}
@supports (background-blend-mode: overlay) {
  .col-1:hover {
    background-image: linear-gradient(45deg,  blue 10%, black 99%);
    background-blend-mode: overlay;
    height: 140.8px;
    width: 140.8px;
    float: none;
}
}


  .container{
  text-align: center;
  width: 100%;
  height: 100%;

  }




  .news{
    background-color: black;
    color:white;
    text-align:center ;
    height: 140.8px;
    padding: 40px 40px 40px 40px;
    font-family: "Roboto",Arial,sans-serif;
  }

  span.nameUrl{
    display: inline;
    float: left;
  }








</style>

<div class="scroll">
<a href="/blog"><div class="news x-sm-24 sm-18 med-8 lg-6 column flex-align">
<h3>NEWS</h3>
</div></a>
</div>


                      <?php foreach($solutionsConsumers AS $uneSolution) {
                          $subSolutions = $uneSolution->getAllSubsolutionsActive() ;


                                  foreach($subSolutions AS $uneSubsolution) {
                                      if(in_array($uneSubsolution->getIdSubsolution(), $tabSolutionsToDisplay)){


                                      $nameUrl = toolsPny::chaineToUrl(toolsPny::cleanString($uneSubsolution->getUrlSubsolution()));
                                      $rootPicture = '/products/'.$uneSubsolution->getPicture();



                                      $imageSubSolution = (file_exists(MEDIA_PATH.$rootPicture) && !(is_dir(MEDIA_PATH.$rootPicture))) ? MEDIA_URL.$rootPicture : '/images/not-found-200x200.jpg' ;

                                  ?>




<a href="/<?php echo $language ;?>/consumer/explore-all-products/<?php echo $uneSubsolution->getIdSubsolution().'-'.$nameUrl ;?>">
  <div style = "display: inline-block; font-size:12px; margin-left: 0px;" class="rows">
<div class="col-1"> <img alt="<?php echo $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?>" class="" src="<?php echo $imageSubSolution ;?>" height="42" width="42" >
<div class="product-nav-title"><span class ="nameUrl"><?php echo $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?></span></div>
</div>
</div>
</a>


<?php }
 }
 ?>


<!-- </div>-->

 <?php

 }?>
<!--[CDATA[
 <a class="news" href="/blog"><div class="col-1" style = "background-color:black; width: 20%; color:white; float: left"><h3>NEWS</h3></div></a>

-->







