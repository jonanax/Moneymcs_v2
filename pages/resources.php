<?php 
  include 'includes/session.php';
?>
<!DOCTYPE html>

<!-- =========================================================
* MoneyMCS
==============================================================
* 
* Created by: 
* 
* 
=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>MoneyMCS - Resources</title>

    <meta name="description" content="" />

    <?php include 'includes/headers.php'; ?>
    

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!-- Paypal Express -->
    <!-- <script src="https://www.paypalobjects.com/api/checkout.js"></script> -->
    <!-- <script src="https://www.paypal.com/sdk/js?client-id=ASQAcFkDyzt_DJLIp2B-5fvNvKwB8RmF56Z82REWkieRIppWs7XoDGZuFJabXe1bly8X8ZncyuXDEULP" data-sdk-integration-source="button-factory"></script> -->

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/earnmoney.png" width="50">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">MoneyMCS</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <?php include 'includes/resource_sidemenu.php'; ?>
           
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  MoneyMCS
                  <!-- <i class="bx bx-search fs-4 lh-0"></i> -->
                  <!-- <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  /> -->
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <?php include 'includes/subs_button.php'; ?>
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="<?php echo (!empty($agent['photo'])) ? '../images/'.$agent['photo'] : '../images/default.png'; ?>" class="w-px-40 h-auto rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                                <img src="<?php echo (!empty($agent['photo'])) ? '../images/'.$agent['photo'] : '../images/default.png'; ?>" class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $agent['firstname'].' '.$agent['lastname']; ?></span>
                            <small class="text-muted"><?php echo $agent['level']; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="profile">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="subscription">
                      <i class='bx bx-detail me-2'></i>
                        <span class="align-middle">Subscription History</span>
                      </a>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="transactions">
                        <i class='bx bx-folder-open'></i>
                        <span class="align-middle">Transactions</span>
                      </a>
                    </li> -->
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                  <!-- <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                          <div class="card-body">
                            <a href="resources_search">
                              <div class="input-group input-group-merge">
                                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
                <div class="row">
                  <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                      <!-- <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                          <div class="card-body">
                            <h5 class="card-title">Resource Library</h5>
                            <p class="card-text">The Partner Resource Library is a wealth of resources at your fingertips to help you with many aspects of growing your business!</p>

                            <p class="card-text">Within each of the Categories you will find many Flyers, Emails, PowerPoints, Videos, Guides, and much more that will help you to market and sell this amazing program to your clients.</p>
                            <p class="card-text">All you have to do to view what is in a Category is to select it and then the content from that Category will reflect here.</p>

                            <p class="card-text">If you have any questions on any Category, please contact us at 800-497-0499. We are here to help!</p>
                          </div>
                        </div>
                      </div> -->
                      <div class="card accordion-item active">
                        <h2 class="accordion-header" id="headingOne">
                          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                            Resource Library
                          </button>
                        </h2>

                      <div id="accordionOne" class="accordion-collapsed collapse " data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          The Partner Resource Library is a wealth of resources at your fingertips to help you with many aspects of growing your business!
                          Within each of the Categories you will find many Flyers, Emails, PowerPoints, Videos, Guides, and much more that will help you to market and sell this amazing program to your clients.</p>
                          <p class="card-text">All you have to do to view what is in a Category is to select it and then the content from that Category will reflect here.</p>

                          <p class="card-text">If you have any questions on any Category, please contact us at 800-497-0499. We are here to help!</p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-4">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Categories</h5>
                            <div class="card shadow-none bg-transparent border  mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Sales Resources</h6>
                                  <hr>
                                  <center><a href="sales_resources" class="btn btn-sm btn-success "> <i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border  mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Testimonials</h6>
                                  <hr>
                                  <center><a href="testimonials" class="btn btn-sm btn-success "> <i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border  mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Contracts & Agreements</h6>
                                  <hr>
                                  <center><a href="contracts_agreements" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Finance Resources</h6>
                                  <hr>
                                  <center><a href="finance" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Marketing Articles</h6>
                                  <hr>
                                  <center><a href="articles" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border  mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Marketing Ebooks</h6>
                                  <hr>
                                  <center><a href="ebooks" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border border-success mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Marketing Flyers</h6>
                                  <hr>
                                  <center><a href="flyers" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border border-success mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Marketing PowerPoints</h6>
                                  <hr>
                                  <center><a href="powerpoints" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border border-success mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Marketing Press Releases</h6>
                                  <hr>
                                  <center><a href="press_releases" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border border-success mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Marketing Seminars</h6>
                                  <hr>
                                  <center><a href="seminars" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border border-success mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Marketing Social Media</h6>
                                  <hr>
                                  <center><a href="social_media" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border border-success mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">All Marketing Videos</h6>
                                  <hr>
                                  <center><a href="videos" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-4">
                          <div class="card-body">
                            <!-- <h5 class="card-title text-primary">Resource Categories</h5> -->
                            <div class="card shadow-none bg-transparent border border-success mb-3">
                              <div class="card-body text-center">
                                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/folder.png" width="80">
                                </span>
                                  <h6 class="card-title">Marketing Website Template</h6>
                                  <hr>
                                  <center><a href="web_template" class="btn btn-sm btn-success "><i class='bx bx-search-alt'></i> View</a></center>
                                </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <?php include 'includes/google_translate.php'; ?>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  <!-- ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script> -->
                  <!-- , made with ❤️ by -->
                  <!-- <a href="#" target="_blank" class="footer-link fw-bolder"></a> -->
                </div>
                <?php include 'includes/custom_footer.php'; ?>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->

         <?php include 'includes/subs_form.php'; ?>

      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <?php include 'includes/footer_links.php'; ?>
    <?php include 'includes/payment_script.php'; ?>
  </body>
</html>
