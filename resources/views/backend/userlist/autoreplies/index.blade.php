@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="card-header with-border">
                <h3 class="box-title"></h3>

            </div>
            <div class="row">

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header with-border">
                            <h3 class="box-title">Autoreplies List</h3>
                            <a href="{{ route('autoreplies.create') }}" class="btn btn-primary pull-right">Add New</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Keyword</th>
                                        <th>Status</th>
                                        <th>Seen</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autoreplies as $autoreply)
                                        <tr>
                                            <td>{{ $autoreply->keyword }}</td>
                                            <td>{{ ucfirst($autoreply->status) }}</td>
                                            <td>0</td>
                                            <td>
                                                <a href="{{ route('autoreplies.edit', $autoreply) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $autoreply->id }}').submit();">Delete</a>
                                                <form id="delete-form-{{ $autoreply->id }}"
                                                    action="{{ route('autoreplies.destroy', $autoreply) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Numbers Of Users</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Total:</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Active:</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Inactive:</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Others:</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
