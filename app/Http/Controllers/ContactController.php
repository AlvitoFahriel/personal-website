<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // Kirim email ke kamu sendiri
        Mail::raw(
            "Pesan dari: {$validated['name']} ({$validated['email']})\n\n{$validated['message']}",
            function ($message) {
                $message->to('alvitomuh@gmail.com')
                        ->subject('Pesan Baru dari Website');
            }
        );

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
