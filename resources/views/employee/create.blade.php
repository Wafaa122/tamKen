
@extends("layouts.employee")
@section("title","Index ")
@section("content")

<form method='post' action='{{route("employee.index")}}'>
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name">first Name</label>
            <input autofocus='true' value='{{ old("first_name") }}' type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name">last Name</label>
            <input autofocus='true' value='{{ old("last_name") }}' type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="text" value='{{ old("email") }}' class="form-control" name="email" id="email" placeholder="Enter Email Address">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="phone"> Phone</label>
            <input type="text" value='{{ old("phone") }}' class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="phone"> EmpNo</label>
            <input type="text" value='{{ old("EmpNo") }}' class="form-control" name="EmpNo" id="EmpNo" placeholder="Enter EmpNo ">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label>
            <input {{old('active')?"checked":""}} type="checkbox" name="active" />
            Active
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>
            <input {{old('gender')?"checked":""}} type="radio" value='m' name="gender" />
            Male
            </label>
            <label>
            <input {{old('gender')?"checked":""}} type="radio" value='f' name="gender" />
            Female
            </label>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Create</button>
    <a class='btn btn-light' href='{{route("employee.index")}}'>Cancel</a>

</form>
@endsection
