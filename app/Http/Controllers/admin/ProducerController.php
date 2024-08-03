<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producer;
class ProducerController extends Controller
{
    public function index()
    {
        $producer = Producer::all();
        return view('admin.Product.updateProduct');
    }
    public function home()
    {  $producer = Producer::all();
        return view('admin.Producer.index',[
            'producer'=>$producer,
        ]);
    }
    public function showFormAddProducer()
    {
        $producer = Producer::all();
        return view('admin.Producer.createProducer', [
            'producer' => $producer,
        ]);
    }
    public function createProducer(Request $request, )
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code'=>'required|string|max:255',
            'keyword'=>'required|string|max:255',
            'status' => 'nullable|boolean',
        ]);
        Producer::create($validatedData);

        $success = "Create Successful";
        return redirect()->route('producer.home')->with('success', 'Producer Create successfully.');
    }
    // -------------------------Update Producer-------------------------------
    public function edit(Request $request)
    {
        // Hiển thị form chỉnh sửa Producer
        $producer = Producer::findOrFail($request->id_ct);
        return view('admin.Producer.updateProducer', [
            'producer' => $producer,
        ]);
    }

    public function update(Request $request)
    {
        // Tìm đến đối tượng muốn update
        $Producer = Producer::findOrFail($request->id_ct);

        // Validate dữ liệu
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code'=>'required|string|max:255',
            'keyword'=>'required|string|max:255',
            'status' => 'nullable|boolean',
        ]);

        // Cập nhật dữ liệu
        $Producer->update($validatedData);

        // Redirect hoặc trả về response
        $Producer = Producer::all();
        $success = "Update Successful";
        return redirect()->route('producer.home')->with('success', 'Producer Update successfully.');
    }
    //--------------------------End------------------------------------------
    public function destroy(Request $request)
    {
        // Tìm Producer bằng ID và xóa nó
        $producer = Producer::findOrFail($request->id_ct);
        $producer->delete();
        // Lấy lại danh sách Producer và trả về view với thông báo thành công
        $producer = Producer::all();
        $success = "Delete Successful";
        // Thêm thông báo vào session
        return redirect()->back()->with('success', 'Producer deleted successfully.');
    }
}
