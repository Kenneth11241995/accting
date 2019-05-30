@extends('includes.body')

@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Add New Leader</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Leaders</a></li>
                                <li class="active">Create</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">

            <div class="row">
                <form id="addLeader" method="post" action="{{ route('leaders.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-xs-12 col-sm-8">
                    <div class="card">
                        <div class="card-body card-block">
                                @if ($errors->any())
                                  <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                  </div><br />
                                @endif
                                <div class="form-group">
                                    <label class=" form-control-label">First Name</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="first_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Last Name</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Email Address</label>
                                    <div class="input-group">
                                        <input class="form-control" type="email" name="email_address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Contact Number</label>
                                    <div class="input-group">
                                        <input class="form-control" type="number" name="contact_number" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Address</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="home_address">
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="card">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label class=" form-control-label">Percentage</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" name="percentage">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Image</label>
                                <img id="blah" src="{{ asset('_sources/images/avatar/blank-profile-picture-973460_960_720.png') }}" alt="your image" />
                                <div class="input-group">
                                    <input class="form-control" id="imageUpload" type="file" name="image">
                                </div>
                            </div>
                            <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Schedules</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check" id="scheduleCheckBox">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox1" name="schedule" value="Monday" class="form-check-input">Monday
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox2" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox2" name="schedule" value="Tuesday" class="form-check-input"> Tuesday
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox3" name="schedule" value="Wednesday" class="form-check-input"> Wednesday
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox4" name="schedule" value="Thursday" class="form-check-input"> Thursday
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox5" name="schedule" value="Friday" class="form-check-input"> Friday
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox6" name="schedule" value="Saturday" class="form-check-input"> Saturday
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox7" name="schedule" value="Sunday" class="form-check-input"> Sunday
                                                    </label>
                                                </div>
                                                <input type="hidden" name="schedules" id="realSched" value="Everyday">
                                            </div>
                                        </div>
                                    </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="submit" value="SUBMIT">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
