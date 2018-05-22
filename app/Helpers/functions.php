<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


//pega os valores enum em um campo
if (! function_exists('pegaValorEnum')) {
   function pegaValorEnum($table, $column) {
      $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type ;
      preg_match('/^enum\((.*)\)$/', $type, $matches);
      $enum = array();
      foreach( explode(',', $matches[1]) as $value )
      {
         $v = trim( $value, "'" );
         $enum[] = $v;
      }
      return $enum;
   }
}