<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function statistics()
    {
        $totalVisitors = Visitor::count();
        $uniqueVisitors = Visitor::distinct('ip_address')->count();
        // dd($uniqueVisitors);

        return view('admin.visitor', compact('totalVisitors', 'uniqueVisitors'));
    }
}
