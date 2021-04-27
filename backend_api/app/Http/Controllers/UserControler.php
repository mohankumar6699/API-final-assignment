<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
class UserControler extends Controller
{
    function addBooking(Request $request)
    {
    	$em=new Booking();
    	$data=$em->addBooking($request->all());
    }
    function getBooking()
    {
    	$em=new Booking();
    	$data=$em->getBooking();
    	return response()->json($data);
        /*return view('Booking'); */
    }
    function getoneBooking(Request $request)
    {
        $id=$request->id;
        $em=new Booking();
        $data=$em->getoneBooking($id);
        return response()->json($data);
        /*return view('Booking'); */
    }
    function updateBooking(Request $request)
    {   
        $id=$request->id;
        $em=new Booking();
        $data=$em->updateBooking($id,$request->all());
    }
    function deleteBooking(Request $request)
    {
    	$id=$request->id;
    	$em=new Booking();
    	$em->deleteBooking($id);
    }

}

