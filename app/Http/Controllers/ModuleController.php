<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Study;
use App\Models\Student;
use App\Models\Teacher;

class ModuleController extends Controller
{
    public function consultasElokuent(){
      
        $modulo = Module::find(1);
        return $modulo;

   
   }
   


}
