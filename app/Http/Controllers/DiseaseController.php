<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;

class DiseaseController extends Controller
{
    // Method to display the symptom input form
    public function showForm()
    {
        return view('symptom_form');
    }

    // Method to classify disease based on symptoms
    public function classifyDisease(Request $request)
{
    // Validate the input
    $request->validate([
        'symptoms' => 'required|array',
    ]);

    // Get user input symptoms
    $inputSymptoms = $request->input('symptoms');

    // Fetch all diseases
    $possibleDiseases = Disease::all();

    // Initialize an array to store matched diseases
    $matchedDiseases = [];

    // Loop through the diseases to find matches
    foreach ($possibleDiseases as $disease) {
        $diseaseSymptoms = $disease->symptoms; // No need to use json_decode, it's already an array

        // Check if any of the input symptoms match the disease's symptoms
        if (count(array_intersect($inputSymptoms, $diseaseSymptoms)) > 0) {
            $matchedDiseases[] = $disease->name;
        }
    }

    // Pass the matched diseases to the result view
    return view('result', ['diseases' => $matchedDiseases]);

    }
}
