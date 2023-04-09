@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit User List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="{{ route('lists.update', $list->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="list_name">List Name</label>
                        <input type="text" class="form-control" id="list_name" name="list_name" value="{{ $list->list_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="provider">Provider</label>
                        <input type="text" class="form-control" id="provider" name="provider" value="{{ $list->provider }}" required>
                    </div>
                    <div class="form-group">
                        <label for="api_key">API Key</label>
                        <input type="text" class="form-control" id="api_key" name="api_key" value="{{ $list->api_key }}" required>
                    </div>
                    <div class="form-group">
                        <label for="api_password">API Password</label>
                        <input type="password" class="form-control" id="api_password" name="api_password" value="{{ $list->api_password }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $list->phone_number }}" required>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url" name="url" value="{{ $list->url }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection
