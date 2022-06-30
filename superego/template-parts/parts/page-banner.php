<section id="page-banner" class="section page-banner bg-primary-b h-screen max-h-[560px] flex items-center text-white">
    <div class="container">
        <h1 id="page-banner-title" class="text-current"><? the_title(); ?></h1>
        <p class="mt-6 max-w-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis quaerat necessitatibus possimus deleniti nihil consectetur cupiditate ullam maxime totam. Cumque.</p>
        <div class="mt-8">
            <?
            component('button', [
                'title' => 'Dette er en knap',
                'url' => '#!',
                'icon' => true,
                'variant' => 'medium',
            ])
            ?>
        </div>
    </div>
</section>