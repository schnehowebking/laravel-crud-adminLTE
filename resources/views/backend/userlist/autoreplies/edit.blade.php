@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header with-border">
                            <h3 class="card-title">Edit Autoreply</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('autoreplies.update', $autoreply) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="keyword">Keyword</label>s
                                    <input type="text" class="form-control" id="keyword" name="keyword"
                                        value="{{ $autoreply->keyword }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="active" {{ $autoreply->status == 'active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="inactive" {{ $autoreply->status == 'inactive' ? 'selected' : '' }}>
                                            Inactive
                                        </option>
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
