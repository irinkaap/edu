<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



 <!-- Верхнее меню 
 <ul class="site-menu js-clone-nav d-none d-lg-block"> 

                <li class="active">
                  <a href="index.html">Home</a>
                </li>

                <li class="has-children">
                  <a href="properties.html">Properties</a>
                  <ul class="dropdown">
					
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Lease</a></li>

                    <li class="has-children">
                      <a href="#">Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li><a href="blog.html">Blog</a></li>

                <li><a href="about.html">About</a></li>

                <li><a href="contact.html">Contact</a></li>

              </ul>-->











<?if (!empty($arResult)):?>
<ul class="site-menu js-clone-nav d-none d-lg-block">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); // проверка и закрытие открытых тегов?>
	<?endif?> 

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 0): // если элемент первого уровня?>
			<li><a href="<?=$arItem["LINK"]?>><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
			<li class="has-children"><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul class="dropdown">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):// проверка прав прользователей?>

			<?if ($arItem["DEPTH_LEVEL"] == 0):?>
				<li><a href="<?=$arItem["LINK"]?>><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div></div>
<?endif?>