<?php
namespace App\Models\Validators;

use Illuminate\Support\Facades\Validator;

class ProductValidator
{
    public static function validate($data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'item_number' => 'required|integer',
            'image' => 'required|string',
        ])->validate();
    }
}