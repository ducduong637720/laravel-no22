<form action="/backend/categories/store" method="post">
    @csrf
    <input type="hiden" name="_method" value="put">
    <input type="text" name="name" placeholder="tên categories">
    <input type="submiit" value="Submit"> 
</form>