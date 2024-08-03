<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    // mỗi controller hòa tạo 1 thư mục chưa view riêng như hướng đối tượng v á

    public function index()
    {
        // Hiển thị danh sách category
        $category = Category::paginate(10);
        return view('admin.Category.index', [
            'category' => $category,
        ]);
    }
    //show form ADD CATEGORY
    public function showFormAddCategory()
    {
        $category = Category::all();
        return view('admin.Category.createCategory', [
            'category' => $category,
        ]);
    }
    // Xử lý lưu category mới vào cơ sở dữ liệu
    public function createCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'level' => 'nullable|integer',
            'parentid' => 'nullable|integer',
            'orders' => 'nullable|integer',
            'created_at' => 'nullable|date',
            'created_by' => 'nullable|integer',
            'updated_at' => 'nullable|date',
            'updated_by' => 'nullable|integer',
            'trash' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ]);
        Category::create($validatedData);

        $success = "Create Successful";
        return redirect()->route('category.showCategory')->with('success', 'Category Create successfully.');
    }
    // -------------------------Update category-------------------------------
    public function edit(Request $request)
    {
        // Hiển thị form chỉnh sửa category
        $category = Category::findOrFail($request->id_ct);
        return view('admin.category.updateCategory', [
            'category' => $category,
        ]);
    }

    public function update(Request $request)
    {
        // Tìm đến đối tượng muốn update
        $category = Category::findOrFail($request->id_ct);

        // Validate dữ liệu
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'level' => 'nullable|integer',
            'parentid' => 'nullable|integer',
            'orders' => 'nullable|integer',
            'created_at' => 'nullable|date',
            'created_by' => 'nullable|string|max:255',
            'updated_at' => 'nullable|date',
            'updated_by' => 'nullable|string|max:255',
            'trash' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ]);

        // Cập nhật dữ liệu
        $category->update($validatedData);

        // Redirect hoặc trả về response
        $category = Category::all();
        $success = "Update Successful";
        return redirect()->route('category.showCategory')->with('success', 'Category Update successfully.');
    }
    //--------------------------End------------------------------------------
    public function destroy(Request $request)
    {
        // Tìm category bằng ID và xóa nó
        $category = Category::findOrFail($request->id_ct);
        $category->delete();

        // Lấy lại danh sách category và trả về view với thông báo thành công
        $category = Category::all();
        $success = "Delete Successful";
        // Thêm thông báo vào session
        return redirect()->route('category.showCategory')->with('success', 'Category deleted successfully.');
    }
}
