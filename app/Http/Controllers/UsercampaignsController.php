<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Usercampaigns;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsercampaignsRequest;
use App\Http\Requests\UpdateUsercampaignsRequest;

class UsercampaignsController extends Controller
{
    public function index(Request $request)
    {
        $campaigns = Usercampaigns::query()
            ->when($request->search, function($query, $search) {
                return $query->where('campaign_name', 'like', '%'.$search.'%');
            })
            ->orderByDesc('id')
            ->get();

        return view('backend.usercampaigns.index', compact('campaigns'));
    }

    public function create()
    {
        return view('backend.usercampaigns.create');
    }

    public function store(StoreUsercampaignsRequest $request)
    {
        $campaign = new Usercampaigns();
        $campaign->status = $request->input('submit') == 'send' ? 'Sent' : 'Draft';
        $campaign->campaign_name = $request->input('campaign_name');
        $campaign->list = $request->input('list');
        $campaign->sent = $request->input('sent');
        $campaign->submit_date = Carbon::now();
        $campaign->save();

        return redirect()->route('usercampaigns.index');
    }

    public function edit(Usercampaigns $campaign)
    {
        return view('backend.usercampaigns.edit', compact('campaigns'));
    }

    public function update(UpdateUsercampaignsRequest $request, Usercampaigns $campaign)
    {
        $campaign->campaign_name = $request->input('campaign_name');
        $campaign->list = $request->input('list');
        $campaign->sent = $request->input('sent');
        $campaign->status = $request->input('status');
        $campaign->save();

        return redirect()->route('usercampaigns.index')
                         ->with('success', 'Campaign updated successfully.');
    }

    public function destroy(Usercampaigns $campaign)
    {
        $campaign->delete();

        return redirect()->route('usercampaigns.index');
    }
}
