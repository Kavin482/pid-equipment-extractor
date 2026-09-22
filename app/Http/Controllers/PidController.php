<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;

class PidController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function extract(Request $request)
    {
        $request->validate([
            'pid_image' => 'required|image|max:10240',
        ]);

        $imagePath = $request->file('pid_image')->getRealPath();

       $tesseract = 'C:\\Users\\0412\\tesseract.exe';

$result = Process::run([
    $tesseract,
    $imagePath,
    'stdout',
]);

        if ($result->failed()) {
            return 'Tesseract error: ' . $result->errorOutput();
        }

        $ocrText = $result->output();

        return view('result', [
            'ocrText' => $ocrText,
        ]);
    }
}