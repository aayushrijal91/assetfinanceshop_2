<?php $ctas = array(
    "7k" => "Assets Financed &amp; Businesses Helped",
    "$150m" => "Total business funding",
    "80+" => "Lenders to compare",
    "6.5" => "Years of business support",
    "98%" => "Client success rate",
); ?>

<div class="banner_2 banner_wrapper">
    <div class="container">
        <section class="banner">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="fs-72 fw-700 lh-1 text-capitalize text-white text-center text-lg-start">commercial Asset Finance Made Easy Australia Wide</h1>
                </div>
            </div>
            <div class="row gx-xl-5 gy-4 pt-5 pt-md-7">
                <div class="col-lg-7">
                    <div class="loanwidget" id="loanwidgetwrap">
                        <div class="fieldgroup loanwidgetfieldgroup fieldgroup-1">
                            <div class="fw-600 fs-32 text-primary mb-4 lh-1">What type of loan do you need?</div>
                            <div class="row g-3">
                                <div class="col-6 col-md text-center">
                                    <a href="javascript:;" class="text-decoration-none py-lg-4 py-4 d-block box rounded-10 bg-opacity-25 bg-lightpurple text-primary buttongroupmirror" data-loan="Vehicle Loan">
                                        <?= renderImg("car-loan.png", 'lib') ?>
                                        <div class="fw-500 mt-4">Vehicle</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md text-center">
                                    <a href="javascript:;" class="text-decoration-none py-lg-4 py-4 d-block box rounded-10 bg-opacity-25 bg-lightpurple text-primary buttongroupmirror" data-loan="Machinery Loan">
                                        <?= renderImg("equipment-loan.png", 'lib') ?>
                                        <div class="fw-500 mt-4">Machinery</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md text-center">
                                    <a href="javascript:;" class="text-decoration-none  py-lg-4 py-4 d-block box rounded-10 bg-opacity-25 bg-lightpurple text-primary buttongroupmirror" data-loan="Truck Loan">
                                        <?= renderImg("truck-loans.png", 'lib') ?>
                                        <div class="fw-500 mt-4 ">Truck</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md text-center">
                                    <a href="javascript:;" class="text-decoration-none py-lg-4 py-4 d-block box rounded-10 bg-opacity-25 bg-lightpurple text-primary buttongroupmirror" data-loan="Business Loan">
                                        <?= renderImg("business-loan.png", 'lib') ?>
                                        <div class="fw-500 mt-4 ">Business</div>
                                    </a>
                                </div>
                                <div class="col-6 col-md text-center">
                                    <a href="javascript:;" class="text-decoration-none py-lg-4 py-4 d-block box rounded-10 bg-opacity-25 bg-lightpurple text-primary buttongroupmirror" data-loan="Trailer Loan">
                                        <?= renderImg("trailer-loans.png", 'lib') ?>
                                        <div class="fw-500 mt-4 ">Trailer</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="fieldgroup loanwidgetfieldgroup fieldgroup-3 hidden">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="fw-700 fs-32 text-primary lh-1">How much do you want to borrow?</div>
                                <div class="fieldgroupprev btn bg-opacity-25 bg-lightpurple text-primary px-3 py-2 border-none rounded-pill">
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H17M1 7L6.81818 13M1 7L6.81818 1" stroke="#161529" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div id="" class="rangeform mb-5 position-relative">
                                <div class="row g-0 text-formlight fs-64 fw-600 mb-3 align-items-center">
                                    <div class="col d-flex">
                                        <span>$</span><input id="borrowtext" type="text" min="1000" max="30000" class="text border-0  text-formlight fw-600 w-100">
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript;;" class="btn btn-tertiary text-white fw-600 rounded-pill px-lg-4 p-2 py-lg-3 w-100 fieldgroupnext">Continue</a>
                                    </div>
                                </div>
                                <input type="range" min="5000" max="100000" value="50000" step="5000" class="w-100 slider" id="borrowrange">
                            </div>
                        </div>
                        <div class="fieldgroup loanwidgetfieldgroup fieldgroup-4 hidden">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="fw-700 fs-32 text-primary lh-1 mb-0">What’s your preferred loan term?</div>
                                <div class="fieldgroupprev-2 btn bg-opacity-25 bg-lightpurple text-primary px-3 py-2 border-none rounded-pill">
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H17M1 7L6.81818 13M1 7L6.81818 1" stroke="#161529" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div id="" class="rangeform  mb-5">
                                <div class="row text-formlight  gx-0  align-items-center mb-3">
                                    <div class="col-2 col-md-1 text-col">
                                        <span class="text-col"><input id="yeartext" type="text" min="1" max="7" class="fs-64 fw-600 text border-0 text-formlight w-100"></span>
                                    </div>
                                    <div class="col">
                                        <span class="fs-64 fw-600">years</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript;;" class="btn btn-tertiary text-white fw-600 rounded-pill px-lg-4 p-2 py-lg-3 w-100 loanwidgetsubmit">Continue</a>
                                    </div>
                                </div>
                                <input type="range" min="1" max="7" value="5" step="1" class="w-100 slider" id="yearrange">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-20 bg-tertiary p-4 text-white text-center fs-24 fw-300 h-100 d-flex align-items-center justify-content-center">
                        <div>Looking to secure financing for commercial assets in Australia? Whether you’re in the market for <span class="fw-500">new or used trucks, trailers, business vehicles, heavy machinery, construction and earthmoving equipment,</span> our brokers are well-equipped to help you find the right financing solution.</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="cta_wrapper">
            <div class="row gy-2">
                <?php foreach ($ctas as $key => $value) : ?>
                    <div class="col-md-4 col-lg">
                        <div class="banner_card">
                            <div class="row gy-md-2">
                                <div class="col-5 col-md-12">
                                    <div class="fs-64 fw-700 text-center text-primary"><?= $key ?></div>
                                </div>
                                <div class="col col-md-12">
                                    <div class="text-capitalize text-grey fs-24 fw-500"><?= $value ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<section class="solutions">
    <div class="container">
        <div class="row justify-content-center align-items-center pb-5 pb-md-7">
            <div class="col-md">
                <div class="fs-48 text-white fw-300 lh-1 text-center text-md-start">Streamline your finances with our <span class="text-primary fw-500">easy solutions</span></div>
            </div>
            <div class="col-auto d-none d-md-block">
                <a href="#form" class="btn btn-primary rounded-20 text-white fw-700 px-xl-5">Get Started</a>
            </div>
        </div>

        <div class="row justify-content-center gy-md-4 gy-xl-0" id="solutions-slider">
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-1.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4179 18.8059L15.125 19.513L15.8321 18.8059L22.0065 12.6315C22.3491 12.2889 22.9009 12.2889 23.2435 12.6315C23.5861 12.9741 23.5861 13.5259 23.2435 13.8685L15.7435 21.3685C15.5725 21.5395 15.35 21.625 15.125 21.625C14.9 21.625 14.6775 21.5395 14.5065 21.3685L10.7565 17.6185C10.4139 17.2759 10.4139 16.7241 10.7565 16.3815C11.0991 16.0389 11.6509 16.0389 11.9935 16.3815L14.4179 18.8059ZM17 1C8.19772 1 1 8.19772 1 17C1 25.8023 8.19772 33 17 33C25.8023 33 33 25.8023 33 17C33 8.19772 25.8023 1 17 1Z" stroke="#44D2FF" stroke-width="2" />
                            </svg>
                            <div>Fill in our short form</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-2.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4179 18.8059L15.125 19.513L15.8321 18.8059L22.0065 12.6315C22.3491 12.2889 22.9009 12.2889 23.2435 12.6315C23.5861 12.9741 23.5861 13.5259 23.2435 13.8685L15.7435 21.3685C15.5725 21.5395 15.35 21.625 15.125 21.625C14.9 21.625 14.6775 21.5395 14.5065 21.3685L10.7565 17.6185C10.4139 17.2759 10.4139 16.7241 10.7565 16.3815C11.0991 16.0389 11.6509 16.0389 11.9935 16.3815L14.4179 18.8059ZM17 1C8.19772 1 1 8.19772 1 17C1 25.8023 8.19772 33 17 33C25.8023 33 33 25.8023 33 17C33 8.19772 25.8023 1 17 1Z" stroke="#44D2FF" stroke-width="2" />
                            </svg>
                            <div>Get a free quote</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-3.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4179 18.8059L15.125 19.513L15.8321 18.8059L22.0065 12.6315C22.3491 12.2889 22.9009 12.2889 23.2435 12.6315C23.5861 12.9741 23.5861 13.5259 23.2435 13.8685L15.7435 21.3685C15.5725 21.5395 15.35 21.625 15.125 21.625C14.9 21.625 14.6775 21.5395 14.5065 21.3685L10.7565 17.6185C10.4139 17.2759 10.4139 16.7241 10.7565 16.3815C11.0991 16.0389 11.6509 16.0389 11.9935 16.3815L14.4179 18.8059ZM17 1C8.19772 1 1 8.19772 1 17C1 25.8023 8.19772 33 17 33C25.8023 33 33 25.8023 33 17C33 8.19772 25.8023 1 17 1Z" stroke="#44D2FF" stroke-width="2" />
                            </svg>
                            <div>Conditional approval</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-4.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4179 18.8059L15.125 19.513L15.8321 18.8059L22.0065 12.6315C22.3491 12.2889 22.9009 12.2889 23.2435 12.6315C23.5861 12.9741 23.5861 13.5259 23.2435 13.8685L15.7435 21.3685C15.5725 21.5395 15.35 21.625 15.125 21.625C14.9 21.625 14.6775 21.5395 14.5065 21.3685L10.7565 17.6185C10.4139 17.2759 10.4139 16.7241 10.7565 16.3815C11.0991 16.0389 11.6509 16.0389 11.9935 16.3815L14.4179 18.8059ZM17 1C8.19772 1 1 8.19772 1 17C1 25.8023 8.19772 33 17 33C25.8023 33 33 25.8023 33 17C33 8.19772 25.8023 1 17 1Z" stroke="#44D2FF" stroke-width="2" />
                            </svg>
                            <div>Sign loan documents</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-5.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 0C7.65 0 0 7.65 0 17C0 26.35 7.65 34 17 34C26.35 34 34 26.35 34 17C34 7.65 26.35 0 17 0ZM24.8774 14.2524L16.3774 22.7524C15.963 23.1667 15.419 23.375 14.875 23.375C14.331 23.375 13.787 23.1667 13.3726 22.7524L9.12263 18.5024C8.29175 17.6715 8.29175 16.3285 9.12263 15.4976C9.9535 14.6668 11.2965 14.6668 12.1274 15.4976L14.875 18.2453L21.8726 11.2476C22.7035 10.4168 24.0465 10.4168 24.8774 11.2476C25.7082 12.0785 25.7082 13.4215 24.8774 14.2524Z" fill="#79E2FA" />
                            </svg>
                            <div>Get Funded</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center d-md-none pt-5">
            <a href="#form" class="btn btn-primary rounded-20 text-white fw-700 px-5">Get Started</a>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row pb-5 pb-md-7 gy-5 gy-lg-0 text-center text-lg-start">
            <div class="col-lg-4 col-xl-3">
                <div class="fs-48 fw-300 text-grey lh-1"><span class="text-primary fw-400">What</span> We Do</div>
            </div>
            <div class="col-lg">
                <div class="fs-20 fw-300 text-grey">
                    We understand that navigating the world of commercial finance can be daunting, which is why we offer a hassle-free approach to securing the funds you need. Our team works with more than 80+ of Australia’s top banks and non-bank lenders, giving you unparalleled access to a wide range of financing options.
                </div>
            </div>
        </div>

        <?php $about_list = array(
            "Instant Over The Phone Pre-Approvals",
            "Fast & Hassle-Free Funding With No Wait Times",
            "Borrow From $10K-$2M",
            "No Doc And Low Doc Loans",
            "No Deposit Options",
            "Little To No Paperwork Required",
            "New And Existing ABNs",
            "Non-Property Owners Accepted",
            "Any New Or Used Assets",
            "Dealer or Private Sales",
            "Sale and Buy Back",
            "Poor Credit History Solutions"
        ); ?>

        <div class="row g-2 g-md-3 d-none d-md-flex">
            <?php foreach ($about_list as $val) : ?>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="about_card">
                        <?= renderImg("boldtick.png", 'icons') ?>
                        <?= $val ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="about-slider" class="d-md-none">
            <?php $init = 3; ?>
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <div>
                    <?php for ($j = ($init - 3); $j <= $init; $j++) { ?>
                        <div class="about_card">
                            <?= renderImg("boldtick.png", 'icons') ?>
                            <?= $about_list[$j] ?>
                        </div>
                    <?php } ?>
                </div>
                <?php $init += 4; ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="finance" id="service">
    <div class="container">
        <div class="row align-items-center pb-5 pb-md-7">
            <div class="col-md text-center text-md-start">
                <div class="fs-48 text-white fw-300 lh-1">What We <span class="text-primary fw-500">Finance</span></div>
            </div>
            <div class="col-auto d-none d-md-block">
                <a href="#form" class="btn btn-primary rounded-20 text-white fw-700 px-xl-5">Get Started</a>
            </div>
        </div>

        <div class="row justify-content-center g-2 g-md-3">
            <?php $finance_list = array(
                "Truck Finance",
                "Trailer Finance",
                "Business Vehicle<br /> Finance",
                "Machinery &<br /> Equipment Finance",
                "Forestry<br /> Equipment Finance",
                "Farm Equipment<br /> Finance",
                "Asset Refinance",
                "Business Loans",
            );

            foreach ($finance_list as $key => $val) : ?>
                <div class="col-6 col-lg-4 col-xl-3">
                    <div class="finance_card">
                        <?= renderImg("finance-" . ($key + 1) . ".jpg", "lib", "bg-img") ?>
                        <div class="inner">
                            <div class="text-center w-100">
                                <?= renderImg("finance-" . ($key + 1) . ".png", "icons") ?>
                                <div class="title"><?= $val ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="d-flex justify-content-center d-md-none pt-5">
            <a href="#form" class="btn btn-primary rounded-20 text-white fw-700 px-5">Get Started</a>
        </div>
    </div>
</section>

<section class="why-us" id="about">
    <div class="container">
        <div class="row pb-5 pb-md-7 gy-5 gy-lg-0 text-center text-lg-start">
            <div class="col-lg-4 col-xl-3">
                <div class="fs-48 fw-300 text-white lh-1"><span class="fw-500">Why</span> Choose Us</div>
            </div>
            <div class="col">
                <div class="fs-20 fw-300 text-white">
                    With our expertise and vast network, you can trust that we’ll find the best possible solution for your unique needs. So if you’re looking for a finance broker who can get the job done right the first time, don’t hesitate to reach out to our team today. We’ll help you secure the financing you need to take your business to the next level
                </div>
            </div>
        </div>

        <div class="row justify-content-center gy-2 gy-md-3 gy-xl-0 gx-3">
            <?php $whyus_list = array(
                "Personalised Service",
                "Assisting Clients Australia Wide",
                "30+ Years Experience",
                "We Work For YOU Not The Banks",
                "Fast Approvals"
            );

            foreach ($whyus_list as $key => $val) : ?>
                <div class="col-md-4 col-xl-2">
                    <div class="whyus_card">
                        <div class="row justify-content-center align-items-center gy-md-3">
                            <div class="col-3 col-md-auto"><?= renderImg("whyus-" . ($key + 1) . ".png", 'icons') ?></div>
                            <div class="col col-md-12"><?= $val ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-md-4 col-xl-2">
                <div class="whyus_card bg-primary text-white py-4 text-center text-md-start">
                    <div class="row justify-content-center gy-4 text-center">
                        <div class="col-12">
                            We Can Fast Track Your Financial Success
                        </div>
                        <div class="col-8 col-md-12">
                            <a href="#form" class="btn btn-white rounded-20 text-dark fw-700 px-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container">
        <div class="row gx-xl-7 gy-5 px-5 px-md-3">
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-1.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-2.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-3.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-4.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-5.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-6.png", "logo") ?>
                </div>
            </div>
        </div>

        <div class="pilot-text fs-48 fw-300 text-grey lh-1 text-center px-4 px-md-0">The Asset Finance Shop is accredited with the following <span class="text-primary fw-500">major finance partners</span> and many more around Australia.</div>

        <div class="row justify-content-center">
            <div class="col-xl-8 col-xxl-7">
                <div id="partners-slider">
                    <?php for ($i = 2; $i <= 28; $i++) : ?>
                        <div><?= renderImg("brand-" . $i . ".png", "logo") ?></div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>