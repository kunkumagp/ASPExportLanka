<!-- resources/views/home.blade.php -->

@extends('layouts.web') @section('title', 'ASP Export Lanka - Home page')
@section('content')

<div id="header" class="app-header navbar navbar-expand-lg p-0">
    <div class="container-xxl px-3 px-lg-5">
        <button
            class="navbar-toggler border-0 p-0 me-3 fs-24px shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent"
        >
            <span class="h-2px w-25px bg-gray-500 d-block mb-1"></span>
            <span class="h-2px w-25px bg-gray-500 d-block"></span>
        </button>
        <a
            class="navbar-brand d-flex align-items-center position-relative me-auto"
            href="index-2.html"
        >
            <img
                src="assets/img/logo.png"
                class="invert-dark"
                alt
                height="22"
            />
            <span
                class="badge text-body text-opacity-75 fw-bold fs-10px position-absolute end-0 top-0 mt-n1 me-n4"
                >Bs5</span
            >
        </a>
        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="navbar-nav ms-auto mb-2 mb-lg-0 fw-500">
                <div class="nav-item me-2">
                    <a href="#home" class="nav-link">Home</a>
                </div>
                <div class="nav-item me-2">
                    <a href="#about" class="nav-link">About</a>
                </div>
                <div class="nav-item me-2">
                    <a href="#features" class="nav-link">Features</a>
                </div>
                <div class="nav-item me-2">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </div>
                <div class="nav-item me-2">
                    <a href="#testimonials" class="nav-link">Testimonials</a>
                </div>
                <div class="nav-item me-2">
                    <a href="#blog" class="nav-link">Blog</a>
                </div>
                <div class="nav-item me-2">
                    <a href="#contact" class="nav-link">Contact</a>
                </div>
            </div>
        </div>
        <div class="ms-3">
            <a
                href="index-2.html"
                class="btn btn-theme fw-bold rounded-pill px-3 py-2"
                >Get started <i class="fa fa-arrow-right ms-2 opacity-5"></i
            ></a>
        </div>
    </div>
</div>

<div
    id="home"
    class="py-5 position-relative bg-gray-900"
    data-bs-theme="dark"
    style="
        background-image: url(assets/img/landing/hero-cover.png);
        background-repeat: no-repeat;
        background-position: top left;
        background-size: auto 100%;
    "
>
    <div class="container-xxl p-3 p-lg-5">
        <div class="div-hero-content z-3 position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-6 fw-600 mb-2 mt-4">
                        Built with
                        <span class="text-theme">Studio</span>
                        Template
                    </h1>
                    <div class="fs-18px text-body text-opacity-75 mb-4">
                        Join thousands of users worldwide who rely on Studio
                        Template <br />
                        to kickstart their startups, enhance company projects,
                        hone creative skills, <br />
                        or tackle freelance tasks.
                    </div>

                    <div class="text-body text-opacity-35 text-center2 mb-4">
                        <i class="fab fa-bootstrap fa-2x fa-fw"></i>
                        <i class="fab fa-node-js fa-2x fa-fw"></i>
                        <i class="fab fa-vuejs fa-2x fa-fw"></i>
                        <i class="fab fa-angular fa-2x fa-fw"></i>
                        <i class="fab fa-react fa-2x fa-fw"></i>
                        <i class="fab fa-laravel fa-2x fa-fw"></i>
                        <i class="fab fa-npm fa-2x fa-fw"></i>
                    </div>
                    <div class="mb-2">
                        <a href="index-2.html" class="btn btn-lg btn-theme px-3"
                            >Discover Our Template
                            <i class="fa fa-arrow-right ms-2 opacity-5"></i
                        ></a>
                    </div>
                    <hr class="my-4 opacity-1" />

                    <div class="row text-body mt-4 mb-4">
                        <div class="col-6 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <div class="h1 text-body text-opacity-25 me-3">
                                    <iconify-icon
                                        icon="bi:download"
                                    ></iconify-icon>
                                </div>
                                <div>
                                    <div class="fw-500 mb-0 h3">1.8k+</div>
                                    <div
                                        class="fw-500 text-body text-opacity-75"
                                    >
                                        Downloads / Purchases
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="h1 text-body text-opacity-25 me-3">
                                    <iconify-icon
                                        icon="bi:bootstrap"
                                    ></iconify-icon>
                                </div>
                                <div>
                                    <div class="fw-500 mb-0 h3">5.3.3</div>
                                    <div
                                        class="fw-500 text-body text-opacity-75"
                                    >
                                        Bootstrap Version
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="position-absolute top-0 bottom-0 end-0 w-50 ps-5 overflow-hidden d-lg-block d-none"
        >
            <img
                class="w-100 h-100 d-block position-relative object-fit-cover"
                alt="Studio"
                src="assets/img/landing/hero.jpg"
            />
        </div>
    </div>
</div>

<div id="about" class="py-5 bg-component">
    <div class="container-xxl p-3 p-lg-5 text-center">
        <h1 class="mb-3">About Studio</h1>
        <p class="fs-16px text-body text-opacity-50 mb-5">
            Studio Template crafts high-performance web applications for
            <br />developers, designers, and entrepreneurs, enabling effortless
            unleashing of creativity.
        </p>
        <div class="row text-start g-3 gx-lg-5 gy-lg-4">
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex">
                <div
                    class="w-50px h-50px rounded-3 bg-blue bg-opacity-15 text-blue fs-32px d-flex align-items-center justify-content-center"
                >
                    <iconify-icon
                        icon="solar:monitor-smartphone-bold-duotone"
                    ></iconify-icon>
                </div>
                <div class="flex-1 ps-3">
                    <h4>Responsive Design</h4>
                    <p class="mb-0">
                        Optimized for all devices, ensuring a seamless and
                        exceptional user experience everywhere.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex">
                <div
                    class="w-50px h-50px rounded-3 bg-indigo bg-opacity-15 text-indigo fs-32px d-flex align-items-center justify-content-center"
                >
                    <iconify-icon
                        icon="solar:settings-bold-duotone"
                    ></iconify-icon>
                </div>
                <div class="flex-1 ps-3">
                    <h4>Highly Customizable</h4>
                    <p class="mb-0">
                        Modify layouts, colors, and more with ease. Studio
                        Template offers unparalleled flexibility to adapt to
                        your specific needs.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex">
                <div
                    class="w-50px h-50px rounded-3 bg-warning bg-opacity-15 text-warning fs-32px d-flex align-items-center justify-content-center"
                >
                    <iconify-icon icon="solar:bolt-bold-duotone"></iconify-icon>
                </div>
                <div class="flex-1 ps-3">
                    <h4>High Performance</h4>
                    <p class="mb-0">
                        Fast loading times and efficient coding practices ensure
                        a smooth user experience, even under heavy traffic.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex">
                <div
                    class="w-50px h-50px rounded-3 bg-cyan bg-opacity-15 text-cyan fs-32px d-flex align-items-center justify-content-center"
                >
                    <iconify-icon
                        icon="solar:lock-keyhole-bold-duotone"
                    ></iconify-icon>
                </div>
                <div class="flex-1 ps-3">
                    <h4>Secure</h4>
                    <p class="mb-0">
                        Built with security in mind, protecting your data and
                        ensuring your complete peace of mind.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex">
                <div
                    class="w-50px h-50px rounded-3 bg-green bg-opacity-15 text-green fs-32px d-flex align-items-center justify-content-center"
                >
                    <iconify-icon
                        icon="solar:dialog-2-bold-duotone"
                    ></iconify-icon>
                </div>
                <div class="flex-1 ps-3">
                    <h4>Community Support</h4>
                    <p class="mb-0">
                        Join our vibrant community of developers and designers,
                        sharing insights and support.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex">
                <div
                    class="w-50px h-50px rounded-3 bg-red bg-opacity-15 text-red fs-32px d-flex align-items-center justify-content-center"
                >
                    <iconify-icon icon="solar:help-bold-duotone"></iconify-icon>
                </div>
                <div class="flex-1 ps-3">
                    <h4>24/7 Support</h4>
                    <p class="mb-0">
                        Our dedicated support team is always here to assist you
                        with any questions or issues you encounter.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex">
                <div
                    class="w-50px h-50px rounded-3 bg-pink bg-opacity-15 text-pink fs-32px d-flex align-items-center justify-content-center"
                >
                    <iconify-icon
                        icon="solar:tuning-bold-duotone"
                    ></iconify-icon>
                </div>
                <div class="flex-1 ps-3">
                    <h4>Scalable Infrastructure</h4>
                    <p class="mb-0">
                        Flexible and scalable infrastructure to meet diverse
                        business needs, ensuring reliability and performance.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex">
                <div
                    class="w-50px h-50px rounded-3 bg-gray-500 bg-opacity-15 text-gray-500 fs-32px d-flex align-items-center justify-content-center"
                >
                    <iconify-icon
                        icon="solar:widget-5-bold-duotone"
                    ></iconify-icon>
                </div>
                <div class="flex-1 ps-3">
                    <h4>Intuitive User Interface</h4>
                    <p class="mb-0">
                        Streamlined, intuitive interface designed for enhanced
                        productivity and creativity.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="features" class="py-5 position-relative" data-bs-theme="dark">
    <div class="container-xxl p-3 p-lg-5 z-2 position-relative">
        <div class="text-center mb-5">
            <h1 class="mb-3">Our Unique Features</h1>
            <p class="fs-16px text-body text-opacity-50 mb-5">
                Explore Studio Admin Template's standout features.
                <br />
                With advanced customization and seamless integration, create
                powerful and stunning <br />
                admin interfaces, enhancing productivity and user satisfaction.
            </p>
        </div>
        <div class="row g-3 g-lg-5">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-1.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-1-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    Theme Dashboard
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-2.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-2-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    POS System UI
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-3.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-3-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    Email Inbox
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-4.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-4-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    Pricing Page
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-5.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-5-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    User Profile
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-6.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-6-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    Analytics Page
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-7.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-7-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    Studio Widgets
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-8.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-8-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    Kitchen Order Page
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-9.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-9-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    Order Details Page
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-10.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-10-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">Messenger</div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-11.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-11-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    Table Control Page
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <a
                    href="assets/img/landing/mockup-12.jpg"
                    data-lity
                    class="shadow d-block"
                    ><img
                        src="assets/img/landing/mockup-12-thumb.jpg"
                        alt
                        class="mw-100"
                /></a>
                <div class="text-center my-3 text-body fw-bold">
                    Customer Order Page
                </div>
            </div>
        </div>
    </div>
    <div
        class="position-absolute bg-size-cover bg-position-center bg-no-repeat top-0 start-0 w-100 h-100"
        style="background-image: url(assets/img/landing/content-cover.jpg)"
    ></div>
    <div
        class="position-absolute bg-gray-900 bg-opacity-80 top-0 start-0 w-100 h-100"
    ></div>
</div>

<div id="pricing" class="py-5 bg-component">
    <div class="container-xxl p-3 p-lg-5">
        <h1 class="mb-3 text-center">Our Pricing Plans</h1>
        <p class="fs-16px text-body text-opacity-50 text-center mb-0">
            Choose the perfect plan that suits your needs. <br />Our pricing is
            designed to be flexible and affordable, providing value for
            businesses of all sizes. <br />Explore our plans to find the best
            fit for your requirements.
        </p>
        <div class="row g-3 py-3 gx-lg-5 py-lg-5">
            <div class="col-xl-3 col-md-4 col-sm-6 py-xl-5">
                <div class="card border-0 rounded-4 h-100 bg-light">
                    <div class="card-body fs-13px p-25px d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <div class="flex-1">
                                <div class="h6 font-monospace">
                                    Starter Plan
                                </div>
                                <div class="h2 fw-bold mb-0">
                                    $5
                                    <small class="h6 text-body text-opacity-50"
                                        >/month*</small
                                    >
                                </div>
                            </div>
                            <div>
                                <iconify-icon
                                    icon="solar:usb-bold-duotone"
                                    class="display-6 text-gray-500"
                                ></iconify-icon>
                            </div>
                        </div>
                        <hr class="my-3" />
                        <div class="mb-5 text-body text-opacity-75 flex-1">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Storage:</span
                                    >
                                    <b class="text-body">10 GB</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Bandwidth:</span
                                    >
                                    <b class="text-body">100 GB</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Domain Names:</span
                                    >
                                    <b class="text-body">1</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >SSL Certificate:</span
                                    >
                                    <b class="text-body"> Shared</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Email Accounts:</span
                                    >
                                    <b class="text-body"> 5</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >24/7 Support:</span
                                    >
                                    <b class="text-body"> Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Backup:</span
                                    >
                                    <b class="text-body"> Daily</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Uptime Guarantee:</span
                                    >
                                    <b class="text-body"> 99.9%</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >FTP Access:</span
                                    >
                                    <b class="text-body"> Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Control Panel:</span
                                    >
                                    <b class="text-body"> cPanel</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Free Domain:</span
                                    >
                                    <b class="text-body"> No</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Firewall:</span
                                    >
                                    <b class="text-body"> No</b>
                                </div>
                            </div>
                        </div>
                        <div class="mx-n2">
                            <a
                                href="#"
                                class="btn btn-default btn-lg fs-16px w-100 font-monospace"
                                >Get Started <i class="fa fa-arrow-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 py-xl-5">
                <div class="card border-0 rounded-4 h-100 bg-light">
                    <div class="card-body fs-13px p-25px d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <div class="flex-1">
                                <div class="h6 font-monospace">
                                    Booster Plan
                                </div>
                                <div class="h2 fw-bold mb-0">
                                    $10
                                    <small class="h6 text-body text-opacity-50"
                                        >/month*</small
                                    >
                                </div>
                            </div>
                            <div>
                                <iconify-icon
                                    icon="solar:map-arrow-up-bold-duotone"
                                    class="display-6 text-gray-500"
                                ></iconify-icon>
                            </div>
                        </div>
                        <hr class="my-3" />
                        <div class="mb-5 text-body text-opacity-75 flex-1">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Storage:</span
                                    >
                                    <b class="text-body">20 GB</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Bandwidth:</span
                                    >
                                    <b class="text-body">200 GB</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Domain Names:</span
                                    >
                                    <b class="text-body">2</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >SSL Certificate:</span
                                    >
                                    <b class="text-body"> Free</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Email Accounts:</span
                                    >
                                    <b class="text-body"> 10</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >24/7 Support:</span
                                    >
                                    <b class="text-body"> Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Backup:</span
                                    >
                                    <b class="text-body"> Daily</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Uptime Guarantee:</span
                                    >
                                    <b class="text-body"> 99.9%</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >FTP Access:</span
                                    >
                                    <b class="text-body"> Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Control Panel:</span
                                    >
                                    <b class="text-body"> cPanel</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Free Domain:</span
                                    >
                                    <b class="text-body"> No</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Firewall:</span
                                    >
                                    <b class="text-body"> No</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-times fa-lg text-body text-opacity-25"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >45-Day Money-Back Guarantee</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="mx-n2">
                            <a
                                href="#"
                                class="btn btn-default btn-lg fs-16px w-100 font-monospace"
                                >Get Started <i class="fa fa-arrow-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 py-xl-0">
                <div
                    class="card border-0 rounded-4 shadow bg-gradient-blue-indigo text-white h-100"
                    data-bs-theme="dark"
                >
                    <div
                        class="card-body fs-14px p-25px h-100 d-flex flex-column"
                    >
                        <div class="d-flex align-items-center">
                            <div class="flex-1">
                                <div class="h6 font-monospace">
                                    Premium Plan
                                </div>
                                <div class="h1 fw-bold mb-0">
                                    $15
                                    <small class="h6 text-body text-opacity-50"
                                        >/month*</small
                                    >
                                </div>
                            </div>
                            <div>
                                <iconify-icon
                                    icon="solar:cup-first-bold-duotone"
                                    class="display-5 text-white text-opacity-50"
                                ></iconify-icon>
                            </div>
                        </div>
                        <hr class="my-3" />
                        <div class="mb-5 text-body flex-1">
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Storage:</span
                                    >
                                    <b class="text-white">50 GB</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Bandwidth:</span
                                    >
                                    <b class="text-white">500 GB</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Domain Names:</span
                                    >
                                    <b class="text-white">Unlimited</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >SSL Certificate:</span
                                    >
                                    <b class="text-white">Free</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Email Accounts:</span
                                    >
                                    <b class="text-white">Unlimited</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >24/7 Support:</span
                                    >
                                    <b class="text-white">Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Backup:</span
                                    >
                                    <b class="text-white">Daily</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Uptime Guarantee:</span
                                    >
                                    <b class="text-white">99.9%</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >FTP Access:</span
                                    >
                                    <b class="text-white">Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Control Panel:</span
                                    >
                                    <b class="text-white">cPanel</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Free Domain:</span
                                    >
                                    <b class="text-white">No</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Firewall:</span
                                    >
                                    <b class="text-white">Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >E-commerce Support</span
                                    >
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i
                                    class="fa fa-check text-white text-opacity-50 fa-lg"
                                ></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >45-Day Money-Back Guarantee</span
                                    >
                                </div>
                            </div>
                        </div>
                        <a
                            href="#"
                            class="btn btn-light btn-lg fs-16px w-100 text-black font-monospace"
                            >Get Started
                            <i class="fa fa-arrow-right ms-3 opacity-5"></i
                        ></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 py-xl-5">
                <div class="card border-0 rounded-4 h-100 bg-light">
                    <div class="card-body fs-13px p-25px d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <div class="flex-1">
                                <div class="h6 font-monospace">
                                    Business Plan
                                </div>
                                <div class="h2 fw-bold mb-0">
                                    $99
                                    <small class="h6 text-body text-opacity-50"
                                        >/month*</small
                                    >
                                </div>
                            </div>
                            <div>
                                <iconify-icon
                                    icon="solar:buildings-bold-duotone"
                                    class="display-6 text-gray-500"
                                ></iconify-icon>
                            </div>
                        </div>
                        <hr class="my-3" />
                        <div class="mb-5 text-body text-opacity-75 flex-1">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Storage:</span
                                    >
                                    <b class="text-body">1 TB</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Bandwidth:</span
                                    >
                                    <b class="text-body">20 TB</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Domain Names:</span
                                    >
                                    <b class="text-body">Unlimited</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >SSL Certificate:</span
                                    >
                                    <b class="text-body">Free</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Email Accounts:</span
                                    >
                                    <b class="text-body">Unlimited</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check fa-lg text-gray-500"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >24/7 Support:</span
                                    >
                                    <b class="text-body">Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check text-gray-500 fa-lg"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Backup:</span
                                    >
                                    <b class="text-body"> Daily</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check text-gray-500 fa-lg"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Uptime Guarantee:</span
                                    >
                                    <b class="text-body">99.9%</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check text-gray-500 fa-lg"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >FTP Access:</span
                                    >
                                    <b class="text-body">Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check text-gray-500 fa-lg"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Control Panel:</span
                                    >
                                    <b class="text-body">cPanel</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check text-gray-500 fa-lg"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Free Domain:</span
                                    >
                                    <b class="text-body">Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check text-gray-500 fa-lg"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >Firewall:</span
                                    >
                                    <b class="text-body">Yes</b>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check text-gray-500 fa-lg"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >E-commerce Support</span
                                    >
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-check text-gray-500 fa-lg"></i>
                                <div class="flex-1 ps-3">
                                    <span class="font-monospace small"
                                        >45-Day Money-Back Guarantee</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="mx-n2">
                            <a
                                href="#"
                                class="btn btn-default btn-lg fs-15px w-100 font-monospace"
                                >Get Started <i class="fa fa-arrow-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="testimonials" class="py-5">
    <div class="container-xxl p-3 p-lg-5">
        <div class="text-center mb-5">
            <h1 class="mb-3 text-center">What Our Clients Say</h1>
            <p class="fs-16px text-body text-opacity-50 text-center mb-0">
                Read testimonials from our satisfied customers.
                <br />
                Discover how Studio Admin Template enhances productivity and
                exceeds expectations <br />
                with its ease of use, advanced features, and exceptional
                support.
            </p>
        </div>
        <div class="row g-3 g-lg-4 mb-4">
            <div class="col-xl-4 col-md-6">
                <div class="card p-4 border-0 h-100 rounded-5">
                    <div class="d-flex align-items-center mb-3">
                        <img
                            src="assets/img/user/user.jpg"
                            class="rounded-circle me-3 w-50px"
                            alt="Client 1"
                        />
                        <div>
                            <h5 class="mb-0">John Doe</h5>
                            <small class="text-muted">CEO, Company</small>
                        </div>
                    </div>
                    <div class="mb-4 d-flex">
                        <i
                            class="fa fa-quote-left fa-2x text-body text-opacity-15"
                        ></i>
                        <div class="p-3">
                            <div class="text-warning d-flex mb-2">
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                            </div>
                            Studio Admin Template transformed our workflow. The
                            customization options are unparalleled, and the
                            support team is incredibly responsive.
                        </div>
                        <div class="d-flex align-items-end">
                            <i
                                class="fa fa-quote-right fa-2x text-body text-opacity-15"
                            ></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card p-4 border-0 h-100 rounded-5">
                    <div class="d-flex align-items-center mb-3">
                        <img
                            src="assets/img/user/user-7.jpg"
                            class="rounded-circle me-3 w-50px"
                            alt="Client 1"
                        />
                        <div>
                            <h5 class="mb-0">Michael Brown</h5>
                            <small class="text-muted">CTO, Innovate Corp</small>
                        </div>
                    </div>
                    <div class="mb-4 d-flex">
                        <i
                            class="fa fa-quote-left fa-2x text-body text-opacity-15"
                        ></i>
                        <div class="p-3">
                            <div class="text-warning d-flex mb-2">
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                            </div>
                            Our productivity has soared since adopting this
                            template. The features are top-notch, and the user
                            experience is outstanding.
                        </div>
                        <div class="d-flex align-items-end">
                            <i
                                class="fa fa-quote-right fa-2x text-body text-opacity-15"
                            ></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card p-4 border-0 h-100 rounded-5">
                    <div class="d-flex align-items-center mb-3">
                        <img
                            src="assets/img/user/user-10.jpg"
                            class="rounded-circle me-3 w-50px"
                            alt="Client 1"
                        />
                        <div>
                            <h5 class="mb-0">Emily Johnson</h5>
                            <small class="text-muted"
                                >Project Manager, Creative Agency</small
                            >
                        </div>
                    </div>
                    <div class="mb-4 d-flex">
                        <i
                            class="fa fa-quote-left fa-2x text-body text-opacity-15"
                        ></i>
                        <div class="p-3">
                            <div class="text-warning d-flex mb-2">
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                            </div>
                            This template is a game-changer. It's intuitive,
                            flexible, and the seamless integration has made our
                            projects run smoother than ever.
                        </div>
                        <div class="d-flex align-items-end">
                            <i
                                class="fa fa-quote-right fa-2x text-body text-opacity-15"
                            ></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 d-none d-xl-block"></div>
            <div class="col-xl-4 col-md-6">
                <div class="card p-4 border-0 h-100 rounded-5">
                    <div class="d-flex align-items-center mb-3">
                        <img
                            src="assets/img/user/user-8.jpg"
                            class="rounded-circle me-3 w-50px"
                            alt="Client 1"
                        />
                        <div>
                            <h5 class="mb-0">David Lee</h5>
                            <small class="text-muted"
                                >Founder, Startup Hub</small
                            >
                        </div>
                    </div>
                    <div class="mb-4 d-flex">
                        <i
                            class="fa fa-quote-left fa-2x text-body text-opacity-15"
                        ></i>
                        <div class="p-3">
                            <div class="text-warning d-flex mb-2">
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                            </div>
                            Studio Admin Template has exceeded all our
                            expectations. The advanced features and excellent
                            support make it a standout choice.
                        </div>
                        <div class="d-flex align-items-end">
                            <i
                                class="fa fa-quote-right fa-2x text-body text-opacity-15"
                            ></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card p-4 border-0 h-100 rounded-5">
                    <div class="d-flex align-items-center mb-3">
                        <img
                            src="assets/img/user/user.jpg"
                            class="rounded-circle me-3 w-50px"
                            alt="Client 1"
                        />
                        <div>
                            <h5 class="mb-0">John Doe</h5>
                            <small class="text-muted">CEO, Company</small>
                        </div>
                    </div>
                    <div class="mb-4 d-flex">
                        <i
                            class="fa fa-quote-left fa-2x text-body text-opacity-15"
                        ></i>
                        <div class="p-3">
                            <div class="text-warning d-flex mb-2">
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                                <iconify-icon
                                    icon="ic:baseline-star"
                                    class="fs-18px"
                                ></iconify-icon>
                            </div>
                            Studio Admin Template transformed our workflow. The
                            customization options are unparalleled, and the
                            support team is incredibly responsive.
                        </div>
                        <div class="d-flex align-items-end">
                            <i
                                class="fa fa-quote-right fa-2x text-body text-opacity-15"
                            ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="blog" class="py-5 bg-component">
    <div class="container-xxl p-3 p-lg-5">
        <div class="text-center mb-5">
            <h1 class="mb-3 text-center">Our Latest Insights</h1>
            <p class="fs-16px text-body text-opacity-50 text-center mb-0">
                Dive into our blog for the latest trends, tips, and updates
                <br />
                on web development, design, and industry best practices. Stay
                informed and inspired <br />
                with expert insights and valuable resources.
            </p>
        </div>
        <div class="row g-3 g-xl-4 mb-5">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div
                    class="d-flex flex-column h-100 rounded-4 overflow-hidden shadow-lg mb-5 mb-lg-0"
                >
                    <div>
                        <img
                            src="assets/img/landing/blog-1.jpg"
                            alt
                            class="object-fit-cover h-200px w-100 d-block"
                        />
                    </div>
                    <div class="flex-1 p-3 pb-0">
                        <div class="mb-2">
                            <span
                                class="bg-theme bg-opacity-15 text-theme px-2 py-1 rounded small fw-bold"
                                >Web Design</span
                            >
                        </div>
                        <h5>
                            Mastering Responsive Design: A Guide for Beginners
                        </h5>
                        <p>
                            Explore the fundamentals of responsive web design
                            and learn essential tips to create websites that
                            look great on any device.
                        </p>
                    </div>
                    <div class="p-3 pt-0 text-body text-opacity-50">
                        July 15, 2024
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div
                    class="d-flex flex-column h-100 rounded-4 overflow-hidden shadow-lg mb-5 mb-lg-0"
                >
                    <div>
                        <img
                            src="assets/img/landing/blog-2.jpg"
                            alt
                            class="object-fit-cover h-200px w-100 d-block"
                        />
                    </div>
                    <div class="flex-1 p-3 pb-0">
                        <div class="mb-2">
                            <span
                                class="bg-theme bg-opacity-15 text-theme px-2 py-1 rounded small fw-bold"
                                >UXUI Design</span
                            >
                        </div>
                        <h5>The Future of UI/UX Trends in 2024</h5>
                        <p>
                            Discover the latest trends shaping user interface
                            and experience design in the digital landscape this
                            year.
                        </p>
                    </div>
                    <div class="p-3 pt-0 text-body text-opacity-50">
                        July 11, 2024
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div
                    class="d-flex flex-column h-100 rounded-4 overflow-hidden shadow-lg mb-5 mb-lg-0"
                >
                    <div>
                        <img
                            src="assets/img/landing/blog-3.jpg"
                            alt
                            class="object-fit-cover h-200px w-100 d-block"
                        />
                    </div>
                    <div class="flex-1 p-3 pb-0">
                        <div class="mb-2">
                            <span
                                class="bg-theme bg-opacity-15 text-theme px-2 py-1 rounded small fw-bold"
                                >Search Engine</span
                            >
                        </div>
                        <h5>Effective SEO Strategies for 2024</h5>
                        <p>
                            Dive into actionable SEO strategies and tips to
                            boost your website’s visibility and drive organic
                            traffic.
                        </p>
                    </div>
                    <div class="p-3 pt-0 text-body text-opacity-50">
                        June 29, 2024
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div
                    class="d-flex flex-column h-100 rounded-4 overflow-hidden shadow-lg mb-5 mb-lg-0"
                >
                    <div>
                        <img
                            src="assets/img/landing/blog-4.jpg"
                            alt
                            class="object-fit-cover h-200px w-100 d-block"
                        />
                    </div>
                    <div class="flex-1 p-3 pb-0">
                        <div class="mb-2">
                            <span
                                class="bg-theme bg-opacity-15 text-theme px-2 py-1 rounded small fw-bold"
                                >Cyber Security</span
                            >
                        </div>
                        <h5>
                            Security Essentials: Protecting Your Website from
                            Cyber Threats
                        </h5>
                        <p>
                            Essential security measures and best practices to
                            safeguard your website and user data from cyber
                            threats.
                        </p>
                    </div>
                    <div class="p-3 pt-0 text-body text-opacity-50">
                        June 27, 2024
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a
                href="#"
                class="text-decoration-none text-body text-opacity-50 h6"
                >See More Company Stories <i class="fa fa-arrow-right ms-3"></i
            ></a>
        </div>
    </div>
</div>

<div id="contact" class="py-5">
    <div class="container-xl p-3 p-lg-5">
        <div class="text-center mb-5">
            <h1 class="mb-3 text-center">Get in Touch</h1>
            <p class="fs-16px text-body text-opacity-50 text-center mb-0">
                Contact us today to explore how our team can assist you. <br />
                Whether you have inquiries, need support, or want to discuss a
                partnership, <br />
                we're here to help. Reach out to us and let's start a
                conversation!
            </p>
        </div>
        <div class="row gx-3 gx-lg-5">
            <div class="col-lg-6">
                <h4>Contact Us to Discuss Your Project</h4>
                <p>
                    Do you have a project in mind? We’re eager to discuss it
                    with you. Whether you’re looking for advice, have questions,
                    or want to share your ideas, feel free to reach out.
                </p>
                <p>
                    <span class="fw-bolder">SeanTheme Studio, Inc</span><br />
                    795 Folsom Ave, Suite 600<br />
                    San Francisco, CA 94107<br /><br />
                    Monday - Friday: 9:00 AM - 6:00 PM<br />
                    Saturday - Sunday: Closed<br />
                    <br />
                    Phone:
                    <a href="#" class="text-theme">(123) 456-7890</a><br />
                    International:
                    <a href="#" class="text-theme">+11 (0) 123 456 78</a><br />
                    Email:
                    <a href="#" class="text-theme"
                        ><span
                            class="__cf_email__"
                            data-cfemail="d5a6a0a5a5baa7a195a6b0b4bba1bdb0b8b0fbb6bab8"
                            >[email&#160;protected]</span
                        ></a
                    >
                </p>
            </div>
            <div class="col-lg-6">
                <form
                    action="https://seantheme.com/studio/index.html"
                    method="GET"
                    name="form_contact_us"
                >
                    <div class="row gy-3 mb-3">
                        <div class="col-6">
                            <label class="form-label"
                                >First Name
                                <span class="text-theme">*</span></label
                            >
                            <input
                                type="text"
                                class="form-control form-control-lg fs-15px"
                            />
                        </div>
                        <div class="col-6">
                            <label class="form-label"
                                >Last Name
                                <span class="text-theme">*</span></label
                            >
                            <input
                                type="text"
                                class="form-control form-control-lg fs-15px"
                            />
                        </div>
                        <div class="col-6">
                            <label class="form-label"
                                >Email <span class="text-theme">*</span></label
                            >
                            <input
                                type="text"
                                class="form-control form-control-lg fs-15px"
                            />
                        </div>
                        <div class="col-6">
                            <label class="form-label"
                                >Phone <span class="text-theme">*</span></label
                            >
                            <input
                                type="text"
                                class="form-control form-control-lg fs-15px"
                            />
                        </div>
                        <div class="col-12">
                            <label class="form-label"
                                >Message
                                <span class="text-theme">*</span></label
                            >
                            <textarea
                                class="form-control form-control-lg fs-15px"
                                rows="8"
                            ></textarea>
                        </div>
                        <div class="col-12">
                            <button
                                type="submit"
                                class="btn btn-theme btn-lg btn-block px-4 fs-15px"
                            >
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div
    id="footer"
    class="py-5 bg-gray-800 text-body text-opacity-75"
    data-bs-theme="dark"
>
    <div class="container-xxl px-3 px-lg-5">
        <div class="row gx-lg-5 gx-3 gy-lg-4 gy-3">
            <div class="col-lg-3 col-md-6">
                <div class="mb-3">
                    <img
                        src="assets/img/logo.png"
                        class="w-80px invert-dark"
                        alt="Studio"
                    />
                </div>
                <p class="mb-4">
                    Studio is your go-to solution for creating stunning,
                    responsive, and high-performance web applications. Designed
                    for developers, designers, and entrepreneurs, it provides
                    the tools and flexibility needed to bring your creative
                    visions to life.
                </p>
                <h5>Follow Us</h5>
                <div class="d-flex">
                    <a href="#" class="me-2 text-body text-opacity-50"
                        ><i class="fab fa-lg fa-facebook fa-fw"></i
                    ></a>
                    <a href="#" class="me-2 text-body text-opacity-50"
                        ><i class="fab fa-lg fa-instagram fa-fw"></i
                    ></a>
                    <a href="#" class="me-2 text-body text-opacity-50"
                        ><i class="fab fa-lg fa-twitter fa-fw"></i
                    ></a>
                    <a href="#" class="me-2 text-body text-opacity-50"
                        ><i class="fab fa-lg fa-youtube fa-fw"></i
                    ></a>
                    <a href="#" class="me-2 text-body text-opacity-50"
                        ><i class="fab fa-lg fa-linkedin fa-fw"></i
                    ></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Newsroom</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Company Info</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Careers</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >For Investors</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Brand Resources</a
                        >
                    </li>
                </ul>
                <hr class="text-body text-opacity-50" />
                <h5>Services</h5>
                <ul class="list-unstyled">
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Web Development</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >App Development</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >SEO</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Marketing</a
                        >
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Resources</h5>
                <ul class="list-unstyled">
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Documentation</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Support</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >FAQs</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Community</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Tutorials</a
                        >
                    </li>
                </ul>
                <hr class="text-body text-opacity-50" />
                <h5>Legal</h5>
                <ul class="list-unstyled">
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Privacy Policy</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Terms of Service</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Cookie Policy</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Compliance</a
                        >
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Help Center</h5>
                <ul class="list-unstyled">
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Contact Form</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Live Chat Support</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Portal Help Center</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Email Support</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Technical Documentation</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Service Updates</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Developer API</a
                        >
                    </li>
                    <li class="mb-3px">
                        <a
                            href="#"
                            class="text-decoration-none text-body text-opacity-75"
                            >Knowledge Base</a
                        >
                    </li>
                </ul>
            </div>
        </div>
        <hr class="text-body text-opacity-50" />
        <div class="row">
            <div class="col-sm-6 mb-3 mb-lg-0">
                <div class="footer-copyright-text">
                    &copy; 2024 SeanTheme All Rights Reserved
                </div>
            </div>
            <div class="col-sm-6 text-sm-end">
                <div class="dropdown me-4 d-inline">
                    <a
                        href="#"
                        class="text-decoration-none dropdown-toggle text-body text-opacity-50"
                        data-bs-toggle="dropdown"
                        >United States (English)</a
                    >
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item"
                                >United States (English)</a
                            >
                        </li>
                        <li>
                            <a href="#" class="dropdown-item"
                                >China (简体中文)</a
                            >
                        </li>
                        <li>
                            <a href="#" class="dropdown-item"
                                >Brazil (Português)</a
                            >
                        </li>
                        <li>
                            <a href="#" class="dropdown-item"
                                >Germany (Deutsch)</a
                            >
                        </li>
                        <li>
                            <a href="#" class="dropdown-item"
                                >France (Français)</a
                            >
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">Japan (日本語)</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">Korea (한국어)</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item"
                                >Latin America (Español)</a
                            >
                        </li>
                        <li>
                            <a href="#" class="dropdown-item"
                                >Spain (Español)</a
                            >
                        </li>
                    </ul>
                </div>
                <a
                    href="#"
                    class="text-decoration-none text-body text-opacity-50"
                    >Sitemap</a
                >
            </div>
        </div>
    </div>
</div>

<div class="theme-panel">
    <a
        href="javascript:;"
        data-click="theme-panel-expand"
        class="theme-collapse-btn"
        ><i class="fa fa-cog"></i
    ></a>
    <div class="theme-panel-content">
        <ul class="theme-list clearfix">
            <li>
                <a
                    href="javascript:;"
                    class="bg-red"
                    data-theme="theme-red"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Red"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-pink"
                    data-theme="theme-pink"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Pink"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-orange"
                    data-theme="theme-orange"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Orange"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-yellow"
                    data-theme="theme-yellow"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Yellow"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-lime"
                    data-theme="theme-lime"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Lime"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-green"
                    data-theme="theme-green"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Green"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-teal"
                    data-theme="theme-teal"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Teal"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-cyan"
                    data-theme="theme-cyan"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Aqua"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li class="active">
                <a
                    href="javascript:;"
                    class="bg-blue"
                    data-theme
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Default"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-purple"
                    data-theme="theme-purple"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Purple"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-indigo"
                    data-theme="theme-indigo"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Indigo"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
            <li>
                <a
                    href="javascript:;"
                    class="bg-gray-600"
                    data-theme="theme-gray-600"
                    data-click="theme-selector"
                    data-bs-toggle="tooltip"
                    data-bs-trigger="hover"
                    data-bs-container="body"
                    data-bs-title="Gray"
                    data-original-title
                    title
                    >&nbsp;</a
                >
            </li>
        </ul>
        <hr class="mb-0" />
        <div class="row mt-10px pt-3px">
            <div class="col-9 control-label text-body-emphasis fw-bold">
                <div>
                    Dark Mode
                    <span
                        class="badge bg-theme text-theme-color ms-1 position-relative py-4px px-6px"
                        style="top: -1px"
                        >NEW</span
                    >
                </div>
                <div class="lh-sm fs-13px fw-semibold">
                    <small class="text-body-emphasis opacity-50">
                        Adjust the appearance to reduce glare and give your eyes
                        a break.
                    </small>
                </div>
            </div>
            <div class="col-3 d-flex">
                <div class="form-check form-switch ms-auto mb-0 mt-2px">
                    <input
                        type="checkbox"
                        class="form-check-input"
                        name="app-theme-dark-mode"
                        id="appThemeDarkMode"
                        value="1"
                    />
                    <label class="form-check-label" for="appThemeDarkMode"
                        >&nbsp;</label
                    >
                </div>
            </div>
        </div>
    </div>
</div>

@endsection