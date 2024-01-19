@props(['messages'])

@if(!empty($messages) && is_array($messages))
     <ul>
          @foreach ($messages as $message)
               <li class="text-sm text-danger">{{ $message }}</li>
          @endforeach
     </ul>
@endif
