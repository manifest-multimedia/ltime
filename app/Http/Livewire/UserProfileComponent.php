<?php

namespace App\Http\Livewire;

use App\Helpers\helper;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserProfileComponent extends Component
{
    use WithFileUploads;

    public $photo;
    public $firstName;
    public $lastName;
    public $otherName;
    public $email;   

    public function mount(){
        $this->firstName=helper::getUserFirstName(Auth::user()->name); 
        $this->lastName=helper::getUserLastName(Auth::user()->name); 
        $this->otherName=helper::getUserOtherName(Auth::user()->name); 
        $this->email=Auth::user()->email;
        $this->photo=Auth::user()->profile_photo_path;
    }

    public function render()
    {
        return view('livewire.user-profile-component');
    }


    public function saveProfile()
    {

        // dd($this->photo);
      
        $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            // 'email' => 'required|email',
        ]);

        // Update the user model or perform any other necessary actions
        $user = User::find(auth()->user()->id);

        // dd($user);

        $user->name = "$this->firstName $this->lastName $this->otherName";
       
        if ($this->photo) {
            try {
              // Store the uploaded photo and update the profile_photo_path
          $path=$this->photo->store('profile-photos', 'public');

                $user->profile_photo_path =$path;  // Adjust the storage path as needed
           
              

            
            } catch (\Throwable $th) {
                //throw $th;
                $user->profile_photo_path=null;
            }
            
        } else {
            $user->profile_photo_path=null;
        }
        
        $user->save();

        session()->flash('success', 'Profile updated successfully.');

        $this->emit('profileUpdated');

    }
}
