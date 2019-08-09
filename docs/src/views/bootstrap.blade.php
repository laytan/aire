@extends('_layout')

@section('page-title')
	Twitter Bootstrap Support
@endsection

@push('head')
	<script src="https://unpkg.com/srcdoc-polyfill@1.0.0/srcdoc-polyfill.js"></script>
@endpush

@section('content')
	
	<?php (new \Galahad\AireBootstrap\AireBootstrapServiceProvider(app()))->boot(); ?>
	
	<h1 class="text-2xl text-gray-900">
		Twitter Bootstrap Theme
	</h1>
	
	<div class="mt-4 mb-8 p-6 border rounded leading-normal bg-yellow-100 border-yellow-300 text-yellow-800">
		<strong>Please note:</strong> This theme is a work-in-progress. It is not ready for production!
	</div>
	
	<p>
		Hey, maybe you're still using <a href="https://getbootstrap.com/">Bootstrap</a>. That's OK.
		Aire has a custom Bootstrap theme just for you.
	</p>
	
	<h2>
		Installation
	</h2>
	
	<pre>composer require glhd/aire-bootstrap</pre>
	
	<p>
		Once the plugin is installed, you can use <code>Aire</code> as you would normally,
		and all the Bootstrap classes will be applied:
	</p>
	
	<?php ob_start(); ?>
	
	<div style="padding: 1rem;">
		<link rel="stylesheet"
		      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
		      crossorigin="anonymous" />
		
		{{ Aire::open()->post()->multipart()->validate() }}
		
		{{ Aire::input()
			->label('Demo Input')
			->id('demo')
			->helpText('This is demo help text.') }}
		
		{{ Aire::select(['one' => 'Option 1', 'two' => 'Option 2'])
			->label('Demo Select') }}
		
		{{ Aire::select(['one' => 'Option 1', 'two' => 'Option 2'])
			->multiple()
			->label('Demo Multi-Select') }}
		
		{{ Aire::textarea()->value('Demo text area') }}
		
		{{ Aire::checkbox()->label('Demo check box') }}
		
		{{ Aire::radioGroup(['one' => 'Option 1', 'two' => 'Option 2'], 'foo')
			->defaultValue('two')
			->label('Demo radio group') }}
		
		{{ Aire::checkboxGroup(['one' => 'Option 1', 'two' => 'Option 2', 'three' => 'Option 3'], 'bar')
			->defaultValue(['one', 'three'])
			->label('Demo checkbox group') }}
		
		{{ Aire::submit('Demo Button') }}
		
		{{ Aire::close() }}
	</div>
	
	<?php $html = ob_get_clean(); ?>
	
	<div class="border rounded my-12 relative">
		<h2 class="m-0 px-6 py-3 border-b text-salmon">
			Bootstrap 4 Form
		</h2>
		<iframe class="w-full h-screen" srcdoc="{{ $html }}"></iframe>
	</div>
	
	<?php Aire::resetTheme(); ?>

@endsection
