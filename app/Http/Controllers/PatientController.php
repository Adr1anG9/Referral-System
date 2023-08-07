<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $referredPatients = Patient::where('status', 'referred')->get();
        $acceptedPatients = Patient::where('status', 'accepted')->get();
        $rejectedPatients = Patient::where('status', 'rejected')->get();

        return view('patients.index', compact('referredPatients', 'acceptedPatients', 'rejectedPatients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $patient = new Patient();
        // $statusOptions = ['referred', 'accepted', 'rejected'];

        return view('patients.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'surname' => 'required',
            'dob' => 'required|date',
            'email' => 'required|email',
            'mobile_phone' => 'required',
            'address' => 'required',
            'status' => 'required|in:referred,accepted,rejected',
        ]);

        $patient = Patient::create($validatedData);

        return redirect()->route('patients.show', ['patient' => $patient->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        $statusOptions = ['referred', 'accepted', 'rejected'];

        return view('patients.show', compact('patient', 'statusOptions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'surname' => 'required',
            'dob' => 'required|date',
            'email' => 'required|email',
            'mobile_phone' => 'required',
            'address' => 'required'
        ]);

        $patient->update($validatedData);

        return redirect()->route('patients.show', $patient->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
        $patient->delete();

        return redirect()->route('patients.index');
    }

    // Accept function
    public function accept(Patient $patient)
    {
        // update status
        $patient->status = "accepted";
        $patient->save();

        // redirect back to the show page
        return redirect()->route('patients.show', ['patient' => $patient->id]);
    }

    // Reject function
    public function reject(Patient $patient)
    {
        // update status
        $patient->status = "rejected";
        $patient->save();

        // redirect back to the show page
        return redirect()->route('patients.show', ['patient' => $patient->id]);
    }
}
