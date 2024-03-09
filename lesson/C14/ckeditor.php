<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor Text Editor Integration</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script>
    <style>
        /* Body styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        /* Container styles */
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* CKEditor styles */
        #ckeditor1 {
            width: 100%;
            min-height: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            box-sizing: border-box;
        }

        /* Button styles */
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>CKEditor Text Editor Integration</h2>
        <textarea name="ckeditor" id="ckeditor" cols="30" rows="10"></textarea>
        <br>
        <button class="btn">Submit</button>
    </div>


    <script>
        // Replace the <textarea id="ckeditor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('ckeditor1');
    </script>

</body>


</html>