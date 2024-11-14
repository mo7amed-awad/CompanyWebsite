<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;


class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers=Subscriber::paginate(2);
        return view('admin.subscribers.index',get_defined_vars());
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return to_route('admin.subscribers.index')->with('success',__('keywords.deleted_successfully'));
    }
}
