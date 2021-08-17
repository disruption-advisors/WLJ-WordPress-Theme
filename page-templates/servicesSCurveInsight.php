<?php
/*
  Template Name: Services - S Curve Insight
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "Critical Insight Into Your Team’s Potential",
  "tagline" => "Take your organization to the next level.",
  "corner-tag" => "S Curve Insight&trade; Platform",
  "cta-label" => "Request a Demo",
  "padding" => "pt-12 pb-16 lg:pt-28 lg:pb-8",
  "margin" => "mb-16 lg:mb-32",
  "img-src" => "/src/assets/images/services/sCurveApplication.png",
  "img-base-width" => "540",
  "img-base-height" => "676"
);

$iconLinksOpts = array(
  "headline" => "Power of the S Curve", 
  "tagline" => "This framework empowers you to maximize your growth and make progress toward what matters most",
  "links" => array(
    array("icon-src" => "/src/assets/images/icons/s-curve_distribution@3x.png", "icon-width" => "76", "icon-height" => "87", "title" => "S Curve Distribution", "info" => "See where your team is in their growth journey.", "href" => "#s-curve"),
    array("icon-src" => "/src/assets/images/icons/growth_accelerants@3x.png", "icon-width" => "90", "icon-height" => "87", "title" => "Growth Accelerants", "info" => "Identify and lean into strengths, mitigate weaknesses.", "href" => "#accelerants"),
    array("icon-src" => "/src/assets/images/icons/team_culture@3x.png", "icon-width" => "81", "icon-height" => "87", "title" => "Team Culture", "info" => "Assess your organization’s culture and health.", "href" => "#culture", "addt-styles" => "md:col-span-2"),
  ),
  "cta-label" => "Request a Demo"
); 

$tabsOpts = array(
  "tabs" => array(
    array("key" => "empower", "label" => "Empower Individuals", "content-src" => "template-parts/components/tabs/content/empowerIndividuals"),
    array("key" => "stengthen", "label" => "Strengthen Teams", "content-src" => "template-parts/components/tabs/content/strengthenTeams"),
    array("key" => "grow", "label" => "Grow an Organization", "content-src" => "template-parts/components/tabs/content/growAnOrganization")
  ),
  "addt-styles" => "mb-24"
);

$xSellOpts = array(
  "title" => "Power Up Your Experience with the Platform",
  "tagline" => "Combining the insight of the S Curve with our other services will supercharge your growth.",
  "cards" => array(
    array("src" => "template-parts/components/xSells/blocks/findACoach"),
    array("src" => "template-parts/components/xSells/blocks/scheduleAWorkshop"),
    array("src" => "template-parts/components/xSells/blocks/bookWhitneyJohnson")
  )
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/curvesWithImage', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/infoBlocks/iconLinks', null, $iconLinksOpts ); ?>
  <?php get_template_part( 'template-parts/components/tabs/basic', null, $tabsOpts); ?>
  <?php get_template_part( 'template-parts/components/banners/getInsights'); ?>
  <?php get_template_part( 'template-parts/pages/services/s-curve/whatIsSCurveInsight'); ?>
  <?php get_template_part( 'template-parts/pages/services/s-curve/features'); ?>
  <?php get_template_part( 'template-parts/components/banners/getInsights'); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/s-curve' ); ?>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner' ); ?>
  <?php get_template_part( 'template-parts/components/xSells/basic', null, $xSellOpts ); ?>
<?php get_footer(); ?>