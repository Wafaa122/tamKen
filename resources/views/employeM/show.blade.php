@extends("layouts.home")
@section("title","Show ")
@section("content")
<div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <label for="name">first Name</label>
         <input readonly autofocus='true' value='{{ $item->first_name }}' type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First name">
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <label for="name">last Name</label>
         <input readonly autofocus='true' value='{{ $item->last_name }}' type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name">
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <label for="email">Email</label>
         <input readonly type="text" value='{{ $item->email }}' class="form-control" name="email" id="email" placeholder="Enter Email Address">
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <label for="phone"> Phone</label>
         <input readonly type="text" value='{{ $item->phone }}' class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <label>
         <input disabled {{$item->active?"checked":""}} type="checkbox" name="active" />
         Active
         </label>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <label>
         <input disabled {{$item->gender=='M'?"checked":""}} type="radio" value='M' name="gender" />
         Male
         </label>
         <label>
         <input disabled {{$item->gender=='F'?"checked":""}} type="radio" value='F' name="gender" />
         Female
         </label>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <label for="EmpNo">EmpNo</label>
         <input readonly autofocus='true' value='{{ $item->EmpNo }}' type="text" class="form-control" name="EmpNo" id="EmpNo" placeholder="Enter EmpNo">
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 mb-3">
         <label for="department_id">Department</label>
         <input readonly autofocus='true' value='{{ $item->department->name }}' type="text" class="form-control" name="department_id" id="department_id" >
      </div>
      <div class="row">
         <div class="col-md-6 mb-3">
            <label for="city_id">City</label>
            <input readonly autofocus='true' value='{{ $item->city->name }}' type="text" class="form-control" name="city_id" id="city_id" >
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 mb-3">
            <label for="imgEmp">Photo</label>
            <div style="width:70px;height:70px; overflow:hidden; background-image:url({{ asset("storage/images/".$item->imgEmp) }});background-size:cover">
         </div>
      </div>
   </div>
</div>
<a href='{{ route("employes.edit",$item->id) }}' class='btn btn-sm btn-info'>Edit</a>
<a class='btn btn-light' href='{{route("employes.index")}}'>Cancel</a>
</form>
@endsection

