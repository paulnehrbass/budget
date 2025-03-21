<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Form Editors')) ?>

        <?= $this->element('head-css') ?>

    </head>

    <?= $this->element('body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <div class="container-fluid">

                        <?= $this->element('page-title', array('pagetitle' => 'Forms', 'title' => 'Form Editors')) ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Tinymce wysihtml5</h4>
                                        <p class="card-title-desc">Bootstrap-wysihtml5 is a javascript
                                            plugin that makes it easy to create simple, beautiful wysiwyg editors
                                            with the help of wysihtml5 and Twitter Bootstrap.</p>
        
                                        <form method="post">
                                            <textarea id="elm1" name="area"></textarea>
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
            <!-- End Page-content -->

            <?= $this->element('footer') ?>

        </div>
        <!-- END layout-wrapper -->

        <?= $this->element('right-sidebar') ?>

        <?= $this->element('vendor-scripts') ?>
            
        <!--tinymce js-->
        <script src="/libs/tinymce/tinymce.min.js"></script>

        <!-- init js -->
        <script src="/js/pages/form-editor.init.js"></script>

        <script src="/js/app.js"></script>

    </body>
</html>
