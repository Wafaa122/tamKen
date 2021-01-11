
@extends("layouts.home")
@section("title","Index ")
@section("content")
<a href='{{route("employes.create")}}' class='btn btn-success'>Create New Employee</a>

<table class="table table-striped table-sm mt-3">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th>First Name</th>
            <th>last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>EmpNo</th>
            <th>Active</th>
            <th>Department</th>
             <th>City</th>
             <th>Photo</th>
            <th width="30%">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->gender=='M'?"Male":"Female" }}</td>
                <td>{{ $item->EmpNo }}</td>
                <td>{{ $item->active }}</td>
            <td> {{$item->department->name??'' }}</td>
            <td>{{ $item->city->name??'' }}</td>
            <td>
                <div style="width:70px;height:70px; overflow:hidden; background-image:url({{ asset("storage/images/".$item->imgEmp) }});background-size:cover">

                </div>
                </td>

                <td>
                <form method='post' action='{{asset("employes/".$item->id)}}'>
                    @csrf
                    @method("delete")
                    <a href='{{ route("employes.show",$item->id) }}' class='btn btn-sm btn-success'>Show</a>
                    <a href='{{ route("employes.edit",$item->id) }}' class='btn btn-sm btn-primary'>Edit</a>
                    <a href='{{ route("employes.delete",$item->id) }}'class='btn btn-sm btn-danger'  onclick='return confirm("Are you sure?")'>Delete</a>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

 @endsection
