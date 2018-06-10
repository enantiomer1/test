<?php 

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;
use jeremykenedy\LaravelRoles\Models\Role;

class AdminController extends Controller 
{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function admin()
  {
    $user = Auth::user();
    $users = User::all();
    $roles = Role::all();
    $posts = Post::all();
      
    return view('back.admin', compact('users', 'roles', 'posts'));
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
  public function update($id)
  {
    
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