<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Jobs Grid')) ?>

        <link href="/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">

        <?= $this->element('head-css') ?>

    </head>

    <?= $this->element('body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <div class="container-fluid">

                        <?= $this->element('page-title', array('pagetitle' => 'Jobs', 'title' => 'Jobs Grid')) ?>
                        

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card job-filter">
                                    <div class="card-body p-3">
                                        <form action="javascript:void(0);">
                                            <div class="row g-3">
                                                <div class="col-xxl-4 col-lg-4">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" id="searchJob" autocomplete="off" placeholder="Search your job">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-2 col-lg-4">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" id="locationInput" autocomplete="off" placeholder="San Francisco, LA">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-2 col-lg-4">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" id="jobCategories" autocomplete="off" placeholder="Job Categories">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-2 col-lg-6">
                                                    <div class="position-relative">
                                                        <div id="datepicker1">
                                                            <input type="text" class="form-control" placeholder="Select date" data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-date-autoclose="true" data-provide="datepicker">
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <!--end col-->
                        
                                                <div class="col-xxl-2 col-lg-6">
                                                    <div class="position-relative h-100 hstack gap-3">
                                                        <button type="submit" class="btn btn-primary h-100 w-100"><i class="bx bx-search-alt align-middle"></i> Find Jobs</button>
                                                        <a href="#collapseExample" data-bs-toggle="collapse" class="btn btn-secondary h-100 w-100"><i class="bx bx-filter-alt align-middle"></i> Advance</a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="collapse" id="collapseExample">
                                                    <div class="pt-4">
                                                        <div class="row g-3">
                                                            <div class="col-xxl-4 col-lg-6">
                                                                <div>
                                                                    <label for="experience" class="form-label">Experience</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                    <label class="form-check-label" for="inlineCheckbox1">All</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                                                    <label class="form-check-label" for="inlineCheckbox2">Fresher</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option2">
                                                                    <label class="form-check-label" for="inlineCheckbox3">1-2</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
                                                                    <label class="form-check-label" for="inlineCheckbox4">2-3</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option3">
                                                                    <label class="form-check-label" for="inlineCheckbox5">4+</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-lg-6">
                                                                <div>
                                                                    <label for="jobType" class="form-label">Job Type</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option3">
                                                                    <label class="form-check-label" for="inlineCheckbox6">Full Time</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option3">
                                                                    <label class="form-check-label" for="inlineCheckbox7">Part Time</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option3">
                                                                    <label class="form-check-label" for="inlineCheckbox8">Freelance</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option3">
                                                                    <label class="form-check-label" for="inlineCheckbox9">Internship</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-lg-4">
                                                                <div class="position-relative">
                                                                    <label for="qualificationInput" class="form-label">Qualification</label>
                                                                    <input type="text" class="form-control" id="qualificationInput" autocomplete="off" placeholder="Qualification">
                                                                    <i class="ri-government-line filter-icon"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        
                        <div class="row" id="jobgrid-list">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/adobe.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/adobe-photoshop.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Product Designer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/airbnb.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Marketing Director</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/amazon.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Project Manager</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/flutter.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">HTML Developer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/mailchimp.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Business Associate</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/line.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Product Sales Specialist</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/spotify.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/wordpress.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/upwork.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/sass.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="favorite-icon">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                        </div>
                                        <img src="/budget/images/companies/reddit.svg" alt="" height="50" class="mb-3">
                                        <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a> <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-3 hstack gap-2">
                                            <span class="badge rounded-1 badge-soft-success">Full Time</span>
                                            <span class="badge rounded-1 badge-soft-warning">Urgent</span>
                                            <span class="badge rounded-1 badge-soft-info">Private</span>
                                        </div>
                                        <div class="mt-4 hstack gap-2">
                                            <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">View Profile</a>
                                            <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div><!--end row-->
                        
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center">
                                    <nav aria-label="Page navigation example" id="pagination-element" class="mb-0">
                                        <div class="pagination-block pagination pagination-rounded">
                                            <a href="#" class="page-link outline-none" id="page-prev"><i class='bx bx-chevron-left align-middle'></i></a>
                                            <span id="page-num" class="outline-none pagination"></span>
                                            <a href="#" class="page-link outline-none" id="page-next"><i class='bx bx-chevron-right align-middle'></i></a>
                                        </div>
                                    </nav>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                    </div> <!-- container-fluid -->

            <!-- Modal -->
            <div class="modal fade" id="applyJobs" tabindex="-1" aria-labelledby="applyJobsLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="applyJobsLabel">Apply For This Job</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="#!">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="fullnameInput" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="fullnameInput" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="emailInput" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="phoneNumberInput" class="form-label">Phone Number</label>
                                                <input type="email" class="form-control" id="phoneNumberInput" placeholder="Enter your number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="uploadResume" class="form-label">Upload Resume</label>
                                                <input type="file" class="form-control" id="uploadResume" placeholder="Upload resume">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-4">
                                                <label for="messageInput" class="form-label">Message</label>
                                                <textarea class="form-control" id="messageInput" rows="3" placeholder="Enter your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="text-end">
                                                <button class="btn btn-success">Send Application <i class="bx bx-send align-middle"></i></button>
                                                <button class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <?= $this->element('footer') ?>

        </div>
        <!-- END layout-wrapper -->

        <?= $this->element('right-sidebar') ?>

        <?= $this->element('vendor-scripts') ?>

        <script src="/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <script src="/js/pages/job-grid-list.init.js"></script>

        <script src="/js/app.js"></script>

    </body>
</html>
