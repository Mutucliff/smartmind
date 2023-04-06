<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use webvimark\modules\UserManagement\models\User;
use webvimark\modules\UserManagement\models\rbacDB\Role;
use frontend\models\Galleryvideos;

AppAsset::register($this);

?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Coderthemes" name="author" />
    <meta content="Coderthemes" name="author" />
   <link rel='shortcut icon' href='<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/crew.png"?>' type='image/x-icon' />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<style>
.dot {
  height: 15px;
  width: 15px;
  background-color: #46A049;
  border-radius: 50%;
 display: inline-block;
}

.dott {
  height: 15px;
  width: 15px;
  background-color: #E68900;
  border-radius: 50%;
  display: inline-block;
}


.fc-prev-button {
    color: #fff !important;
}

.fc-next-button {
    color: #fff !important;
}
    
@media screen and (max-width: 600px) {
  .companynamecl {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  }
}


</style>

<body class="light-menubar" data-layout="horizontal" style="">
<?php $this->beginBody() ?>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
            <header id="topnav">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
    
                            <li class="dropdown d-none d-lg-block">
                                <?php if(Yii::$app->getUser()->identity->countrycode=='KE'){ ?>
                                <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/flags/4x3/ke.svg"?>" alt="lang-image" height="12">
                                </a>
                                
                                <?php } else { ?>
                                 <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/flags/4x3/ng.svg"?>" alt="lang-image" height="12">
                                </a>
                                <?php } ?>

<!--                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                     item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/flags/germany.jpg"?>" alt="lang-image" class="mr-1" height="12"> <span
                                            class="align-middle">German</span>
                                    </a>

                                     item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/flags/italy.jpg"?>" alt="lang-image" class="mr-1" height="12"> <span
                                            class="align-middle">Italian</span>
                                    </a>

                                     item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/flags/spain.jpg"?>" alt="lang-image" class="mr-1" height="12"> <span
                                            class="align-middle">Spanish</span>
                                    </a>

                                     item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/flags/russia.jpg"?>" alt="lang-image" class="mr-1" height="12"> <span
                                            class="align-middle">Russian</span>
                                    </a>

                                </div>-->
                            </li>
                           
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                  <?php 
                                    //get users notificationscount
                                      $notificationmodel= new \frontend\modules\notification\models\Notifications();
                                     $cCount=$notificationmodel->getuserNotificationscount();
                                      ?>
                                 <span class="badge badge-pink rounded-circle noti-icon-badge"> <?= $cCount; ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow m-0"><span class="float-right">
                                            <span class="badge badge-danger float-right"><?= $cCount; ?></span>
                                            </span>Notification</h5>
                                    </div>

                                    <div class="slimscroll noti-scroll">
                                        <?php 
                                            //get users notifications
                                            $notificationmodel= new \frontend\modules\notification\models\Notifications();
                                            $alerts=$notificationmodel->getuserNotification();
                                            $count=0;
                                            foreach($alerts as $alert){
                                                if($count<5){
                                            ?>
                                        <!-- item-->
                                        <a href="<?= Yii::$app->urlManager->createUrl(['/notification/notification/viewall','id'=>$alert['id']])?>" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <p class="notify-details"><?=$alert['date']?>
                                                <small class="text-muted"><?=$alert['notification']?></small>
                                            </p>
                                        </a>
                                         <?php $count++; }}  ?>
                                    </div>

                                    <!-- All-->
                                    <a href="<?= Yii::$app->urlManager->createUrl(['/notification/notification/viewall'])?>" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all
                                        <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>
                            
                                <?php
                                       //$usersmodel= new frontend\models\User();
                                       //$users=$usersmodel->find()->where(['!=','employee_id',Yii::$app->getUser()->identity->employee_id])->all();
                                       //$usercount=$usersmodel->find()->where(['!=','employee_id',Yii::$app->getUser()->identity->employee_id])->andwhere(['active_statusshow'=>1])->count();
                                        

                                       $usersmodel= new frontend\models\User();
                                       $users=$usersmodel->find()->all();
                                       $usercount=$usersmodel->find()->where(['active_statusshow'=>1])->count();
                                ?>
                            
                            
                            
                            
                              <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-device-desktop noti-icon"></i>
                                    <span class="badge badge-pink rounded-circle noti-icon-badge"><?=$usercount ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <div class="dropdown-header noti-title">
                                       <h5 class="text-overflow m-0">
                                            <span class="float-right">
                                            <span class="badge badge-danger float-right"><?=$usercount ?></span>
                                            </span>
                                            Active Employees
                                        </h5>
                                    </div>

                                    <div class="slimscroll noti-scroll">
                                        
                                      <?php foreach($users as $user) { ?>
                                        <?php
                                        $seconds=strtotime(date('Y-m-d H:i:s')) - strtotime($user['lastloggedin']);
                                        $minutes=  floor($seconds/60);
                                        $hours= floor($minutes/60);
                                        $d=$hours/24;
                                        $days= floor($hours/24);
                                        $months= floor($days/30);
                                        
                                        $employeedata= \frontend\modules\humanresource\models\Employee::find()->where(['employee_id'=>$user['employee_id']])->one();
                                        
                                         ?>
                                     <!-- item-->
                                        <a href="#" class="dropdown-item notify-item" style="padding:1px 20px !important;margin:10px">
                                            <div class="notify-icon">
                                                  <?php 
                                                  //var_dump($employeedata['profile_pic']); exit;
                                                  ?>
                                                <img src="<?=$employeedata['profile_pic']  ?>" class="img-fluid rounded-circle" alt="" /> </div>
                                              
                                                <?php if($user->active_statusshow==1){ ?>
                                                <p class="notify-details" style="padding-top:10px"><?=$employeedata['name']?> <small class="float-right"><span class="dot"></span> <strong></strong></small></p>
                                                <p style="margin-left:90px;margin:1px !important">Active</p>
                                                <?php }else{ ?>
                                                  <p class="notify-details" style="padding-top:10px"><?=$employeedata['name']?>  <small class="float-right"><span class="dott"></span> <strong></strong></small></p>
                                               <p style="margin-left:90px;margin:1px !important">2 hrs ago</p>
                                                
                                                <?php } ?>
                                        </a>
                                      <?php } ?>
                                        
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all
                                        <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>
    
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <?php
                                      $myprofiledata= \frontend\modules\humanresource\models\Employee::find()->where(['employee_id'=>Yii::$app->getUser()->identity->employee_id])->one();
       
                                    ?>
                                    <?php if($myprofiledata['profile_pic']) { ?>
                                        <img src="<?=$myprofiledata['profile_pic']?>" alt="" class="rounded-circle">
                                     <?php }else {?>
                                             <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/users/avatar-1.jpg"?>" alt="user-image" class="rounded-circle">
                                      <?php  }?>
                                    
                                   
                                    <span class="pro-user-name ml-1">
                                        <?= $myprofiledata['email'] ?>  <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome...</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="<?= Yii::$app->urlManager->createUrl(['/site/myprofile','id'=>Yii::$app->getUser()->identity->employee_id])?>" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>Profile</span>
                                    </a>

                                    <!-- item-->
<!--                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span>Settings</span>
                                    </a>-->

                                    <!-- item-->
                                    <a href="<?= Yii::$app->urlManager->createUrl(['/user-management/auth/logout'])?>" class="dropdown-item notify-item">
                                        <i class="fe-lock"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="<?= Yii::$app->urlManager->createUrl(['/user-management/auth/logout'])?>" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>


    
    
                        </ul>
    
                        <!-- LOGO -->
                        <div class="logo-box">

                            <a href="<?= Yii::$app->urlManager->createUrl(['/'])?>" class="logo text-center logo-dark">
                                   <span class="logo-lg">
                                      <?php
               
                $client= new frontend\models\Clients();
                $client=  $client->getCompanydetails(Yii::$app->getUser()->identity->branch);  
                
               if($client->displaylogo==1){
                echo Html::img(Yii::$app->getUrlManager()->getBaseUrl().'/'.$client->company_logo, ['alt'=>'Logo', 'height'=>'40px','align'=>'middle']);
                } else { ?>
                <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/crew.png"?>" alt="" height="40">
                
                <?php } ?>

                                    <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                                </span>
                                <span class="logo-sm">
                             
                                                  <?php
               
                $client= new frontend\models\Clients();
                $client=  $client->getCompanydetails(Yii::$app->getUser()->identity->branch);  
                
                if($client->displaylogo==1){
                echo Html::img(Yii::$app->getUrlManager()->getBaseUrl().'/'.$client->company_logo, ['alt'=>'Logo', 'height'=>'40px','align'=>'middle']);
                } else { ?>
                <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/crew.png"?>" alt="" height="40">
                
                <?php } ?>

                                </span>
                            </a>

                            <a href="<?= Yii::$app->urlManager->createUrl(['/'])?>" class="logo text-center logo-light">
                                <span class="logo-lg">
                                    <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/crew.png"?>" alt="" height="40">
                                    <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                                </span>
                                <span class="logo-sm">
                                    <!-- <span class="logo-lg-text-dark">A</span> -->
                                    <img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/masterassets/assets/images/crew.png"?>" alt="" height="40">
                                </span>
                            </a>
                        </div>
    
                        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                
                            <li class="d-none d-sm-block">
                                <form class="app-search">
                                    <div class="app-search-box">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                          <a href="<?= Yii::$app->urlManager->createUrl(['/'])?>">
                         <li class="companynamecl">
                               <?php $company= new \frontend\models\Clients();
                               $name= $company->getCompanyname(Yii::$app->getUser()->identity->branch);
                               ?>
                                <span style="vertical-align: middle;line-height: 70px; color:#1FB8BF; font-size: 18px;"> <?= $name; ?>. </span>
                                  <?php if(Yii::$app->getUser()->identity->superadmin==1){ echo  Html::a('Quick Setup Guide', ['/QUICK%20GUIDE.pdf'], ['class'=>'btn btn-danger width-md', 'target'=>'_blank']); } ?>
                       
                              </li>
                             </a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end Topbar -->

                <div class="topbar-menu">
                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                 <!--dashboard-->
                                <li class="has-submenu">
                                    <a href="#"> <i class="fe-airplay"></i>Dashboard</a>
                                    <ul class="submenu">
                                    <?php if(User::canRoute('/site/index', $superAdminAllowed = TRUE)){?>
                                                <li><a style="color: red;" href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/videos?category=dashboard'])?>"> <?= Yii::t('app','Dashboard Video')?> </a></li>
                                               <?php } ?>
                                        <?php if(User::canRoute('/site/index', $superAdminAllowed = TRUE)){?>
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/index'])?>"> Main Dashboard</a></li>
                                          <?php } ?>
                                        
                                        <?php if(User::canRoute('/site/my-dashboard', $superAdminAllowed = TRUE)){?>
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/my-dashboard'])?>">My Dashboard</a></li>
                                        <?php } ?>
                                        
                                        <?php if(User::canRoute('/humanresource/transactionspayroll/payrolldashboard', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/transactionspayroll/payrolldashboard'])?>"> <?= Yii::t('app','Payroll Dashboard')?> </a></li>
                                               <?php } ?>
                                    
                                                      <?php if(User::canRoute('/site/client-dashboard', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/client-dashboard'])?>"> <?= Yii::t('app','Client Dashboard')?> </a></li>
                                               <?php } ?>
                                               
                                    </ul>
                                </li>
                                
                              <!--employees-->
                                <li class="has-submenu">
                                    <a href="#"><i class="fe-users"></i><strong>Employees</strong></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                            <?php if(User::canRoute('/humanresource/employee/onboardemployees', $superAdminAllowed = TRUE)){?>
                                                    <li><a style="color: red;" href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/videos?category=addemployee'])?>"> <?= Yii::t('app','Adding employee Tutorial')?> </a></li>
                                               <?php } ?>
                                               <?php if(User::canRoute('/humanresource/employee/onboardemployees', $superAdminAllowed = TRUE)){?>
                                                    <li><a style="color: red;" href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/videos?category=onoffboardingcheck'])?>"> <?= Yii::t('app','Checklist Tutorial')?> </a></li>
                                               <?php } ?>
                        
                                               

                                                <?php if(User::canRoute('/humanresource/employee/importemployeescsv', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/employee/importemployeescsv'])?>"> <?= Yii::t('app','Import Employees')?> </a></li>
                                               <?php } ?>
                                                <?php if(User::canRoute('/humanresource/employee/create', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/employee/create'])?>"> <?= Yii::t('app','Add Employees bio-data')?> </a></li>
                                               <?php } ?>
                                                    
                                               <?php if(User::canRoute('/humanresource/employee/viewmyprofile', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/employee/viewmyprofile'])?>"> <?= Yii::t('app','My Bio-data/Profile')?> </a></li>
                                               <?php } ?>
                        
                                                <?php if(User::canRoute('/humanresource/employee/viewemployees', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/employee/viewemployees'])?>"> <?= Yii::t('app','View employees')?> </a></li>
                                               <?php } ?>
                           
                                               
                                               <?php if(User::canRoute('/humanresource/onboardchecklist/index', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/onboardchecklist/index'])?>"> <?= Yii::t('app','Onboarding Checklist')?> </a></li>
                                               <?php } ?>

                                               <?php if(User::canRoute('/humanresource/employee/onboardemployees', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/employee/onboardemployees'])?>"> <?= Yii::t('app','Onboard Employees')?> </a></li>
                                               <?php } ?>
                                               
                                                       
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                            <?php if(User::canRoute('/humanresource/employee/onboardemployees', $superAdminAllowed = TRUE)){?>
                                                    <li><a style="color: red;" href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/videos?category=settings'])?>"> <?= Yii::t('app','Settings Tutorial')?> </a></li>
                                               <?php } ?>
                                               
                                            
                              
                                               <?php if(User::canRoute('/humanresource/employee/terminateemployee', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/employee/terminateemployee'])?>"> <?= Yii::t('app','OffBoard employees')?> </a></li>
                                               <?php } ?>
                                                    
                                                 <?php if(User::canRoute('/humanresource/offboardingchecklist/index', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/offboardingchecklist/index'])?>"> <?= Yii::t('app','OffBoarding Checklist')?> </a></li>
                                               <?php } ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <!--leave management-->
                                
                                <li class="has-submenu">
                                    <a href="#"><i class="fe-credit-card"></i><strong>Leaves/Off Day</strong></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                            <?php if(User::canRoute('/humanresource/leaveapp/create', $superAdminAllowed = TRUE)){?>
                                                    <li><a style="color: red;"  href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/videos?category=applyleave'])?>"> <?= Yii::t('app','Apply leave tutorial')?> </a></li>
                                               <?php } ?>
                                        
                                                
                        
                                                <?php // if(User::canRoute('/humanresource/leaveapp/myschedule', $superAdminAllowed = TRUE)){?>
                                                    <!--<li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/myschedule'])?>"> <?= Yii::t('app','My Schedule')?> </a></li>-->
                                               <?php  // } ?>
                        
                                                <?php if(User::canRoute('/humanresource/leaveapp/create', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/create'])?>"> <?= Yii::t('app','Apply leave')?> </a></li>
                                               <?php } ?>

                                                <?php if(User::canRoute('/humanresource/leaveapp/appprovedcalendar', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/appprovedcalendar'])?>"> <?= Yii::t('app','Company Leave Calendar')?> </a></li>
                                               <?php } ?>

                             
                                               <?php if(User::canRoute('/humanresource/leaveapp/applications', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/applications'])?>"> <?= Yii::t('app','Supervisor Approval')?> </a></li>
                                               <?php } ?>
                            
                                               <?php if(User::canRoute('/humanresource/leaveapp/applications2', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/applications2'])?>"> <?= Yii::t('app','HR Approval')?> </a></li>
                                               <?php } ?>
                                                     
                                               <?php if(User::canRoute('/humanresource/leaveapp/hrprint', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/hrprint'])?>"> <?= Yii::t('app','HR Print')?> </a></li>
                                               <?php } ?>
                                             
                                               <?php if(User::canRoute('/humanresource/leaveapp/hrapply', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/hrapply'])?>"> <?= Yii::t('app','HR Apply')?> </a></li>
                                               <?php } ?>
                                                
                                                <?php if(User::canRoute('/humanresource/leaveapp/timeoff', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/timeoff'])?>"> <?= Yii::t('app','Apply Timeoff')?> </a></li>
                                               <?php } ?>
                                                
                                                  <?php if(User::canRoute('/humanresource/leaveapp/supervisorapply', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/supervisorapply'])?>"> <?= Yii::t('app','Supervisor Apply')?> </a></li>
                                               <?php } ?>

                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                            <?php if(User::canRoute('/humanresource/leaveapp/create', $superAdminAllowed = TRUE)){?>
                                                    <li><a style="color: red;"  href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/videos?category=approveleaves'])?>"> <?= Yii::t('app','Approve leaves tutorial')?> </a></li>
                                               <?php } ?>
                                              <?php if(User::canRoute('/humanresource/leaveapp/myleave', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/myleave'])?>"> <?= Yii::t('app','My Leave Analyses')?> </a></li>
                                               <?php } ?>
                                               <?php if(User::canRoute('/humanresource/leaveapp/leavereport', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/leavereport'])?>"> <?= Yii::t('app','Annual Leave Report')?> </a></li>
                                               <?php } ?>
                                                      
                                               <?php if(User::canRoute('/humanresource/leaveapp/reportperleavetype', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/allemployees'])?>"> <?= Yii::t('app','Report per leave type')?> </a></li>
                                               <?php } ?>
                                                      
                                               <?php if(User::canRoute('/humanresource/leaveapp/leavebalances', $superAdminAllowed = TRUE)){?>
                                                       <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/leavebalances'])?>"> <?= Yii::t('app','Applications/Approved')?> </a></li>
                                               <?php } ?>
                           
                                                <?php if(User::canRoute('/humanresource/leaveapprovers/index', $superAdminAllowed = TRUE)){?>
                                                       <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapprovers/index'])?>"> <?= Yii::t('app','Leave Approvers')?> </a></li>
                                               <?php } ?>
                                                
                                                <?php if(User::canRoute('/humanresource/leaveapp/reportperleavetype', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/leaveapp/allemployees'])?>"> <?= Yii::t('app','Report per leave type')?> </a></li>
                                               <?php } ?>
                                               
                            
                                               <?php if(User::canRoute('/humanresource/holidays/index', $superAdminAllowed = TRUE)){?>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/holidays/index'])?>"> <?= Yii::t('app','Public Holidays')?> </a></li>
                                               <?php } ?>
                                               
                                                <?php if(User::canRoute('/humanresource/weekendsettings/index', $superAdminAllowed = TRUE)){?>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/weekendsettings/index'])?>"> <?= Yii::t('app','Weekend Settings')?> </a></li>
                                               <?php } ?>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <!--payroll and payslips-->
                                
                                <li class="has-submenu">
                                    <a href="#"><i class="fe-credit-card"></i><strong>Payroll</strong></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <span class="menu-title">Payroll</span>
                                                </li>
                                                <?php if(User::canRoute('/humanresource/transactionspayroll/create', $superAdminAllowed = TRUE)){?>
                                                     <li><a style="color: red;" href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/videos?category=payroll1'])?>"> <?= Yii::t('app','Payroll Tutorial')?> </a></li>
                                               <?php } ?>
                                               
                                               <?php if(User::canRoute('/humanresource/transactionspayroll/create', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/transactionspayroll/create'])?>"> <?= Yii::t('app','Post By Employee')?> </a></li>
                                               <?php } ?>
                             
                                                 <?php if(User::canRoute('/humanresource/transactionspayroll/postbulkview', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/transactionspayroll/postbulkview'])?>"> <?= Yii::t('app','Post All Basic Salaries')?> </a></li>
                                               <?php } ?>
                                                
                        
                                               <?php if(User::canRoute('/humanresource/transactionspayroll/runpayroll', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/transactionspayroll/runpayroll'])?>"> <?= Yii::t('app','Close Payroll Period')?> </a></li>
                                               <?php } ?>
                        
                                               <?php if(User::canRoute('/humanresource/transactionspayroll/initiateemilprocess', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/transactionspayroll/initiateemilprocess'])?>"> <?= Yii::t('app','Send Payroll Notifications')?> </a></li>
                                               <?php } ?>
                        
                                               <?php if(User::canRoute('/humanresource/transactionspayroll/reportsviews', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/transactionspayroll/reportsviews'])?>"> <?= Yii::t('app','Payroll Report')?> </a></li>
                                               <?php } ?>
                        
                                               <?php if(User::canRoute('/humanresource/transactionspayroll/checkoff', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/transactionspayroll/checkoff'])?>"> <?= Yii::t('app','Loan Check Off')?> </a></li>
                                               <?php } ?>
                            
                                               <?php if(User::canRoute('/humanresource/generalparams/index', $superAdminAllowed = TRUE)){?>
                                                       <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/generalparams/index'])?>"> <?= Yii::t('app','General Params')?> </a></li>
                                               <?php } ?>
                                                       
                                              
                                                       
                                               <?php if(User::canRoute('/humanresource/transactionspayroll/allpayslip', $superAdminAllowed = TRUE)){?>
                                                       <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/transactionspayroll/allpayslip'])?>"> <?= Yii::t('app','All Payslips')?> </a></li>
                                               <?php } ?>
                                            </ul>
                                        </li>
                                       
                                        
                                        <li>
                                            <ul>
                                                <li>
                                                <span class="menu-title"></span>
                                                </li>
                                                <li>
                                                <span class="menu-title"></span>
                                                </li>
                                                <?php if(User::canRoute('/humanresource/datesettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a style="color: red;" href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/videos?category=closepayroll'])?>"> <?= Yii::t('app','Close Payroll Tutorial')?> </a></li>
                                               <?php } ?>
                                               
                                        
                                               <?php if(User::canRoute('/humanresource/datesettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/datesettings/'])?>"> <?= Yii::t('app','Date Settings')?> </a></li>
                                               <?php } ?>
                                                    
                                               <?php if(User::canRoute('/humanresource/payrollcodes', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/payrollcodes/'])?>"> <?= Yii::t('app','Payroll Codes')?> </a></li>
                                               <?php } ?>
                        
                                                <?php if(User::canRoute('/humanresource/paye/index', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/paye/index'])?>"> <?= Yii::t('app','Paye Settings')?> </a></li>
                                               <?php } ?>
                                                      
                                               <?php if(User::canRoute('/humanresource/nssf/index', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/nssf/index'])?>"> <?= Yii::t('app','Nssf Settings')?> </a></li>
                                               <?php } ?>
                                                      
                                               <?php if(User::canRoute('/humanresource/nssf/index', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/nhif/index'])?>"> <?= Yii::t('app','Nhif Settings')?> </a></li>
                                               <?php } ?>
                                                
                                                <?php if(User::canRoute('/humanresource/transactionspayroll/payrolldashboard', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/transactionspayroll/payrolldashboard'])?>"> <?= Yii::t('app','Payroll Dashboard')?> </a></li>
                                               <?php } ?>
                                                      
                                               
                                            </ul>
                                        </li>
                                        
                                        
                                        
                                        <li>
                                            <ul>
                                                <li>
                                                    <span class="menu-title">Salary Advance</span>
                                                </li>
                                                <?php if(User::canRoute('/humanresource/salary/create', $superAdminAllowed = TRUE)){?>
                                                    <li><a style="color: red;" href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/videos?category=postpayroll'])?>"> <?= Yii::t('app','Payroll Tutorial')?> </a></li>
                                               <?php } ?>
                                               <?php if(User::canRoute('/humanresource/salary/create', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/create'])?>"> <?= Yii::t('app','Apply Advance')?> </a></li>
                                               <?php } ?>
                                                
                                               <?php if(User::canRoute('/humanresource/salary/hrapply', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/hrapply'])?>"> <?= Yii::t('app','Hr Apply Advance')?> </a></li>
                                               <?php } ?> 
                                                
                                               <?php if(User::canRoute('/humanresource/salary/myapplication', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/myapplication'])?>"> <?= Yii::t('app','My application')?> </a></li>
                                               <?php } ?> 
                                                     
                                               <?php if(User::canRoute('/humanresource/salary/applications', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/applications'])?>"> <?= Yii::t('app','Hr approval')?> </a></li>
                                               <?php } ?> 
                              
                                               <?php if(User::canRoute('/humanresource/salary/applications2', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/applications2'])?>"> <?= Yii::t('app','Finance approval')?> </a></li>
                                               <?php } ?> 
                                                
                                                      <?php if(User::canRoute('/humanresource/salary/advances', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/advances'])?>"> <?= Yii::t('app','Approved advance report')?> </a></li>
                                               <?php } ?> 
                                                      <?php if(User::canRoute('/humanresource/salary/advance', $superAdminAllowed = TRUE)){?>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/advance'])?>"> <?= Yii::t('app','Declined advance report')?> </a></li>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/advance'])?>"> <?= Yii::t('app','Received advance report')?> </a></li>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/advance'])?>"> <?= Yii::t('app','Received advance report')?> </a></li>
                                                      <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/salary/advance'])?>"> <?= Yii::t('app','Received advance report')?> </a></li>
                                               <?php } ?> 
                                            </ul>
                                        </li>
                                        
                                        
                                    </ul>
                                </li>
                              
                                <!--projects and tasks-->
                                 <li class="has-submenu">
                                    <a href="#"> <i class="fe-sidebar"></i><strong>Projects|Tasks</strong></a>
                                    <ul class="submenu">
                                        <?php if(User::canRoute('/monitoring/projects/index', $superAdminAllowed = TRUE)){?>
                                            <li><a href="<?= Yii::$app->urlManager->createUrl(['/monitoring/projects/index'])?>"> <?= Yii::t('app','Projects')?> </a></li>
                                        <?php } ?>
                                        <?php if(User::canRoute('/monitoring/project-activities/index', $superAdminAllowed = TRUE)){?>
                                            <li><a href="<?= Yii::$app->urlManager->createUrl(['/monitoring/project-activities/index'])?>"> <?= Yii::t('app','TaskBoard')?> </a></li>
                                        <?php } ?>
                                            
                                       <?php if(User::canRoute('/monitoring/project-activities/index', $superAdminAllowed = TRUE)){?>
                                            <li><a href="<?= Yii::$app->urlManager->createUrl(['/monitoring/project-activities/projecttasks'])?>"> <?= Yii::t('app','Projects Tasks')?> </a></li>
                                        <?php } ?>
                                        
                                         <?php if(User::canRoute('/monitoring/projectclients/index', $superAdminAllowed = TRUE)){?>
                                            <li><a href="<?= Yii::$app->urlManager->createUrl(['/monitoring/projectclients/index'])?>"> <?= Yii::t('app','Project Clients')?> </a></li>
                                        <?php } ?>
                                            
                                       <?php if(User::canRoute('/monitoring/tasktype/index', $superAdminAllowed = TRUE)){?>
                                            <li><a href="<?= Yii::$app->urlManager->createUrl(['/monitoring/tasktype/index'])?>"> <?= Yii::t('app','Task Type')?> </a></li>
                                        <?php } ?>
                                        
                                    </ul>
                                </li>                               
                                
                                <!--performance and appraisal-->
                             
                                 <li class="has-submenu">
                                    <a href="#"> <i class="fe-layers"></i><strong>Performance</strong></a>
                                    <ul class="submenu">

                                            <?php if(User::canRoute('/humanresource/appraisalstypes/index', $superAdminAllowed = TRUE)){?>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/appraisalstypes/index'])?>"> <?= Yii::t('app','+New Appraisal')?> </a></li>
                                            <?php } ?>

                                                         
          
                                            <?php if(User::canRoute('/humanresource/appraisal/selfappraisal', $superAdminAllowed = TRUE)){?>
                                                 <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/appraisal/selfappraisal'])?>"> <?= Yii::t('app','+Goals/Targets')?> </a></li>
                                            <?php } ?>
                        
                                            <?php if(User::canRoute('/humanresource/appraisal/selfappraisal', $superAdminAllowed = TRUE)){?>
                                                 <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/appraisal/selfappraisal'])?>"> <?= Yii::t('app','Self Appraisal')?> </a></li>
                                            <?php } ?>
                        
                                            <?php if(User::canRoute('/humanresource/appraisal/supervisorappraisal', $superAdminAllowed = TRUE)){?>
                                                  <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/appraisal/supervisorappraisal'])?>"> <?= Yii::t('app','Supervisor Appraisal')?> </a></li>
                                            <?php } ?> 
                        
                                            <?php if(User::canRoute('/humanresource/appraisal/hrappraisal', $superAdminAllowed = TRUE)){?>
                                                  <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/appraisal/hrappraisal'])?>"> <?= Yii::t('app','Hr Appraisal')?> </a></li>
                                            <?php } ?>
                        
                                            <?php if(User::canRoute('/humanresource/appraisal/dedappraisal', $superAdminAllowed = TRUE)){?>
                                                  <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/appraisal/dedappraisal'])?>"> <?= Yii::t('app','Manager Appraisal')?> </a></li>
                                            <?php } ?>
                        
                                            <?php if(User::canRoute('/humanresource/appraisal/reports', $superAdminAllowed = TRUE)){?>
                                                 <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/appraisal/reports'])?>"> <?= Yii::t('app','Appraisal Reports')?> </a></li>
                                            <?php } ?>

                                            <?php if(User::canRoute('/humanresource/partquestions/index', $superAdminAllowed = TRUE)){?>
                                                 <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/partquestions/index'])?>"> <?= Yii::t('app','+Soft Skills Questions')?> </a></li>
                                            <?php } ?>
                                    </ul>
                                </li>
                              
                                
                                <!--training and development--> 
                                
                               <li class="has-submenu">
                                    <a href="#"><i class="fe-file-plus"></i><strong>TimeSheet</strong></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>

                                               <?php if(User::canRoute('/humanresource/timesheet/importemployeestimesheetcsv', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/timesheet/importemployeestimesheetcsv'])?>"> <?= Yii::t('app','Import From Csv')?> </a></li>
                                               <?php } ?>
                                                    
                                               <?php if(User::canRoute('/humanresource/timesheet/index', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/timesheet/index'])?>"> <?= Yii::t('app','Supervisor Clock In/Out')?> </a></li>
                                               <?php } ?>
                                                    
                                               <?php if(User::canRoute('/humanresource/timesheet/personalclockin', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/timesheet/personalclockin'])?>"> <?= Yii::t('app','Employee Clock In/Out')?> </a></li>
                                               <?php } ?>
                        
                                               <?php if(User::canRoute('/humanresource/timesheet/allentries', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/timesheet/allentries'])?>"> <?= Yii::t('app','Attendance Entries')?> </a></li>
                                               <?php } ?>
                                                    
                        
                                               <?php if(User::canRoute('/humanresource/timesheet/reconsile', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/timesheet/reconsile'])?>"> <?= Yii::t('app','Reconsile Attendance')?> </a></li>
                                               <?php } ?> 
                        
                                               <?php if(User::canRoute('/humanresource/timesheet/masterroll', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/timesheet/masterroll'])?>"> <?= Yii::t('app','Master Attendance Sheet')?> </a></li>
                                               <?php } ?> 
                        
                                               <?php if(User::canRoute('/humanresource/timesheet/mytimesheet', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/timesheet/mytimesheet'])?>"> <?= Yii::t('app',' My Time Sheet')?> </a></li>
                                               <?php } ?> 
                                                     
                                               <?php if(User::canRoute('/timesheet/resources', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/timesheet/resources'])?>"> <?= Yii::t('app','Add Resource')?> </a></li>
                                               <?php } ?> 
                                                     
                                               <?php if(User::canRoute('/timesheet/timesheetitems/myreport', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/timesheet/timesheetitems/myreport'])?>"> <?= Yii::t('app','Add Timesheet Tasks')?> </a></li>
                                               <?php } ?>
                                                     
                                               <?php if(User::canRoute('/timesheet/timesheetitems/index', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/timesheet/timesheetitems/index'])?>"> <?= Yii::t('app','Timesheet Report')?> </a></li>
                                               <?php } ?>
                                                    
                                               <?php if(User::canRoute('/timesheet/timesheetitems/myreport', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/timesheet/timesheetitems/myreport'])?>"> <?= Yii::t('app','My Report')?> </a></li>
                                               <?php } ?>
                                                
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </li> 
                               
                                <!--recruitment-->
                                
                               <?php if(User::canRoute('/workflow/jobs/create', $superAdminAllowed = TRUE)){?>
                                <li class="has-submenu">
                                    <a href="#"> <i class="fe-user-plus"></i><strong>Recruitment</strong></a>
                                    <ul class="submenu">
                                        <?php if(User::canRoute('/workflow/jobs/create', $superAdminAllowed = TRUE)){?>
                                            <li><a href="<?= Yii::$app->urlManager->createUrl(['/workflow/jobs/create'])?>"> <?= Yii::t('app','Create job')?> </a></li>
                                        <?php } ?>
                        
                                        <?php if(User::canRoute('/workflow/jobs/index', $superAdminAllowed = TRUE)){?>
                                            <li><a href="<?= Yii::$app->urlManager->createUrl(['/workflow/jobs/index'])?>"> <?= Yii::t('app','Post/Edit Job')?> </a></li>
                                        <?php } ?>                   
                            
                                        <?php if(User::canRoute('/workflow/jobs/index1', $superAdminAllowed = TRUE)){?>
                                            <li><a href="<?= Yii::$app->urlManager->createUrl(['/workflow/jobs/index1'])?>"> <?= Yii::t('app','Shortlist Job Seekers')?> </a></li>
                                        <?php } ?> 
                            
                                        <?php if(User::canRoute('/workflow/jobapplications/applicants', $superAdminAllowed = TRUE)){?>
                                             <li><a href="<?= Yii::$app->urlManager->createUrl(['/workflow/jobapplications/applicants'])?>"> <?= Yii::t('app','View Job Seekers')?> </a></li>
                                        <?php } ?> 
                                        
                                    </ul>
                                </li>
                                 
                               <?php } ?> 
                                
                                <li class="has-submenu">
                                    <a href="#"><i class="fe-file-plus"></i><strong>Assets</strong></a>
                                    <ul class="submenu megamenu">
                                        <li>
                                            <ul>
                                               
                                             <?php if(User::canRoute('/inventory/inventory-issuance/request', $superAdminAllowed = TRUE)){?>
                                             <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/inventory-issuance/request'])?>">Request Items</a></li>
                                                  <?php } ?> 
                                             
                                              <?php if(User::canRoute('/inventory/inventory-issuance/myitems', $superAdminAllowed = TRUE)){?>
                                             <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/inventory-issuance/myitems'])?>">My Items</a></li>
                                                  <?php } ?>
                                             
                                             <?php if(User::canRoute('/inventory/inventory-record/create', $superAdminAllowed = TRUE)){?>
                                             <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/inventory-record/create'])?>">Add to Inventory</a></li>
                                                  <?php } ?>
                                              
                                             
                                              <?php if(User::canRoute('/inventory/inventory-record/index', $superAdminAllowed = TRUE)){?>
                                             <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/inventory-record/index'])?>">Manage Inventory</a></li>
                                                  <?php } ?>
                                             
                                               <?php if(User::canRoute('/inventory/inventory-issuance/create', $superAdminAllowed = TRUE)){?>
                                             <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/inventory-issuance/create'])?>">Issue Items</a></li>
                                                  <?php } ?>
                                             
                                               <?php if(User::canRoute('/inventory/inventory-issuance/index', $superAdminAllowed = TRUE)){?>
                                             <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/inventory-issuance/index'])?>">Manage Issued Items</a></li>
                                                  <?php } ?>
                                                
                                 
                                            </ul>
                                        </li>
                                      
                                    </ul>
                                </li>
                                
                                <li class="has-submenu">
                                    <a href="#">
                                        <i class="fe-settings"></i><strong>Others</strong> 
                                    </a>
                                    <ul class="submenu megamenu">
                                        
                                        <?php if(Yii::$app->getUser()->identity->branch=='CL-787631'){?>
                                        <li>
                                            <ul>
                                                <?php if(User::canRoute('/site/create', $superAdminAllowed = TRUE)){?>
                                                <li>
                                                    <span class="menu-title">Erp Clients</span>
                                                </li>
                                                 
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/create'])?>"> <?= Yii::t('app','Add Client')?> </a></li> 
                                                <?php } ?>
                                                     
                                                <?php if(User::canRoute('/site/showclients', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/showclients'])?>"> <?= Yii::t('app','Clients')?> </a></li> 
                                                <?php } ?>
                                                       
                                                <?php if(User::canRoute('/site/mpesa', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/mpesa'])?>"> <?= Yii::t('app','Mpesa Invoices')?> </a></li>     
                                                <?php } ?>
                                                    
                                                <?php if(User::canRoute('/site/mpesaclients', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/mpesaclients'])?>"> <?= Yii::t('app','Mpesa Payments')?> </a></li> 
                                                <?php } ?> 
                                                     
                                                <?php if(User::canRoute('/site/demo', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/demo'])?>"> <?= Yii::t('app','Demo Requests')?> </a></li> 
                                                <?php } ?> 
                                                    
                                                <?php if(User::canRoute('/site/demo', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/packages/create'])?>"> <?= Yii::t('app','Add Package')?> </a></li> 
                                                <?php } ?> 
                                                    
                                                <?php if(User::canRoute('/site/demo', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/packages/index'])?>"> <?= Yii::t('app','Packages')?> </a></li> 
                                                <?php } ?> 
                                                    
                                                <?php if(User::canRoute('/taxdeductionsconfig/index', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/taxdeductionsconfig/index'])?>"> <?= Yii::t('app','Deductions Fields Config')?> </a></li> 
                                                <?php } ?> 
                                                
                                                <?php if(User::canRoute('/banks/index', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/banks/create'])?>"> <?= Yii::t('app','Create Bank')?> </a></li>
                                                <?php } ?>
                                                     
                                                <?php if(User::canRoute('/banks/index', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/banks/index'])?>"> <?= Yii::t('app','View Banks')?> </a></li>
                                                <?php } ?>
                                                
                                                    
                                                    
                                                
                                            </ul>
                                        </li>
                                         <?php } ?>
                                        
                                         <?php if(Yii::$app->getUser()->identity->branch=='CL-787631'){?>
                                        <li>
                                            <ul>
                                                 <?php if(User::canRoute('/site/payments', $superAdminAllowed = TRUE)){?>
                                                <li>
                                                    <span class="menu-title">View Payaments</span>
                                                </li>
                                                
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/payments'])?>"> <?= Yii::t('app','View Client Payments')?> </a></li> 
                                                <?php } ?>
                                                
                                                 <?php if(User::canRoute('/workflow/country/create', $superAdminAllowed = TRUE)){?>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/workflow/country/create'])?>"> <?= Yii::t('app','Create Country')?> </a></li>
                                                <?php } ?> 

                                                <?php if(User::canRoute('/workflow/country/index', $superAdminAllowed = TRUE)){?>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/workflow/country/index'])?>"> <?= Yii::t('app','Manage Country')?> </a></li>
                                                <?php } ?>  
                                            </ul>
                                        </li>
                                        <?php } ?>
                                        
                                        
                                        <?php if(User::canRoute(['/events/eventstype/create'], $superAdminAllowed = TRUE)){?>
                                        <li>
                                            <ul>
                                                <li>
                                                    <span class="menu-title">Events</span>
                                                </li>
                                                 <?php if(User::canRoute('/events/eventstype/create', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/events/eventstype/create'])?>"> <?= Yii::t('app','create Event Type')?> </a></li> 
                                                <?php } ?>
                                                     <?php if(User::canRoute('/events/eventstype/index', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/events/eventstype/index'])?>"> <?= Yii::t('app','Manage Event Type')?> </a></li> 
                                                <?php } ?>
                                                    
                                                 <?php if(User::canRoute('/events/events/create', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/events/events/create'])?>"> <?= Yii::t('app','create Event')?> </a></li> 
                                                <?php } ?>
                                                     <?php if(User::canRoute('/events/events/index', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/events/events/index'])?>"> <?= Yii::t('app','Manage Event')?> </a></li> 
                                                <?php } ?>  
                                                    
                                                    <?php if(User::canRoute('/humanresource/expenses/index', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/expenses/index/'])?>"> <?= Yii::t('app','My Expenses')?> </a></li> 
                                                <?php } ?>
                                                     <?php if(User::canRoute('/humanresource/expenses/applications', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/expenses/applications'])?>"> <?= Yii::t('app','HR Approve')?> </a></li> 
                                                <?php } ?>
                                                    
                                                 <?php if(User::canRoute('/humanresource/expenses/create', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/expenses/create'])?>"> <?= Yii::t('app','HR Apply')?> </a></li> 
                                                <?php } ?>
                                                 <?php if(User::canRoute('/humanresource/expenses/create2', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/expenses/create2'])?>"> <?= Yii::t('app','Employee Apply')?> </a></li> 
                                                <?php } ?> 
                                                    <?php if(User::canRoute('/humanresource/expenses/approved', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/expenses/approved'])?>"> <?= Yii::t('app','Approved Expenses')?> </a></li> 
                                                <?php } ?> 
                                            </ul>
                                        </li>
                                        <?php } ?>
                                        
                                        
                                        
                                        
                                        
                                        
                                         <?php if(User::canRoute(['/humanresource/relationships/relationshipssettings'], $superAdminAllowed = TRUE)){?>
                                        <li>
                                            <ul>
                                                <li>
                                                    <span class="menu-title">Global Configs</span>
                                                </li>
                                                <?php if(User::canRoute('/humanresource/branches/branchsettings', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/branches/branchsettings'])?>"> <?= Yii::t('app','Branches config')?> </a></li>
                                                <?php } ?>
                                                     
                                                
                                                     
                                                <?php if(User::canRoute('/humanresource/department/departmentsettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/department/departmentsettings'])?>"> <?= Yii::t('app','Departments config')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/humanresource/designation/designationsettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/designation/designationsettings'])?>"> <?= Yii::t('app','Designation/Job Groups')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/humanresource/relationships/relationshipssettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/relationships/relationshipssettings'])?>"> <?= Yii::t('app','Add relationship')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/humanresource/specialty/specialtysettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/specialty/specialtysettings'])?>"> <?= Yii::t('app','Speciality Config')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/humanresource/grade/gradesettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/grade/gradesettings'])?>"> <?= Yii::t('app','Add Grades')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/humanresource/items/itemsettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/items/itemsettings'])?>"> <?= Yii::t('app','Add items')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/humanresource/itemtype/itemtypesettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/itemtype/itemtypesettings'])?>"> <?= Yii::t('app','Add Item type')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/humanresource/nature/naturesettings', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/nature/naturesettings'])?>"> <?= Yii::t('app','Nature config')?> </a></li>
                                                    
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/nature/naturesettings'])?>"> <?= Yii::t('app','Leave Types')?> </a></li>
                                                <?php } ?>
                                                
                                                 <?php if(User::canRoute('/user-management/user/showclient', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/user-management/user/showclient'])?>"> <?= Yii::t('app','Company Details')?> </a></li>
                                                <?php } ?>
                                                <?php if(User::canRoute('/galleryvideos/index', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/create'])?>"> <?= Yii::t('app','Create Video')?> </a></li>
                                                <?php } ?>
                                                <?php if(User::canRoute('/galleryvideos/index', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/galleryvideos/index'])?>"> <?= Yii::t('app','Videos')?> </a></li>
                                                <?php } ?>
                                                    
                                             
                                               
                                                
                                                
                                                
                                            </ul>
                                            
                                              <li>
                                            <ul>
                                               
                                              
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/issuance-status/create'])?>">Create issuance Status</a></li>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/issuance-status/index'])?>">Manage issuance Status</a></li>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/inventory-types/create'])?>">inventory Types</a></li>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/inventory/inventory-types/index'])?>">Manage inventory type</a></li>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/clientcompanydata/index'])?>">Business Team</a></li>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/humanresource/clientcompanydata/viewdetails'])?>">Onboarding Team</a></li>
                                                <li><a style=" color: blue" href="<?= Yii::$app->urlManager->createUrl(['/site/upload','id'=>Yii::$app->getUser()->identity->branch])?>">Upload Document</a></li>
                                                <li><a style=" color: blue" href="<?= Yii::$app->urlManager->createUrl(['/site/documentspage','id'=>Yii::$app->getUser()->identity->branch])?>">Documents</a></li>
                                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/issue'])?>">Tickets</a></li>
                                            </ul>
                                        </li>
                                        </li>
                                         <?php } ?>
                                        
                                        <?php if(User::canRoute(['/user-management/user/create','/user-management/user/index','/user-management/role/index','/user-management/permission/index','/user-management/auth-item-group/index'], $superAdminAllowed = TRUE)){?>
                                        <li>
                                            <ul>
                                                
                                                <li>
                                                    <span class="menu-title">Users</span>
                                                </li>
                                                <?php if(User::canRoute('/user-management/user/create', $superAdminAllowed = TRUE)){?>
                                                     <li><a href="<?= Yii::$app->urlManager->createUrl(['/user-management/user/create'])?>"> <?= Yii::t('app','create users')?> </a></li>
                                                <?php } ?>
                                                     
                                                <?php if(User::canRoute('/user-management/user/create2', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/user-management/user/create2'])?>"> <?= Yii::t('app','create Recruitment users')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/user-management/user/index', $superAdminAllowed = TRUE)){?>
                                                   <li><a href="<?= Yii::$app->urlManager->createUrl(['/user-management/user/index'])?>"> <?= Yii::t('app','users')?> </a></li>
                                                <?php } ?>
                                                   
                                                <?php if(User::canRoute('/user-management/role/index', $superAdminAllowed = TRUE)){?>
                                                   <li><a href="<?= Yii::$app->urlManager->createUrl(['/user-management/role/index'])?>"> <?= Yii::t('app','Roles')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/user-management/permission/index', $superAdminAllowed = TRUE)){?>
                                                   <li><a href="<?= Yii::$app->urlManager->createUrl(['/user-management/permission/index'])?>"> <?= Yii::t('app','Permission')?> </a></li>
                                                <?php } ?>

                                                <?php if(User::canRoute('/user-management/auth-item-group/index', $superAdminAllowed = TRUE)){?>
                                                   <li><a href="<?= Yii::$app->urlManager->createUrl(['/user-management/auth-item-group/index'])?>"> <?= Yii::t('app','Permission Groups')?> </a></li>
                                                <?php } ?>
                                                   
                                                <?php if(User::canRoute('/site/showclient', $superAdminAllowed = TRUE)){?>
                                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/showclient'])?>"> <?= Yii::t('app','Edit Company')?> </a></li> 
                                                <?php } ?> 
                                                
                                            </ul>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                 
                                
                               
                            </ul>
                            <!-- End navigation menu -->

                            <div class="clearfix"></div>
                        </div>
                        <!-- end #navigation -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end navbar-custom -->
            </header>
            <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row" style="margin-bottom:-34px !important"> 
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            
                                            
<!--                                            <li class="breadcrumb-item"> <?php //Breadcrumbs::widget([
//                                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//                                                     ])
                                                            ?>
                                                 <?php //Alert::widget() ?>
                                            </li>-->
                                               
                                            
                                            
                                            
<!--                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                            <li class="breadcrumb-item active">light Sidebar</li>-->
                                        </ol>
                                    </div>
                                    <p class="page-title">
                                         <?= Breadcrumbs::widget([
                                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                                     ]) ?>
                                                 <?php //Alert::widget() ?>
                                            
                                    </p>
                                    
                                    
                                    <?php //if (Yii::$app->session->getFlash('success') !== NULL){ ?>
<!--                                    <div class="alert alert-icon bg-transparent text-success alert-success alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <i class="mdi mdi-check-all mr-2"></i>
                                                    <strong>Well done!</strong> <?=  Yii::$app->session->getFlash('success'); ?>.
                                                </div>-->
                                    
                                    
                                    <?php //} ?>
                                    
                                    
                                    
                                      <?php if (Yii::$app->session->getFlash('success') !== NULL){ ?>
                                    <div class="alert alert-icon alert-success text-success alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <i class="mdi mdi-check-all mr-2"></i>
                                                    <strong>Well done!</strong> <?=  Yii::$app->session->getFlash('success'); ?>.
                                                </div>
                                     <?php } ?>
                                    
                                    
                                    <?php if (Yii::$app->session->getFlash('error') !== NULL){ ?>
                                        <div class="alert alert-icon alert-danger text-danger alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <i class="mdi mdi-block-helper mr-2"></i>
                                                    <strong>Deleted !</strong> <?=  Yii::$app->session->getFlash('error'); ?>.
                                                </div>
                                    
                                   <?php } ?>
                       
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                      <?=$content ?>
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                

            </div>

            <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2020 &copy; CREW  <a target="_blank" href="https://crew.africa/">-Crew Website </a> -Developed and designed by <a target="_blank" href="https://www.megashiftltd.com/">Megashift Technologies</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        

      

      

        
   
    



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>