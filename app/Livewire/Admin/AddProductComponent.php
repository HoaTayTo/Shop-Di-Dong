<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
class AddProductComponent extends Component
{
    use WithFileUploads;

    public $catid, $name, $img, $sortDesc, $detail, $producer, $number, $price, $sale;

    protected $rules = [
        'catid' => 'required',
        'name' => 'required|string|max:255',
        'img' => 'required|image|max:1024', // Giới hạn kích thước ảnh 1MB
        'sortDesc' => 'nullable|string',
        'detail' => 'nullable|string',
        'producer' => 'nullable|string',
        'number' => 'required|integer',
        'price' => 'required|numeric',
        'sale' => 'nullable|numeric|min:0|max:100',
    ];

    public function submit()
    {
        $this->validate();

        $imageName = $this->img->store('images', 'public');

        Product::create([
            'catid' => $this->catid,
            'name' => $this->name,
            'img' => $imageName,
            'sortDesc' => $this->sortDesc,
            'detail' => $this->detail,
            'producer' => $this->producer,
            'number' => $this->number,
            'price' => $this->price,
            'sale' => $this->sale,
        ]);

        session()->flash('message', 'Product added successfully.');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.add-product-component');
    }
}
