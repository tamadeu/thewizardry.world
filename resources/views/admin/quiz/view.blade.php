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
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title"><a href="/wwadmin/quiz">Quiz</a>/ <strong class="text-primary small">{{ $quiz->schoolName }}</strong></h3>
                                    </div>
                                </div>
                                <div class="nk-block nk-block-lg">
                                    <div class="card card-stretch">
                                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card" id="questions-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#details"><em class="icon ni ni-user-circle-fill"></em><span>Details</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#questions"><em class="icon ni ni-book-fill"></em><span>Questions</span></a>
                                            </li>

                                            <li class="nav-item nav-item-trigger">
                                                <a href="#edit-quiz" class="btn btn-icon btn-trigger" data-bs-toggle="modal"><em class="icon ni ni-edit"></em></a>
                                            </li>
                                        </ul>
                                        <div class="card-inner">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="details">
                                                    <div class="nk-block">
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">ID</span>
                                                                    <span class="profile-ud-value">{{ $quiz->id }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">School Assigned</span>
                                                                    <span class="profile-ud-value">{{ $quiz->schoolName }}</span>
                                                                </div>
                                                            </div>
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->
                                                </div><!-- tab pane -->

                                                <div class="tab-pane" id="questions">
                                                    <div class="nk-block-head nk-block-head-sm">
                                                        <div class="nk-block-between">
                                                            <div class="nk-block-head-content">
                                                                <h3 class="nk-block-title page-title">Questions</h3>
                                                            </div><!-- .nk-block-head-content -->
                                                            <div class="nk-block-head-content">
                                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                                                    <div class="toggle-expand-content" data-content="more-options">
                                                                        <ul class="nk-block-tools g-3">
                                                                            <li class="nk-block-tools-opt">
                                                                                <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal" href="#add-question"><em class="icon ni ni-plus"></em></a>
                                                                                <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#add-question"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-block-head-content -->
                                                        </div><!-- .nk-block-between -->
                                                    </div><!-- .nk-block-head -->
                                                    <div class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text">#</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text">Question</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text d-none d-sm-inline">#Answers</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <span class="lead-text">&nbsp;</span>
                                                            </div>
                                                        </div>
                                                        @foreach($quiz->questions as $index => $question)
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col"> {{ $index + 1 }} </div>
                                                                <div class="nk-tb-col"> {{ $question->question }} </div>
                                                                <div class="nk-tb-col">
                                                                    {{ count($question->answers) }}
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <a href="{{ $quiz->id }}/{{ $index }}" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-eye"></em></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ $quiz->id }}/{{ $index }}/delete" class="btn btn-sm btn-icon btn-trigger me-n1" onclick="return confirm('Do you really wish to delete {{ $question->question }}?')"><em class="icon ni ni-trash-alt text-danger"></em></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div><!--tab pane-->

                                            </div><!--tab content-->
                                        </div><!--card inner-->
                                    </div><!--card-->
                                </div><!--nk block lg-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                    <!-- Edit Quiz-->
    <div class="modal fade" role="dialog" id="edit-quiz">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit Question</h5>
                    <form action="/wwadmin/updateQuiz" method="POST" class="pt-2">
                        @csrf
                        <div class="row gy-4">                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="school">School</label>
                                    <select class="form-select js-select2" name="school" id="school">
                                        <option value="">Assign a school to this quiz</option>
                                        @foreach($schools as $school)
                                            <option value="{{ $school->id }}" @if($quiz->schoolId == $school->id) selected @endif>{{ $school->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <input type="hidden" value="{{ $quiz->id }}" name="id" />
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
        <!-- @@ Profile Edit Modal @e -->
        <div class="modal fade" role="dialog" id="add-question">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-md">
                        <h5 class="title">Add Question</h5>
                        <form action="/wwadmin/add_question" method="POST" class="pt-2">
                            @csrf
                            <div class="row gy-4">                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="question" name="question" value="" placeholder="Question">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <input type="hidden" value="{{ $quiz->id }}" name="quizId" />
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
                <script>
                    $(document).ready(function () {
  // Check the URL hash and show the corresponding tab on page load
  var urlHash = window.location.hash;
  if (urlHash) {
    $('a[data-bs-toggle="tab"][href="' + urlHash + '"]').tab('show');
  }

  // Update the URL hash when a tab is clicked
  $('#questions-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
  });
});
                    </script>
@include('admin/partials/footer')