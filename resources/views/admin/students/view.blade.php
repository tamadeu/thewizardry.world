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
                                                            <h6 class="overline-title-alt">Level</h6>
                                                            <p>{{ $student->level }}</p>
                                                            <h6 class="overline-title-alt">Points</h6>
                                                            <p>{{ $student->points }}</p>
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
                            <a class="nav-link" data-bs-toggle="tab">Personal</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                        <form method="POST" action="/wwadmin/updateStudent">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="firstName">User Type</label>
                                        <select class="form-control" name="type">
                                            <option value="admin" @if($student->type == "admin") selected @endif>Admin</option>
                                            <option value="regular" @if($student->type == "regular") selected @endif>Regular User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{ $student->firstName }}" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{ $student->lastName }}" placeholder="Enter last name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="{{ $student->username }}" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="dateOfBirth">Date of Birth</label>
                                        <input type="text" class="form-control date-picker" id="dateOfBirth" name="dateOfBirth" placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="country">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" value="{{ $student->country }}" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <input type="hidden" name="id" value="{{ $student->id }}" />
                                            <button type="submit" href="#" class="btn btn-primary">Update Student</button>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
                <!-- footer @s -->
@include('admin/partials/footer')