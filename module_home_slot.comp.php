<?php



$slot1 = new pny_home_slot ();
$slot1 = $slot1->getByField (array('position'=>'1', 'active' => '1'));
if(is_array($slot1) && count($slot1) > 0) {
	$slot1 = $slot1[0];

	if(strlen($slot1->getLabelHomeSlot($language, DEFAULT_LANGUAGE)) > 15 || strlen($slot1->getTextHomeSlot($language, DEFAULT_LANGUAGE)) > 100)
	$resize = true ;
}

$slot2 = new pny_home_slot ();
$slot2 = $slot2->getByField (array('position'=>'2', 'active' => '1'));
if(is_array($slot2) && count($slot2) > 0) {
	$slot2 = $slot2[0];

	if(strlen($slot2->getLabelHomeSlot($language, DEFAULT_LANGUAGE)) > 15 || strlen($slot2->getTextHomeSlot($language, DEFAULT_LANGUAGE)) > 100)
	$resize = true ;
}

$slot3 = new pny_home_slot ();
$slot3 = $slot3->getByField (array('position'=>'3', 'active' => '1'));
if(is_array($slot3) && count($slot3) > 0) {
	$slot3 = $slot3[0];

	if(strlen($slot3->getLabelHomeSlot($language, DEFAULT_LANGUAGE)) > 15 || strlen($slot3->getTextHomeSlot($language, DEFAULT_LANGUAGE)) > 200)
	$resize = true ;
}


$slot4 = new pny_home_slot ();
$slot4 = $slot4->getByField (array('position'=>'4', 'active' => '1'));
if(is_array($slot4) && count($slot4) > 0) {
	$slot4 = $slot4[0];

	if(strlen($slot4->getLabelHomeSlot($language, DEFAULT_LANGUAGE)) > 15 || strlen($slot4->getTextHomeSlot($language, DEFAULT_LANGUAGE)) > 200)
	$resize = true ;
}


$slot5 = new pny_home_slot ();
$slot5 = $slot5->getByField (array('position'=>'5', 'active' => '1'));
if(is_array($slot5) && count($slot5) > 0) {
  $slot5 = $slot5[0];

  if(strlen($slot5->getLabelHomeSlot($language, DEFAULT_LANGUAGE)) > 15 || strlen($slot5->getTextHomeSlot($language, DEFAULT_LANGUAGE)) > 200)
  $resize = true ;
}


$slot6 = new pny_home_slot ();
$slot6 = $slot6->getByField (array('position'=>'6', 'active' => '1'));
if(is_array($slot6) && count($slot5) > 0) {
  $slot6 = $slot6[0];

  if(strlen($slot6->getLabelHomeSlot($language, DEFAULT_LANGUAGE)) > 15 || strlen($slot6->getTextHomeSlot($language, DEFAULT_LANGUAGE)) > 200)
  $resize = true ;
}


?>


    <style>



.feature-OTG-Micro-USB { background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot1->getPictureHomeSlot();?>'); }

.feature-pnypro {background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot2->getPictureHomeSlot();?>'); }

.feature-actuPro {background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot3->getPictureHomeSlot();?>'); }

.feature-ambassador {background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot4->getPictureHomeSlot();?>'); }

.feature-xlr8 { background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot5->getPictureHomeSlot();?>'); }

.feature-velocityx { background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot6->getPictureHomeSlot();?>'); }


     .tile { padding: 3em 2em 2em 2em; height: 300px; background-color: rgba(15,15,15,0.5); background-position: center; background-repeat: no-repeat; background-size: cover; } .tile:hover { cursor: pointer } a.tile-button { background-color: rgba(100, 100, 100, .7); font-weight: 700; color: #fff; padding: 1em; text-transform: uppercase; font-size: .8em; } a.tile-button:hover { background-color: rgba(255, 255, 255, 1); color: #000; font-weight: 700; }
     .tile h3 { font-size: 1.5em; color: #fff; margin: 0; }
     .landing-section .column { transition: all .2s ease-in }
     .product-icon { width: 150px; margin-bottom: 10px; }
      /* COLORS */ .quardro-light-blue-text { color: #48a8d2 }
       .quardro-light-blue-fill { background-color: #48a8d2 }
        .quardro-dark-blue-text { color: #005f88 }
        .quardro-dark-blue-fill { background-color: #005f88 }
        .quadro-green { color: #82a058; }
         .quadro-green-fill { background-color: #82a058; }
          .hvr-underline-center { position: relative; display: inline-block; vertical-align: middle; overflow: hidden; box-shadow: 0 0 1px transparent; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); } .hvr-underline-center:before { content: ""; position: absolute; right: 50%; bottom: 0; left: 50%; z-index: -1; height: 4px; background: #48a8d2; -webkit-transition-property: left, right; transition-property: left, right; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease-out; transition-timing-function: ease-out; }
          .hvr-underline-center:hover:before, .hvr-underline-center:focus:before, .hvr-underline-center:active:before { right: 0; left: 0; } /* Overline Reveal */



          .hvr-overline-quadro { position: relative; display: inline-block; vertical-align: middle; overflow: hidden; box-shadow: 0 0 1px transparent; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); }

          .hvr-overline-quadro:before { content: ""; position: absolute; top: 0; right: 0; left: 0; z-index: -1; height: 20px; background: #2098D1; -webkit-transition-property: transform; transition-property: transform; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease-out; transition-timing-function: ease-out; -webkit-transform: translateY(-20px); transform: translateY(-20px); }

           .hvr-overline-quadro:hover:before, .hvr-overline-quadro:focus:before, .hvr-overline-quadro:active:before { -webkit-transform: translateY(0); transform: translateY(0); }







      .hvr-overline-xlr8 { position: relative; display: inline-block; vertical-align: middle; overflow: hidden; box-shadow: 0 0 1px transparent; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); }

       .hvr-overline-xlr8:before { content: ""; position: absolute; top: 0; right: 0; left: 0; z-index: -1; height: 20px; background: #9E0B0F; -webkit-transition-property: transform; transition-property: transform; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease-out; transition-timing-function: ease-out; -webkit-transform: translateY(-20px); transform: translateY(-20px); }

       .hvr-overline-xlr8:hover:before, .hvr-overline-xlr8:focus:before, .hvr-overline-xlr8:active:before { -webkit-transform: translateY(0); transform: translateY(0); }





        .hvr-overline-destiny2 { position: relative; display: inline-block; vertical-align: middle; overflow: hidden; box-shadow: 0 0 1px transparent; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); }

         .hvr-overline-destiny2:before { content: ""; position: absolute; top: 0; right: 0; left: 0; z-index: -1; height: 20px; background: #008fd5; -webkit-transition-property: transform; transition-property: transform; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease-out; transition-timing-function: ease-out; -webkit-transform: translateY(-20px); transform: translateY(-20px); }

</style>






<a class="" href="<?php echo $slot3->getLinkHomeSlot();?>">
<div class="tile feature-actuPro sm-12 med-12 lg-6 column hvr-overline-quadro">
<h3><?php echo stripslashes($slot3->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
<br>
<a class="tile-button" href="<?php echo $slot3->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
</div>
</a>




<a class="" href="<?php echo $slot2->getLinkHomeSlot();?>">
<div class="tile feature-pnypro col-sm-9 hvr-overline-quadro">
<h3><?php echo stripslashes($slot2->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
<br>
<a class="tile-button" href="<?php echo $slot2->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
</div>
</a>



<a class="" href="<?php echo $slot5->getLinkHomeSlot();?>">
<div class="tile feature-OTG-Micro-USB sm-12 med-12 lg-6 column hvr-overline-quadro">
<h3><?php echo stripslashes($slot1->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
<br>
<a class="tile-button" href="<?php echo $slot1->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
</div>
</a>




<a class="" href="<?php echo $slot5->getLinkHomeSlot();?>">
<div class="tile feature-xlr8 sm-12 med-12 lg-6 column hvr-overline-xlr8">
<h3><?php echo stripslashes($slot5->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
<br>
<a class="tile-button" href="<?php echo $slot5->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
</div>
</a>





<a class="" href="<?php echo $slot4->getLinkHomeSlot();?>">
<div class="tile feature-ambassador sm-12 med-12 lg-6 column hvr-overline-xlr8">
<h3><?php echo stripslashes($slot4->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
<br>
<a class="tile-button" href="<?php echo $slot4->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
</div>
</a>


<!--
<a class="" href="<?php echo $slot5->getLinkHomeSlot();?>">
<div class="tile feature-xlr8 sm-12 med-12 lg-6 column hvr-overline-xlr8">
<h3><?php echo stripslashes($slot5->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
<br>
<a class="tile-button" href="<?php echo $slot5->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
</div>
</a>


<a class="" href="<?php echo $slot5->getLinkHomeSlot();?>">
<div class="tile feature-xlr8 sm-12 med-12 lg-6 column hvr-overline-xlr8">
<h3><?php echo stripslashes($slot5->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
<br>
<a class="tile-button" href="<?php echo $slot5->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
</div>
</a>-->



<a class="" href="<?php echo $slot6->getLinkHomeSlot();?>">
<div class="tile feature-velocityx sm-12 med-12 lg-6 column hvr-overline-quadro">
<h3><?php echo stripslashes($slot6->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
<br>
<a class="tile-button" href="<?php echo $slot6->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
</div>
</a>