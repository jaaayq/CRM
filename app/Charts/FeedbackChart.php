<?php

declare(strict_types = 1);

namespace App\Charts;


use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\feedback2;


class FeedbackChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $gendermale = feedback2::where('feedbackgender', 'male')->count();
        $genderfemale = feedback2::where('feedbackgender', 'female')->count();


        return Chartisan::build()
            ->labels(['Female','Male'])
            ->dataset('Gender', [$genderfemale,$gendermale]);
            
            
    }
}