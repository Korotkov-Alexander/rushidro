<?php
    global $USER;

    // выборка только активных разделов из инфоблока $IBLOCK_ID, в которых есть элементы
    // со значением свойства SRC, начинающееся с https://
    $arFilter = Array('IBLOCK_ID'=>53, "=SECTION_ID"=>"12551");
    $db_list = CIBlockSection::GetList(Array("SORT"=>"DESC"), $arFilter, true);

    $arItems = array();
    while($ar_result = $db_list->GetNext())
    {
        $arItems[] = $ar_result;
    }

    //Изменение размеров изображения
    foreach ($arItems as $key => $item) {
        $arFileTmp = CFile::ResizeImageGet(
            $item["PICTURE"],
            array("width" => 186, "height" => 124),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );

        $arItems[$key]["PREV_PICTURE"]["SRC"] = $arFileTmp["src"];
    }
    ?> 
<p align="justify">РусГидро, являясь социально ответственной компанией, вносит заметный вклад в экономическое и социальное развитие регионов присутствия. Участие компании в благотворительных проектах, поддержка социальных инициатив и содействие развитию регионов являются неотъемлемой частью деятельности РусГидро. 
  <br />
 
  <br />
 Компания рассматривает благотворительность как важнейший компонент своей деятельности. Главная цель благотворительности &ndash; создание благоприятных условий для устойчивого развития регионов присутствия объектов РусГидро, формирование благоприятной социальной среды и поддержка положительного имиджа компании. 
  <br />
 
  <br />
 ПАО &laquo;РусГидро&raquo; осуществляет благотворительную деятельность, руководствуясь <a href="http://www.rushydro.ru/sustainable_development/100827.html" target="_blank" >Политикой благотворительной и спонсорской деятельности</a>. Основными принципами реализации комплексной благотворительной программы являются: прозрачность, адресность и эффективность использования средств. 
  <br />
 
  <br />
 Приоритетными направлениями благотворительной программы РусГидро, в рамках которых ведётся системная работа, стали: </p>
 
<div class="volunteer_items"> <?
        foreach ($arItems as $item) {
            ?> 
  <div class="volunteer"> <a href="<?=$item['CODE']?>" > <img src="<?=$item["PREV_PICTURE"]["SRC"]?>"  /> </a> </div>
 <?
        }
        ?> </div>
 <?
    $arFilter = array('IBLOCK_ID' => 53, "=ID" => 12551);
    $rsSections = CIBlockSection::GetList(array(), $arFilter);
    while ($arSection = $rsSections->Fetch())
    {
        $description = $arSection["DESCRIPTION"];
    }
    ?> 
<p><?=$description?></p>
 
<style>

    /*
        Галерея на странице волонтерство
    */
    .volunteer_items {
 /*       display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-items: flex-start;
        align-content: flex-end;*/
    }

    div.volunteer {
        width: 30%;
        margin: 1.66%;
        padding-bottom: 10px;
        float: left;
    }

    div.volunteer img {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
    }
    div.volunteer p {
        font-weight: bold;
        font-size: 14px;
    }
</style>
