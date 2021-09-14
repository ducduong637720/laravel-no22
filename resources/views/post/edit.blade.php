<form action="/backend/posts/update" method="post">
    @csrf
    <input type="hiden" name="_method" value="put">
    <input type="text" name="name" placeholder="tên posts">
    <input type="submiit" value="Submit"> 
</form>