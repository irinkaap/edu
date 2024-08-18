<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */?>

<div class="slide-one-item home-slider owl-carousel">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?if (is_array($arItem["PREVIEW_PICTURE"])):?>
		<div class="site-blocks-cover" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);" data-aos="fade"
		data-stellar-background-ratio="0.5">
	<?endif;?>

	<div class="text">
        <h2><?echo $arItem["NAME"]?></h2>
        <?echo $arItem["PREVIEW_TEXT"];?>

		<p class="mb-0"><a href="<?$arItem["PROPERTIES"]['LINKS']['VALUE']?>" class="text-uppercase small letter-spacing-1 font-weight-bold">Подробнее</a></p>

      </div>
    </div>

<?endforeach;?>	

