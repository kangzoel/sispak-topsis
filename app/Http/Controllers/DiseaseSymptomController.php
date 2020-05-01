<?php

namespace App\Http\Controllers;

use App\Disease;
use App\DiseaseSymptom;
use Illuminate\Http\Request;

class DiseaseSymptomController extends Controller
{
    public function index()
    {
        $diseases = Disease::paginate(15);

        return view('disease.symptom.index', ['diseases' => $diseases]);
    }

    public function edit(Disease $diseaseSymptom)
    {
        return view('disease.symptom.edit', ['disease' => $diseaseSymptom]);
    }

    public function update(Request $request, Disease $diseaseSymptom)
    {
        $v = $request->validate([
            'symptom' => 'required|exists:symptoms,id'
        ]);

        foreach ($v['symptom'] as $symptom_id) {
            $symptom_exists = $diseaseSymptom->symptoms()->where([
                'disease_id' => $diseaseSymptom->id,
                'symptom_id' => $symptom_id
            ])->exists();

            if (!$symptom_exists)
                $diseaseSymptom->symptoms()->attach($symptom_id);
        }

        return redirect('/disease-symptom')
            ->with('alert', [
                'type' => 'success',
                'message' => 'Hubungan gejala berhasil dibuat'
            ]);
    }
}
