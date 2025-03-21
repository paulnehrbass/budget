<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Coming Soon')) ?>

        <?= $this->element('head-css') ?>

    </head>

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="home" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>

        <div class="my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="home" class="d-block auth-logo">
                                <img src="/budget/images/logo-dark.png" alt="" height="20" class="auth-logo-dark mx-auto">
                                <img src="/budget/images/logo-light.png" alt="" height="20" class="auth-logo-light mx-auto">
                            </a>
                            <div class="row justify-content-center mt-5">
                                <div class="col-sm-4">
                                    <div class="maintenance-img">
                                        <img src="/budget/images/coming-soon.svg" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-5">Let's get started with Skote</h4>
                            <p class="text-muted">It will be as simple as Occidental in fact it will be Occidental.</p>

                            <div class="row justify-content-center mt-5">
                                <div class="col-md-8">
                                    <div data-countdown="2026/12/31" class="counter-number"></div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->element('vendor-scripts') ?>

        <!-- Plugins js-->
        <script src="/libs/jquery-countdown/jquery.countdown.min.js"></script>

        <!-- Countdown js -->
        <script src="/js/pages/coming-soon.init.js"></script>

        <script src="/js/app.js"></script>

    </body>
</html>
