<section id="frontpage-banner" class="section bg-primary-b h-screen max-h-[300px] sm:max-h-[350px] md:max-h-[450px] lg:max-h-[600px] xl:max-h-[700px] flex flex-col justify-center">
    <div class="w-screen h-fit z-10" data-animation="fade-up">
        <h1 id="site-title" class="px-8 md:px-0 text-h1-mobile lg:text-100px xl:text-120px 2xl:text-h1 font-semibold text-white text-center"><span class="text-secondary-b">DET ER</span><br>NOGET LORT<span class="text-light-2">!!!</span></h1>
    </div>
    <div class="background-image add-overlay" data-animation="zoom">
        <?= wp_get_attachment_image(25, "full", ["loading" => "eager"]) ?>
    </div>
</section>