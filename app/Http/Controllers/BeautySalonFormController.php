<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BeautySalonFormController extends Controller
{
    public function submitContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'dzName' => ['required', 'string', 'max:120'],
            'dzEmail' => ['required', 'email', 'max:190'],
            'dzMessage' => ['required', 'string', 'max:2000'],
        ]);

        Log::info('Beauty salon contact form submitted.', [
            'name' => $validated['dzName'],
            'email' => $validated['dzEmail'],
        ]);

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }

    public function submitBooking(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'category' => ['required', 'string', 'max:80'],
            'service' => ['required', 'string', 'max:120'],
            'appointment_date' => ['required', 'date', 'after_or_equal:today'],
            'appointment_time' => ['required', 'date_format:H:i'],
            'customer_name' => ['required', 'string', 'max:120'],
            'customer_phone' => ['required', 'string', 'max:30'],
            'customer_email' => ['required', 'email', 'max:190'],
            'notes' => ['nullable', 'string', 'max:2000'],
        ]);

        $booking = Booking::create([
            'user_id' => $request->user()?->id,
            'category' => $validated['category'],
            'service' => $validated['service'],
            'appointment_date' => $validated['appointment_date'],
            'appointment_time' => $validated['appointment_time'],
            'customer_name' => $validated['customer_name'],
            'customer_phone' => $validated['customer_phone'],
            'customer_email' => $validated['customer_email'],
            'notes' => $validated['notes'] ?? null,
            'status' => 'pending',
        ]);

        Log::info('Beauty salon booking request submitted.', [
            'booking_id' => $booking->id,
            'name' => $validated['customer_name'],
            'email' => $validated['customer_email'],
            'date' => $validated['appointment_date'],
            'time' => $validated['appointment_time'],
            'service' => $validated['service'],
        ]);

        return back()->with('success', 'Appointment request submitted! We will contact you shortly.');
    }
}
