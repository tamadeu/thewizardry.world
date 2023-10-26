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
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Students / <strong class="text-primary small">{{ $student->name }}</strong></h3>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="/wwadmin/students" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            <a href="/wwadmin/students" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="tab-content">
                                                    <div class="tab-pan active" id="personal">
                                                        <div class="nk-block-head">
                                                            <div class="nk-block-between d-flex justify-content-between">
                                                                <div class="nk-block-head-content">
                                                                    <h4 class="nk-block-title">Students Information</h4>
                                                                    <div class="nk-block-des">
                                                                        <p>Basic info, like students name and address, that you use on Nio Platform.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tab-actions me-n1">
                                                                    <a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#profile-edit">
                                                                        <em class="icon ni ni-edit"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="nk-block">
                                                            <div class="nk-data data-list">
                                                                <div class="data-head">
                                                                    <h6 class="overline-title">Basics</h6>
                                                                </div>
                                                                <div class="data-item">
                                                                    <div class="data-col">
                                                                        <span class="data-label">Type of User</span>
                                                                        <span class="data-value">{{ $student->type }}</span>
                                                                    </div>
                                                                </div><!-- data-item -->
                                                                <div class="data-item">
                                                                    <div class="data-col">
                                                                        <span class="data-label">Full Name</span>
                                                                        <span class="data-value">{{ $student->name }}</span>
                                                                    </div>
                                                                </div><!-- data-item -->
                                                                <div class="data-item">
                                                                    <div class="data-col">
                                                                        <span class="data-label">User Name</span>
                                                                        <span class="data-value">{{ $student->username }}</span>
                                                                    </div>
                                                                </div><!-- data-item -->
                                                                <div class="data-item">
                                                                    <div class="data-col">
                                                                        <span class="data-label">Email</span>
                                                                        <span class="data-value">{{ $student->email }}</span>
                                                                    </div>
                                                                </div><!-- data-item -->
                                                                <div class="data-item">
                                                                    <div class="data-col">
                                                                        <span class="data-label">Date of Birth</span>
                                                                        <span class="data-value">{{ (isset($student->dateOfBirth)) ? $student->dateOfBirth : "Not set" }}</span>
                                                                    </div>
                                                                </div><!-- data-item -->
                                                                <div class="data-item">
                                                                    <div class="data-col">
                                                                        <span class="data-label">Nationality</span>
                                                                        <span class="data-value">{{ $student->country }}</span>
                                                                    </div>
                                                                </div><!-- data-item -->
                                                            </div><!-- data-list -->
                                                        </div><!-- .nk-block -->
                                                    </div><!-- .tab-pan -->
                                                </div><!-- .tab-content -->
                                            </div><!-- .card-inner -->
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-primary">
                                                                <span>{{ $initials }}</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="lead-text">{{ $student->name }}</span>
                                                                <span class="sub-text">{{ $student->email }}</span>
                                                            </div>
                                                        </div><!-- .user-card -->
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="user-account-info py-0">
                                                            <h6 class="overline-title-alt">The Wizardry World</h6>
                                                            <div class=" h5 text-primary"> {{ $student->schoolName }}</div>
                                                            <div class="text-danger">{{ $student->houseName }}</div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner p-0">
                                                        <ul class="link-list-menu">
                                                            <li>
                                                                <a class="active" href="html/lms/students-details.html"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="html/lms/students-details-courses.html"><em class="icon ni ni-book-fill"></em><span>Courses</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="html/lms/students-details-activity.html"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="user-account-info py-0">
                                                            <h6 class="overline-title-alt">Last Login</h6>
                                                            <p>06-29-2020 02:39pm</p>
                                                            <h6 class="overline-title-alt">Login IP</h6>
                                                            <p>192.129.243.28</p>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- .card-aside -->
                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
    <!-- @@ Student Edit Modal @e -->
    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Update Student</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#personal-01">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal-01">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">First Name</label>
                                        <input type="text" class="form-control" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Last Name</label>
                                        <input type="text" class="form-control" id="display-name" value="Ishtiyak" placeholder="Enter display name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Course to Enrol</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" data-placeholder="Select multiple options">
                                                <option value="default_option">UI/UX Design with Adobe XD</option>
                                                <option value="option_select_name">Front-end Web Development with React</option>
                                                <option value="option_select_name">Learn Android Development with project</option>
                                                <option value="option_select_name">Learn PHP Basic to Advance</option>
                                                <option value="option_select_name">Learn Android Development with project</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" value="Email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control" id="phone-no" value="+880" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <input type="text" class="form-control date-picker" id="birth-day" placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="latest-sale">
                                        <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-primary">Update Student</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Address Line 1</label>
                                        <input type="text" class="form-control" id="address-l1" value="2337 Kildeer Drive">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Address Line 2</label>
                                        <input type="text" class="form-control" id="address-l2" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">State</label>
                                        <input type="text" class="form-control" id="address-st" value="Kentucky">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-county">Country</label>
                                        <select class="form-select js-select2" id="address-county" data-ui="lg">
                                            <option>Canada</option>
                                            <option>United State</option>
                                            <option>United Kindom</option>
                                            <option>Australia</option>
                                            <option>India</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-primary">Update Address</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
                <!-- footer @s -->
@include('admin/partials/footer')