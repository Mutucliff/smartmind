<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	   <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	  <meta name="google-site-verification" content="tFUe2pnDI6enGkM-4ry56Qv2HWzBAFEEGsb0UiF5JiU" />
                      <title>Motorhub Limited Car Dealers - Nairobi</title>
 <meta name="description" content="Motorhub is a leading car dealership in Kenya dealing with importation and sale of new and second-hand motor vehicles sourced from Japan, Thailand, United Kingdom, Australia, South Africa and host of other countries."/> 
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Motorhub Limited Car Dealers - Nairobi" />
<meta property="og:description" content="Motorhub is a leading car dealership in Kenya dealing with importation and sale of new and second-hand motor vehicles sourced from Japan, Thailand, United Kingdom, Australia, South Africa and host of other countries."/>
<meta property="og:url" content="https://www.motorhub.co.ke"/>
<meta property="og:site_name" content="MotorHub" />
<meta name="twitter:title" content="Motorhub Limited Car Dealers - Nairobi" />
<meta name="twitter:description" content="Motorhub is a leading car dealership in Kenya dealing with importation and sale of new and second-hand motor vehicles sourced from Japan, Thailand, United Kingdom, Australia, South Africa and host of other countries."/>

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<header class="motorHeader" id="header">
            <div class="container-xl">
               <div class="row no-gutters justify-content-end align-items-start">
                  <a href="https://www.motorhub.co.ke" class="logo">
                  <img src="dependencies/images/logo.jpg" alt="Motor Hub Logo" class="logo" width="227px" height="86px">
                  <span class="text-indent">MotorHub</span>
                  </a>
                  <div class="col-lg-6 d-flex">
                     <p class="o-timing"> Office Hours : 8 am - 5 pm Daily</p>
					 <ul class="conNumb d-flex ms-4">
                        <li class="numb"><a href="tel:0727200200">0727 200 200 ,&nbsp;</a> <a href="tel:0798500000"> 0798 500 000</a></li></ul>
                  </div>
                  <div class="col-lg-6 d-flex justify-content-end">
                     <ul class="conNumb d-flex me-3">
                       
                        <li class="email"><a href="mailto:info@motorhub.co.ke">info@motorhub.co.ke</a></li>
                     </ul>
					 <ul class="login-menu">
					  <li class="loginRegister dropdown">
					  					 <a href="https://www.motorhub.co.ke/login" class="dropdown-toggle loginText">Login/Register <img src="https://www.motorhub.co.ke/assets/images/mh_login.svg" alt="Login/Register" class="d-none"></a>					  
					    					  
					  </li>
					</ul>
                  </div>
                  <div class="col-lg-6">
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"><p>Menu</p></span>
                     </button>
                     <nav class="collapse navbar-collapse" id="navbarsExample03">
                        <ul class="navbar-nav d-flex flex-row">
 
 								   
									   
<li class="nav-item

"><a class="nav-link "  href="https://www.motorhub.co.ke"  >Home</a>	</li> 

                              								   
									   
<li class="nav-item

 dropdown "><a class="nav-link " rel="noreferrer" href="#"  >Cars</a><span class="carret"></span>	 <ul class="dropdown-menu mega-dropdown-menu" aria-labelledby="dropdown03">
 <li class="nav-item"><a   href="https://www.motorhub.co.ke/all-stock">All Stock</a></li>
 <li class="nav-item"><a   href="https://www.motorhub.co.ke/in-stock">In Stock</a></li>
 <li class="nav-item"><a   href="https://www.motorhub.co.ke/shipping">Shipping</a></li>
 <li class="nav-item"><a   href="https://www.motorhub.co.ke/new-arrivals">New Arrivals</a></li>
</ul>
</li> 

                              								   
									   
<li class="nav-item

"><a class="nav-link "  href="<?= Yii::$app->urlManager->createUrl(['/site/about'])?>"  >About Us</a>	</li> 

                              								   
									   
<li class="nav-item

"><a class="nav-link "  href="<?= Yii::$app->urlManager->createUrl(['/site/contact'])?>"  >Contact Us</a>	</li> 

                              								   
									   
<li class="nav-item

"><a class="nav-link "  href="https://www.motorhub.co.ke/blog"  >Blog</a>	</li> 

                                                     <li class="nav-item d-none"><a class="nav-link " href="https://www.motorhub.co.ke/tradein">Trade In</a></li>
                        <li class="nav-item d-none"><a class="nav-link " href="https://www.motorhub.co.ke/financing">Financing</a></li>
						<li class="nav-item d-none"><a class="nav-link " href="https://www.motorhub.co.ke/wishlist">Wishlist</a></li>     
                        </ul>
                     </nav>
					    <div class="menuoverlay" >&nbsp;</div>
                  </div>
                  <div class="col-lg-6">
                     <ul class="d-flex searchBox">
                        <li class="position-relative">
						<form method="get" class="search-form" action="https://www.motorhub.co.ke/searchresult">		
		<input class="search-field searchst" id="search-field" type="text" name="q" id="q" value="" aria-required="false" autocomplete="off" placeholder="SEARCH" />
		<button class="searchBtn"><span class="screen-reader-text">Search</span><i class="fa fa-search"></i></button>
	</form>
	<div class="searchst1"></div>
						
						
						<!--<form name="search" class="inline-form">
						<input type="text" placeholder="Search" class="form-control"/>
						<button type="button" class="searchBtn">Search</button>
						
						</form>-->
						</li>
                        <li class="tradInBtn"><a href="https://www.motorhub.co.ke/tradein">Trade In</a></li>
                        <li class="finanBtn"><a href="<?= Yii::$app->urlManager->createUrl(['/site/financing'])?>">Financing</a></li>
						<li class="tradInBtn"><a style="margin-right: 0;" href="https://www.motorhub.co.ke/wishlist">Wishlist</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </header>


        <?= $content ?>
  

<footer class="footer py-5">
			<div class="container-xl">
				<div class="row ">
			<div class="col-lg-12 position-relative"><div class="totop" id="bottom" >                        
			<button role="button" type="button" class="text-white">Top</button>
                     </div>
				</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<ul class="fnav">
							<li><a href="#" role="button">Cars</a>
								<ul>
								<li><a href="https://www.motorhub.co.ke/all-stock">All Stock</a></li>
									<li><a href="https://www.motorhub.co.ke/in-stock">In Stock</a></li>
									<li><a href="https://www.motorhub.co.ke/shipping">Shipping</a></li>
									<li><a href="https://www.motorhub.co.ke/new-arrivals">New Arrivals</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
					<ul class="fnav">
							<li><a href="https://www.motorhub.co.ke/tradein">Trade In</a>
								<ul>
									<li><a href="https://www.motorhub.co.ke/financing">Financing</a></li>
									<li><a href="https://www.motorhub.co.ke/blog">Our Blog</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="col-lg-5 col-md-6 col-sm-6">
					
					<ul class="fnav">
							<li><a href="#" role="button">Top Brands</a>
								<ul class="cols-4">
									<li><a href="https://www.motorhub.co.ke/brand/toyota">Toyota</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/nissan">Nissan</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/volkswagen">Volkswagen</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/mercedes">Mercedes</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/peugeot">Peugeot</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/audi">Audi</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/isuzu">Isuzu</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/land-rover">Land Rover</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/honda">Honda</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/mitsubishi">Mitsubishi</a></li>
									<li><a href="https://www.motorhub.co.ke/brand/mazda">Mazda</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
					<ul class="fnav">
							<li><a href="https://www.motorhub.co.ke/about-us">About Us</a></li>
							</ul>
							<ul class="fnav">
							<li><a href="https://www.motorhub.co.ke/contact-us">Contact Us</a></li>
							</ul>
							<ul class="conNumb d-flex flex-column">
							<li class="o-timing text-white"> Office Hours : 8 am - 5 pm Daily</li>
                        <li class="numb text-white"><a href="tel:0727200200">0727 200 200,</a> <a href="tel:0798500000">0798 500 000</a></li>
                        <li class="email text-white"><a href="mailto:info@motorhub.co.ke">info@motorhub.co.ke</a></li>
                     </ul>
					</div>
				</div>
				</div>
		 
		 </footer>
         <div class="copyright py-4">
		
			<div class="container-xl">
				<div class="row">
					<div class="col-md-12 text-center position-relative">
					 
					<ul class="d-flex justify-content-center fsocial">
						<li><a href="https://www.facebook.com/motorhubkiamburd/" target="_blank" rel="noreferrer"><img src="https://www.motorhub.co.ke/assets/images/facebook.png" alt="FaceBook" width="13px" height="20px"><span class="text-indent">FaceBook</span></a></li>
						<li><a href="https://twitter.com/MotorhubLTD" target="_blank" rel="noreferrer"><img src="https://www.motorhub.co.ke/assets/images/twitter.png" width="27px" height="20px" alt="Twitter"><span class="text-indent">Twitter</span></a></li>
						<li><a href="https://www.instagram.com/motorhubkiamburoad" target="_blank" rel="noreferrer"><img src="https://www.motorhub.co.ke/assets/images/instagram.png" width="23px" height="23px" alt="Instagram"><span class="text-indent">Instagram</span></a></li>
						<li><a href="https://www.youtube.com/channel/UCMgZd3WefPNmmCl95j0wSrQ" target="_blank" rel="noreferrer"><img src="https://www.motorhub.co.ke/assets/images/youtube.png" width="30px" height="21px" alt="Youtube"><span class="text-indent">Youtube</span></a></li>
					</ul>
					<p class="text-white mb-0">Copyrights 2023 MOTOR HUB. All Rights Reserved.| <a href="https://www.motorhub.co.ke/privacy-policy-terms-of-use">Privacy Policy & Terms Of Use</a> | Designed & Developed by <a href="https://www.agencyafrica.com" target="_blank" rel="noreferrer"><img data-src="https://www.motorhub.co.ke/assets/images/AA_logo.svg" alt="Agency Africa" width="51px" height="38px"><span class="text-indent">Agency Africa</span></a></p>
					<div class="bottomChat">
						<a role="button" class="whatsappus"  target="_blank" href="https://web.whatsapp.com/send?phone=254798500000&amp;text=" rel="noreferrer"><img src="https://www.motorhub.co.ke/assets/images/whatsapp.png" width="40px" height="40px" alt="Whatsapp"></a>
						
					</div>
					</div>
				</div>
			</div>
		 </div>

		 		 
		 <div class="compareBoxWrapper" style=display:none>
		 <div class="container-xl">
		 <div class="row">
		 <div class="col-md-12 position-relative">
		 <div class="comapare-box">
                <a href="javascript:void(0);" role="button" class="close">X</a>
                <span class="chead"><a href="https://www.motorhub.co.ke/compare" class="btn btn-primary">Compare</a></span>                
              
            </div>
			<ul class="compareListing">
				     	</ul>
		 </div>
		  </div>
		   </div>
		    </div>
			
			 <div class="cta-btn">
            <ul>
               <li><a href="#theModal33" data-bs-toggle="modal" data-target="#theModal33"><img src="https://www.motorhub.co.ke/assets/images/Mb-CTA_Call.svg" alt="Call Us" width="20px" height="20px">Call</a></li>
              <li><a data-bs-toggle="modal" href="#theModal3" role="button" data-target="#theModal3" data-remote="https://www.motorhub.co.ke/forms/car_service" class="mob-search-form-btn"><img src="https://www.motorhub.co.ke/assets/images/CustomerCare.svg" alt="Quick Quote" class="mob-search-img" width="20px" height="20px">Service You Car

</a></li>
			  <li><a href="mailto:info@motorhub.co.ke" ><img src="https://www.motorhub.co.ke/assets/images/icon-mail.svg" alt="Mail Us" width="20px" height="15px"> Email</a></li>
             
            </ul>
         </div> 
			
		 <div class="socialFloat">
			<ul>
				<li><a href="https://www.facebook.com/motorhubkiamburd/" target="_blank" rel="noreferrer"><img width="13px" height="20px" src="https://www.motorhub.co.ke/assets/images/facebook.png" alt="FaceBook"><span class="text-indent">FaceBook</span></a></li>
						<li><a href="https://twitter.com/MotorhubLTD" target="_blank" rel="noreferrer"><img src="https://www.motorhub.co.ke/assets/images/twitter.png" width="27px" height="20px" alt="Twitter"><span class="text-indent">Twitter</span></a></li>
						<li><a href="https://www.instagram.com/motorhubkiamburoad" target="_blank" rel="noreferrer"><img src="https://www.motorhub.co.ke/assets/images/instagram.png" width="23px" height="23px" alt="Instagram"><span class="text-indent">Instagram</span></a></li>
						<li><a href="https://www.youtube.com/channel/UCMgZd3WefPNmmCl95j0wSrQ" target="_blank" rel="noreferrer"><img src="https://www.motorhub.co.ke/assets/images/youtube.png" width="30px" height="21px" alt="Youtube"><span class="text-indent">Youtube</span></a></li>	
			</ul>
		 </div>
      </div>

	  <div class="modal fade" id="theModal" aria-hidden="true" aria-labelledby="theModal2" tabindex="-1">
         <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header border-0 pt-5 flex-wrap flex-row justify-content-center align-items-center text-center">
                 <h5 class="modal-title display-2 w-100 text-center  mb-0 text-uppercase">Get A Quote</h5>
				 <p>Fill the below form. We will get back to you soon.</p>
                  
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body  modal-body1">
               </div>
               <div class="clearfix">
               </div>
            </div>
         </div>
      </div> 
	 <div class="modal fade" id="theModal2" aria-hidden="true" aria-labelledby="theModal2" tabindex="-1">
         <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header border-0 pt-5 flex-wrap flex-row justify-content-center align-items-center text-center">
                 <h5 class="modal-title display-2 w-100 text-center  mb-0 text-uppercase">Sell Your Car Today !!!</h5>
				 <p>Fill the below form. We will get back to you soon.</p>
                  
                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body  modal-body3">
               </div>
               <div class="clearfix">
               </div>
            </div>
         </div>
      </div>
	   
	   
	   <div class="modal fade" id="theModal3" aria-hidden="true" aria-labelledby="theModal3" tabindex="-1">

         <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header border-0 pt-5 flex-wrap flex-row justify-content-center align-items-center text-center">
                 <h5 class="modal-title display-2 w-100 text-center  mb-0 text-uppercase">Service My Car</h5>
				 <p>Fill the below form. We will get back to you soon.</p>
                  
                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body  modal-body4">
               </div>
               <div class="clearfix">
               </div>
            </div>
         </div>
      </div>
	  <div class="modal fade cta-contact"  aria-hidden="true" aria-labelledby="theModal33" tabindex="-1" id="theModal33">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content bg-red pd-center">
         <div class="modal-header">
            <h3 class="modal-title"></h3>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body mt-4">
            <div class="address">
               <!--<h4>Call Us</h4>-->
               <p><a href="tel:0727200200" onclick=""; style="color:#000"><i class="phone-icon"><img src="https://www.motorhub.co.ke/assets/images/phone-icon.png" width="14px" height="14px" alt="0727 200 200"></i> 0727 200 200 </a></p>
               <p><a href="tel:0798500000" onclick=""; style="color:#000"><i class="phone-icon"><img src="https://www.motorhub.co.ke/assets/images/phone-icon.png" alt="0798 500 000" width="14px" height="14px"></i> 0798 500 000 </a></p>
            </div>
         </div>
      </div>
   </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
