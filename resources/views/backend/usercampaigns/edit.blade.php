@extends('backend.layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('usercampaigns.update', $campaign->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="campaign_name">Campaign Name:</label>
                        <input type="text" name="campaign_name" class="form-control" value="{{ $campaign->campaign_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="list">List:</label>
                        <input type="text" name="list" class="form-control" value="{{ $campaign->list }}" required>
                    </div>

                    <div class="form-group">
                        <label for="sent">Sent:</label>
                        <input type="text" name="sent" class="form-control" value="{{ $campaign->sent }}" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status" class="form-control" required>
                            <option value="">Select Status</option>
                            <option value="Sent" {{ $campaign->status === 'Sent' ? 'selected' : '' }}>Sent</option>
                            <option value="Scheduled" {{ $campaign->status === 'Scheduled' ? 'selected' : '' }}>Scheduled</option>
                            <option value="Draft" {{ $campaign->status === 'Draft' ? 'selected' : '' }}>Draft</option>
                            <option value="Pending" {{ $campaign->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Review" {{ $campaign->status === 'Review' ? 'selected' : '' }}>Review</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('usercampaigns.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

@endsection
