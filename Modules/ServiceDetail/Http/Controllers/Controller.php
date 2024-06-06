<?php

namespace Modules\ServiceDetail\Http\Controllers;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\ServiceDetail\Entities\Model;
use Modules\Service\Entities\Model as Service;
use Modules\Beneficiary\Entities\Model as Beneficiary;
use Modules\Center\Entities\Model as Center;
use Modules\Program\Entities\Model as Program;
use Modules\ServiceDetail\Http\Requests\ServiceDetailWebRequest;

class Controller extends BasicController
{
    public function index(Request $request)
    {
        $program = Program::query()->where('id',request()->program_id)->first();

        if ($program){
            $Models= Model::query()->where('program_id',request()->program_id)->get();
            return view('serviceDetail::index', compact('Models','program'));
        }

        $Models =  Model::query()->get();
        return view('serviceDetail::index', compact('Models'));
    }

    public function create()
    {
        $programs = Program::Active()->get();
        $services = Service::Active()->get();
        $beneficiaries = Beneficiary::Active()->get();
        $centers = Center::Active()->get();

        return view('serviceDetail::create',compact('services','beneficiaries','centers','programs'));
    }

    public function store(ServiceDetailWebRequest $request)
    {
        $validatedData = $request->validated();

        $Model = Model::create($request->all());
        alert()->success(__('trans.addedSuccessfully'));

        return redirect()->back();
    }

    public function show($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        return view('serviceDetail::show', compact('Model'));
    }

    public function edit($id)
    {
        $Model = Model::where('id', $id)->firstorfail();

        $programs = Program::Active()->get();
        $services = Service::Active()->get();
        $beneficiaries = Beneficiary::Active()->get();
        $centers = Center::Active()->get();

        return view('serviceDetail::edit', compact('Model','services','beneficiaries','centers','programs'));
    }

    public function update(ServiceDetailWebRequest $request, $id)
    {
        $validatedData = $request->validated();

        $Model = Model::where('id', $id)->firstorfail();
        $Model->update($request->all());
        alert()->success(__('trans.updatedSuccessfully'));

        return redirect()->back();
    }

    public function destroy($id)
    {
        $Model = Model::where('id', $id)->delete();
    }

} //end of class
