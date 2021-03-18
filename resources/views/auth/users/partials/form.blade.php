<div class="form-group">
    <small for="inlineFormInputGroup"> {{ __('Name') }}</small>

    <input type="text" class="form-control @if ($errors->any()) {{ $errors->has('name') ? 'is-invalid' : 'is-valid' }} @endif" id="name" name="name"
    placeholder="{{ __('Full Name') }}" value="{{ $user->name ?? '' }}" required="true">
    {!! $errors->first(
    'description',
    '
	<div class="invalid-feedback">:message        </div>',
) !!}
</div>


<div class="form-group">
    <small for="inlineFormInputGroup"> {{ __('E-mail') }}</small>
    <input type="text" class="form-control @if ($errors->any()) {{ $errors->has('e-mail') ? 'is-invalid' : 'is-valid' }} @endif" id="email" name="email"
    placeholder="example@mail.com" value="{{ $user->email ?? '' }}" required="true">
    {!! $errors->first(
    'guard_name',
    '
	<div class="invalid-feedback">:message        </div>',
) !!}

</div>
