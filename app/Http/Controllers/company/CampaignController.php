<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    function index()
    {
        return view('company.campaign.list');
    }
    function create()
    {
        return view('company.campaign.create');
    }
    function analytics()
    {
        return view('company.campaign.analytics');
    }

    function view()
    {
        return view('company.campaign.view');
    }

}
