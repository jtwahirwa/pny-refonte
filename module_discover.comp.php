
<link rel="stylesheet" type="text/css" href="/design/css/homepage.css">


<?php



$sliders = new pny_home_slider();
$sliders = $sliders->getAll(array('position',  'ASC'));

?>

<?php

if(is_array($sliders)){

	$lastBanner = end($sliders);


?>

<style type="text/css">




.arrow{

		position: absolute;
    margin-left: 50%;
    margin-top: -8%;
    margin-right: auto;
    opacity: 1;
    max-width: 100%;
    height: auto;

}



.arrow:hover{
	opacity: 1;
}



</style>

	<div style = " overflow: hidden;">
<center >

<div class="homepage-animate-bg "> <img  style= " width: 100%; height: auto;"class ="animate" alt="" src="/data/slider-discover/<?php echo $lastBanner->getLargeBanner() ;?>">
<a href="#news">
<div class="arrow">
<img src="/data/slider-discover/home-arrow-down.png">
</div></a>

</div>
</center>
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




</div>



<?php

}
?>


