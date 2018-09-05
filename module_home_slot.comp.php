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





                  .feature-actuPro {background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?= $slot1->getPictureHomeSlot();?>'); }

                  .feature-pnypro {background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?= $slot2->getPictureHomeSlot();?>'); }

                  .feature-OTG-Micro-USB { background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?= $slot3->getPictureHomeSlot();?>'); }

                  .feature-xlr8 { background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?= $slot4->getPictureHomeSlot();?>'); }

                  .feature-ambassador {background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?= $slot5->getPictureHomeSlot();?>'); }

                  .feature-velocityx { background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?= $slot6->getPictureHomeSlot();?>'); }



              </style>


          <div class="  feature-tile-section">

              <div>
                <a class="" href="<?= $slot1->getLinkHomeSlot();?>">
                  <div class=" tile feature-actuPro col-sm-36 med-24 lg-6   column hvr-overline-airi">
                    <h6 class="title-slot"><?= stripslashes($slot1->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h6>
                    <br>
                    <a class="tile-button" href="<?= $slot1->getLinkHomeSlot();?>"><?= mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                  </div>
                </a>



                <a class="" href="<?= $slot2->getLinkHomeSlot();?>">
                  <div class="tile feature-pnypro col-sm-36 med-36 lg-18  column hvr-overline-pro-solution">
                   <h6 class="title-slot"><?= stripslashes($slot2->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h6>
                    <br>
                    <a class="tile-button" href="<?= $slot2->getLinkHomeSlot();?>"><?= mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                  </div>
                </a>



                <a class="" href="<?= $slot3->getLinkHomeSlot();?>">
                  <div class="tile feature-OTG-Micro-USB col-sm-12 med-12 lg-6  column hvr-overline-otg">
                   <h6 class="title-slot"><?= stripslashes($slot3->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h6>
                    <br>
                    <a class="tile-button" href="<?= $slot3->getLinkHomeSlot();?>"><?= mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                  </div>
                </a>



                <a class="" href="<?= $slot4->getLinkHomeSlot();?>">
                  <div class="tile feature-xlr8 col-sm-12 col-med-12 lg-6  column hvr-overline-xlr8">
                    <h6 class="title-slot"><?= stripslashes($slot4->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h6>
                    <br>
                    <a class="tile-button" href="<?= $slot4->getLinkHomeSlot();?>"><?= mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                  </div>
                </a>




                <a class="" href="<?= $slot5->getLinkHomeSlot();?>">
                  <div class="tile feature-ambassador col-sm-12 med-12 lg-6  column hvr-overline-otg">
                   <h6 class="title-slot"><?= stripslashes($slot5->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h6>
                    <br>
                    <a class="tile-button" href="<?= $slot5->getLinkHomeSlot();?>"><?= mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                  </div>
                </a>





                <a class="" href="<?= $slot6->getLinkHomeSlot();?>">
                  <div class="tile feature-velocityx col-sm-12 med-12 lg-6   column hvr-overline-xlr8">
                    <h6 class="title-slot"><?= stripslashes($slot6->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h6>
                    <br>
                    <a class="tile-button" href="<?= $slot6->getLinkHomeSlot();?>"><?= mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                  </div>
                </a>
            </div>


              <div class="clear-both"></div>




