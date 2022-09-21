<html>
<head>
    <title>

    </title>
</head>
    <body>
<form  method="post" action="{{action([\App\Http\Controllers\PageController::class,'store'])}}"enctype="multipart/form-data" >
@csrf
 <label>Name</label>
    <input type="text" name="name">
    <label> Date<label/>
    <input type ="date" name="dob" required>

    <label>Image</label>

    <input type="file" name="image">
    <input type="submit">


</form>
</body>

</html>
