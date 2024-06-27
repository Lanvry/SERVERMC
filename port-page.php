<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Text File</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        textarea {
            width: 100%;
            height: 200px;
            margin-bottom: 10px;
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
        }
        input{
            background-color: #3cb02c;
            color:white;
            padding: 10px;
            border: 0px;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-align: center;
            font-size: 20px;
            position: relative;
            margin-top: 0px;
            margin-bottom: 10px;
            box-shadow: 1px 5px 10px rgba(0, 0, 0, 0.124);
        }
    </style>
</head>
<body>
    <h1><b>Port</b></h1>
    <center><input id="textInput" type="text"></input><br></center>
    <button onclick="saveText()">Save Changes</button>
    <div id="status"></div>

    <script>
        // Function to fetch text from server and populate textarea
        function fetchText() {
            fetch('../port.txt') // Replace with your text file URL
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(data => {
                    document.getElementById('textInput').value = data;
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                });
        }

        // Function to save text to server
        function saveText() {
            let newText = document.getElementById('textInput').value;
            fetch('save.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ text: newText }),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                document.getElementById('status').textContent = 'Changes saved successfully.';
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });
        }

        // Fetch text when page loads
        fetchText();
    </script>
</body>
</html>
