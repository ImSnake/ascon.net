<?
use Bitrix\Main\Page\Asset;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/index.css');
$APPLICATION->SetTitle("");
?><div class="center container">
	<div class="central-banner">
 <img alt="banner" src="/local/templates/ascon_eng/images/banner/banner(1).jpg">
		<div class="banner__content">
			<div class="banner__heading">
				CENTRAL MOVING BANNER
			</div>
			<div class="banner__text">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis dicta eligendi eum fugiat, labore neque, odio pariatur quisquam quo soluta sunt tenetur ullam. Commodi ipsa odit quaerat quia tempora. Beatae, corporis dicta eligendi eum fugiat, labore neque, odio pariatur quisquam quo soluta sunt tenetur ullam. Commodi ipsa odit quaerat quia tempora.
				</p>
			</div>
			<div class="banner__btn">
				<a href="#">call to action</a>
			</div>
		</div>
		<div class="banner__nav">
			<div class="nav__point">
			</div>
			<div class="nav__point">
			</div>
			<div class="nav__point">
			</div>
		</div>
	</div>
	<div class="main">
		<div class="heading-orange">
			<div class="heading__arrow">
			</div>
			<div class="heading__text">
				 Key Products
			</div>
		</div>
		<div class="product-box left">
			<div class="product__img">
 <img alt="kompas-3d" src="/local/templates/ascon_eng/images/products/kompas/kompas-3d.jpg">
			</div>
			<div class="product__content">
				<div class="content__heading">
 <span class="logo-kompas"></span>
					KOMPAS-3D
				</div>
				<div class="content__text">
					<p>
						KOMPAS-3D is intended for creating three-dimensional associative models for individual parts and assembly units containing both original and standardized structural elements. A key feature of KOMPAS-3D is the use of its own mathematical core and parametric technologies developed by ASCON specialists.
					</p>
					<p>
						The system has a powerful functional for the project management including thousand sub-assemblies, parts and standard products. It supports all the capabilities of three-dimensional solid-state modeling that have become a standard for CAD/CAM designs.
					</p>
				</div>
				<div class="product__btn">
					<a href="z-kompas-3d.php">view</a>
				</div>
			</div>
		</div>
		<div class="product-box right">
			<div class="product__content">
				<div class="content__heading">
 <span class="logo-pilot"></span>
					Pilot-ICE
				</div>
				<div class="content__text">
					<p>
						Pilot-ICE — the next generation for managing and organizing your design data. The solution helps to organize effective collaborative work- also in case you are using different CAD-systems (compatible with all of them), alerts all team-members about file changes, provides easy work with versions.
					</p>
					<p>
						Pilot-ICE keeps your project data safe and helps you to assign and control the tasks.
					</p>
				</div>
				<div class="product__btn">
					<a href="#">view</a>
				</div>
			</div>
			<div class="product__img">
 <img alt="pilot-img" src="/local/templates/ascon_eng/images/products/pilot_cat-img.jpg">
			</div>
		</div>
		<div class="product-box left">
			<div class="product__img">
 <img alt="renga" src="/local/templates/ascon_eng/images/products/renga/renga.jpg">
			</div>
			<div class="product__content">
				<div class="content__heading">
 <span class="logo-renga"></span>
					Renga Architecture
				</div>
				<div class="content__text">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci corporis delectus quasi reiciendis sequi vel? Dolore doloribus eveniet, fuga iure necessitatibus odit sapiente sint tempore tenetur unde vero, voluptatem.
					</p>
					<p>
						Dolore doloribus eveniet, fuga iure necessitatibus odit sapiente sint tempore tenetur unde vero, voluptatem.
					</p>
				</div>
				<div class="product__btn">
					<a href="#">view</a>
				</div>
			</div>
		</div>
		<div class="product-box right">
			<div class="product__content">
				<div class="content__heading">
 <span class="logo-c3dlabs"></span>
					C3D Toolkit
				</div>
				<div class="content__text">
					<p>
						C3D Toolkit constructs geometric models, performs geometric calculations, and creates connections between the elements of geometric models. C3D Toolkit handles geometric models made in third-party applications and exports geometry to other 3D systems.
					</p>
					<p>
						C3D Toolkit comprises of a dynamic-link library, a demo application with complete source code, technical documentation, and additional support files for compatibility with many integrated development environments (IDE).
					</p>
				</div>
				<div class="product__btn">
					<a href="#">view</a>
				</div>
			</div>
			<div class="product__img">
 <img alt="c3d-labs-img" src="/local/templates/ascon_eng/images/products/c3d-labs_cat-img.jpg">
			</div>
		</div>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>