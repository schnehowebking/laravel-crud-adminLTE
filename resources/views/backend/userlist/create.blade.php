@extends('backend.layouts.app')

@section('content_header')
    <h1>Create New List</h1>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="card-header">Create New List</div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('lists.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="list_name">List Name</label>
                                <input type="text" name="list_name" id="list_name" class="form-control @error('list_name') is-invalid @enderror" value="{{ old('list_name') }}" required>
                                @error('list_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="provider">Provider</label>
                                <input type="text" name="provider" id="provider" class="form-control @error('provider') is-invalid @enderror" value="{{ old('provider') }}" required>
                                @error('provider')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="api_key">API Key</label>
                                <input type="text" name="api_key" id="api_key" class="form-control @error('api_key') is-invalid @enderror" value="{{ old('api_key') }}" required>
                                @error('api_key')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="api_password">API Password</label>
                                <input type="password" name="api_password" id="api_password" class="form-control @error('api_password') is-invalid @enderror" required>
                                @error('api_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" required>
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') }}" required>
                                @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create List</button>
                                <a href="{{ route('lists.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
