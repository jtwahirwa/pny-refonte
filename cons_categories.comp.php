
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

a {
  color: #000;
  font-family: 'Roboto', sans-serif;



}



  .categs{
    display:inline-block;
    text-align: center;
     padding: 40px 40px 40px 40px;
     margin: auto;
    font-family: "Roboto",Arial,sans-serif;
    font-size: 12px;
    height: 160px;

  -webkit-transition: background-color 3s ease-out;
  -moz-transition: background-color 3s ease-out;
  -o-transition: background-color 3s ease-out;
  transition: background-color 3s ease-out;


  }



.categs:hover{
background-color:#079bd5;
font-family: "Roboto",Arial,sans-serif;
color: white;
max-width :auto;




  color: hsl(324, 45% 70%, 45% 15%);
  animation: wheelHueColor 10s infinite;
  background-color: #A91101;

}
@supports (background-blend-mode: overlay) {
  .col-sm-1:hover {
    background-image: linear-gradient(45deg,  #079bd5  99%, #16B84E , black);

    background-blend-mode: overlay;
    float: left;
}
}


  .col-sm-3{
    background-color: black;
    color:white;
    text-align:center ;
    height: 140px;
    padding: 40px 40px 40px 40px;
    font-family: "Roboto",Arial,sans-serif;
  }

  .categ-img{
    max-width: 100%;
    min-height: auto;
    width: 40px;


  }



</style>
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




<a href="/<?php echo $language ;?>/consumer/explore-all-products/<?php echo $uneSubsolution->getIdSubsolution().'-'.$nameUrl ;?>">

<div style="max-width: 11.11%;max-height:140px;" class="col-sm-1 categs"> <img  alt="<?php echo $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?>" class="categ-img" src="<?php echo $imageSubSolution ;?> ">
<div style="font-family: 'Roboto', sans-serif;"><span class ="nameUrl"><?php echo $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?></span></div>
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







