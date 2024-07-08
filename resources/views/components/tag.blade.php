@props(['size'=>'base'])
@php
$classes=" font-bold bg-orange-200 hover:bg-black hover:text-white rounded-xl transition-colors
duration-300";
if($size=='base'){
$classes .="py-2 px-5 text-sm";
}
if($size=='small'){
$classes.="py-2 px-2 text-xs";
}
@endphp
<a href="" class="{{$classes}}">{{$slot}}</a>