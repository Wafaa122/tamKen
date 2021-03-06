
@extends("layouts.employee")
@section("title","Edit ")
@section("content")

<form method='post' action='{{asset("employes/".$item->id)}}'>
    @csrf
    @method("put")
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name">first Name</label>
            <input autofocus='true' value='{{ old("first_name",$item->first_name) }}' type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name">last Name</label>
            <input autofocus='true' value='{{ old("last_name",$item->last_name) }}' type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="text" value='{{ old("email",$item->email) }}' class="form-control" name="email" id="email" placeholder="Enter Email Address">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="phone"> Phone</label>
            <input type="text" value='{{ old("phone",$item->phone) }}' class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="phone"> EmpNo</label>
            <input type="text" value='{{ old("EmpNo",$item->EmpNo) }}' class="form-control" name="EmpNo" id="EmpNo" placeholder="Enter EmpNo ">

        </div>
    </div>
  
    <div class="form-group">
        <label>Gender</label>
        <div>
            <div class="custom-control custom-radio custom-control-inline">
                <input {{ $item->gender=="M"?"checked":"" }} type="radio" value="M" id="gender" name="gender" class="custom-control-input">
                <label class="custom-control-label" for="gender">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input {{ $item->gender=="F"?"checked":"" }} type="radio" value="F" id="gender" name="gender" class="custom-control-input">
                <label class="custom-control-label" for="gender">Female</label>
            </div>
        </div>
    </div>
    <div class="form-group">
    <div class="custom-control custom-checkbox">
      <input type="hidden" name="active" value="0" />
      <input  {{ $item->active?"checked":"" }} value="1" type="checkbox" name="active" class="custom-control-input" id="customCheck1">
      <label class="custom-control-label" for="customCheck1">Active</label>
    </div>

    <button class="btn btn-primary" type="submit">Update</button>
    <a class='btn btn-light' href='{{route("employee.index")}}'>Cancel</a>

</form>

@endsection
