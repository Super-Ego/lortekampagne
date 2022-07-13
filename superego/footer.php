<?
// Add backend footer code
$code_footer = get_theme_mod('setting_footer_code');

// Company info
$company_name = get_theme_mod('setting_firma_navn');
$company_address = get_theme_mod('setting_adresse');
$company_zipcode = get_theme_mod('setting_postnummer');
$company_city = get_theme_mod('setting_by');
$company_country = get_theme_mod('setting_land');
$company_vat = get_theme_mod('setting_cvr');

// Contact info
$company_email = get_theme_mod('setting_email');
$company_phone = get_theme_mod('setting_telefon');
$company_maps = get_theme_mod('setting_google_maps_url');

// Social media
$social_facebook = get_theme_mod('setting_facebook');
$social_linkedin = get_theme_mod('setting_linkedin');
$social_instagram = get_theme_mod('setting_instagram');
?>

<footer id="footer" class="footer bg-transparent py-20 lg:py-28" role="contentinfo">

  <div class="container lg:w-screen lg:px-0 lg:mx-0" data-animation="fade-up" 2>
    <h4 class="lg:w-screen text-white text-center text-h4-mobile md:text-h4 uppercase">Med støtte og opbakning fra</h4>
    <div class="lg:w-screen lg:px-6 flex flex-col lg:grid lg:gap-x-8 2xl:gap-x-2 lg:grid-cols-5 justify-center items-center pt-10 lg:pt-14">
      <div class="pb-8 xl:pb-0 lg:flex lg:justify-center lg:items-center">
        <?= svg_image("superego_neg") ?>
      </div>
      <div class="pb-8 xl:pb-0 lg:flex lg:justify-center lg:items-center">
        <?= svg_image("hede-nielsen_neg") ?>
      </div>
      <div class="pb-8 xl:pb-0 lg:flex lg:justify-center lg:items-center">
        <?= svg_image("horsens_neg") ?>
      </div>
      <div class="pb-8 xl:pb-0 lg:pb-0 lg:flex lg:justify-center lg:items-center">
        <?= svg_image("hansens-fond_neg") ?>
      </div>
      <div class="lg:flex lg:justify-center lg:items-center">
        <?= svg_image("lungeforeningen_neg") ?>
      </div>
    </div>
  </div>

</footer> <!-- end footer -->

</div> <!-- end #wrapper -->

<? wp_footer(); ?>

<? if ($code_footer) : echo $code_footer;
endif; ?>

</body> <!-- end body -->

<? get_template_part('/template-parts/parts/admin-menu'); ?>

</html> <!-- end page -->