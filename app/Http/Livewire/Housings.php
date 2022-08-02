<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Housing;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
class Housings extends Component
{
    use WithFileUploads;
    public $housings, $name,$image,$location,$amount,$technical_specifications,$surface_area;
    public $type=[];
    public $updateMode = false;
    
    public function render()
    {
        
    }
    private function resetInputFields(){
        $this->name = '';
        $this->image = '';
        $this->location = '';
        $this->amount = '';
        $this->type = [];
        $this->technical_specifications= '';
        $this->surface_area='';
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
    public function store()
    {
        
        $validated= $this->validate([
            'name' => 'required',
            'location' => 'required',
            'amount' => 'required',
            'technical_specifications' => 'required',
            'type'      => 'required',
            'image'         =>'image'
        ]);
        $this->image->store('image');
        Housing::create($validated);

        session()->flash('message', 'Perumahan Created Successfully.');

        $this->resetInputFields();

        $this->emit('housingStore'); // Close model to using to jquery
    }
    public function delete($id)
    {
        if($id){
            Housing::where('id',$id)->delete();
            session()->flash('message', 'Perumahan Deleted Successfully.');
        }
    }
}
