<!DOCTYPE html>
<html>
<head>
    <title>Show Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        
        .custom-table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .custom-table {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        
        .custom-pagination .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .custom-pagination .pagination .page-item {
            margin: 0 5px;
        }

        .custom-pagination .pagination .page-link {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
            border-radius: 0;
        }

        .custom-pagination .pagination .page-link:hover {
            color: #fff;
            background-color: #333;
            border-color: #333;
        }

        .custom-pagination .pagination .page-item.active .page-link {
            color: #fff;
            background-color: #333;
            border-color: #333;
        }

        body {
            background-image: url('https://source.unsplash.com/8XZTZIfuNrM');
            background-size: cover;
            background-position: center;
        }
        
       
        .custom-btn {
            color: #fff;
            background-color: #000;
            border-color: #000;
            border-radius: 30px;
            padding: 8px 16px;
            transition: background-color 0.3s ease-in-out;
        }

        .custom-btn:hover {
            background-color: #333;
            border-color: #333;
        }
    </style>
</head>
<body>
<div class="custom-table-container">
    <div class="custom-table">
        <table class="table tavle-bordered shadow text-center table-striped">
            <tr>
                <th>SYSTEM ID</th>
                <th>CARD Holder</th>
                <th>CARD Balance</th>
                <th></th>
                <th></th>
            </tr>

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->post_title}}</td>
                    <td>{{$post->post_author}}</td>
                    <td><a href="/delete/{{$post->id}}" class="btn btn-danger custom-btn">Delete</a></td>
                    <td><a href="/edit/{{$post->id}}" class="btn btn-danger custom-btn">Edit</a></td>
                </tr>
            @endforeach
        </table>

        <div class="custom-pagination">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
</body>
</html>


