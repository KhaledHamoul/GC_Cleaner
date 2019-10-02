<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;

class PidiaterieController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request )
  {
    if ( Auth::check()){
      $id = Auth::id();
      $pidiaterie = User::find($id);
      $pidiaterie->name = $request->name;
      $pidiaterie->email = $request->email;
      $pidiaterie->raison_sociale = $request->raison_sociale;
      $pidiaterie->tel = $request->tel;
      $pidiaterie->site_web = $request->site_web ;
      $pidiaterie->password = Hash::make($request->password);
      $pidiaterie->save();

    }
     return redirect()->route('home');
       
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(  $id , Request $request  )
  {
    





  
    // return redirect()->route('home');
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>