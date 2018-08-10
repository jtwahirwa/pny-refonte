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





                    .feature-actuPro {background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot1->getPictureHomeSlot();?>'); }

                    .feature-pnypro {background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot2->getPictureHomeSlot();?>'); }

                    .feature-OTG-Micro-USB { background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot3->getPictureHomeSlot();?>'); }

                    .feature-xlr8 { background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot4->getPictureHomeSlot();?>'); }

                    .feature-ambassador {background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot5->getPictureHomeSlot();?>'); }

                    .feature-velocityx { background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .1)), url('/data/feature-module/<?php echo $slot6->getPictureHomeSlot();?>'); }


                    .tile { height:250px;max-width: 100%; padding: 3em 2em 2em 2em; background-repeat: repeat;background-color: rgba(15,15,15,0.5);background-position: center;  background-repeat: no-repeat; background-size: cover; }

                    .tile:hover { cursor: pointer } a.tile-button { background-color: rgba(100, 100, 100, .7); font-weight: 700; color: #fff; padding: 1em; text-transform: uppercase; font-size: .8em; }
                    a.tile-button:hover { background-color: rgba(255, 255, 255, 1); color: #000; font-weight: 700; }


                    h3 { font-size: 1.5em; color: #fff; margin: 0; max-width: 100%; height: auto}



                    .hvr-overline-airi { position: relative; display: inline-block; vertical-align: middle; overflow: hidden; box-shadow: 0 0 1px transparent; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); }

                    .hvr-overline-airi:before { content: ""; position: absolute; top: 0; right: 0; left: 0; z-index: -1; height: 20px; background: #996515; -webkit-transition-property: transform; transition-property: transform; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease-out; transition-timing-function: ease-out; -webkit-transform: translateY(-20px); transform: translateY(-20px); }

                    .hvr-overline-airi:hover:before, .hvr-overline-airi:focus:before, .hvr-overline-airi:active:before { -webkit-transform: translateY(0); transform: translateY(0); }


                    .hvr-overline-otg { position: relative; display: inline-block; vertical-align: middle; overflow: hidden; box-shadow: 0 0 1px transparent; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); }

                    .hvr-overline-otg:before { content: ""; position: absolute; top: 0; right: 0; left: 0; z-index: -1; height: 20px; background: #2098D1; -webkit-transition-property: transform; transition-property: transform; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease-out; transition-timing-function: ease-out; -webkit-transform: translateY(-20px); transform: translateY(-20px); }

                    .hvr-overline-otg:hover:before, .hvr-overline-otg:focus:before, .hvr-overline-otg:active:before { -webkit-transform: translateY(0); transform: translateY(0); }




                    .hvr-overline-pro-solution { position: relative; display: inline-block; vertical-align: middle; overflow: hidden; box-shadow: 0 0 1px transparent; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); }

                    .hvr-overline-pro-solution:before { content: ""; position: absolute; top: 0; right: 0; left: 0; z-index: -1; height: 20px; background: #008000; -webkit-transition-property: transform; transition-property: transform; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease-out; transition-timing-function: ease-out; -webkit-transform: translateY(-20px); transform: translateY(-20px); }

                    .hvr-overline-pro-solution:hover:before, .hvr-overline-pro-solution:focus:before, .hvr-overline-pro-solution:active:before { -webkit-transform: translateY(0); transform: translateY(0); }


                    .hvr-overline-xlr8 { position: relative; display: inline-block; vertical-align: middle; overflow: hidden; box-shadow: 0 0 1px transparent; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); }

                    .hvr-overline-xlr8:before { content: ""; position: absolute; top: 0; right: 0; left: 0; z-index: -1; height: 20px; background: #9E0B0F; -webkit-transition-property: transform; transition-property: transform; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease-out; transition-timing-function: ease-out; -webkit-transform: translateY(-20px); transform: translateY(-20px); }

                    .hvr-overline-xlr8:hover:before, .hvr-overline-xlr8:focus:before, .hvr-overline-xlr8:active:before { -webkit-transform: translateY(0); transform: translateY(0); }



                    .hvr-overline-ssd { position: relative; display: inline-block; vertical-align: middle; overflow: hidden; box-shadow: 0 0 1px transparent; -webkit-transform: perspective(1px) translateZ(0); transform: perspective(1px) translateZ(0); }

                    .hvr-overline-ssd:before { content: ""; position: absolute; top: 0; right: 0; left: 0; z-index: -1; height: 20px; background: #ebe41b; -webkit-transition-property: transform; transition-property: transform; -webkit-transition-duration: 0.3s; transition-duration: 0.3s; -webkit-transition-timing-function: ease-out; transition-timing-function: ease-out; -webkit-transform: translateY(-20px); transform: translateY(-20px); }

                    .hvr-overline-ssd:hover:before, .hvr-overline-ssd:focus:before, .hvr-overline-ssd:active:before { -webkit-transform: translateY(0); transform: translateY(0); }



                    .column { transition: all .2s ease-in;max-width: 100%; max-height:auto;
                    }


                    @media screen and (max-width: 64em) {
                      .tile h3 {
                        font-size: 16px;
                      }
                    }

                    @media screen and (max-width: 50em) {
                      .tile h3 {
                        font-size: 14px;
                      }
                    }

                    @media screen and (max-width: 30em){
                      .tile h3 {
                        font-size: 12px;
                      }
                    }

                    .feature-tile-section {
                      background-color: #000;

                    }
                    .pny-slots{background-color: black; height:500px;}



                </style>

                <div class="feature-tile-section">
                <div class="pny-slots">

                  <a class="" href="<?php echo $slot1->getLinkHomeSlot();?>">
                    <div class=" tile feature-actuPro col-sm-36 med-24 lg-6   column hvr-overline-airi">
                      <h3><?php echo stripslashes($slot1->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
                      <br>
                      <a class="tile-button" href="<?php echo $slot1->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                    </div>
                  </a>



                  <a class="" href="<?php echo $slot2->getLinkHomeSlot();?>">
                    <div class="tile feature-pnypro col-sm-36 med-36 lg-18  column hvr-overline-pro-solution">
                      <h3><?php echo stripslashes($slot2->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
                      <br>
                      <a class="tile-button" href="<?php echo $slot2->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                    </div>
                  </a>



                  <a class="" href="<?php echo $slot3->getLinkHomeSlot();?>">
                    <div class="tile feature-OTG-Micro-USB col-sm-12 med-12 lg-6  column hvr-overline-otg">
                      <h3><?php echo stripslashes($slot3->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
                      <br>
                      <a class="tile-button" href="<?php echo $slot3->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                    </div>
                  </a>



                  <a class="" href="<?php echo $slot4->getLinkHomeSlot();?>">
                    <div class="tile feature-xlr8 col-sm-12 col-med-12 lg-6  column hvr-overline-xlr8">
                      <h3><?php echo stripslashes($slot4->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
                      <br>
                      <a class="tile-button" href="<?php echo $slot4->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                    </div>
                  </a>




                  <a class="" href="<?php echo $slot5->getLinkHomeSlot();?>">
                    <div class="tile feature-ambassador col-sm-12 med-12 lg-6  column hvr-overline-otg">
                      <h3><?php echo stripslashes($slot5->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
                      <br>
                      <a class="tile-button" href="<?php echo $slot5->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                    </div>
                  </a>





                  <a class="" href="<?php echo $slot6->getLinkHomeSlot();?>">
                    <div class="tile feature-velocityx col-sm-12 med-12 lg-6   column hvr-overline-ssd">
                      <h3><?php echo stripslashes($slot6->getTextHomeSlot($language, DEFAULT_LANGUAGE));?></h3>
                      <br>
                      <a class="tile-button" href="<?php echo $slot6->getLinkHomeSlot();?>"><?php echo mb_strtoupper(toolsPny::getStaticRessource('btn_learn_more', $language, $tabLabelsFront), 'utf8') ; ?></a>
                    </div>
                  </a>
                </div></div>
                <div class="clear-both"></div>




