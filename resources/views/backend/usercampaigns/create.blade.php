@extends('backend.layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Campaign</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('usercampaigns.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="campaign_name">Campaign Name</label>
                                <input type="text" name="campaign_name" class="form-control" id="campaign_name" placeholder="Enter campaign name" value="{{ old('campaign_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="list">List</label>
                                <input type="text" name="list" class="form-control" id="list" placeholder="Enter list" value="{{ old('list') }}">
                            </div>
                            <div class="form-group">
                                <label for="sent">Sent</label>
                                <input type="text" name="sent" class="form-control" id="sent" placeholder="Enter sent" value="{{ old('sent') }}">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Send" class="btn btn-success">
                                <input type="submit" name="draft" value="Draft" class="btn btn-secondary">
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
