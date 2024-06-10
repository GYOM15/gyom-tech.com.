@php
   $type ??='text';
   $class ??=null;
   $name ??= '';
   $value ??= '';
   $placeholder ??= ucfirst($name);
@endphp

<div @class(['form-group', $class])>
    @if ($type === 'textarea')
        <textarea placeholder="{{$placeholder}}" class="form-control  @error($name) is-invalid @enderror" type="{{$type}}" id="{{$name}}" name="{{$name}}">{{ old($name, $value) }}</textarea>
    @else
        <input placeholder="{{$placeholder}} " class="form-control  @error($name) is-invalid @enderror" type="{{$type}}" id="{{$name}}" name="{{$name}}" value="{{ old($name, $value) }}">   
    @endif
    
    @error($name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>