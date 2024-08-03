<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('admin.Customer.index', compact('customer'));
    }

    public function showFormAddCustomer()
    {
        return view('admin.Customer.createCustomer');
    }

    public function createCustomer(Request $request)
    {

        //dd($request->username);
        // $validatedData = $request->validate([
        //     'fullname' => 'required|string|max:255',
        //     'username' => 'required|string|max:255|unique:db_customer',
        //     'password' => 'required|string|min:6',
        //     'address' => 'nullable|string|max:255',
        //     'phone' => 'nullable|string|max:15',
        //     'email' => 'required|string|email|max:255|unique:db_customer',
        //     'status' => 'required|boolean',
        //]);
         // Create a new customer instance
         $customer = new Customer([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => $request->password, // Hash the password
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'status' => $request->status,
        ]);

        // Save the customer to the database
        $customer->save();
       // $validatedData['password'] = bcrypt($validatedData['password']);

        //Customer::create($validatedData);

        return redirect()->back()->with('success', 'Customer created successfully!');
    }


    public function edit(Request $request)
    {
        $customer = Customer::find($request->id_ct);
        return view('admin.Customer.updateCustomer', compact('customer'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id_ct' => 'required|exists:db_customer,id',
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:255',
            'status' => 'required|boolean',
        ]);

        $customer = Customer::find($request->id_ct);
        $customer->update($validatedData);

        return redirect()->route('customer.index')->with('success', 'Customer updated successfully!');
    }

    public function destroy(Request $request)
    {
        $customer = Customer::findOrFail($request->id_ct);
        $customer->delete();

        // Lấy lại danh sách category và trả về view với thông báo thành công
        $customer = Customer::all();
        $success = "Delete Successful";
        // Thêm thông báo vào session
        return redirect()->route('customer.index')->with('success', 'Category deleted successfully.');
    }
}
