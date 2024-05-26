<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private static  $task;

    public static function newtask($request){
        self::$task = new Task();
        self::$task->title = $request->title;
        self::$task->description = $request->description;
        self::$task->save();
    }

    public static function updatetask($request, $id){
        self::$task = Task::find($id);
        self::$task->title = $request->title;
        self::$task->description = $request->description;
        self::$task->completed = $request->completed;
        self::$task->save();
    }

    public static function deleteuser($id){
        self::$task = Task::find($id);
        self::$task->delete();
    }
}
