<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Activity;
use App\Models\User;

class ActivityController extends Controller
{
    public function index()
    {
        $activity = Activity::with('user')->get();
        return Inertia::render('Actividad', [
            'activity' => $activity,
        ]);
    }

    public function create()
    {
        $users = User::all();
        return Inertia::render('CreateActividad', [
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        ]);

        $validated['user_id'] = auth()->id();

        $activity = Activity::create($validated);
        
        return redirect()->route('activities.index');
    }

    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        // Verificar si el usuario actual es el propietario
        if (auth()->id() !== $activity->user_id) {
            return redirect()->route('activities.index');
        }
        return Inertia::render('EditActividad', [
            'activity' => $activity,
        ]);
    }

    public function update(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        
        $activity->update($validated);
        
        return redirect()->route('activities.index');
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();
        
        return response()->json(['success' => true, 'message' => 'Actividad eliminada correctamente']);
    }
}