<?php

namespace App\Http\Controllers;

use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use PDO;
use App\User;

class UserController extends Controller
{
    public function store(request $request) {
    	echo"welcome";
		//print_r($request->input());   
		$user=new User();
		$user->name=$request->input('name');
	    $user->email=$request->input('email');		
		$user->password=$request->input('password');
		$user->save();
		return redirect('/todo');
		//$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

		//echo DB::insert('insert into users(id,name, email,password) values(?,?,?,?)',[null,$name,$email,$password]);
 }
  public function logs(request $request) {
		print_r($request->input());
		$user=new User();
		 $user->name=$request->input('name');
		$user->password=$request->input('password');
		$user->save();
		if(count($data)){
		 	echo"Enregistrer avec succees";
		 }else{
		 	echo "Entrez un bon login ou un bon mdp";
		 };
 }
}
