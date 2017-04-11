 
 @extends('layout') 
 
 @section('content')


<div class="col-sm-8 blog-main">

    <h1>create a Post you dumb bastard</h1>
    <hr>

    <form method="POST" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="title" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea id="body" name="body" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>

       
    </form>

    @if(count($errors) > 0)

                <div class="alert alert-danger">
                    <ul>
                    
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    
                    </ul>
                
                </div>

     @endif 


</div>
@endsection