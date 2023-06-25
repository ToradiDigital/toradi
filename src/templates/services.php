<?php
include("header.php");
include("../models/SlideClass.php");
include("../models/ContentClass.php");
include("../models/ContentItem.php");
include("../models/Template.php");
include("../templates/mountTemplate.php");


//create Template
$template = new Template();
$template->setPageTitle("TORADI Services");
$template->setNavBarActiveLink("Services");

$slideImage1 = new SlideClass();
$slideImage1->setSlideImage("../static/images/logistic.jpeg");
$slideImage1->setSlideTitle("TORADI LOGISTIC HOLDING");
$slideImage1->setSlideDesciption("Bienvenue sur la plateforme de TORADI HOLDING");

$slideImage2 = new SlideClass();
$slideImage2->setSlideImage("../static/images/logistic.jpeg");
$slideImage2->setSlideTitle("TORADI LOGISTIC HOLDING 2");
$slideImage2->setSlideDesciption("Bienvenue sur la plateforme de TORADI HOLDING");

$slideImage3 = new SlideClass();
$slideImage3->setSlideImage("../static/images/logistic.jpeg");
$slideImage3->setSlideTitle("TORADI LOGISTIC HOLDING 3");
$slideImage3->setSlideDesciption("Bienvenue sur la plateforme de TORADI HOLDING");

$template->setSlideImages(array($slideImage1, $slideImage2, $slideImage3));

$contentClass = new ContentClass();
$contentClass->setContentStructur(1); //Structure 1 => display width card without space like third row on index page

$contentItem = new ContentItem();
$contentItem->setItemTitle("Analyse des marches");
$contentItem->setItemDescription("This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.");
$contentItem->setItemIcon("fa-solid fa-chart-pie");

$contentItem2 = new ContentItem();
$contentItem2->setItemTitle("Analyse des marches");
$contentItem2->setItemDescription("This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.");
$contentItem2->setItemIcon("fa-solid fa-handshake");

$contentItem3 = new ContentItem();
$contentItem3->setItemTitle("Analyse des marches");
$contentItem3->setItemDescription("This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.");
$contentItem3->setItemIcon("fa-solid fa-money-bill-trend-up");

$contentClass->setContentItems(array($contentItem, $contentItem2, $contentItem3,$contentItem3,$contentItem,$contentItem2,$contentItem));

$template->setTmpContent(array($contentClass));

$mountTemplate = new MountTemplate();


echo "
        <body>
    ";

include("navBar.php");
//include("slideshow.php");
$mountTemplate->mountTemplate($template);
include("footer.php");



echo "</body>";
