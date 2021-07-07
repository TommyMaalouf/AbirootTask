@extends('master')

@section('title','Homepage')

@section('content')

<h1>Tommy  Maalouf </h1>   
+961 78 851 335 <br> tamaalouf@ndu.edu.lb 

<h2> Position : </h2>

<select position="" id=""class="form control input-sm">
@foreach ($dropdownList as $item)
<option value="{{$item->id}}">{{$item->position}}</option>
@endforeach
</select>
<script>
$(function (){

}
)

</script>
<h3> Message </h3>
<form method="post">
  <textarea id="message" name="editordata"></textarea>
</form>
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@stop

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
        $('#message').summernote();
    });
    </script>

@stop
<h4> Attach CV </h4>
<form action="" method ="POST" enctype="multipart/form-data">
<input type="file" name = "file"> <br> <br> <br>   <button>Submit</button>
</form>

@endsection