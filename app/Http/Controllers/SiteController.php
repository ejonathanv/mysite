<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Mail\NewMessage;
use App\Mail\ThanksMessage;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{

    public function index()
    {
        return view('site.index');
    }

    public function about()
    {
        return view('site.about');
    }

    public function websites()
    {
        return view('site.websites');
    }

    public function start()
    {
        return view('site.start-project');
    }

    public function terms()
    {
        return view('site.terms');
    }

    public function login()
    {
        return view('site.login');
    }

    public function projects()
    {
        return view('site.projects');
    }

    public function project(Project $project)
    {
        return view('site.project', compact('project'));
    }

    public function contact(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'summary' => 'required|string', 
            'budget' => 'required|string|in:0-3000,3000-5000,5000-10000,10000-20000,20000-0',
            'terms' => 'required|accepted',
        ];

        $messages = [
            'name.string' => 'Por favor ingrese un nombre válido',
            'name.required' => 'Por favor ingrese un nombre',
            'email.required' => 'Por favor ingrese un email',
            'email.email' => 'Por favor ingrese un email válido',
            'summary.required' => 'Por favor ingrese un resumen',
            'summary.string' => 'Por favor ingrese un resumen válido',
            'budget.required' => 'Por favor ingrese un presupuesto',
            'budget.string' => 'Por favor ingrese un presupuesto válido',
            'budget.in' => 'Por favor ingrese un presupuesto válido',
            'terms.required' => 'Por favor acepte los términos y condiciones',
            'terms.accepted' => 'Por favor acepte los términos y condiciones',
        ];

        $request->validate($rules, $messages);

        $mail_data = [
            'name' => $request->name,
            'email' => $request->email,
            'summary' => $request->summary,
            'budget' => $request->budget,
        ];

        // Enviamos un email al correo que esta en MAIL_CONTACT con los datos en mail_data
        Mail::to(env('MAIL_CONTACT'))->send(new NewMessage($mail_data));

        // Enviamos un correo al usuario con los datos en mail_data
        Mail::to($request->email)->send(new ThanksMessage($mail_data));

        return back()->with('success', 'Hola ' . $request->name . ', tu mensaje ha sido enviado. Te responderé a la brevedad.');

    }

}
