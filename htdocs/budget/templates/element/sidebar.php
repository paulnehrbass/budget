<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect ">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Home', '/pages/home', ['key' => 't-default']) ?></li>
                        <li><?= $this->Html->link('SaaS', '/pages/dashboard-saas', ['key' => 't-saas']) ?></li>
                        <li><?= $this->Html->link('Crypto', '/pages/dashboard-crypto', ['key' => 't-crypto']) ?></li>
                        <li><?= $this->Html->link('Blog', '/pages/dashboard-blog', ['key' => 't-blog']) ?></li>
                        <li><?= $this->Html->link('Job', '/pages/dashboard-job', ['key' => 't-jobs']) ?></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span>
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><?= $this->Html->link('Light Sidebar', '/pages/layouts-light-sidebar', ['key' => 't-light-sidebar']) ?></li>
                                <li><?= $this->Html->link('Compact Sidebar', '/pages/layouts-compact-sidebar', ['key' => 't-compact-sidebar']) ?></li>
                                <li><?= $this->Html->link('Icon Sidebar', '/pages/layouts-icon-sidebar', ['key' => 't-icon-sidebar']) ?></li>
                                <li><?= $this->Html->link('Boxed Width', '/pages/layouts-boxed', ['key' => 't-boxed-width']) ?></li>
                                <li><?= $this->Html->link('Scrollable', '/pages/layouts-scrollable', ['key' => 't-scrollable']) ?></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><?= $this->Html->link('Horizontal', '/pages/layouts-horizontal', ['key' => 't-horizontal']) ?></li>
                                <li><?= $this->Html->link('Topbar light', '/pages/layouts-hori-topbar-light', ['key' => 't-topbar-light']) ?></li>
                                <li><?= $this->Html->link('Boxed width', '/pages/layouts-hori-boxed-width', ['key' => 't-boxed-width']) ?></li>
                                <li><?= $this->Html->link('Preloader', '/pages/layouts-hori-preloader', ['key' => 't-preloader']) ?></li>
                                <li><?= $this->Html->link('Colored Header', '/pages/layouts-hori-colored-header', ['key' => 't-colored-topbar']) ?></li>
                                <li><?= $this->Html->link('Scrollable', '/pages/layouts-hori-scrollable', ['key' => 't-scrollable']) ?></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps">Apps</li>

                <!-- Calendars -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards">Calendars</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('TUI Calendar', '/pages/calendar', ['key' => 't-tui-calendar']) ?></li>
                        <li><?= $this->Html->link('Full Calendar', '/pages/calendar-full', ['key' => 't-full-calendar']) ?></li>
                    </ul>
                </li>

                <li><?= $this->Html->link('<i class="bx bx-chat"></i><span key="t-chat">Chat</span>',
                        '/pages/chat', ['key' => 't-chat', 'escapeTitle' => false]) ?></li>

                <li><?= $this->Html->link(
                        '<i class="bx bx-file"></i><span key="t-file-manager">File Manager</span>',
                        '/pages/apps-filemanager', [
                                'class' => 'waves-effect',
                                'escapeTitle' => false
                        ]) ?>
                </li>
                <!-- Ecommerce -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Ecommerce</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Products', '/pages/ecommerce-products', ['key' => 't-products']) ?></li>
                        <li><?= $this->Html->link('Product Detail', '/pages/ecommerce-product-detail', ['key' => 't-product-detail']) ?></li>
                        <li><?= $this->Html->link('Orders', '/pages/ecommerce-orders', ['key' => 't-orders']) ?></li>
                        <li><?= $this->Html->link('Customers', '/pages/ecommerce-customers', ['key' => 't-customers']) ?></li>
                        <li><?= $this->Html->link('Cart', '/pages/ecommerce-cart', ['key' => 't-cart']) ?></li>
                        <li><?= $this->Html->link('Checkout', '/pages/ecommerce-checkout', ['key' => 't-checkout']) ?></li>
                        <li><?= $this->Html->link('Shops', '/pages/ecommerce-shops', ['key' => 't-shops']) ?></li>
                        <li><?= $this->Html->link('Add Product', '/pages/ecommerce-add-product', ['key' => 't-add-product']) ?></li>
                    </ul>
                </li>

                <!-- Crypto -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto">Crypto</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Wallet', '/pages/crypto-wallet', ['key' => 't-wallet']) ?></li>
                        <li><?= $this->Html->link('Buy/Sell', '/pages/crypto-buy-sell', ['key' => 't-buy']) ?></li>
                        <li><?= $this->Html->link('Exchange', '/pages/crypto-exchange', ['key' => 't-exchange']) ?></li>
                        <li><?= $this->Html->link('Lending', '/pages/crypto-lending', ['key' => 't-lending']) ?></li>
                        <li><?= $this->Html->link('Orders', '/pages/crypto-orders', ['key' => 't-orders']) ?></li>
                        <li><?= $this->Html->link('KYC Application', '/pages/crypto-kyc-application', ['key' => 't-kyc']) ?></li>
                        <li><?= $this->Html->link('ICO Landing', '/pages/crypto-ico-landing', ['key' => 't-ico']) ?></li>
                    </ul>
                </li>

                <!-- Email -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li><?= $this->Html->link('Inbox', '/pages/email-inbox', ['key' => 't-inbox']) ?></li>
                        <li><?= $this->Html->link('Read Email', '/pages/email-read', ['key' => 'V']) ?></li>

                        <li>
                            <a href="javascript: void(0);">
                                <span key="t-email-templates">Templates</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><?= $this->Html->link('Basic Action', '/pages/email-template-basic', ['key' => 't-basic-action']) ?></li>
                                <li><?= $this->Html->link('Alert Email', '/pages/email-template-alert', ['key' => 't-alert-email']) ?></li>
                                <li><?= $this->Html->link('Billing Email', '/pages/email-template-billing', ['key' => 't-bill-email']) ?></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- Invoices -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Invoice List', '/pages/invoices-list', ['key' => 't-invoice-list']) ?></li>
                        <li><?= $this->Html->link('Invoice Detail', '/pages/invoices-detail', ['key' => 't-invoice-detail']) ?></li>
                    </ul>
                </li>

                <!-- Projects -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Projects Grid', '/pages/projects-grid', ['key' => 't-p-grid']) ?></li>
                        <li><?= $this->Html->link('Projects List', '/pages/projects-list', ['key' => 't-p-list']) ?></li>
                        <li><?= $this->Html->link('Project Overview', '/pages/projects-overview', ['key' => 't-p-overview']) ?></li>
                        <li><?= $this->Html->link('Create New', '/pages/projects-create', ['key' => 't-create-new']) ?></li>
                    </ul>
                </li>

                <!-- Tasks -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-tasks">Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

<!--                        <li><a href="tasks-list" key="t-task-list">Task List</a></li>-->
                        <li><?= $this->Html->link('Task List', '/pages/tasks-list', ['key' => 't-task-list']) ?></li>

<!--                        <li><a href="tasks-kanban" key="t-kanban-board">Kanban Board</a></li>-->
                        <li><?= $this->Html->link('Kanban Board', '/pages/tasks-kanban', ['key' => 't-kanban-board']) ?></li>

<!--                        <li><a href="tasks-create" key="t-create-task">Create Task</a></li>-->
                        <li><?= $this->Html->link('Create Task', '/pages/tasks-create', ['key' => 't-create-task']) ?></li>
                    </ul>
                </li>

                <!-- Contacts -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Users Grid', '/pages/contacts-grid', ['key' => 't-user-grid']) ?></li>
                        <li><?= $this->Html->link('Users List', '/pages/contacts-list', ['key' => 't-user-list']) ?></li>
                        <li><?= $this->Html->link('Profile', '/pages/contacts-profile', ['key' => 't-profile']) ?></li>
                    </ul>
                </li>

                <!-- Blog -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-blog">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Blog List', '/pages/blog-list', ['key' => 't-blog-list']) ?></li>
                        <li><?= $this->Html->link('Blog Grid', '/pages/blog-grid', ['key' => 't-blog-grid']) ?></li>
                        <li><?= $this->Html->link('Blog Details', '/pages/blog-details', ['key' => 't-blog-details']) ?></li>
                    </ul>
                </li>

                <!-- Jobs -->
                <li>
                    <a href="javascript: void(0);" class="waves-effect has-arrow">
                        <i class="bx bx-briefcase-alt"></i>
                        <span key="t-jobs">Jobs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Job List', '/pages/job-list', ['key' => 't-job-list']) ?></li>
                        <li><?= $this->Html->link('Job Grid', '/pages/job-grid', ['key' => 't-job-grid']) ?></li>
                        <li><?= $this->Html->link('Apply Job', '/pages/job-apply', ['key' => 't-apply-job']) ?></li>
                        <li><?= $this->Html->link('Job Details', '/pages/job-details', ['key' => 't-job-details']) ?></li>
                        <li><?= $this->Html->link('Jobs Categories', '/pages/job-categories', ['key' => 't-Jobs-categories']) ?></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-candidate">Candidate</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><?= $this->Html->link('List', '/pages/candidate-list', ['key' => 't-list']) ?></li>
                                <li><?= $this->Html->link('Overview', '/pages/candidate-overview', ['key' => 't-overview']) ?></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages">Pages</li>

                <!-- Authentication -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Login', '/pages/auth-login', ['key' => 't-login']) ?></li>
                        <li><?= $this->Html->link('Login 2', '/pages/auth-login-2', ['key' => 't-login-2']) ?></li>
                        <li><?= $this->Html->link('Register', '/pages/auth-register', ['key' => 't-register']) ?></li>
                        <li><?= $this->Html->link('Register 2', '/pages/auth-register-2', ['key' => 't-register-2']) ?></li>
                        <li><?= $this->Html->link('Recover Password', '/pages/auth-recoverpw', ['key' => 't-recover-password']) ?></li>
                        <li><?= $this->Html->link('Recover Password 2', '/pages/auth-recoverpw-2', ['key' => 't-recover-password-2']) ?></li>
                        <li><?= $this->Html->link('Lock Screen', '/pages/auth-lock-screen', ['key' => 't-lock-screen']) ?></li>
                        <li><?= $this->Html->link('Lock Screen 2', '/pages/auth-lock-screen-2', ['key' => 't-lock-screen-2']) ?></li>
                        <li><?= $this->Html->link('Confirm Email', '/pages/auth-confirm-mail', ['key' => 't-confirm-mail']) ?></li>
                        <li><?= $this->Html->link('Confirm Email 2', '/pages/auth-confirm-mail-2', ['key' => 't-confirm-mail-2']) ?></li>
                        <li><?= $this->Html->link('Email verification', '/pages/auth-email-verification', ['key' => 't-email-verification']) ?></li>
                        <li><?= $this->Html->link('Email Verification 2', '/pages/auth-email-verification-2', ['key' => 't-email-verification-2']) ?></li>
                        <li><?= $this->Html->link('Two Step Verification', '/pages/auth-two-step-verification', ['key' => 't-two-step-verification']) ?></li>
                        <li><?= $this->Html->link('Two Step Verification 2', '/pages/auth-two-step-verification-2', ['key' => 't-two-step-verification-2']) ?></li>
                    </ul>
                </li>

                <!-- Utility -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-utility">Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Starter Page', '/pages/pages-starter', ['key' => 't-starter-page']) ?></li>
                        <li><?= $this->Html->link('Maintenance', '/pages/pages-maintenance', ['key' => 't-maintenance']) ?></li>
                        <li><?= $this->Html->link('Coming Soon', '/pages/pages-comingsoon', ['key' => 't-coming-soon']) ?></li>
                        <li><?= $this->Html->link('Timeline', '/pages/pages-timeline', ['key' => 't-timeline']) ?></li>
                        <li><?= $this->Html->link('FAQs', '/pages/pages-faqs', ['key' => 't-faqs']) ?></li>
                        <li><?= $this->Html->link('Pricing', '/pages/pages-pricing', ['key' => 't-pricing']) ?></li>
                        <li><?= $this->Html->link('Error 404', '/pages/pages-404', ['key' => 't-error-404']) ?></li>
                        <li><?= $this->Html->link('Error 500', '/pages/pages-500', ['key' => 't-error-500']) ?></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-components">Components</li>

                <!-- UI Elements -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-tone"></i>
                        <span key="t-ui-elements">UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><?= $this->Html->link('Alerts', '/pages/ui-alerts', ['key' => 't-alerts']) ?></li>
                        <li><?= $this->Html->link('Buttons', '/pages/ui-buttons', ['key' => 't-buttons']) ?></li>
                        <li><?= $this->Html->link('Cards', '/pages/ui-cards', ['key' => 't-cards']) ?></li>
                        <li><?= $this->Html->link('Carousel', '/pages/ui-carousel', ['key' => 't-carousel']) ?></li>
                        <li><?= $this->Html->link('Dropdowns', '/pages/ui-dropdowns', ['key' => 't-dropdowns']) ?></li>
                        <li><?= $this->Html->link('Grid', '/pages/ui-grid', ['key' => 't-grid']) ?></li>
                        <li><?= $this->Html->link('Images', '/pages/ui-images', ['key' => 't-images']) ?></li>
                        <li><?= $this->Html->link('Lightbox', '/pages/ui-lightbox', ['key' => 't-lightbox']) ?></li>
                        <li><?= $this->Html->link('Modals', '/pages/ui-modals', ['key' => 't-modals']) ?></li>
                        <li><?= $this->Html->link('Offcanvas', '/pages/ui-offcanvas', ['key' => 't-offcanvas']) ?></li>
                        <li><?= $this->Html->link('Range Slider', '/pages/ui-rangeslider', ['key' => 't-range-slider']) ?></li>
                        <li><?= $this->Html->link('Session Timeout', '/pages/ui-session-timeout', ['key' => 't-session-timeout']) ?></li>
                        <li><?= $this->Html->link('Progress Bars', '/pages/ui-progressbars', ['key' => 't-progress-bars']) ?></li>
                        <li><?= $this->Html->link('Placeholders', '/pages/ui-placeholders', ['key' => 't-placeholders']) ?></li>
                        <li><?= $this->Html->link('Sweet-Alert', '/pages/ui-sweet-alert', ['key' => 't-sweet-alert']) ?></li>
                        <li><?= $this->Html->link('Tabs & Accordions', '/pages/ui-tabs-accordions', ['key' => 't-tabs-accordions']) ?></li>
                        <li><?= $this->Html->link('Typography', '/pages/ui-typography', ['key' => 't-typography']) ?></li>
                        <li><?= $this->Html->link('Toasts', '/pages/ui-toasts', ['key' => 't-toasts']) ?></li>
                        <li><?= $this->Html->link('Video', '/pages/ui-video', ['key' => 't-video']) ?></li>
                        <li><?= $this->Html->link('General', '/pages/ui-general', ['key' => 't-general']) ?></li>
                        <li><?= $this->Html->link('Colors', '/pages/ui-colors', ['key' => 't-colors']) ?></li>
                        <li><?= $this->Html->link('Rating', '/pages/ui-rating', ['key' => 't-rating']) ?></li>
                        <li><?= $this->Html->link('Notifications', '/pages/ui-notifications', ['key' => 't-notifications']) ?></li>
                        <li><?= $this->Html->link('Utilities', '/pages/ui-utilities', ['key' => 't-utilities']) ?></li>
                    </ul>
                </li>

                <!-- Form Elements -->
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span class="badge rounded-pill bg-danger float-end">10</span>
                        <span key="t-forms">Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
<!--                        <li><a href="form-elements" key="t-form-elements">Form Elements</a></li>-->
                        <li><?= $this->Html->link('Form Elements', '/pages/form-elements', ['key' => 't-form-elements']) ?></li>

<!--                        <li><a href="form-validation" key="t-form-validation">Form Validation</a></li>-->
                        <li><?= $this->Html->link('Form Validation', '/pages/form-validation', ['key' => 't-form-validation']) ?></li>

<!--                        <li><a href="form-advanced" key="t-form-advanced">Form Advanced</a></li>-->
                        <li><?= $this->Html->link('Form Advanced', '/pages/form-advanced', ['key' => 't-form-advanced']) ?></li>

<!--                        <li><a href="form-editors" key="t-form-editors">Form Editors</a></li>-->
                        <li><?= $this->Html->link('Form Editors', '/pages/form-editors', ['key' => 't-form-editors']) ?></li>

<!--                        <li><a href="form-uploads" key="t-form-upload">Form File Upload</a></li>-->
                        <li><?= $this->Html->link('Form File Upload', '/pages/form-uploads', ['key' => 't-form-upload']) ?></li>

<!--                        <li><a href="form-xeditable" key="t-form-xeditable">Form Xeditable</a></li>-->
                        <li><?= $this->Html->link('Form Xeditable', '/pages/form-xeditable', ['key' => 't-form-xeditable']) ?></li>

<!--                        <li><a href="form-repeater" key="t-form-repeater">Form Repeater</a></li>-->
                        <li><?= $this->Html->link('Form Repeater', '/pages/form-repeater', ['key' => 't-form-repeater']) ?></li>

<!--                        <li><a href="form-wizard" key="t-form-wizard">Form Wizard</a></li>-->
                        <li><?= $this->Html->link('Form Wizard', '/pages/form-wizard', ['key' => 't-form-wizard']) ?></li>

<!--                        <li><a href="form-mask" key="t-form-mask">Form Mask</a></li>-->
                        <li><?= $this->Html->link('Form Mask', '/pages/form-mask', ['key' => 't-form-mask']) ?></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic" key="t-basic-tables">Basic Tables</a></li>
                        <li><a href="tables-datatable" key="t-data-tables">Data Tables</a></li>
                        <li><a href="tables-responsive" key="t-responsive-table">Responsive Table</a></li>
                        <li><a href="tables-editable" key="t-editable-table">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span key="t-charts">Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex" key="t-apex-charts">Apex Charts</a></li>
                        <li><a href="charts-echart" key="t-e-charts">E Charts</a></li>
                        <li><a href="charts-chartjs" key="t-chartjs-charts">Chartjs Charts</a></li>
                        <li><a href="charts-flot" key="t-flot-charts">Flot Charts</a></li>
                        <li><a href="charts-tui" key="t-ui-charts">Toast UI Charts</a></li>
                        <li><a href="charts-knob" key="t-knob-charts">Jquery Knob Charts</a></li>
                        <li><a href="charts-sparkline" key="t-sparkline-charts">Sparkline Charts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-aperture"></i>
                        <span key="t-icons">Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons" key="t-boxicons">Boxicons</a></li>
                        <li><a href="icons-materialdesign" key="t-material-design">Material Design</a></li>
                        <li><a href="icons-dripicons" key="t-dripicons">Dripicons</a></li>
                        <li><a href="icons-fontawesome" key="t-font-awesome">Font Awesome</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-map"></i>
                        <span key="t-maps">Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google" key="t-g-maps">Google Maps</a></li>
                        <li><a href="maps-vector" key="t-v-maps">Vector Maps</a></li>
                        <li><a href="maps-leaflet" key="t-l-maps">Leaflet Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level">Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1">Level 1.1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1">Level 2.1</a></li>
                                <li><a href="javascript: void(0);" key="t-level-2-2">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->