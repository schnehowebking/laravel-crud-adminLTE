@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="card-header with-border">
            <h3 class="box-title">User List</h3>
            <a href="{{ route('lists.create') }}" class="btn btn-primary pull-right">Add New</a>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User Lists</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>List Name</th>
                            <th>Active Subscribers</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lists as $list)
                            <tr>
                                <td>{{ $list->list_name }}</td>
                                <td>0</td>

                                <td>
                                    <a href="{{ route('lists.edit', $list->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('lists.destroy', $list->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this list?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

@endsection
