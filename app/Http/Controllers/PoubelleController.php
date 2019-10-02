<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\models\Poubelle;

class PoubelleController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    session(['poubelle_info_prepared' => true]);
    $id = Auth::id();
    $poubelles = Poubelle::where('id_pidiaterie',$id)->get() ;	
    session(['poubelles' => $poubelles ]);
    return redirect()->route('home');
    
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
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    if($id != 0) {
       
       $poubelle = Poubelle::find($id) ;	
       return json_encode( $poubelle ) ;

    }
     return 0 ;
    
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
  public function update($id , $niveau)
  {
    if( $id != 0){
     $poubelle = Poubelle::find($id) ;
     $poubelle->niveau = $niveau;
     $poubelle->save();

     return response()->json([
    'contenu' => 'ok'
     ]);
     }
  
    return response()->json([
    'contenu' => 'no'
    ]);
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