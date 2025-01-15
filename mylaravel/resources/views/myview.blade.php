<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Thasadith:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <style>
        
        body {
            background-color:rgb(158, 158, 158); 
            color:rgb(0, 0, 0); 
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgb(0, 0, 0); 
        }

        .btn-primary {
            background-color:rgb(0, 213, 11); 
            border-color:rgb(0, 213, 11); 
        }

        .btn-primary:hover {
            background-color:rgb(8, 99, 0); 
            border-color: rgb(8, 99, 0); 
        }
        h1 {
            font-size: 28pt;
            color: black; 
            font-weight: bolder;
        }

        body {
            font-size: 16pt;
            font-family: 'Thasadith';
        }   
        h4{
            font-size: 22pt;
            font-weight: bolder;
        }

    </style>
</head>
<body class="py-5">

    <div class="container">
        <div class="text-center mb-4">  
            <h1>My Calculator</h1>
        </div>

        <div class="mb-3">
            <h4>My Input: {{ $myinput }} </h4>
            <h4>My Value: {{ $myvalue }} </h4>
        </div>

        <form method="post" action="{{ url('/mycontroller') }}" class="mb-4">
            @csrf
            <div class="mb-3">
                <input type="text" id="myinput" name="myinput" class="form-control" placeholder="Enter a number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @if(isset($multiplicationTable) && count($multiplicationTable) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">ตารางสูตรคูณ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($multiplicationTable as $row)
                            <tr>
                                <td class="text-center">{{ $row }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @elseif($myinput)
            <div class="alert alert-danger" role="alert">
                Please enter a valid number!
            </div>
        @endif
    </div>
</body>
</html>