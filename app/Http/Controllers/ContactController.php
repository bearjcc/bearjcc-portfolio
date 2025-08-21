<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        try {
            // Send email notification
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));
            
            // Log successful submission
            Log::info('Contact form submitted', [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'subject' => $validated['subject'],
                'ip' => $request->ip(),
            ]);

            return redirect()->route('contact.index')
                ->with('success', 'Thank you for your message! I will get back to you within 24 hours.');
                
        } catch (\Exception $e) {
            // Log the error
            Log::error('Contact form email failed to send', [
                'error' => $e->getMessage(),
                'data' => $validated,
            ]);

            // Still show success to user, but log the issue
            return redirect()->route('contact.index')
                ->with('success', 'Thank you for your message! I will get back to you soon.')
                ->with('warning', 'Note: There was a temporary issue with our email system, but your message has been received.');
        }
    }
}
