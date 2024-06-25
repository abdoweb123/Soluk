<?php

namespace Modules\Program\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\Program\Entities\Model;
use Modules\Program\Http\Resources\ProgramResource;
use App\Models\Favorite;
use Modules\Specialist\Entities\Model as Specialist;
use Modules\Specialist\Http\Resources\SpecialistResource;

class APIController extends BasicController
{
    /*** get programs ***/
    public function index()
    {
        $Programs = Model::Active()->get();
        ResponseHelper::make(ProgramResource::collection($Programs),__('trans.Data_fetched_successfully'));
    }

    /*** (Add - Delete) from favorite ***/
    public function toggleFavorite(Request $request)
    {
        $auth = $this->checkAuth();

        $request->validate([
            'program_id' => ['required', 'integer', 'exists:programs,id'],
        ]);

        $program = Model::query()->findOrFail($request->program_id);

        // Find if the program is already in favorites for the current user
        $favorite = Favorite::where('parent_id', $auth->id)
            ->where('program_id', $program->id)
            ->first();

        if ($favorite) {
            // If found, delete the favorite (toggle off)
            $favorite->delete();
            ResponseHelper::make(null, __('public.DeletedSuccessfully'), true, 200);
        } else {
            // If not found, create a new favorite (toggle on)
            $favorite = Favorite::create([
                'parent_id' => $auth->id,
                'program_id' => $program->id,
            ]);
            ResponseHelper::make($favorite, __('public.addedSuccessfully'), true, 200);
        }
    }

    /*** Get favorites ***/
    public function getFavorites()
    {
        $auth = $this->checkAuth();

        $favorites = Model::query()
            ->whereHas('favorites',function ($query) use($auth){
                $query->where('parent_id',$auth->id);
            })
            ->get();

        ResponseHelper::make(ProgramResource::collection($favorites),__('trans.Data_fetched_successfully'));
    }


    /*** get program specialist ***/
    public function getProgramSpecialist(Request $request)
    {
        $auth = $this->checkAuth();

        $request->validate([
            'program_id' => ['required', 'integer', 'exists:programs,id'],
        ]);

        $program = Model::query()->findOrFail($request->program_id);

        $specialist = $program->specialist;

        ResponseHelper::make(SpecialistResource::make($specialist),__('trans.Data_fetched_successfully'));
    }


} //end of class
