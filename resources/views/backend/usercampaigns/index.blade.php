@extends('backend.layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Campaigns</h1>
                    </div>
                    <div class="card-header">
                        <h4 class="card-title">User Campaigns</h4>
                        <a href="{{ route('usercampaigns.create') }}" class="btn btn-primary float-right">Create Campaign</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Campaign Name</th>
                                        <th>List</th>
                                        <th>Sent</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($campaigns as $campaign)
                                        <tr>
                                            <td>{{ $campaign->campaign_name }}</td>
                                            <td>{{ $campaign->list }}</td>
                                            <td>{{ $campaign->sent }}</td>
                                            <td>{{ $campaign->status }}</td>
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
                                    @endforeach
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
