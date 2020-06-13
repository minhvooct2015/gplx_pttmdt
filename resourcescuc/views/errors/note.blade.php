@if(Session::has('error'))
 <p class="alert alert-danger">{{Session::get('error')}}</p>
{{csrf_field()}}
<!-- <input type="hidden" name="_token" value="{{csrf_token() }}">
 -->@endif
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{$error}}</p>
{{csrf_field()}}
<input type="hidden" name="_token" value="{{csrf_token() }}">
@endforeach