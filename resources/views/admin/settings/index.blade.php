@include('admin/partials/head')
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('admin/partials/sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('admin/partials/header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Settings</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card">
                                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tabItem5"><em class="icon ni ni-laptop"></em><span>Web store settings</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem8"><em class="icon ni ni-color-palette-fill"></em><span>Theme setting </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem9"><em class="icon ni ni-mail-fill"></em><span>Email settings </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="card-inner">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabItem5">
                                                    <h4 class="title nk-block-title">Web store setting</h4>
                                                    <p>Here is your basic store setting of your website.</p>
                                                    <form action="#" class="gy-3 form-settings">
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-name">Store Name</label>
                                                                    <span class="form-note">Specify the name of your website.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="site-name" value="My Store">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Site Email</label>
                                                                    <span class="form-note">Specify the email address of your website.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="site-email" value="info@softnio.com">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-copyright">Site Copyright</label>
                                                                    <span class="form-note">Copyright information of your website.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="site-copyright" value="&copy; 2021, DashLite. All Rights Reserved.">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label">Allow Registration</label>
                                                                    <span class="form-note">Enable or disable registration from site.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <ul class="custom-control-group g-3 align-center flex-wrap">
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" checked name="reg-public" id="reg-enable">
                                                                            <label class="custom-control-label" for="reg-enable">Enable</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" name="reg-public" id="reg-disable">
                                                                            <label class="custom-control-label" for="reg-disable">Disable</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" name="reg-public" id="reg-request">
                                                                            <label class="custom-control-label" for="reg-request">On Request</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label">Main Website</label>
                                                                    <span class="form-note">Specify the URL if your main website is external.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" name="site-url" value="https://www.softnio.com">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-name"> Website description</label>
                                                                    <span class="form-note">Describe your website.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-control-wrap">
                                                                            <textarea class="form-control form-control" id="fv-message" name="fv-message">

                                                      </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-off">Maintanance Mode</label>
                                                                    <span class="form-note">Enable to make website make offline.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" name="reg-public" id="site-off">
                                                                        <label class="custom-control-label" for="site-off">Offline</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-lg-7">
                                                                <div class="form-group mt-2">
                                                                    <button type="submit" class="btn btn-lg btn-primary" data-bs-target="#modalAlert" data-bs-toggle="modal">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!--tab pan -->
                                                <div class="tab-pane" id="tabItem8">
                                                    <div class="nk-block-head">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="title nk-block-title">Theme Installed</h4>
                                                            <p>Here are last week's update!</p>
                                                        </div>
                                                    </div>
                                                    <div class="row g-gs">
                                                        <div class="col-lg-4 col-xxl-3 col-sm-6">
                                                            <div class="card shadow-none">
                                                                <img src="./images/lms/theme/a.jpg" class="border border-light rounded" alt="">
                                                                <div class="card-inner pt-3 p-0">
                                                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, sapiente!</p>
                                                                    <a href="#" class="btn btn-primary" data-bs-target="#modalAlert" data-bs-toggle="modal"> Active Theme</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-xxl-3 col-sm-6">
                                                            <div class="card shadow-none">
                                                                <img src="./images/lms/theme/b.jpg" class="border border-light rounded" alt="">
                                                                <div class="card-inner pt-3 p-0">
                                                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, sapiente!</p>
                                                                    <a href="#" class="btn btn-primary disabled"> Current theme</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-xxl-3 col-sm-6">
                                                            <div class="card shadow-none">
                                                                <img src="./images/lms/theme/c.jpg" class="border border-light rounded" alt="">
                                                                <div class="card-inner pt-3 p-0">
                                                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, sapiente!</p>
                                                                    <a href="#" class="btn btn-primary" data-bs-target="#modalAlert" data-bs-toggle="modal"> Active theme</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tabItem9">
                                                    <div class="nk-block-head">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="title nk-block-title">Email-Settings</h4>
                                                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row g-gs">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">E-mail to students</label>
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-card">
                                                                            <label class="custom-control-label" for="pay-card">Course enrolement</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-bitcoin">
                                                                            <label class="custom-control-label" for="pay-bitcoin">Add new lesson</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-cash">
                                                                            <label class="custom-control-label" for="pay-cash">Update newsletter</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">E-mail to Teachers</label>
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-cardd">
                                                                            <label class="custom-control-label" for="pay-cardd">Course sale</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-bitcoinn">
                                                                            <label class="custom-control-label" for="pay-bitcoinn">Support student</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-cashh">
                                                                            <label class="custom-control-label" for="pay-cashh">Feedback course</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-search"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="default-04" placeholder="E-mail from a name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3">
                                                        <div class="col-lg-7">
                                                            <div class="form-group mt-2">
                                                                <button type="submit" class="btn btn-lg btn-primary" data-bs-target="#modalAlert" data-bs-toggle="modal">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--card inner-->
                                    </div><!--card-->
                                </div><!--nk-block-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
@include('/admin/partials/footer')