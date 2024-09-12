<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
   

    public function generateQrCode()
    {
        // URL for displaying the selection list
        $selectionUrl = url('/choose-url');

        // Generate the QR code
        $qrCode = QrCode::size(300)->generate($selectionUrl);

        // Return the QR code view
        return view('qr-code', compact('qrCode'));
    }

    public function showSelectionList()
    {
        // Define your URLs
        $urls = [
            'Page 1' => 'https://magecomp.com/blog/generate-qr-code-laravel-9/?srsltid=AfmBOorEcsmlkvFaMPCg3Dtw4C8jpbXSvuDm9ugggGWJbwk5tH9gPW3o',
            'Page 2' => 'https://audionic.co/collections/limited-edition',
            'Page 3' => 'https://www.facebook.com/mahrukh.rafique.50',
        ];

        // Show the selection list view
        return view('selection', compact('urls'));
    }

    public function redirectToSelectedUrl(Request $request)
    {
        // Validate the selected URL
        $validated = $request->validate([
            'url' => 'required|url',
        ]);

        // Redirect to the selected URL
        return redirect()->away($validated['url']);
    }


    
}
