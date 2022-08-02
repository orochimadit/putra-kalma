<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bank;
class Banks extends Component
{
    public $banks, $name,$bank_id;
    public $updateMode = false;
    public function render()
    {
        $this->banks = Bank::all();
        return view('livewire.banks');
    }
    private function resetInputFields(){
        $this->name = '';
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
    public function store()
    {
        $validated= $this->validate([
            'name' => 'required'
        ]);
        Bank::create($validated);

        session()->flash('message', 'Bank Created Successfully.');

        $this->resetInputFields();

        $this->emit('bankStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $bank = Bank::where('id',$id)->first();
        $this->bank_id = $id;
        $this->name = $bank->name;
     }
    public function update()
    {
        $validated = $this->validate([
            'name' => 'required',
        ]);
        if ($this->bank_id) {
            $bank = Bank::find($this->bank_id);
            $bank->update([
                'name' => $this->name
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Bank Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if($id){
            Bank::where('id',$id)->delete();
            session()->flash('message', 'Bank Deleted Successfully.');
        }
    }
}
