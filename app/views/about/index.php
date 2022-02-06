<!-- <div class="container-fluid">
    <h1 class="mt-4 text-right">About Me</h1>
    <img src="<?= BASEURL; ?> /images/zuhril.jfif" width="200" class="rounded-circle shadow" alt="my img">
    <p></p>
</div> -->

<!-- About Section-->
<section class="page-section bg-primary text-white my-5" id="about">
    <div class="container mt-5">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">Halo nama saya <?= $data['nama']; ?> umur saya <?= $data['umur']; ?> tahun, saya seorang <?= $data['pekerjaan']; ?>. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quidem molestiae quibusdam eos nobis, ratione nesciunt exercitationem quo perspiciatis ducimus ex. Maxime.</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quidem molestiae </p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="<?= BASEURL; ?>/about/page">
                Blog
            </a>
        </div>
    </div>
</section>