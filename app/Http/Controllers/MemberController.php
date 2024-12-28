<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members=Member::paginate(config('pagination.count'));
        return view('admin.members.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.members.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
          $data=$request->validated();

        $image=$request->image;
        $newImageName=time().'-'.$image->getClientOriginalName();
        $image->storeAs('members',$newImageName,'public');
        $data['image']=$newImageName;

        Member::create($data);
          return to_route('admin.members.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('admin.members.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('admin.members.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        $data=$request->validated();
        if ($request->hasFile('image')){
            Storage::delete("public/members/$member->image");

            $image=$request->image;
            $newImageName=time().'-'.$image->getClientOriginalName();
            $image->storeAs('members',$newImageName,'public');
            $data['image']=$newImageName;
        }
        $member->update($data);
        return to_route('admin.members.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        Storage::delete("public/members/$member->image");
        $member->delete();
         return to_route('admin.members.index')->with('success', __('keywords.deleted_successfully'));
    }
}
