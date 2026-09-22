<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OCR Result</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        textarea {
            width: 100%;
            height: 400px;
            padding: 15px;
            box-sizing: border-box;
            font-family: monospace;
            font-size: 14px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>OCR Result</h1>

    <p>Text detected by Tesseract:</p>

    <textarea readonly>{{ $ocrText }}</textarea>

    <br>

    <a href="{{ route('pid.index') }}">
        Upload another P&ID
    </a>

</div>

</body>
</html>