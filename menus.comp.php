
<?php
/*
$article = new article();
$lesArticles = $article->getAll();

foreach($lesArticles AS $article) {
  //foreach( $lesArticles as $article){

      if (in_array ($article->getIdArticle(), $ai_solutions)){

         // $idArticle = $article->getIdArticle();
          $idProductLine = $article->getIdProductLine();

          $productLine = product_line::retrieveByPk($idProductLine);


                      $subSolutionRel = $productLine->getAllPnySubsolutionRelProductLine();

                      if(is_array($subSolutionRel) && count($subSolutionRel) > 0)
                      {
                          //on prend la 0, la premiere et probablement la seule qui remonte
                          $subSolution = $subSolutionRel[0]->getPnySubsolutionOfThisPnySubsolutionRelProductLine();
                          //print_r($subSolution);
                      }

                      $nameSolutionEn = toolsPny::chaineToUrl(toolsPny::cleanString($subSolution->getUrlSubsolution()));
                      //$urlPrefixArticle = '/'.$language.'/'.$univers.'/explore-all-products/'.$nameSolutionEn ;


                      //print_r($article->getIdArticle());
                      //print_r($article->());
?>

                          <li>
<a href="/<?php echo $language ;?>/professional/explore-all-products/<?php echo  $nameSolutionEn;?>/<?php echo $article->getIdArticle().'-'.toolsPny::chaineToUrl(toolsPny::cleanString($article->getEnDesignation())); ;?><?php $article->getIdArticle() ?>">-<?php echo $article->getEnDesignation() ;?></a>
                          </li>



      <?php

}}


*/



//Get Devices

$device = new pny_product_group();
$devices = $device->getByField(array('type_groupe' => 'device'));

?>

<nav  class="main-nav" role="navigation">
  <form id="searchForm" action="/search_engine.php" method="POST">
      <div id="ctl11_Header_pnlSearch" class="site-search" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl11_Header_lbSearch')">
          <input name="search" value="<?php echo toolsPny::getStaticRessource('search', $language, $tabLabelsFront) ; ?>" id="search" class="txtHeaderKeyword" onfocus="if (this.value == '<?php echo toolsPny::getStaticRessource('search', $language, $tabLabelsFront) ; ?>') {this.value=''}" onblur="if(this.value == '') { this.value='<?php echo toolsPny::getStaticRessource('search', $language, $tabLabelsFront) ; ?>'}" type="text">
          <a id="ctl11_Header_lbSearch" usesubmitbehavior="false" href="javascript:$('#searchForm').submit();"></a>
      </div>

  </form>
  <!--end site-search-->
  <ul class="menu-left">
      <li style="text-align:center" class="mobile"></li>
      <li class="mobile">
              <!--<a id="ctl11_Header_h1MLogin" class="icon-lock" href="/my-account/login-register"><?php echo strtoupper(toolsPny::getStaticRessource('log_in', $language, $tabLabelsFront)) ; ?></a>-->
      </li>
      <li class="">
          <span>
              <a style ="font-family:Roboto Condensed; font-weight: 400;" href="/<?php echo $language ;?>/consumer/explore-all-products"><?php echo toolsPny::getStaticRessource('cons_label', $language, $tabLabelsFront) ; ?></a>
              <ul class="mega-menu">

                  <li class="consumer-menu" style="width:910px;">
                      <a href="/<?php echo $language ;?>/consumer/explore-all-products"><?php echo toolsPny::getStaticRessource('explore_all_products', $language, $tabLabelsFront) ; ?></a>
                      <ul>


                          <!-- START Products Categories & subcategories -->
                      <?php foreach($solutionsConsumers AS $uneSolution) {
                          $subSolutions = $uneSolution->getAllSubsolutionsActive() ;

                              //on n'affiche que les solutions PNY, numerotées dans un tableau de config
                              if(in_array($uneSolution->getIdSolution(), $tabSolutionsToDisplay)) {
                      ?>

                          <li style="margin-top:25px;margin-left:20px;width:250px;height:20px;">
                              <span style="font-family:HelveticaNeueLTStd-Roman,Arial,Helvetica,sans-serif,Helvetica Neue,Arial,sans-serif; color:#000;font-size:16px;font-weight:bold;text-align:left;"><?php echo  $uneSolution->getNameSolution() ;?></span>
                          </li>
                          <li style="width:100%;margin-left:30px;">


                                  <?php foreach($subSolutions AS $uneSubsolution) {
                                      $nameUrl = toolsPny::chaineToUrl(toolsPny::cleanString($uneSubsolution->getUrlSubsolution()));
                                      $rootPicture = '/products/'.$uneSubsolution->getPicture();



                                      $imageSubSolution = (file_exists(MEDIA_PATH.$rootPicture) && !(is_dir(MEDIA_PATH.$rootPicture))) ? MEDIA_URL.$rootPicture : '/images/not-found-200x200.jpg' ;

                                  ?>
                              <span class="menu_cons_eu">
                                  <a href="/<?php echo $language ;?>/consumer/explore-all-products/<?php echo $uneSubsolution->getIdSubsolution().'-'.$nameUrl ;?>">
                                      <figure>
                                          <img style="margin-bottom:8px;width:75px;" alt="<?php echo $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?>" src="<?php echo $imageSubSolution ;?>">
                                      </figure>
                                      <span style=""><?php echo $uneSubsolution->getNameSubsolution($language, DEFAULT_LANGUAGE) ;?></span></a>
                              </span>
                                  <?php } ?>


                          </li>


                              <?php }

                                      } ?>
                          <!-- END Products Categories & subcategories -->

                      </ul>

                  </li>

                  <li class="consumer-menu-links explore-by-device">
                      <a href="/<?php echo $language ;?>/consumer/explore-by-device"><?php echo toolsPny::getStaticRessource('explore_by_device', $language, $tabLabelsFront) ; ?></a>
                      <ul>

                          <?php foreach($devices AS $unDevice) { ?>
                          <li><a href="/<?php echo $language ;?>/consumer/explore-by-device/<?php echo  toolsPny::chaineToUrl(toolsPny::cleanString($unDevice->getProductGroupName()));?>"><?php echo toolsPny::getStaticRessource($unDevice->getProductGroupUrl(), $language, $tabLabelsFront) ; ?></a></li>
                          <?php } ?>

                      </ul>
                  </li>



                  <li   class="consumer-menu-links imation-link" >
                      <a href="/<?php echo $language ;?>/consumer/explore-imation"><?php echo toolsPny::getStaticRessource('explore_imation_products', $language, $tabLabelsFront) ; ?></a>
                  </li>


                  <li  class="consumer-menu-links bto"  style="width:210px;">
                      <a href="/bto"><img style="float:left;width:120px;"src="/images/logo_Customization_Service_black.png" />
                          <span style="float:left;font-weight:normal;"><?php echo toolsPny::getStaticRessource('bto_btn', $language, $tabLabelsFront) ; ?></span>
                      </a>
                      <div class="clear"></div>
                  </li>


                  <li class="HP-callout">
                      <img src="/images/HP-badge.png" alt="HP" title="HP"><a href="/<?php echo $language ;?>/consumer/explore-hp"><?php echo toolsPny::getStaticRessource('pny_proud_hp', $language, $tabLabelsFront) ; ?>&nbsp;<span><?php echo toolsPny::getStaticRessource('explore_hp_products', $language, $tabLabelsFront) ; ?></span></a>
                  </li>
              </ul>
          </span>

      </li>




      <li class="">
          <span>
              <a <a style ="font-family:Roboto Condensed; font-weight: 400; href="/<?php echo $language ;?>/professional/why-pny"><?php echo toolsPny::getStaticRessource('pro_label', $language, $tabLabelsFront) ; ?></a>
              <ul class="mega-menu">
                  <li>

                      <a href="/<?php echo $language ;?>/professional/explore-all-products"><?php echo toolsPny::getStaticRessource('explore_all_products', $language, $tabLabelsFront) ; ?></a>



                       <ul>


                          <li></li>



<!--Trier pour l'affichage des produits pro dans le menu,: il peut y avoir d'autres solutions pour l'affichage: method long
on souhaite avoir la liste comme suit:
NVIDIA QUADRO
NVIDIA TESLA
NVIDIA NVS
NVIDIA GRID
MOBILE WORKSTATIONS
PNY GPU SERVERS
NVIDIA DGX SERIES
PURE STORAGE SOLUTIONS
NVIDIA EMBEDDED SOLUTIONS
WARRANTY EXTENSION SERVICE
LEGACY PRODUCTS

-->
<?php
foreach($solutionsPro AS $uneSolutionPro) {
    if (isset($solutionsPro)){
            $subSolutionPro = new pny_subsolution();



            $subSolutionsPro = $subSolutionPro->getByField(array($uneSolutionPro->getIdSolution() => 6));

                                      foreach ( array_slice($subSolutionsPro, 0 ,20) as $uneSubSolution ) {


                                       if(in_array($uneSubSolution->getIdSubsolution(), $pro_IdSubsolutions)) {





                                   ?>



                          <li>
                              <a href="/<?php echo $language ;?>/professional/explore-all-products/<?php echo $uneSubSolution->getIdSubsolution().'-'.$uneSubSolution->getUrlSubsolution();?>"><?php echo $uneSubSolution->getNameSubsolution() ;?></a>
                          </li>





                     <?php
              }}
             }

if (isset($solutionsPro)){
            foreach ($subSolutionsPro as $uneSubSolution ) {
                     if(in_array($uneSubSolution->getIdSubsolution(), $pro_IdSubsolutions)) {





                 if ($uneSubSolution->getIdSubsolution()==26){
                        ?>
                      <li>
                        <a target="_blank" href="/grid/">NVIDIA GRID vGPU Software</a>
                      </li>
                        <?php }



                  }

                              if ($uneSubSolution->getIdSubsolution()==38){
                        ?>

                          <li>
                              <a href="/<?php echo $language ;?>/professional/explore-all-products/<?php echo $uneSubSolution->getIdSubsolution().'-'.$uneSubSolution->getUrlSubsolution();?>"><?php echo $uneSubSolution->getNameSubsolution() ;?></a>
                          </li>

                          <?php
                        }}
                       }

  }


if (isset($solutionsPro)){
     foreach ($subSolutionsPro as $uneSubSolution ) {
                     if(in_array($uneSubSolution->getIdSubsolution(), $pro_IdSubsolutions) ) {

                if ($uneSubSolution->getIdSubsolution()==27){

                      ?>


                 <li>
                    <a href="/<?php echo $language ;?>/professional/explore-all-products/<?php echo $uneSubSolution->getIdSubsolution().'-'.$uneSubSolution->getUrlSubsolution();?>"><?php echo $uneSubSolution->getNameSubsolution() ;?></a>
                 </li>
               <?php  } ?>




                  <?php
              }}
            }



if (isset($solutionsPro)){
      foreach ($subSolutionsPro as $uneSubSolution ) {
                     if(in_array($uneSubSolution->getIdSubsolution(), $pro_IdSubsolutions) ) {

                if ($uneSubSolution->getIdSubsolution()==39 || $uneSubSolution->getIdSubsolution()==40){

                      ?>


                 <li>
                    <a href="/<?php echo $language ;?>/professional/explore-all-products/<?php echo $uneSubSolution->getIdSubsolution().'-'.$uneSubSolution->getUrlSubsolution();?>"><?php echo $uneSubSolution->getNameSubsolution() ;?></a>
                 </li>
               <?php  } ?>


                   <?php
}}
}

if (isset($solutionsPro)){
      foreach ($subSolutionsPro as $uneSubSolution ) {
                     if(in_array($uneSubSolution->getIdSubsolution(), $pro_IdSubsolutions) ) {

                if ($uneSubSolution->getIdSubsolution()==36 ){
                      ?>


                 <li>
                    <a href="/<?php echo $language ;?>/professional/explore-all-products/<?php echo $uneSubSolution->getIdSubsolution().'-'.$uneSubSolution->getUrlSubsolution();?>"><?php echo $uneSubSolution->getNameSubsolution() ;?></a>
                 </li>
               <?php  } ?>


                      <?php
                        }}
                        }

if (isset($solutionsPro)){
      foreach ($subSolutionsPro as $uneSubSolution ) {
                     if(in_array($uneSubSolution->getIdSubsolution(), $pro_IdSubsolutions) ) {

                if ($uneSubSolution->getIdSubsolution()==21 || $uneSubSolution->getIdSubsolution()==30 ){

                      ?>


                 <li>
                    <a href="/<?php echo $language ;?>/professional/explore-all-products/<?php echo $uneSubSolution->getIdSubsolution().'-'.$uneSubSolution->getUrlSubsolution();?>"><?php echo $uneSubSolution->getNameSubsolution() ;?></a>
                 </li>
               <?php  } ?>




                      <?php



                    }}
                      }


                           ?>

                      </ul>


                  </li>


                  <li><a href="/<?php echo $language ;?>/professional/why-pny"><?php echo toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront) ; ?></a>
                      <ul>

                          <?php if(isset($tabMenuProLearnMore)) {
                                  foreach($tabMenuProLearnMore AS $unLien) { ?>

                          <li><a <?php echo(preg_match('/http/', $unLien[1])) ? 'target="_blank"' : '' ;?>href="<?php echo toolsPny::getUrlWithLangMarker($unLien[1], $language) ?>"><?php echo toolsPny::getStaticRessource($unLien[2], $language, $tabLabelsFront) ; ?></a></li>

                                  <?php }
                              } ?>


                      </ul>
                  </li>



                  <li class="menu-callout">
                      <a href="/<?php echo $language ;?>/professional/partner-program">
                          <figure>
                              <img src="/images/PNY-partner-logo.png" alt="PNY Partner Program" title="PNY Partner Program">
                          </figure><span>PNY Partner Program</span></a>
                      <ul>
                          <li><a rel="nofollow" target="_blank" href="http://<?php echo PPPV2_DOMAIN_SITE ;?>"><?php echo toolsPny::getStaticRessource('login', $language, $tabLabelsFront) ; ?></a></li>
                          <li><a href="/<?php echo $language ;?>/professional/partner-program"><?php echo toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront) ; ?></a></li>
                      </ul>
                  </li>
                  <li class="menu-callout img-tiles">
                      <ul>
                          <li><a href="/bfp"><figure><img src="/images/professional/BfP_Webbanner_PNY_certified_212x120.jpg" alt="NVidia Quadro, Built for professionals"></figure><span><?php echo toolsPny::getStaticRessource('include_built_for_professionals', $language, $tabLabelsFront) ; ?></span></a></li>
                          <li><a href="http://pny.quadrok-selector.com/en" target="_blank"><figure><img src="/images/professional/Quadro Configurator_212x120.jpg" alt="Quadro Configurator"></figure><span>Quadro Configurator</span></a></li>
                      </ul>
                  </li>
              </ul></span>
      </li>








      <li class=""><span>
         <!-- <a href="/<?php echo $language ;?>/oem/overview">AI</a>-->
           <a <a style ="font-family:Roboto Condensed; font-weight: 400; href="/<?php echo $language ;?>/ai/overview"><?php echo toolsPny::getStaticRessource('ai_label', $language, $tabLabelsFront) ; ?></a>
             <ul class="mega-menu">
                  <li><a href="/<?php echo $language ;?>/ai/products"><?php echo toolsPny::getStaticRessource('explore_our_products', $language, $tabLabelsFront) ; ?></a>
                      <ul>
                          <li><a href="/<?php echo $language ;?>/professional/explore-all-products/nvidia-dgx-series/717-nvidia-dgx-1---the-world-s-first-deep-learning-supercomputer">NVIDIA DGX-1</a></li>
                          <li><a href="/<?php echo $language ;?>/professional/explore-all-products/nvidia-dgx-series/1016-nvidia-dgx-2---the-worlds-most-powerful-deep-learning-system">NVIDIA DGX-2</a></li>
                      <li><a href="/<?php echo $language ;?>/professional/explore-all-products/nvidia-dgx-series/994-nvidia-dgx-station---personal-ai-supercomputer">NVIDIA DGX STATION</a></li>


                          <li><a href="/<?php echo $language ;?>/professional/explore-all-products/27-pny-gpu-servers">PNY GPU Servers</a></li>

                          <li><a href="/<?php echo $language ;?>/professional/explore-all-products/nvidia-quadro/1000-nvidia-quadro-gv100">NVIDIA Quadro</a></li>

                           <li><a href="/<?php echo $language ;?>/professional/explore-all-products/nvidia-tesla/951-nvidia-tesla-v100">NVIDIA Tesla</a></li>

                          <li><a href="/<?php echo $language ;?>/professional/explore-all-products/embedded-solutions/921-nvidia-jetson-tx2-developer-kit">Embedded AI</a></li>

                          <li><a href="/<?php echo $language ;?>/professional/explore-all-products/pure-storage-solutions/999-flashblade">PURE Flashblade</a></li>

                          <li><a href="/<?php echo $language ;?>/professional/explore-all-products/pure-storage-solutions/1001-pure-airi"> AIRI</a></li>

                          <li><a href="/<?php echo $language ;?>/professional/explore-all-products/pure-storage-solutions/1017-airi-mini-ai-ready-infrastructure"> AIRI Mini</a></li>








                      <!--
                          <li><a href="/<?php echo $language ;?>/oem/products/memory"><?php echo toolsPny::getStaticRessource('memory', $language, $tabLabelsFront) ; ?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/products/nvidia-geforce-graphics-cards"><?php echo toolsPny::getStaticRessource('nvidia_geforce_cards', $language, $tabLabelsFront) ; ?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/products/nvidia-quadro-graphics-cards"><?php echo toolsPny::getStaticRessource('nvidia_quadro_cards', $language, $tabLabelsFront) ; ?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/products/flash"><?php echo toolsPny::getStaticRessource('flash', $language, $tabLabelsFront) ; ?></a></li>
                          -->
                      </ul>
                  </li>
                  <li><a href="/<?php echo $language ;?>/ai/overview"><?php echo toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront) ; ?></a>
                      <ul>
                          <li><a href="/<?php echo $language ;?>/ai/why-pny"><?php echo toolsPny::getStaticRessource('why_pny', $language, $tabLabelsFront) ; ?></a></li>
                          <li><a href="/<?php echo $language ;?>/ai/contact-us"><?php echo toolsPny::getStaticRessource('contact_us', $language, $tabLabelsFront) ; ?></a></li>
                          <li><a href="/static/DGX_Whitepaper "><?php echo toolsPny::getStaticRessource('white-paper', $language, $tabLabelsFront) ; ?></a></li>
                      </ul>
                  </li>
              <!--
                  <li><a href="/<?php echo $language ;?>/oem/solutions"><?php echo toolsPny::getStaticRessource('oem_our_solutions', $language, $tabLabelsFront) ; ?></a>
                      <ul>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/automotive"><?php echo $tabLabelMarkets[$language]['automotive'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/cloud-data-storage"><?php echo $tabLabelMarkets[$language]['cloud-data-storage'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/gaming"><?php echo $tabLabelMarkets[$language]['gaming'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/medical"><?php echo $tabLabelMarkets[$language]['medical'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/corporate"><?php echo $tabLabelMarkets[$language]['corporate'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/surveillance"><?php echo $tabLabelMarkets[$language]['surveillance'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/telecommunications"><?php echo $tabLabelMarkets[$language]['telecommunications'] ;?></a></li>
                      </ul>
                  </li>
              -->



                      </ul>
                  </li>

              <!--
                  <li><a href="/<?php echo $language ;?>/oem/solutions"><?php echo toolsPny::getStaticRessource('oem_our_solutions', $language, $tabLabelsFront) ; ?></a>
                      <ul>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/automotive"><?php echo $tabLabelMarkets[$language]['automotive'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/cloud-data-storage"><?php echo $tabLabelMarkets[$language]['cloud-data-storage'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/gaming"><?php echo $tabLabelMarkets[$language]['gaming'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/medical"><?php echo $tabLabelMarkets[$language]['medical'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/corporate"><?php echo $tabLabelMarkets[$language]['corporate'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/surveillance"><?php echo $tabLabelMarkets[$language]['surveillance'] ;?></a></li>
                          <li><a href="/<?php echo $language ;?>/oem/solutions/telecommunications"><?php echo $tabLabelMarkets[$language]['telecommunications'] ;?></a></li>
                      </ul>
                  </li>
              -->


              </ul>
      </li>

  </ul>
  <ul class="menu-right">
      <li class=" shop"><span style ="font-family:Roboto Condensed; font-weight: 400;"><a href="/<?php echo $language ;?>/support/technical-support">Support</a></span></li>
  </ul>
<!--
     <ul class="menu-right">
      <li class=" shop"><span><a href="/blog">News</a></span></li>
  </ul>
-->



</nav>
