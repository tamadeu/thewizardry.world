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
                                        <h3 class="nk-block-title page-title"><a href="/wwadmin/schools">School</a>/ <strong class="text-primary small">{{ $school->name }}</strong></h3>
                                    </div>
                                </div>
                                <div class="nk-block nk-block-lg">
                                    <div class="card card-stretch">
                                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card" id="schools-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#details"><em class="icon ni ni-user-circle-fill"></em><span>Details</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#houses"><em class="icon ni ni-building-fill"></em><span>Houses</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#students"><em class="icon ni ni-book-fill"></em><span>Students</span></a>
                                            </li>

                                            <li class="nav-item nav-item-trigger">
                                                <a href="#edit-school" class="btn btn-icon btn-trigger" data-bs-toggle="modal"><em class="icon ni ni-edit"></em></a>
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
                                                                    <span class="profile-ud-value">{{ $school->id }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">School Name</span>
                                                                    <span class="profile-ud-value">{{ $school->name }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Country</span>
                                                                    <span class="profile-ud-value">{{ $school->country }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Latin Motto</span>
                                                                    <span class="profile-ud-value">{{ $school->mottoLatin }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">English Motto</span>
                                                                    <span class="profile-ud-value">{{ $school->mottoEnglish }}</span>
                                                                </div>
                                                            </div>
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->
                                                </div><!-- tab pane -->

                                                <div class="tab-pane" id="houses">
                                                    <div class="nk-block-head nk-block-head-sm">
                                                        <div class="nk-block-between">
                                                            <div class="nk-block-head-content">
                                                                <h3 class="nk-block-title page-title">Houses</h3>
                                                            </div><!-- .nk-block-head-content -->
                                                            <div class="nk-block-head-content">
                                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                                                    <div class="toggle-expand-content" data-content="more-options">
                                                                        <ul class="nk-block-tools g-3">
                                                                            <li class="nk-block-tools-opt">
                                                                                <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal" href="#add-house"><em class="icon ni ni-plus"></em></a>
                                                                                <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#add-house"><em class="icon ni ni-plus"></em><span>Add</span></a>
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
                                                                <span class="lead-text">House Name</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text d-none d-sm-inline">Founding Wizard</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text d-none d-sm-inline">School Year's Points</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <span class="lead-text">&nbsp;</span>
                                                            </div>
                                                        </div>
                                                        @foreach($houses as $index => $house)
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col"> {{ $index + 1 }} </div>
                                                                <div class="nk-tb-col"> {{ $house->name }} </div>
                                                                <div class="nk-tb-col">
                                                                    {{ $house->foundingWizardName }}
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                @php
                                                                    $houseId = $house->id;
                                                                    
                                                                    // Use Laravel's collection method to filter students by houseId
                                                                    $foundStudents = array_filter($students, function ($item) use ($houseId) {
                                                                        return $item->houseId === $houseId;
                                                                    });

                                                                    $firstMatchStudents = array_values($foundStudents);

                                                                    $housePoints = 0;
                                                                    
                                                                    // Calculate the sum of points for the filtered students
                                                                    foreach($firstMatchStudents as $points){
                                                                        $housePoints += $points->points;
                                                                    }
                                                                @endphp
                                                                
                                                                    {{ $housePoints }}
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <a href="{{ $school->id }}/{{ $index }}" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-eye"></em></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ $school->id }}/{{ $house->id }}/delete" onclick="return confirm('Do you really wish to delete {{ $house->name }}?')" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-trash-alt text-danger"></em></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div><!--tab pane-->

                                                <div class="tab-pane" id="students">
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
                                                                            <li class="nk-block-tools-opt">
                                                                                <a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal" href="#add-student"><em class="icon ni ni-plus"></em></a>
                                                                                <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#add-student"><em class="icon ni ni-plus"></em><span>Add</span></a>
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
                                                                <span class="lead-text">Student Name</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text d-none d-sm-inline">House</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <span class="lead-text">&nbsp;</span>
                                                            </div>
                                                        </div>
                                                        @foreach($students as $index => $student)
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col"> {{ $index + 1 }} </div>
                                                                <div class="nk-tb-col"> {{ $student->name }} </div>
                                                                <div class="nk-tb-col">
                                                                    {{ $student->houseName }}
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <a href="/wwadmin/students/{{ $student->id }}" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-eye"></em></a>
                                                                        </li>
{{--                                                                         <li>
                                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-trash-alt text-danger"></em></a>
                                                                        </li>
 --}}                                                                    </ul>
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


                <div class="modal fade" role="dialog" id="add-house">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                            <div class="modal-body modal-body-md">
                                <h5 class="title">Add House</h5>
                                <form action="/wwadmin/add_house" method="POST" class="pt-2">
                                    @csrf
                                    <div class="row gy-4">                            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" value="" placeholder="House Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="foundingWizard" name="foundingWizard" value="" placeholder="Founding Wizard's Name">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="story" name="story" value="" placeholder="Story"></textarea>
                                            </div>
                                        </div>

        
                                        <div class="col-md-12">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <input type="hidden" value="{{ $school->id }}" name="schoolId" />
                                                    <input type="hidden" value="{{ $school->name }}" name="schoolName" />
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
                </div>

                <div class="modal fade" role="dialog" id="edit-school">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                            <div class="modal-body modal-body-md">
                                <h5 class="title">Edit School</h5>
                                <form action="/wwadmin/updateSchool" method="POST" class="pt-2">
                                    @csrf
                                    <div class="row gy-4">                            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">School name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ $school->name }}" placeholder="School Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Country</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" name="country" data-placeholder="Select a country for the school">
                                                        <option value="">Choose a Country</option>
                                                        <option value="England" @if($school->country == "England") selected @endif>England</option>
                                                        <option value="Brazil" @if($school->country == "Brazil") selected @endif>Brazil</option>
                                                        <option value="USA" @if($school->country == "USA") selected @endif>USA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Motto in Latin</label>
                                                <input type="text" class="form-control" id="mottoLatin" name="mottoLatin" value="{{ $school->mottoLatin }}" placeholder="Latin Motto">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Motto in English</label>
                                                <input type="text" class="form-control" id="mottoEnglish" name="mottoEnglish" value="{{ $school->mottoEnglish }}" placeholder="English Motto">
                                            </div>
                                        </div>

                                        

        
                                        <div class="col-md-12">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <input type="hidden" value="{{ $school->id }}" name="schoolId" />
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
                </div>

                <!-- footer @s -->
                <script>
                    $(document).ready(function () {
  // Check the URL hash and show the corresponding tab on page load
  var urlHash = window.location.hash;
  if (urlHash) {
    $('a[data-bs-toggle="tab"][href="' + urlHash + '"]').tab('show');
  }

  // Update the URL hash when a tab is clicked
  $('#schools-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
  });
});

                    </script>
@include('admin/partials/footer')