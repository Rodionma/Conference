@extends('layout')

@section('content')

<form method="post" action="/member/update">
<div class="form-group">
        <label for="company" class="form-label">Company</label>
        <input type="text" name="company" class="form-control" id="company" placeholder="Please enter your company">
    </div>

    <div class="form-group">
        <label for="lastname" class="form-label">Position</label>
        <input type="text" name="lastname" class="form-control" id="position" placeholder="Please enter your position">
    </div>

    <div class="form-group">
        <label for="birthdate" class="form-label">Birthdate*</label>
        <input type="date" name="date" class="form-control" id="birthdate" placeholder="Please enter your birthdate">
    </div>

    <div class="form-group">
        <label for="description" class="form-label">About me</label>
        <textarea name="description" id="description" class="form-control" placeholder="About me" rows=6> </textarea>
    </div>

</form>
    @endsection
