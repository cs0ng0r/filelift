<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileLift</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Roboto', sans-serif;
        background-color: #e9ecef;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 400px;
        width: 100%;
    }

    h1 {
        font-size: 32px;
        color: #343a40;
        margin-bottom: 25px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    input[type="file"] {
        padding: 12px 15px;
        background-color: #f8f9fa;
        border: 2px dashed #6c757d;
        border-radius: 8px;
        color: #6c757d;
        cursor: pointer;
        transition: all 0.3s;
    }

    input[type="file"]:hover {
        background-color: #f1f3f5;
        border-color: #495057;
    }

    button {
        padding: 12px 30px;
        font-size: 16px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #218838;
    }

    p {
        color: #6c757d;
        margin-top: 20px;
        font-size: 14px;
    }

    .file-selected {
        color: #007bff;
    }
</style>

<body>
    <div class="container">
        <h1>FileLift</h1>
        <form action="upload-handler.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="fileInput">
            <button type="submit">Upload File</button>
        </form>
        <p id="fileLabel">No file selected</p>
    </div>

    <script>
        const fileInput = document.getElementById('fileInput');
        const fileLabel = document.getElementById('fileLabel');

        fileInput.addEventListener('change', function () {
            if (fileInput.files.length > 0) {
                fileLabel.textContent = `Selected file: ${fileInput.files[0].name}`;
                fileLabel.classList.add('file-selected');
            } else {
                fileLabel.textContent = 'No file selected';
                fileLabel.classList.remove('file-selected');
            }
        });
    </script>
</body>

</html>