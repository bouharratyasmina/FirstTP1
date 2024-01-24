<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index(){
       //dd(Profile::all());
       //orm:select*from profiles
       //$profiles=Profile::all();

       //si je veux pagination
       $profiles=Profile::paginate(10);
        return view("profile.profiles",compact('profiles'));
    }
    public function show(Request $request){
        //recuperer id
        $id=(int)$request->id;

        //etini id li ando 10 f url
                //model 
        //$profile=Profile::find($id);
        //bla use if kat9olo ida jbartih jibo o ida kan nul rodli 404
        $profile=Profile::findOrFail($id);
        //if($profile===NULL){
        //    return abort(404);
        //}
        //dd($profile);
        return view('profile.show',compact('profile'));
    }

    public function create(){
        return view("Profile.createP");
    }
    public function store(ProfileRequest $request){
        //$name=$request->name;
        //$email=$request->email;
        //$password=$request->password;
        //$bio=$request->bio;
        $forms=$request->validated();
        //crypter pass
        $forms["password"]=Hash::make($request->password);
        //$request->validate([])
        //recup les fichiers                    //save in storage/app/public store('profile','public');
        $forms['image'] = $request->file('image')->store('profile','public');
        Profile::create($forms);
        //Profile::create([
        //    'name'=>$name,
        //    'email'=>$email,
        //    'password'=>$pass,
         //   'bio'=>$bio,
        //]);
        //back()->withInput:retour en arr
        //or to_route(chemin)                                         //flashback variable d session:valeur
        return redirect()->route('profiles.Profile')->with("success","votre compte est bien creer");
    }



    public function destroy(Request $request,$id){
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('profiles.Profile')->with("success","votre compte est bien supprimé");

    }

    public function edit(Request $request,$id){
        $profile = Profile::find($id);
        return view("profile.edit",compact('profile'));
    }

    public function update(ProfileRequest $request, $id)
    {
       
        $profile = Profile::find($id);
        $forms=$request->validated();
        $forms["password"]=Hash::make($request->password);

       

      
        // hia ($image!==null) exist
        if($request->hasFile("image")){
           // $forms['image']=$request->file("image")->storeAs('profile','pic','public');
            $forms['image'] = $request->file('image')->store('profile','public');
        }
        $profile->fill($forms)->save();
    
        return redirect()->route('profiles.Profile',$profile["id"])->with("success", "Votre compte est bien modifié");
    }
    
}
