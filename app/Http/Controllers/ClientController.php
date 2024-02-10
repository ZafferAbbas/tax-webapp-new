<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'home_address' => 'required|string|max:255',
            'zipcode' => 'required|string|max:10',
            'marital_status' => 'required|string|max:50',
            'occupation' => 'required|string|max:100',
            'tax_file_number' => 'nullable',
        ]);

        $clientDetail = new ClientDetail([
            'user_id' => Auth::id(),
            'full_name' => $request->full_name,
            'date_of_birth' => $request->date_of_birth,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
            'home_address' => $request->home_address,
            'zipcode' => $request->zipcode,
            'marital_status' => $request->marital_status,
            'occupation' => $request->occupation,
            'tax_file_number' => $request->tax_file_number,
        ]);

        DB::beginTransaction(); // Start a new database transaction

        try {
            $clientDetail->save(); // Attempt to save the client details

            $user = Auth::user(); // Get the authenticated user
            if ($user) {
                $user->basic_provided = 1; // Update the basic_provided attribute
                $user->save(); // Save the user with the updated attribute
            } else {
                // Log an error if the user is not authenticated
                Log::error('Failed to update basic_provided: User not authenticated.');
                return back()->withErrors('You must be logged in to perform this action.')->withInput();
            }

            DB::commit(); // Commit the transaction if both operations are successful
            return redirect()->route('dashboard')->with('success', 'Your details have been updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction in case of an error
            Log::error('Error saving client details or updating user: ' . $e->getMessage()); // Log the error
            return back()->withErrors('An error occurred while saving your details. Please try again.')->withInput();
        }


        return redirect()->route('dashboard')->with('success', 'Your details have been updated successfully.');
    }
}
