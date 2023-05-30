<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class TeamController extends Controller
{
    public function index()
    {
        $teams=Team::paginate(6);//get()
        return view('admin.team.index',compact('teams'));
    }

    public function create()
    {
        return view('admin.team.form');
    }

    public function store(TeamRequest $request)
    {
        $data=$request->validated();
        $imageName=Str::uuid()->toString().'.'.$request->image->extension();
        $request->image->storeAs($imageName,['disk' => 'public_images']);
        $data['image']=$imageName;


        Team::create($data);

        return redirect()->route('team.index');
    }

    public function edit(Team $team)
    {
        return view('admin.team.form',compact('team'));
    }

    public function update(Team $team,TeamRequest $request)
    {
        $data=$request->validated();

        if($request->has('image')){
            $imageName=Str::uuid()->toString().'.'.$request->image->extension();
            $request->image->storeAs($imageName,['disk' => 'public_images']);//public/image

            $data['image']=$imageName;
            File::delete(public_path('storage/images/'.$team->image));
        }

        $team->update($data);

        return redirect()->back();
    }

    public function destroy(Team $team)
    {
        if(Storage::disk('public_images')->exists( $team->image))
            Storage::disk('public_images')->delete( $team->image);

        $team->delete();

        return redirect()->back();
    }
}
