<?
        $my_sections = CIBlockSection::GetList (
            Array("ID" => "ASC"),
            Array("IBLOCK_ID" => 2, "ACTIVE" => "Y"),
            false,
            Array('ID', 'NAME', 'CODE','PICTURE')
          );

          while($ar_fields = $my_sections->GetNext())
          { ?>
            <div class="price_list-section_item">
            <div class="block-h3">
              <h3><?=htmlspecialchars_decode($ar_fields['NAME']);?></h3>
            </div>
              <div class="section_item">
                <div class="section_item-data">
                      <?php
                        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "CODE","PROPERTY_*");
                  $arFilter = Array(
                    "IBLOCK_ID"=> 2,   // id инфоблока
                    'ACTIVE' => 'Y', // активность
                    "SECTION_ID" => $ar_fields['ID'],  // нужная секция
                  );
                 
                  $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, Array("nPageSize"=>50), $arSelect);    
                  while($ob = $res->GetNextElement()){ 
                    $arElement = $ob->GetFields(); 
                    $arElementProps = $ob->GetProperties();
                  ?>
                    <div class="accordion">
                          <div class="accordion-item">
                            <button aria-expanded="false">
                              <span class="accordion-title"><?=$arElement['NAME'];?></span>
                              <span class="icon" aria-hidden="true"> <img src="/local/templates/natura/img/services/price_arrow.svg" alt="<?=$arElement['NAME'];?>"> </span>
                            </button>
                              <div class="accordion-content">
                                <?php
                                  if( count( $arElementProps['service']['VALUE'] ) >= 1 && $arElementProps['service']['VALUE'] !== false ){
                                    for( $i=0; $i < count( $arElementProps['service']['VALUE'] ); $i++ ){?>
                                      <div class="price_item">
                                        <p><?=$arElementProps['service']['VALUE'][$i]['SUB_VALUES']['service_name']['VALUE']?></p>
                                        <span><?=$arElementProps['service']['VALUE'][$i]['SUB_VALUES']['service_price']['VALUE']?> ₽</span>
                                      </div>
                                    <?}
                                  }
                                ?>
                              </div>
                          </div>
                      </div>                    
                  <?
                  } 
                      ?>
                    </div>
                    <div class="section_item-image">
                <? if (CFile::GetPath($ar_fields['PICTURE']) !== null) {?>
                        <img class="price_list-section_item-picture" src="<?=CFile::GetPath($ar_fields['PICTURE']);?>" alt="<?=$ar_fields['NAME'];?>">
                <? } ?>
                    </div>
                  </div>
              </div>
        <?}

        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "CODE","PROPERTY_*");
        $arFilter = Array(
          "IBLOCK_ID"=> 2,   // id инфоблока
          'ACTIVE' => 'Y', // активность
          "ELEMENT_ID" => 30,  // нужная секция
        );
        $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, Array("nPageSize"=>50), $arSelect);    
        while($ob = $res->GetNextElement()){ 
          $arElement = $ob->GetFields(); 
          $arElementProps = $ob->GetProperties();
          if( $arElement['ID'] == 30 ){
            $price_list = CFile::GetPath( $arElementProps['price_list']['VALUE'] );
            break;
          }
        }
      ?>