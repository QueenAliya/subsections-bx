<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Услуги косметологии и омоложения в Уфе - Дом красоты NATURA");
$APPLICATION->SetPageProperty("description", "Услуги по косметологии и омоложению в Уфе! Консультация и запись по телефону: 8(937)369-99-96. Откройте красоту своего тела и лица с лучшей стороны!");
$APPLICATION->SetTitle("Услуги косметологии и омоложения в Уфе - Дом красоты NATURA");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/another_page.css');
?>

<style>
  .services-header-banner{
    /* background-image: url('/local/templates/natura/img/services/services-new1920.png'); */
	  /* background-size: 100% 100%; */
    height: 600px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
  }
  .services-header-banner_back{
    position: absolute;
    top: 0;
    left: 0;
    background-image: url('/local/templates/natura/img/services/services-new1920.png');
    width: 100%;
    height: 100%;
    z-index: -1;
    background-position: 70%;
    background-size: 100%;
    background-repeat: no-repeat;
  }
  .services-header-banner h1{
    margin-bottom: 40px;
    font-family: 'Azo Sans 2';
    font-style: normal;
    font-weight: 300;
    font-size: 72px;
    line-height: 114.7%;
    text-align: center;
    color: #FFFFFF;
  }
  @media(min-width: 768px){
    #about_section .about_section-data:nth-child(2) .about_section-data_text{
      order: 2;
    }
    #about_section .about_section-data:nth-child(2) .about_section-data_image{
      order: 1;
    }
  }
  @media(min-width: 1024px){
    #about_section .about_section-data .about_section-data_text{
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
  }
  @media(min-width: 1200px){
    .price_list-section_item{
      position: relative;
    }
    .price_list-section_item::after{
      content: '';
      background-image: url(/local/templates/natura/img/services/separator.svg);
      background-size: 100%;
      width: 100vw;
      left: -114px;
      height: 200px;
      position: absolute;
      bottom: -185px;
      z-index: 10;
    }

    #about_section{
      position: relative;
    }
    #about_section::after{
      content: '';
      background-image: url(/local/templates/natura/img/services/after-element.svg);
      background-size: 100% 100%;
      width: 175px;
      right: -20px;
      height: 725px;
      position: absolute;
      top: 90px;
      z-index: 10;
    }
  }

  @media(min-width: 1920px){
    .price_list-section_item::after{
      left: -310px;
      height: 294px;
      position: absolute;
      bottom: -217px;
    }

    #feedback_section{
      padding: 116px 310px;
    }

    #about_section .section-title{
      
    }
    #about_section .about_section-data .about_section-data_image{
      width: fit-content;
    }
    #about_section .about_section-data{
      justify-content: center;
      grid-gap: 80px;
    }

    #price_list>.container>a{
      align-self: baseline;
      font-size: 14px;
      line-height: 19px;
      padding: 21px 40px;
    }
  }
  @media(max-width: 1550px){
    .services-header-banner_back{
      background-size: 130%;
    }
  }
  @media(max-width: 1440px){
    .services-header-banner{
      height: 550px;
    }
    .services-header-banner h1{
      font-size: 65px;
    }
    
  }
  @media(max-width: 1024px){
    .services-header-banner{
      height: 290px;
    }
    .services-header-banner h1{
      margin-bottom: 0;
    }
    .services-header-banner h1{
      font-size: 50px;
    }
  }
  @media(max-width: 768px){ 
    .services-header-banner_back{
     background-image: url('/local/templates/natura/img/services/s768.png');
    }   
    .services-header-banner h1{
      font-size: 40px;
    }
  }
  @media(max-width: 414px){
    .services-header-banner_back{
     background-image: url('/local/templates/natura/img/services/s375.png');
    } 
    .services-header-banner h1{
      font-size: 33px;
    }
    #about_section p{
      font-size: 14px;
    }
  }
</style>


<section class="services-header-banner">
  <div class="services-header-banner_back"></div>
  <div class="container">
    <h1>Услуги</h1>
  </div>
</section>
<section id="about_section">
  <div class="container">
    <p class="section-title">Откройте красоту своего лица с лучшей стороны.<br>
      В ДОМЕ КРАСОТЫ NATURA ПРЕДСТАВЛЕН ШИРОКИЙ СПЕКТР УСЛУГ, 
      КОТОРЫЕ ПОДОЙДУТ ДЛЯ КАЖДОГО ГОСТЯ. </p>
      
    <div class="about_section-data">
      <div class="about_section-data_text">
        <p>Оставьте заботы. Окунитесь в мир удовольствия и наслаждения собой в Доме красоты NATURA. 
        Всё самое лучшее для наших гостей. Специалисты используют в работе только оригинальные аппараты и сертифицированные 
        препараты с регистрационными удостоверениями.
        <br>
        <br>
        Видимый результат — Ваши красота, здоровье и молодость — сохранятся надолго.
        <br>
        <br>
        Наш приоритет — здоровье и комфорт наших гостей, ведь Ваша безопасность для нас превыше всего!
        </p>
      </div>
      <div class="about_section-data_image">
        <img src="/local/templates/natura/img/services/specialist.png" alt="Natura | Услуги">
      </div>
    </div>
  </div>
</section>
<section id="price_list">

  <div class="container">
    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"services_new", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "services_new",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTION_NAME" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "Services",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "DESCRIPTION",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "SIGN_UP_BUTTON",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "5",
		"VIEW_MODE" => "LIST",
		"FILTER_SECTION_ID" => "1",
		"ELEMENT_SORT_FIELD" => "LEFT_MARGIN",
		"ELEMENT_SORT_ORDER" => "ASC"
	),
	false
);?>
      <a href="<?=$price_list;?>" style="display: none; z-index: 15;" download="Прайс-лист">Полный прайс-лист</a>
  </div>


















  <script type="text/javascript">
    const items = document.querySelectorAll('.accordion button');

    function toggleAccordion() {
      const itemToggle = this.getAttribute('aria-expanded');

      for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
      }

      if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
      }
    }

    items.forEach((item) => item.addEventListener('click', toggleAccordion));
  </script>
</section>

<section id="feedback_section">
  <div class="container">
    <div class="feedback_section-title">
      <h4>Записаться<br/>на процедуру</h4>
      <p>Просто оставьте заявку и мы перезвоним вам</p>
    </div>
    <div class="feedback_section-data">
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.feedback",
        "section_feedback",
        Array(
          "AJAX_MODE" => "Y",
          "AJAX_OPTION_SHADOW" => "N",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_STYLE" => "Y",
          "AJAX_OPTION_HISTORY" => "N",
          "EMAIL_TO" => "spro@beznebes.ru",
          "EVENT_MESSAGE_ID" => array(),
          "OK_TEXT" => "Спасибо, ваше сообщение принято.",
          "REQUIRED_FIELDS" => array("NAME","AUTHOR_PHONE"),
          "USE_CAPTCHA" => "N"
        )
      );?>
    </div>
  </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>