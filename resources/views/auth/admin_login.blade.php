@extends('layouts.app')
<div class="contaner">
	{{ Form::open(array('url' => 'foo/bar')) }}
    
	{{ Form::close() }}
</div>