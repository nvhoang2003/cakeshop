<input type="hidden" name="id" value="{{old('id')?? $admin->id}}">
<div class="form-group">
    <label for="username" class="font-weight-bold">Username</label>
    <input type="text" class="form-control" id="username" name="username" value="{{old('username')?? $admin->username}}">
    {{--        when removing title value to trigger "required" validation, --}}
    {{--        old('username') is not set so $admin['username'] is shown--}}
    {{--        it is because redirect()->back() calls edit() which provides $admin for view--}}
</div>

<div class="form-group">
    <label for="number" class="font-weight-bold">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact" value="{{old('contact')?? $admin->contact}}">
</div>

<div class="form-group">
    <label for="email" class="font-weight-bold">Email</label>
    <input type="text" class="form-control" id="email" name="email" min="0" value="{{old('email')?? $admin->email}}">
</div>

<div class="form-group">
    <label for="password" class="font-weight-bold">Password</label>
    <input type="number" class="form-control" id="password" name="password" min="0" value="{{old('password')?? $admin->password}}">
</div>

