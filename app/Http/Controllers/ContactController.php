<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\EnquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        try {
            //
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name'  => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'nullable|string|max:20',
                'adventure_type' => 'nullable|string|max:255',
                'preferred_date' => 'nullable|date',
                'group_size' => 'nullable|string|max:50',
                'message' => 'required|string',
            ]);

            $details = [
                'first_name'  => $request->first_name,
                'last_name' => $request->last_name,
                'adventure_type' => $request->adventure_type,
                'preferred_date' => $request->preferred_date,
                'group_size' => $request->group_size,
                'email'   => $request->email,
                'message' => $request->message,
                'phone' => $request->phone,
            ];

            // Mail::raw('Thank you for reaching out our team will get back to you as soon as possible.', function ($message) use ($details) {
            //     $message->to($details['email'])
            //             ->subject('Enquiry Submission');
            // });

            // Send email to business owner
            Mail::to($details['email'])->queue(new EnquiryMail($details));

            Mail::to('mustardadventures1@gmail.com')->queue(new ContactMail($details));

            if (Mail::failures()) {
                Log::error('Mail sending failed: ' . implode(', ', Mail::failures()));
            }

            return response()->json(['success', 'Your enquiry has been sent successfully!', 200]);
        } catch(\Exception $e) {
            return response()->json(['error', 'There was an issue sending your message. Please try again later.', 500]);
        }
    }
}
