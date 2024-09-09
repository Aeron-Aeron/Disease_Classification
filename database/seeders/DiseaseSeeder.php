<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diseases')->insert([
            ['name' => 'Flu', 'symptoms' => json_encode(['fever', 'cough', 'fatigue', 'headache', 'muscle aches', 'sore throat'])],
            ['name' => 'COVID-19', 'symptoms' => json_encode(['fever', 'dry cough', 'tiredness', 'breathing difficulty', 'loss of taste or smell'])],
            ['name' => 'Cold', 'symptoms' => json_encode(['runny nose', 'sneezing', 'cough', 'sore throat'])],
            ['name' => 'Pneumonia', 'symptoms' => json_encode(['chest pain', 'fever', 'chills', 'shortness of breath', 'cough with phlegm'])],
            ['name' => 'Asthma', 'symptoms' => json_encode(['shortness of breath', 'wheezing', 'chest tightness', 'coughing'])],
            ['name' => 'Malaria', 'symptoms' => json_encode(['fever', 'chills', 'headache', 'sweats', 'fatigue', 'nausea', 'vomiting'])],
            ['name' => 'Diabetes', 'symptoms' => json_encode(['increased thirst', 'frequent urination', 'extreme hunger', 'unexplained weight loss', 'fatigue', 'blurred vision'])],
            ['name' => 'Migraine', 'symptoms' => json_encode(['headache', 'nausea', 'sensitivity to light', 'sensitivity to sound', 'vomiting'])],
            ['name' => 'Hypertension', 'symptoms' => json_encode(['headache', 'dizziness', 'blurred vision', 'chest pain', 'shortness of breath', 'nosebleeds'])],
            ['name' => 'Tuberculosis', 'symptoms' => json_encode(['persistent cough', 'weight loss', 'fatigue', 'fever', 'night sweats', 'coughing up blood'])],
            ['name' => 'Bronchitis', 'symptoms' => json_encode(['cough', 'production of mucus', 'fatigue', 'shortness of breath', 'chest discomfort'])],
            ['name' => 'Tonsillitis', 'symptoms' => json_encode(['sore throat', 'red swollen tonsils', 'fever', 'difficulty swallowing', 'scratchy voice'])],
            ['name' => 'Appendicitis', 'symptoms' => json_encode(['abdominal pain', 'nausea', 'vomiting', 'loss of appetite', 'fever', 'swelling in the abdomen'])],
            ['name' => 'Cholera', 'symptoms' => json_encode(['watery diarrhea', 'nausea', 'vomiting', 'dehydration', 'muscle cramps'])],
            ['name' => 'Typhoid', 'symptoms' => json_encode(['fever', 'headache', 'stomach pain', 'constipation', 'diarrhea', 'weakness', 'loss of appetite'])],
            ['name' => 'Dengue', 'symptoms' => json_encode(['high fever', 'severe headache', 'pain behind the eyes', 'joint and muscle pain', 'rash', 'mild bleeding'])],
            ['name' => 'Chickenpox', 'symptoms' => json_encode(['fever', 'rash', 'itching', 'fatigue', 'loss of appetite'])],
            ['name' => 'Measles', 'symptoms' => json_encode(['fever', 'runny nose', 'cough', 'red eyes', 'rash', 'sore throat'])],
            ['name' => 'Gastroenteritis', 'symptoms' => json_encode(['diarrhea', 'nausea', 'vomiting', 'fever', 'abdominal pain', 'dehydration'])],
            ['name' => 'Sinusitis', 'symptoms' => json_encode(['facial pain', 'nasal congestion', 'runny nose', 'headache', 'fever', 'cough'])],
            ['name' => 'Hepatitis B', 'symptoms' => json_encode(['fatigue', 'nausea', 'vomiting', 'dark urine', 'abdominal pain', 'loss of appetite', 'yellowing of the skin'])],
            ['name' => 'Strep Throat', 'symptoms' => json_encode(['sore throat', 'fever', 'swollen lymph nodes', 'headache', 'rash', 'difficulty swallowing'])],
            ['name' => 'Rheumatoid Arthritis', 'symptoms' => json_encode(['joint pain', 'swelling', 'stiffness', 'fatigue', 'fever'])],
            ['name' => 'Liver Disease', 'symptoms' => json_encode(['fatigue', 'abdominal pain', 'nausea', 'vomiting', 'jaundice', 'dark urine'])],
            ['name' => 'Kidney Stones', 'symptoms' => json_encode(['severe pain', 'pain in the back or side', 'nausea', 'vomiting', 'blood in urine', 'frequent urination'])],
        ]);
        
    }
}
