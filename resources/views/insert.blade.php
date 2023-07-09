<!DOCTYPE html>
<html>

<head>
    <title>Insert Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://source.unsplash.com/l9o8KimdWv4');
            background-size: cover;
            background-position: center;
        }

        .navbar {
            background-color: red;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-toggler {
            border-color: #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }

        .dropdown-menu {
            background-color: #333;
        }

        .dropdown-item {
            color: #fff;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #333;
        }

        .btn-outline-success {
            color: #fff;
            border-color: #fff;
        }

        .btn-outline-success:hover {
            background-color: #fff;
            color: #333;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container {
            width: 400px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.delhimetrorail.com/">DMRC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <form class="d-flex" action="/show">
            <button class="btn btn-link nav-link" type="submit">Access Database</button>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.delhimetrorail.com/">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Departments
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.delhimetrorail.com/">SNT</a></li>
            <li><a class="dropdown-item" href="https://www.delhimetrorail.com/">Rolling Stock</a></li>
            <li><a class="dropdown-item" href="https://www.delhimetrorail.com/">Traction</a></li>
            <li><a class="dropdown-item" href="https://www.delhimetrorail.com/">OHE</a></li>
            <li><a class="dropdown-item" href="https://www.delhimetrorail.com/">Scada</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="https://www.delhimetrorail.com/"></a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="/search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="container">
    <div class="form-container">
        <h1 class="text-center">Fill Details</h1>
        <form method="POST" action="/store">
            @csrf 
            <div class="mb-3">
                <label for="title"><b>Metro Card Holder</b></label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="author"><b>Metro Card Balance:</b></label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
        
            <input type="submit" name="insert" value="Insert" class="btn btn-primary">
        </form>
    </div>
</div>

</body>

</html>

