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
                                            <h3 class="nk-block-title page-title">Quiz</h3>
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
                                                            <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal" href="#add-quiz"><em class="icon ni ni-plus"></em></a>
                                                            <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#add-quiz"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <!-- .nk-block -->
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
                                                        <th class="nk-tb-col"><span class="sub-text">School</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">#Questions</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-end">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($quizzes as $quiz)
                                                    @php
                                                    $schoolName = $quiz->schoolName;
                                                    $words = explode(" ", $schoolName); // Split the string into words

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
                                                                    <a href="quiz/{{ $quiz->id }}"><span class="tb-lead">{{ $schoolName }} <span class="dot dot-success d-md-none ms-1"></span></span></a>
                                                                    <span>{{ $quiz->id }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount">{{ count($quiz->questions) }} <span class="currency">{{ (count($quiz->questions) == 1) ? "question" : "questions"  }}</span></span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="quiz/{{ $quiz->id }}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="quiz/{{ $quiz->id }}/delete" onclick="return confirm('Do you really wish to delete {{ $quiz->schoolName }}?')"><em class="icon ni ni-trash eg-swal-av3"></em><span>Delete</span></a></li>
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
    <div class="modal fade" role="dialog" id="add-quiz">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Question</h5>
                    <form action="/wwadmin/add_quiz" method="POST" class="pt-2">
                        @csrf
                        <div class="row gy-4">                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="school">School</label>
                                    <select class="form-select js-select2" name="school" id="school">
                                        <option value="">Assign a school to this quiz</option>
                                        @foreach($schools as $school)
                                            <option value="{{ $school->id }}">{{ $school->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-primary">Update</button>
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