<?php
namespace App\Models\Validators;

use Illuminate\Support\Facades\Validator;

class ProductUpdateValidator
{
    public static function validate($data)
    {
        return Validator::make($data, [
            'id' => 'required|integer',
            'name' => 'string',
            'price' => 'numeric',
            'description' => 'string',
            'item_number' => 'integer',
            'image' => 'string',
        ])->validate();
    }
}