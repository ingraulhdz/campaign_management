<div class="form-group">
 <small for="inlineFormInputGroup"> {{__('Front name')}}</small>

<input type="text" class="form-control @if ($errors->any()) {{$errors->has('front_name') ? 'is-invalid':'is-valid'}} @endif" id="front_name" name="front_name" placeholder="Name for the view" value="{{ $permission->front_name ?? '' }}" required="true">
 {!! $errors->first('description','
	<div class="invalid-feedback">:message        </div>') !!}
	</div>


 <div class="form-group">
 <small for="inlineFormInputGroup"> {{__('Description')}}</small>
 <input type="text" class="form-control @if ($errors->any()) {{$errors->has('description') ? 'is-invalid':'is-valid'}} @endif" id="description" name="description" placeholder="Short Description about permission" value="{{ $permission->description ?? '' }}" required="true">
 {!! $errors->first('description','
	<div class="invalid-feedback">:message        </div>') !!}

</div>

