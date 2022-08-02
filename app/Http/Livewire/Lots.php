<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lot;
use App\Models\Housing;
class Lots extends Component
{
    public $lots, $name,$housing_id,$housings,$blok,$price,$type,$surface_area,$amount;
    public $updateMode = false;

    public function render()
    {
        $this->lots = Lot::all();
        $this->housings = Housing::all();
        return view('livewire.lot.index');
    }

    public function store()
    {
        
        $validated= $this->validate([
            'name' => 'required',
            'surface_area' => 'required',
            'type' => 'required',
            'amount' => 'required',
            'price' =>'required',
            'housing_id'      => 'required',
        ]);
        Lot::create($validated);

        session()->flash('message', 'Kaveling Created Successfully.');

        $this->resetInputFields();

        $this->emit('lotStore'); // Close model to using to jquery
    }
    public function delete($id)
    {
        if($id){
            Lot::where('id',$id)->delete();
            session()->flash('message', 'Perumahan Deleted Successfully.');
        }
    }
}
