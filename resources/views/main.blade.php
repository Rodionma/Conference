

@extends('layout')

@section('content')

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d412.9714930200327!2d-118.344246624629!3d34.10098228558076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf20e4c82873%3A0x14015754d926dadb!2zNzA2MCBIb2xseXdvb2QgQmx2ZCwgTG9zIEFuZ2VsZXMsIENBIDkwMDI4LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1612343005131!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<form method="post" action="/member/add">
    @csrf

    <h1>To participate in the conference, please fill out the form</h1>

    <div class="form-group">
        <label for="firstname" class="form-label">Firstname*</label>
        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Please enter the Firstname">
    </div>

    <div class="form-group">
        <label for="lastname" class="form-label">Lastname*</label>
        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Please enter the Lastname">
    </div>

    <div class="form-group">
        <label for="birthdate" class="form-label">Birthdate*</label>
        <input type="date" name="date" class="form-control" id="birthdate" placeholder="Please enter your birthdate">
    </div>

    <div class="form-group">
        <label for="telephone" class="form-label">Telephone number</label>
        <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="Please enter your telephone number" pattern="+1 ([0-9]{3})-[0-9]{3}-[0-9]{4}">
    </div>

    <div class="form-group">
        <label for="e-mail" class="form-label">E-mail</label>
        <input type="e-mail" name="e-mail" class="form-control" id="e-mail" placeholder="Введите e-mail">
    </div>

    <hr class="my-4">
    <button class="btn btn-success" type="submit">Next</button>
</form>



@endsection


