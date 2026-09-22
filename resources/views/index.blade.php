<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>P&ID Equipment Extractor</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-top: 0;
        }

        .upload-box {
            border: 2px dashed #aaa;
            padding: 30px;
            text-align: center;
            margin: 20px 0;
            border-radius: 8px;
        }

        input[type="file"] {
            margin: 15px 0;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>P&ID Equipment Extractor</h1>

    <p>
        Upload a P&ID image to extract equipment tags.
    </p>

    <form action="{{ route('pid.extract') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="upload-box">

            <label for="pid_image">
                Select P&ID Image
            </label>

            <br>

            <input
                type="file"
                name="pid_image"
                id="pid_image"
                accept="image/*"
                required
            >

        </div>

        <button type="submit">
            Extract Equipment
        </button>

    </form>

</div>

</body>
</html>