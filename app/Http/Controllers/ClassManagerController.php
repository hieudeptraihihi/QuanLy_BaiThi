<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Classes;

class ClassManagerController extends Controller
{
    public function index(Request $request)
    {
        //
        $arr['classes'] = Classes::paginate(3);
        $currentpage = $request->query('page');
        $arr['currentpage'] = $currentpage;
        return view('class.index', $arr);
    }
 

    public function store(Request $request)
    {
        //
        $class = new Classes();
        $class->id_class = $request->id_class;
        $class->name_class = $request->name_class;
        $class->save();
        return redirect('class');
    }


    public function edit(Request $request, $id)
    {
        //
        $class = Classes::find($id);
        $currentpage = $request->query('currentpage');
        return view('class.edit', ['class' => $class, 'currentpage' => $currentpage]);
    }


    public function update(Request $request, $id)
    {
        //
        
        $class = Classes::find($id);
        $class->id_class = $request->id_class;
        $class->name_class = $request->name_class;
        $class->save();
        return redirect('class?page='.$request->currentpage);
    }


    public function delete($id)
    {
        //
        Classes::destroy($id);
        return redirect('class');
    }
}
