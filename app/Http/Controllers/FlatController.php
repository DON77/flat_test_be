<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class FlatController extends Controller
{
    private $model;

    public function __construct(Flat $flat)
    {
        $this->model = $flat;
    }

    public function all(Request $request)
    {
        return $this->model->with(['attributes', 'relationships'])->paginate(8);
    }
}
