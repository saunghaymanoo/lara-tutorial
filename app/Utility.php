<?php

namespace App;

use Auth;

class Utility
{
    public static function addUpdatedBy($newObj)
    {
        if (Auth::guard('Administrator')->check()) {
            $loginUserId = Auth::guard('Administrator')->user()->id;
            $newObj->updated_at = date('Y-m-d H:i:s');
            $newObj->updated_by = $loginUserId;
        }
        return $newObj;
    }
    public static function addDeletedBy($newObj)
    {
        if (Auth::guard('Administrator')->check()) {
            $loginUserId = Auth::guard('Administrator')->user()->id;
            $newObj->deleted_at = date('Y-m-d H:i:s');
            $newObj->deleted_by = $loginUserId;
        }
        return $newObj;
    }
}
