<section id="frontpage-banner" class="section bg-primary-b h-screen max-h-[800px] flex flex-col justify-center">
    <div class="container h-fit z-10" data-animation="fade-up">
        <h1 id="site-title" class="text-8xl text-white text-center mb-6"><? the_title(); ?></h1>
        <p class="text-white text-center mx-auto max-w-lg text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur laudantium expedita delectus temporibus ab voluptate sint neque ullam dignissimos impedit.</p>
        <div class="flex mx-auto justify-center mt-12">
            <?
            component('button', [
                'title' => "Det her er en knap 2",
                'id' => 2,
                'icon' => true,
                'class' => "text-lg",
            ]);
            ?>
        </div>
    </div>
    <div class="background-image add-overlay" data-animation="zoom">
        <?= wp_get_attachment_image(11, 'full', ['loading' => 'eager']); ?>
    </div>
</section>