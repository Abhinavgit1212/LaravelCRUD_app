<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://source.unsplash.com/3QKV7osOiVw');
            background-size: cover;
            background-position: center;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
       <div class="row">
          <div class="col-md-6 offset-md-3 content" style="margin-top:40px">
             <h4 style="text-align: center;">DMRC Card Holders</h4><hr>
             <form action="{{ route('web.search') }}" method="GET">
        
                <div class="form-group">
                   <label for="">Enter keyword, first or last name</label>
                   <input type="text" class="form-control" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                   <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                </div>
                <div class="form-group" style="text-align: center;">
                 <button type="submit" class="btn btn-primary">Search</button>
                </div>
             </form>
             <br>
             <br>
             <hr>
             <br>
             @if(isset($ids))

               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>Card Holder Name</th>
                           <th>Card Balance</th>
                           
                       </tr>
                   </thead>
                   <tbody>
                       @if(count($ids) > 0)
                           @foreach($ids as $id)
                              <tr>
                                  <td>{{ $id->post_title }}</td>
                                  <td>{{ $id->post_author }}</td>
                                  
                              </tr>
                           @endforeach
                       @else

                          <tr><td>No result found!</td></tr>
                       @endif
                   </tbody>
               </table>

               <div class="pagination-block">
                   <?php //{{ $ids->links('layouts.paginationlinks') }} ?>
                   {{  $ids->appends(request()->input())->links('layouts.paginationlinks') }}
               </div>

               

             @endif
          </div>
       </div>
    </div>
</body>
</html>
