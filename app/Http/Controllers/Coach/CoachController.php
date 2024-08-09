<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function update_or_store(Request $request)
    {
        $request->validation([
            'name'=>'required',
            'email'=>'required',
        ]);
        if ($request->has('image')) {
            $image = $request->image->store('coach_profile', 'public');
        } else {
            $image = null;
        }
        $degrees = $this->degree($request->degrees);
        $education_exprience = $this->exprience($request->education_exprience);
        $references = $this->references($request->references);
      
        $coach=Coach::updateOrCreate(['user_id'=>auth()->user()->id],[
            'name'=>$request->name,
            'image'=>$image,
            'job_title'=>$request->job_title,
            'coaching_format'=>$request->coaching_formats,
            'languages'=>$request->languages,
            'expriences'=>$request->experience,
            'regions'=>$request->region,
            'about'=>$request->bio,
            'service_areas'=>$request->service_areas,
            'industries'=>$request->industries,
            'coaching_methods'=>$request->coaching_methods,
            'methods'=>$request->methods,
            'degrees'=>$degrees,
            'education_exprience'=>$education_exprience,
            'references'=>$references,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
        ]);
        if($request->meta){
            $coach->createMetas($request->meta);
        }
        return back()->with('success','Profile updated');
    }


    private function degree($degrees)
    {
        $modifiedDegrees = [];

        foreach ($degrees as $degree) {
            if (isset($degree['proof'])) {
                $degree['proof'] = $degree['proof']->store('degree', 'public');
            }
            $modifiedDegrees[] = [
                'degree' => $degree['degree'],
                'institution' => $degree['institution'],
                'join_date' => $degree['join_date'],
                'proof' => $degree['proof'] ?? null,
            ];
        }
        return $modifiedDegrees;
    }

    private function exprience($expriences)
    {
        $modifiedExprience = [];

        foreach ($expriences as $exprience) {
            if (isset($exprience['proof'])) {
                $exprience['proof'] = $exprience['proof']->store('exprience', 'public');
            }
            $modifiedExprience[] = [
                'exprience' => $exprience['exprience'],
                'institution' => $exprience['institution'],
                'from' => $exprience['from'],
                'to' => $exprience['to'],
                'proof' => $exprience['proof'] ?? null,
            ];
        }
        return $modifiedExprience;
    }
    private function references($references)
    {
        $modifiedreferences = [];

        foreach ($references as $reference) {
            if (isset($reference['proof'])) {
                $reference['proof'] = $reference['proof']->store('reference', 'public');
            }
            $modifiedreferences[] = [
                'reference' => $reference['reference'],
                'description' => $reference['description'],
                'proof' => $reference['proof'] ?? null,
            ];
        }
        return $modifiedreferences;
    }
}
