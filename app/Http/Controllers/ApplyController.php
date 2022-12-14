<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ApplyController extends Controller
{
     /**
     * @throws ValidationException
     */
    public function index(Request $request): RedirectResponse
    {
        Validator::make($request->all(), [
            'fullname' => 'required',
            'phone_number' => 'required',
            'mail' => 'required',
            'course_title' => 'required',
            'course_time' => 'required',
            'course_langugage' => 'required',
            'course_type' => 'required',
        ])->validate();

        if (Application::create($request->all())) {
            return redirect()->route('/')->with('message', 'created successfully');
        }

        return redirect()->route('/')->with('message', 'Unable to create');
        
    }
}
