<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function show($recipe_id)
    {
        $recipe = Recipe::find($recipe_id);
        $set = $recipe->set;
        return view('recipes.show', compact('recipe', 'set'));
    }
}
