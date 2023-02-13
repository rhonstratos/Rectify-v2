<?php
namespace App\Traits\Models;

use Illuminate\Support\Str;


trait StringIdGenerator
{
    public static function generateStringId(int $length = 16): string
    {
        $id = Str::random($length); //Generate random string
        $exists = self::query()
            ->where('id', '=', $id)
            ->get(['id']); //Find matches for id = generated id
        if (isset($exists[0]->id)) { //id exists in users table
            return self::generateStringId(); //Retry with another generated id
        }
        return $id; //Return the generated id as it does not exist in the DB
    }
}
