@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header with-border">
                            <h3 class="card-title">Add Autoreply</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('autoreplies.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="keyword">Keyword</label>
                                    <input type="text" class="form-control" id="keyword" name="keyword" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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
