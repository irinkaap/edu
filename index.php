<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><p>
 <br>
</p>


<p>
	
	 <?
	 $GLOBALS['arrFilter'] = array("PROPERTY_PRIORITY_VALUE" => 'Приоритетная сделка');

	 $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"Slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "172 800",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PRIORITY",
			1 => "",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "Slider"
	),
	false
);?><br>
</p>
<p>

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
 <span class="icon mr-3 flaticon-house"></span>
					<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/include/flaticon-house.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
 <span class="icon mr-3 flaticon-rent"></span>
					<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/include/flaticon-rent.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
 <span class="icon mr-3 flaticon-location"></span>
					<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/include/flaticon-location.php"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>New Properties for You</h2>
				</div>
			</div>
		</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"new_properties", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "172 800",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "/obyavleniya/#ELEMENT_CODE#",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "IBLOCK_NAME",
			3 => "PROPERTY_AREAL",
			4 => "PROPERTY_FLOORS",
			5 => "PROPERTY_BATHROOMS",
			6 => "PROPERTY_GARAGE",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		
		"IBLOCK_TYPE" => "ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "new_properties"
	),
	false
);?>
</div></div>


<div class="site-section">
	<div class="container">


	<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "7 257 600",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "6",
		),
		"IBLOCK_TYPE" => "Servis",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
</p>
</div>
<p>
 <br>
</p>
<p>
	
		<div class="row justify-content-center">
			<div class="col-md-7 text-center mb-5">
				<div class="site-section-title">
					<h2>Our Services</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
				<h2 class="service-heading">Research Subburbs</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
				<h2 class="service-heading">Sold Houses</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
				<h2 class="service-heading">Security Priority</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
				<h2 class="service-heading">Research Subburbs</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
				<h2 class="service-heading">Sold Houses</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
				<h2 class="service-heading">Security Priority</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
		</div>
	</div>
</div>
<div class="site-section bg-light">
	<div class="container">



	<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "7 257 600",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "6",
		),
		"IBLOCK_TYPE" => "Servis",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
</p>
<p>
 <br>
</p>
<p>
		<div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center">
				<div class="site-section-title">
					<h2>Our Blog</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
 <a href="#"><img alt="Image" src="/local/templates/home/images/img_4.jpg" class="img-fluid"></a>
				<div class="p-4 bg-white">
 <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
					<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
 <a href="#"><img alt="Image" src="/local/templates/home/images/img_2.jpg" class="img-fluid"></a>
				<div class="p-4 bg-white">
 <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
					<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
 <a href="#"><img alt="Image" src="/local/templates/home/images/img_3.jpg" class="img-fluid"></a>
				<div class="p-4 bg-white">
 <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
					<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>