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

<footer id="footer" class="footer bg-white py-20 lg:py-28" role="contentinfo">

  <div class="container" data-animation="fade-up"2>
    <h4 class="text-black text-center text-h4-mobile md:text-h4">MED STØTTE OG OPBAKNING FRA</h4>
    <div class="flex flex-col lg:grid lg:grid-cols-2 xl:grid-cols-4 justify-center items-center pt-10 lg:pt-14">
      <div class="pb-8 xl:pb-0 lg:flex lg:justify-center lg:items-center">
        <?= svg_image("superego") ?>
      </div>
      <div class="pb-8 xl:pb-0 lg:flex lg:justify-center lg:items-center">
        <?= svg_image("hede-nielsen") ?>
      </div>
      <div class="pb-8 lg:pb-0 lg:flex lg:justify-center lg:items-center">
        <?= svg_image("hansens-fond") ?>
      </div>
      <div class="lg:flex lg:justify-center lg:items-center">
        <?= svg_image("horsens") ?>
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