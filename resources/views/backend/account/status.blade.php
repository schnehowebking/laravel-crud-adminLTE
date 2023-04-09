@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">User Account Status</h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach()
                                        <tr>
                                            <td>{{ }}</td>
                                            <td>{{  }}</td>
                                            <td>{{ }}</td>
                                            <td>{{  }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('usercampaigns.edit', $campaign->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('usercampaigns.destroy', $campaign->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
</div>

@endsection
