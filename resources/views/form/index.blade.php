

@extends("layouts.form")
@section("title","Index ")
@section("content")


<table class="table table-striped table-sm mt-3">
    <thead>
        <tr>
            <th>Id</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>gender</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <th width="5%">#</th>
            <td>{{ $item->id }}</td>
            <td>{{ $item->full_name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->mobile }}</td>
            <td>{{ $item->gender }}</td>
            <td>
                <form method='post' action='{{asset("form/".$item->id)}}'>
                    @csrf
                    @method("delete")


                    <a href='{{ route("form.edit",$item->id) }}' class='btn btn-sm btn-primary'>Edit</a>
                </form>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
@endsection
