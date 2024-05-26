<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project; 

class ProjectController extends Controller
{
    //
    public function index()
{
    $projects = Project::all();
    return view('projects.index', compact('projects'));
}

public function show(Project $project)
{
    // If you have relations to load, do it here, e.g., $project->load('tasks');
    return view('projects.show', compact('project'));
}


public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'contract_start_date' => 'required| date',
            'contract_end_date'=> 'required| date',
            'warranty_start_date' => 'required| date',
            'warranty_end_date' => 'required| date',
            'contract_value'=> 'required| int | max:20',
            'business_scheme'=> 'required|string|max:255',
            'funding_source'=> 'required|string|max:255',
            'business_line'=> 'required|string|max:255',
        ]);

        try {
            $project = Project::create($validatedData);
            return redirect()->route('projects.show', $project)->with('success', 'Project created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to create the project.')->withErrors($e->getMessage());
        }
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'contract_start_date' => 'required| date',
            'contract_end_date'=> 'required| date',
            'warranty_start_date' => 'required| date',
            'warranty_end_date' => 'required| date',
            'contract_value'=> 'required| int | max:20',
            'business_scheme'=> 'required|string|max:255',
            'funding_source'=> 'required|string|max:255',
            'business_line'=> 'required|string|max:255',
        ]);

        $project->update($validatedData);

        // Redirect back to the project details page
        return redirect()->route('projects.show', $project);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function get(){
        $tasks = Task::all();  // Assuming you have lots of tasks
        $links = Link::all();  // Assuming you have links defined
    
        return response()->json([
            "data" => $tasks,
            "links" => $links
        ]);
    }
    
    public function ganttChart($projectId)
    {
        $project = Project::with(['tasks', 'tasks.links'])->findOrFail($projectId);
        return view('projects.gantt', ['project' => $project]);
    }
    
}
