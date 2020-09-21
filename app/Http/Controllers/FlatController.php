<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class FlatController extends Controller
{
    private $model;

    public function __construct(Flat $flat)
    {
        $this->model = $flat;
    }

    public function all(Request $request)
    {
        $flats = $this->model->with(['attributes', 'relationships'])->paginate(8);

        if (Auth::check()) {
            $flats->each(function (Flat $flat) {

                if ($flat->users->isEmpty()) {
                    $flat->favorite = false;
                } else {
                    foreach ($flat->users as $user) {
                        $flat->favorite = $user->id === Auth::id();
                    }
                }
            });
        }

        return $flats;
    }

    public function favorite(String $id) {
        $this->model->find($id)->users()->attach(Auth::user());

        return response('Success', Response::HTTP_OK);
    }

    public function unfavorite(String $id) {
        $this->model->find($id)->users()->detach(Auth::user());

        return response('Success', Response::HTTP_OK);

    }
}
