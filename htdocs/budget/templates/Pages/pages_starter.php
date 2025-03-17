<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Starter Page')) ?>

        <?= $this->element('head-css') ?>

    </head>

    <?= $this->element('body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <div class="container-fluid">

                        <?= $this->element('page-title', array('pagetitle' => 'Utility', 'title' => 'Starter Page')) ?>
                        
                    </div> <!-- container-fluid -->
            <!-- End Page-content -->

            <?= $this->element('footer') ?>

        </div>
        <!-- END layout-wrapper -->

        <?= $this->element('right-sidebar') ?>

        <?= $this->element('vendor-scripts') ?>

        <script src="/js/app.js"></script>

    </body>
</html>
