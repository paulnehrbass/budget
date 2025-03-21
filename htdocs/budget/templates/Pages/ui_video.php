<?= $this->element('main') ?>


    <head>
        
        <?= $this->element('title-meta', array('title' => 'Video')) ?>

        <?= $this->element('head-css') ?>

    </head>

    <?= $this->element('body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <div class="container-fluid">

                        <?= $this->element('page-title', array('pagetitle' => 'UI Elements', 'title' => 'Video')) ?>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Responsive embed video 16:9</h4>
                                        <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
        
                                        <!-- 16:9 aspect ratio -->
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div> <!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Responsive embed video 21:9</h4>
                                        <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
        
                                        <!-- 21:9 aspect ratio -->
                                        <div class="ratio ratio-21x9">
                                            <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                        </div>
        
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div> <!-- end col -->
        
                        </div> <!-- end row -->
        
                        <div class="row">
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Responsive embed video 4:3</h4>
                                        <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                                        <!-- 4:3 aspect ratio -->
                                        <div class="ratio ratio-4x3">
                                            <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div> <!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Responsive embed video 1:1</h4>
                                        <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
        
                                        <!-- 1:1 aspect ratio -->
                                        <div class="ratio ratio-1x1">
                                            <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                        </div>
        
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div> <!-- end col -->
        
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
            <!-- End Page-content -->

            <?= $this->element('footer') ?>

        </div>
        <!-- END layout-wrapper -->

        <?= $this->element('right-sidebar') ?>

        <?= $this->element('vendor-scripts') ?>

        <!-- App js -->
        <script src="/js/app.js"></script>

    </body>
</html>
