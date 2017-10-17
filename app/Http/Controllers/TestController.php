<?php

namespace App\Http\Controllers;

use App\ShippingTerm;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showPMItemPage()
    {
        return view('post-buy-lead.procurement-manager.item');
    }
    public function showPSItemPage()
    {
        return view('post-buy-lead.procurement-staff.item');
    }
    public function showMItemPage()
    {
        return view('post-buy-lead.master-user.item');
    }
    public function showMDetailItemPage()
    {
        return view('post-buy-lead.master.detail-item');
    }
    public function showPMDetailItemPage()
    {
        return view('post-buy-lead.procurement-manager.detail-item');
    }
    public function showPSDetailItemPage()
    {
        return view('post-buy-lead.procurement-staff.detail-item');
    }
    public function showMBuyLeadPage()
    {
        return view('post-buy-lead.master-user.post-buy-lead');
    }
}
