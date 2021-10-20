<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class TodoController extends Controller
{

    public function tampilTodo(){
        $todolist= \DB::table("tbltodo")->get();
        return view ("todo")
        ->with("todoList",$todolist);
    }
    public function tambahTodo(Request $request){
        \DB::table("tbltodo")
        ->insert([
            "keterangan"=> $request->keterangan,
            "status"=>"pending",
            "created_at"=> now()
        ]);
                return redirect("/");

    }
    public function hapusTodo($id){
        \DB::table("tbltodo")->where("id",$id)->delete();
        return redirect("/");


    }

    public function updateTodo($id){

        \DB::table("tbltodo")->where("id",$id)->update([
            "status" => "selesai",
            "updated_at" => now()
        ]);
        return redirect("/");
    }
}


