@if(!$images->isEmpty())
@foreach($images as $image)
<img src="{{$image->image_path}}"/>
@endforeach

@endif






<!--$image->url-->
<!--URL::to($image->image_path)-->