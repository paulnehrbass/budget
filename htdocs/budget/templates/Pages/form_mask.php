<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Form Mask')) ?>

        <?= $this->element('head-css') ?>

    </head>

    <?= $this->element('body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <div class="container-fluid">

                        <?= $this->element('page-title', array('pagetitle' => 'Forms', 'title' => 'Form Mask')) ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Example</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-date1">Date Style 1</label>
                                                            <input id="input-date1" class="form-control input-mask" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy">
                                                            <span class="text-muted">e.g "dd/mm/yyyy"</span>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-date2">Date Style 2</label>
                                                            <input id="input-date2" class="form-control input-mask" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="mm/dd/yyyy">
                                                            <span class="text-muted">e.g "mm/dd/yyyy"</span>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-datetime">Date time</label>
                                                            <input id="input-datetime" class="form-control input-mask" data-inputmask="'alias': 'datetime'">
                                                            <span class="text-muted">e.g "yyyy-mm-dd'T'HH:MM:ss"</span>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="input-currency">Currency:</label>
                                                            <input id="input-currency" class="form-control input-mask text-start" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'">
                                                            <span class="text-muted">e.g "$ 0.00"</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mt-4 mt-lg-0">
                                                        <div class="form-group mb-4">
                                                            <label for="input-repeat">repeat:</label>
                                                            <input id="input-repeat" class="form-control input-mask" data-inputmask="'mask': '9', 'repeat': 10, 'greedy' : false" >
                                                            <span class="text-muted">e.g "9999999999"</span>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-mask">Mask</label>
                                                            <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '99-9999999'">
                                                            <span class="text-muted">e.g "99-9999999"</span>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="input-ip">IP address</label>
                                                            <input id="input-ip" class="form-control input-mask" data-inputmask="'alias': 'ip'">
                                                            <span class="text-muted">e.g "99.99.99.99"</span>
    
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="input-email">Email address:</label>
                                                            <input id="input-email" class="form-control input-mask" data-inputmask="'alias': 'email'">
                                                            <span class="text-muted">_@_._</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
            <!-- End Page-content -->

            <?= $this->element('footer') ?>

        </div>
        <!-- END layout-wrapper -->

        <?= $this->element('right-sidebar') ?>

        <?= $this->element('vendor-scripts') ?>

        <script src="assets/libs/inputmask/inputmask.min.js"></script>

        <!-- form mask init -->
        <script src="/js/pages/form-mask.init.js"></script>

        <script src="/js/app.js"></script>

    </body>
</html>
