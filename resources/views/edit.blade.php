<!DOCTYPE html>
<html>
    
<head>
        <title>

        </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    
<div class="container">
    <h1 class="text-center"> Update Data</h1>
    <form method="POST" action="{{ route('product.update', $posts->id) }}">
        @csrf 
        @method('put')
        <div class="mb-3">
            <label><b>New Name:</b></label>
            <input type="text" name="title" class="form-control" value={{$posts->post_title}}>
        </div>
        <div class="mb-3">
            <label><b>New Balance:</b></label>
            <input type="text" name="author" class="form-control" value={{$posts->post_author}}>
        </div>
    
    <input type="submit" name="update" value="Update" class="btn btn-success">

    </form>
</div>


</form>

</body>

</html>