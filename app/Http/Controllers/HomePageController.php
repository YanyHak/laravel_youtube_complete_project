<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use App\Models\Skill;

class HomePageController extends Controller
{
    
    public function index()
    {
        //Dynamic Data to Home Page
        $projects = Project::paginate(1);
        $skills = Skill::all();
        return view('UsersPanel.HomePage', compact('projects','skills'));
    }
    //Skills User Page
    public function ShowSkillChart(){
        $skills = Skill::all();
        return view('UsersPanel.skills.show_skill_chart', compact('skills'));
    }
   
    public function detail($id)
    {
        //Detail Page
        $project = Project::find($id);
        return view('UsersPanel.showDetail', compact('project'));
    }
    //Add Search Function
    public function search(Request $request)
    {
        $query = $request->input('query');
        $earched_items = Project::where('title', 'like', "%$query%")->orwhere('description', 'like', "%$query%")->paginate(1);;
        return view('UsersPanel.search_page',compact('earched_items'));
      
    }

   
    
}
