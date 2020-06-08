<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Analytics;
use Spatie\Analytics\Period;
class ThongkeAnalyticsController extends Controller
{
    //

public function index() 
    {
        $data = [];
        $totalVisitorsAndPageViews = Analytics::fetchTotalVisitorsAndPageViews(Period::days(29));
        $data['date'] = $totalVisitorsAndPageViews->pluck('date');
        $data['visitors'] = $totalVisitorsAndPageViews->pluck('visitors');
        $data['pageViews'] = $totalVisitorsAndPageViews->pluck('pageViews');
        $data['fetchTopReferrers'] = Analytics::fetchTopReferrers(Period::days(29));
        
        return view('gplx.cbsh.thongkeanalystic', compact('data'));
    }
}
