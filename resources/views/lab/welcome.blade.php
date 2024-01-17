<html>
<body>
<form method="post"action="{{route('SaveAnalysisResult')}}"enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">اختر صوره</label>
        <input type="file" class="form-control" name="photo" >
        @error('photo')
        <small  class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">save</button>

</form>

</body>
</html>
