<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class booking extends Model
{
    use HasFactory;
    

    function addBooking($data)
    {
        DB::table('booking')->insert($data);
        /*dd($db); */
    }
    function getBooking()
    {
        $db=DB::table('booking')->get();
        /*dd($db); */
        return $db;
    }
    function updateBooking($id,$data)
    {
        DB::table('booking')->where('id',$id)->update($data);
        /*dd($db); */
       
    }
    function getoneBooking($id)
    {
        $db=DB::table('booking')->where('id',$id)->get()->first();
        /*dd($db); */
        return $db;
    }
     function deleteBooking($id)
    {
        DB::table('booking')->where('id',$id)->delete();
        /*dd($db); */
       
    }
}