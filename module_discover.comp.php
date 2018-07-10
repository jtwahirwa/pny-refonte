
<style type="text/css">



.learn-m-button  {


	color: white;
 	font-size: 16px;
 	padding: 10px 10px 10px 10px;
 	font-family: "Roboto Condensed",Arial,sans-serif;
 	background-color: #131d25;
	margin-left:auto;
	margin-top: auto;


}


@media screen and (max-width: 768px)

 {
.learn-m-button{
		width: 50%;
		padding:2px 2px 2px 2px;
		position: relative;
		font-size: 14px;
		height: auto;
    margin-left: auto;
    margin-right: auto;
 }
 }



@media screen and (max-width: 629px)

 {
.learn-m-button{
		width: 50%;
		padding:2px 2px 2px 2px;
		height: auto;
    margin-left: auto;
    margin-right: auto;
 }
 }





@media screen and (max-width: 629px)

 {
img.arrow-down{
		width: 100%;
		padding:2px 2px 2px 2px;
		height: auto;
    margin-left: auto;
    margin-right: auto;
 }
 }




			/*quand on aura un bg a part */

    .homepage-animate-bg  {
		/*background-image: url("/data/slider-discover/banniere_home_small_1200x400_videocorpo.png"  );
    	background-size: cover;

    	height: 100%; width: auto; max-width: 100%;"*/
     	transform: scale(1.1); animation:zoomIn-bg 60s linear infinite alternate;
     	max-height: 100%;
      }



     .front { animation: zoomIn-front 60s linear infinite alternate-reverse; }
     @keyframes zoomIn-bg { 0% { transform: scale(1); } 100% { transform: scale(1.3); } }
		 @media only screen and (max-width: 1000px) { .front { margin-left: 8%; }







     @keyframes zoomIn-front { 0% { transform: scale(1); }
      100% { transform: scale(1.1); } } }


.wrapp-image-home {
    position: absolute; top: 15%;
    max-width: 100%;
    margin-left: auto;
    margin-right: auto;
    left: 80%;
    font-family: "Roboto Condensed",Arial,sans-serif;
    font-size: 36px;
    color:#FFFFFF;}



@media only screen and (max-width: 1000px) {
	.wrapp-image-home{
		position: absolute; top: 2%;
		text-align: center;
		font-size: 16px;

	}
}




.arrow-down{
	max-width: 100%;
	float: left;
	margin-right: auto;
	margin-left: auto;

}






</style>


<?php


$sliders = new pny_home_slider();
$sliders = $sliders->getAll(array('position',  'ASC'));

?>

<?php

if(is_array($sliders)){

	$lastBanner = end($sliders);


?>
<div style="height:100%; overflow: hidden;" class="">
<center >

<div class="homepage-animate-bg "> <img  style= "width: 100%; height:100%;"class ="animate" alt="" src="/data/slider-discover/<?php echo $lastBanner->getLargeBanner() ;?>">
</div>





<div class="wrapp-image-home" >


			<div>
			  <h2 style="font-family: Roboto Arial,sans-serif";><?php echo $lastBanner->getTitle($language, DEFAULT_LANGUAGE) ; ?></h2><p class = "text" style="min-height:2%;"><?php echo $lastBanner->getText($language, DEFAULT_LANGUAGE) ; ?></p>

			</div>


	<?php if($lastBanner->getLink() != '') { ?>




			  	<a class="learn-m-button" <?php echo ($lastBanner->getTarget() != 'blank') ? 'target="_self"' : 'target="_blank"' ; ?> <?php echo (strpos($lastBanner->getLink(), 'www.youtube.com/watch') === false) ? '' : 'rel="prettyPhoto"' ; ?> href="<?php echo $lastBanner->getLink() ;?>">
			  <?php if($lastBanner->getTextButton() != '')
				{
					echo mb_strtoupper($lastBanner->getTextButton($language, DEFAULT_LANGUAGE), 'utf8') ;
				} else
				{
					echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ;
				} ?></a>
	<?php }  ?>



	<!--<a class="" href="#news"><img class ="arrow-down"alt="" src="/data/slider-discover/arrow-down.png"></a>-->

</div>

		</center>

	</div>


<?php

}
?>

