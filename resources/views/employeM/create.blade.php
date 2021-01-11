

@extends("layouts.home")
@section("title","Index ")
@section("content")
<form method='post' action='{{route("employes.index")}}' enctype="multipart/form-data">
   @csrf
   <div class="row">
      <div class="col-md-6 mb-3">
         <label for="name">First Name</label>
         <input autofocus='true' value='{{ old("first_name") }}' type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
      </div>
      <div class="col-md-6 mb-3">
         <label for="name">Last Name</label>
         <input autofocus='true' value='{{ old("last_name") }}' type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <label for="email">Email</label>
         <input type="text" value='{{ old("email") }}' class="form-control" name="email" id="email" placeholder="Enter Email Address">
      </div>
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
      <div class="col-md-6 mb-3">
         <label for="city_id">City</label>
         <select class='form-control' name='city_id' id='city_id'>
            <option value=''>Select City</option>
            @foreach($cities as $city)
            <option {{old('city_id')==$city->id?'selected':''}} value='{{$city->id}}'>{{$city->name}} </option>
            @endforeach
         </select>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <div class="form-group">
            <label for="department_id">Department</label>
            <select class="form-control" id="department_id" name="department_id">
               <option value="">Select Department</option>
               @foreach($departments as $department)
               <option {{ old("department_id")==$department->id?"selected":"" }} value="{{ $department->id }}">{{ $department->name }} ({{ $department->employes->count() }})</option>
               @endforeach
            </select>
         </div>
      </div>
      <div class="col-md-6 mb-3">
         <div class="form-group">
            <label  class="control-label">Photo</label>
            <div class="controls">
               <input id="imgEmp" name="imgEmp" type="file" class="form-control"/>
            </div>
         </div>
      </div>
   </div>
   <div class="row ">
    <div class="col-md-6 mb-3">

        <label>
            <input {{old('active')?"checked":""}} type="checkbox" name="active" value="1" />
            Active
            </label>
    </div>
    <div class="col-md-6 mb-3">

        <label>
        <input {{old('gender')?"checked":""}} type="radio" value='M' name="gender" />
        Male
        </label>
        <label>
        <input {{old('gender')?"checked":""}} type="radio" value='F' name="gender" />
        Female
        </label>
    </div>
   </div>

   <button class="btn btn-primary" type="submit">Create</button>
   <a class='btn btn-light' href='{{route("employes.index")}}'>Cancel</a>
</form>
@endsection

