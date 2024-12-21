<?php

namespace App\Http\Controllers\Landing;

use App\Enums\Fundamental;
use App\Enums\Skill;
use App\Enums\TechStack;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $skills = Skill::cases();
        $fundamentals = Fundamental::cases();
        $techStack = TechStack::cases();

        $delaysSkill = [];
        $delaysFundamental = [];
        $delaysTechStack = [];

        $delay = 0.1;
        foreach ($skills as $skill) {
            $delaysSkill[$skill->name] = $delay;
            $delay += 0.3;
        }        

        $delay = 0.1;
        foreach ($fundamentals as $fundamental) {
            $delaysFundamental[$fundamental->name] = $delay;
            $delay += 0.3;
        }

        $delay = 0.1;
        foreach ($techStack as $tech) {
            $delaysTechStack[$tech->name] = $delay;
            $delay += 0.3;
        }



        return view('index', compact(
            'skills', 
            'fundamentals', 
            'techStack', 
            'delaysSkill',
            'delaysFundamental',
            'delaysTechStack'
        ));
    }
}
