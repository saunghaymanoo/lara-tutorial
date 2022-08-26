<?php

namespace App;

use Auth;
use DB;
use Illuminate\Support\Facades\Log;

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
    public static function customLog($logMessage)
    {
        $logs = DB::getQueryLog();
        $query =$logMessage . "\n";
        $bindings = array();
        for ($i = 0; $i < count($logs); $i++) {
            if (count($logs[$i]["bindings"]) > 0) {
                $bindings[] = $logs[$i]["bindings"];
                for ($j = 0; $j < count($bindings); $j++) {
                    if ($i == $j) {
                        $query .= Utility::getPureSql($logs[$i]["query"], $bindings[$j]) . "\n";
                    }
                }
            } else {
                $query .= $logs[$i]["query"] . "\n";
            }
        }
        $log = $query;
        Log::debug($log);
    }
    public static function customErrorLog($logMessage)
    {
        $log = $logMessage;
        Log::error($log);
    }
    public static function getPureSql($sql, $binds)
    {
        $result = "";

        $sql_chunks = explode('?', $sql);
        if (count($sql_chunks) > 0) {
            foreach ($sql_chunks as $key => $sql_chunk) {
                if (isset($binds[$key])) {
                    $result .= $sql_chunk . '"' . $binds[$key] . '"';
                }
            }
        }

        return $result;
    }
}
