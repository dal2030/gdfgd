{!! Modal::start($modal) !!}

<div class="form-group row">
    <label for="input_name" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_name" name="name"
               placeholder="Enter name" value="{{ isset($researcher) ? $researcher->name : old('name')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_e_name" class="col-sm-2 col-form-label">e_name:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_e_name"
               name="e_name" placeholder="Enter e_name" value="{{ isset($researcher) ? $researcher->e_name : old('e_name')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_email" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="input_email"
               name="email" placeholder="Enter email" value="{{ isset($researcher) ? $researcher->email : old('email')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_phone" class="col-sm-2 col-form-label">phone:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_phone"
               name="phone" placeholder="Enter phone" value="{{ isset($researcher) ? $researcher->phone : old('phone')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_country" class="col-sm-2 col-form-label">country:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_country"
               name="country" placeholder="Enter country" value="{{ isset($researcher) ? $researcher->country : old('country')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_city" class="col-sm-2 col-form-label">city:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_city"
               name="city" placeholder="Enter city" value="{{ isset($researcher) ? $researcher->city : old('city')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_academic_name" class="col-sm-2 col-form-label">academic_name:</label>
    <div class="col-sm-10">
        <input type="textarea" class="form-control" id="input_academic_name"
               name="academic_name" placeholder="Enter academic_name" value="{{ isset($researcher) ? $researcher->academic_name : old('academic_name')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_major" class="col-sm-2 col-form-label">major:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_major"
               name="major" placeholder="Enter major" value="{{ isset($researcher) ? $researcher->major : old('major')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_speciality" class="col-sm-2 col-form-label">speciality:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_speciality"
               name="speciality" placeholder="Enter speciality" value="{{ isset($researcher) ? $researcher->speciality : old('speciality')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_institution" class="col-sm-2 col-form-label">institution:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_institution"
               name="institution" placeholder="Enter institution" value="{{ isset($researcher) ? $researcher->institution : old('institution')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_job_title" class="col-sm-2 col-form-label">job_title:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_job_title"
               name="job_title" placeholder="Enter job_title" value="{{ isset($researcher) ? $researcher->job_title : old('job_title')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_birthday" class="col-sm-2 col-form-label">birthday:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_birthday"
               name="birthday" placeholder="Enter birthday" value="{{ isset($researcher) ? $researcher->birthday : old('birthday')}}">
    </div>
</div>
<div class="form-group row">
    <label for="input_column_13" class="col-sm-2 col-form-label">column_13:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="input_column_13"
               name="column_13" placeholder="Enter column_13" value="{{ isset($researcher) ? $researcher->column_13 : old('column_13')}}">
    </div>
</div>
<script>
    $('#input_birthday').daterangepicker({
        "singleDatePicker": true,
        "autoApply": true,
        "opens": "center",
        "drops": "auto",
        locale: {
    format: 'YYYY-MM-DD'
    }
    });
    </script>
{!! Modal::end() !!}