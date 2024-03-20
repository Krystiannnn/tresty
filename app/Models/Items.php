<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
abstract class Items{

    protected $type = ['book', 'comic', 'short_story_collection'];
    
    public function getKey() {
        $keys = [];
    
        foreach ($this->type as $tableName) {
            $firstRecord = DB::table($tableName)->first();
    
            if ($firstRecord) {
                $tableKeys = [];
    
                foreach ($firstRecord as $key => $value) {
                    if ($key !== 'id') { 
                        $tableKeys[] = $key;
                    }
                }
    
                $keys[$tableName] = $tableKeys;
            }
        }
    
        return $keys;
    }

}