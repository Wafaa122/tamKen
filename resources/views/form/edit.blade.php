


<form method='post' action='{{asset("form/".$item->id)}}'>

    @csrf
    @method("put")
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">Full Name</label>
            <input autofocus type="text" value='{{$item->full_name}}' class="form-control" name="full_name" id="full_name" placeholder="Enter full Name">

        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">Email</label>
            <input autofocus type="text" value='{{$item->email}}' class="form-control" name="email" id="email" placeholder="Enter email ">

        </div>
        <div class="col-md-6 mb-3">
            <label for="firstName">Mobile</label>
            <input autofocus type="text" value='{{$item->mobile}}' class="form-control" name="mobile" id="mobile" placeholder="Enter mobile">

        </div>
        <div class="col-md-6 mb-3">
            <div class="form-group">
                <label>Gender</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input  type="radio" value="{{$item->gender}}" id="genderM" name="gender" class="custom-control-input">
                        <label class="custom-control-label" for="genderM">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input  value="{{$item->gender}}" type="radio" value="F" id="genderF" name="gender" class="custom-control-input">
                        <label class="custom-control-label" for="genderF">Female</label>
                    </div>
                </div>
             </div>
              <div>


        </div>
    </div>
    <button class="btn btn-primary" type="submit" href='{{route("form-index")}}'>Update</button>
    <a class='btn btn-light' href='{{route("form-index")}}'>Cancel</a>

</form>

