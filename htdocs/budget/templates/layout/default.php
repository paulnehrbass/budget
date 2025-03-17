<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>
<?= $this->Flash->render() ?>
<?= $this->element('main') ?>

<head>

    <?= $this->element('title-meta', array('title' => 'Budget')) ?>

    <?= $this->element('head-css') ?>

</head>

<?= $this->element('body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->element('menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">



                <div class="row">
                    <div class="col-xl-12">
                        <?= $this->fetch('content') ?>
                    </div>

                </div>
                <!-- end row -->


            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <?= $this->element('footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->element('right-sidebar') ?>

<?= $this->element('vendor-scripts') ?>

<!-- apexcharts -->
<script src="/libs/apexcharts/apexcharts.min.js"></script>

<!-- dashboard init -->
<script src="/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="/js/app.js"></script>
</body>

</html>

