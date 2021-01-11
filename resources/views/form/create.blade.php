@extends("layouts.form")
@section("title","Index ")
@section("content")

<section id="contact">


                <form method='post' action='{{route("form.index")}}'>
                    @csrf
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" class="form-control" id="" placeholder=" Enter Name" name="full_name">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id" name="email">
					  	</div>
					  	<div class="form-group">
					    	<label for="telephone">Mobile No.</label>
					    	<input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no." name="mobile">
			  			</div>
			  		</div>
			  		<div class="col-md-6">
                        <div class="form-group">
                            <div class="maxl">
                               <label class="radio inline">
                               <input type="radio" name="gender" value="M" name="gender" >
                               <span> Male </span>
                               </label>
                               <label class="radio inline">
                               <input type="radio" name="gender" value="F">
                               <span>Female </span>
                               </label>
                            </div>
                         </div>
			  			<div>


			  			</div>

                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
                    <a class='btn btn-light' href='{{route("form-index")}}'>Cancel</a>

				</form>
			</div>

@endsection
