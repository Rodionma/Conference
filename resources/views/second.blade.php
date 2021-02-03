@extends('layout')

@section('content')

<form method="post" action="/member/update">
<div class="form-group">
        <label for="company" class="form-label">Company</label>
        <input type="text" name="company" class="form-control" id="company" placeholder="Please enter your company">
    </div>

    <div class="form-group">
        <label for="position" class="form-label">Position</label>
        <input type="text" name="position" class="form-control" id="position" placeholder="Please enter your position">
    </div>

    <div class="form-group">
        <label for="photo" class="form-label">Photo</label>
        <input type="file" name="photo" class="form-control" id="photo">
    </div>

    <div class="form-group">
        <label for="description" class="form-label">About me</label>
        <textarea name="description" id="description" class="form-control" placeholder="About me" rows=6> </textarea>
    </div>

    <hr class="my-4">
    <button class="btn btn-success" type="submit">Next</button>

</form>
    @endsection
