
<a href="/blog"><div id= "news" class="news x-sm-24 sm-18 med-8 lg-6 column flex-align ">
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

<a href="/<?= $language ;?>/consumer/explore-all-products/<?= $uneSubsolution->getIdSubsolution().'-'.$nameUrl ;?>">

<div style="min-width:auto; max-height:140px;" class="col-sm-1 categs"> <img  alt="<?= $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?>" class="product-nav-icon" src="<?= $imageSubSolution ;?> ">
<div style="font-family: 'Roboto', sans-serif; "><span  class ="nameUrl"><?= $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?></span></div>
</div>

</a>

-->

<?php }
}
?>



<!-- </div>-->

<?php

}?>
<a href="/<?= $language ;?>/consumer/explore-all-products/13-graphics-cards">
<div class=" x-sm-8 sm-6 med-4 lg-2 column  flex-align categs graphics_card"> <div class="flex-center"> <img alt="" class="product-nav-icon" src="/data/pictos/icon_graphics-card.svg ">
<div class ="nameUrl"><?= toolsPny::getStaticRessource('graphic_cards', $language, $tabLabelsFront) ; ?></div>
</div></div></div>
</a>


<a href="/<?= $language ;?>/consumer/explore-all-products/14-solid-state-drives">
<div class=" x-sm-8 sm-6 med-4 lg-2 column  flex-align categs ssd"> <div class="flex-center"> <img alt="" class="product-nav-icon" src="/data/pictos/icon_ssd.svg ">
<div  class ="nameUrl">SSD</div>
</div></div></div>
</a>

<a href="/<?= $language ;?>/consumer/explore-all-products/15-memory">
<div class=" x-sm-8 sm-6 med-4 lg-2 column flex-align categs pc_memory"><div class="flex-center"> <img alt="" class="product-nav-icon"  src="/data/pictos/icon_ram.svg ">
<div class ="nameUrl"><?= toolsPny::getStaticRessource('pc_memory', $language, $tabLabelsFront) ; ?></div>
</div></div>
</a>

<a href="/<?= $language ;?>/consumer/explore-all-products/1-usb-flash-drives">
<div  class=" x-sm-8 sm-6 med-4 lg-2 column flex-align categs usb"> <div class="flex-center"> <img alt="" class="product-nav-icon"  src="/data/pictos/icon_usb.svg ">
<div class ="nameUrl">USB</div>
</div></div>
</a>

<a href="/<?= $language ;?>/consumer/explore-all-products/6-flash-memory">
<div  class=" x-sm-8 sm-6 med-4 lg-2 column flex-align categs memory_card"> <img class="product-nav-icon" src="/data/pictos/icon_flash-cards_.png ">
<div class ="nameUrl"><?= toolsPny::getStaticRessource('memory_card', $language, $tabLabelsFront) ; ?></div>
</div>
</a>

<a href="/<?= $language ;?>/consumer/explore-all-products">
<div class=" x-sm-8 sm-6 med-4 lg-2 column flex-align categs power_solution"> <div class="flex-center"> <img alt="" class="product-nav-icon"  src="/data/pictos/icon_power_.png ">
<div class ="nameUrl"><?= toolsPny::getStaticRessource('power_solutions', $language, $tabLabelsFront) ; ?></div>
</div></div>
</a>

<a href="/<?= $language ;?>/consumer/explore-all-products">
<div  class=" x-sm-8 sm-6 med-4 lg-2 column flex-align categs accessories"> <div class="flex-center"> <img alt="" class="product-nav-icon"  src="/data/pictos/icon_accessories.svg ">
<div  class ="nameUrl"><?= toolsPny::getStaticRessource('accessories', $language, $tabLabelsFront) ; ?></div>
</div></div>
</a>

<a href="/<?= $language ;?>/consumer/explore-all-products/<?= $uneSubsolution->getIdSubsolution().'-'.$nameUrl ;?>">
<div  class=" x-sm-8 sm-6 med-4 lg-2 column flex-align categs xlr8"> <div class="flex-center"> <img alt="" class="product-nav-icon"  src="/data/pictos/XLR8.svg ">
<div  class ="nameUrl"><?= toolsPny::getStaticRessource('xlr8', $language, $tabLabelsFront) ; ?></div>
</div></div>
</a>

<a href="/<?= $language ;?>/consumer/explore-all-products/2-microsd-cards">
<div class=" x-sm-8 sm-6 med-4 lg-2 column flex-align categs mobile_memory"> <div class="flex-center"> <img alt="" class="product-nav-icon"  src="/data/pictos/icon_MicroSD_flash-cards.ai.png ">
<div class ="nameUrl"><?= toolsPny::getStaticRessource('mobile_memory', $language, $tabLabelsFront) ; ?></div>
</div></div>

</a>

