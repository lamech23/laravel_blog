<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="create">
      <h2>Add a New Blog</h2>
      <form >
        <label>Blog title:</label>
        <input 
          type="text" 
          name="title"
          value="{{ old('title', $blog->title) }}"
       
        />
        <label>Blog body:</label>
        <textarea >{{ old('description', $blog->description) }}</textarea>
       
        <label>Blog author:</label>
        <input 
          type="text" 
          name="author"  
           value="{{ old('author', $blog->author) }}"
       
        />
        <button>Add Blog</button>
      </form>
    </div>
    
</body>
</html>