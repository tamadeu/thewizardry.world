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
                                            <h3 class="nk-block-title page-title">Students</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="more-options">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-bs-toggle="dropdown">Status</a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Actived</span></a></li>
                                                                        <li><a href="#"><span>Inactived</span></a></li>
                                                                        <li><a href="#"><span>Blocked</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt">
                                                            <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal" href="#student-add"><em class="icon ni ni-plus"></em></a>
                                                            <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#student-add"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Student</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">School</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-end">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($students as $student)
                                                    @php
                                                    $studentName = $student->name;
                                                    $words = explode(" ", $studentName); // Split the string into words

                                                    $initials = '';
                                                    foreach ($words as $word) {
                                                        $initials .= $word[0]; // Get the first letter of each word and append it to the initials string
                                                    }

                                                    @endphp
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                    <span>{{ $initials }}</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <a href="students/{{ $student->id }}"><span class="tb-lead">{{ $studentName }} <span class="dot dot-success d-md-none ms-1"></span></span></a>
                                                                    <span>{{ $student->id }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount">{{ $student->schoolName }} </span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="students/{{ $student->id }}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="students/{{ $student->id }}/delete" onclick="return confirm('Do you really wish to delete {{ $student->name }}?')"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  -->
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" role="dialog" id="student-add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Students</h5>
                    <ul class="nk-nav nav nav-tabs mt-n2">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#student-info">Student Infomation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#address-info">Address</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="student-info">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">First Name</label>
                                        <input type="text" class="form-control" id="full-name" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Last Name</label>
                                        <input type="text" class="form-control" id="display-name" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Course to Enroll</label>
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
                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Payment Methods</label>
                                        <ul class="custom-control-group g-3 align-center">
                                            <li>
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="pay-card">
                                                    <label class="custom-control-label" for="pay-card">Card</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="pay-bitcoin">
                                                    <label class="custom-control-label" for="pay-bitcoin">Bitcoin</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="pay-cash">
                                                    <label class="custom-control-label" for="pay-cash">Cash</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-primary">Add Student</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address-info">
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
                                        <select class="form-select js-select2" id="address-county">
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