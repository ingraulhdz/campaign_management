<div class="form-group">
    <small for="inlineFormInputGroup"> {{ __('Name') }}</small>

    <label>{{ $role->front_name }}</label>
    <div class="form-group">
        @include('auth.users.partials.permissions')
