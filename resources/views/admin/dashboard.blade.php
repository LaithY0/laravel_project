
{{-- Top Start --}}
@include('admin.includes.top');
{{-- Top End --}}


<body class="app">   	

    {{-- header Start --}}
        @include('admin.includes.header');
    {{-- header End --}}


    <div class="app-wrapper">

	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    <h1 class="app-page-title">@yield('title-content')</h1>
			        </div><!--//col-->
			    </div><!--//row-->
		

                {{-- Main Content End --}}
                @yield("main_content")
                {{-- Main Content Start--}}

			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    

        {{-- Footer Start --}}
        @include('admin.includes.footer');
        {{-- Footer End --}}

	    
    </div><!--//app-wrapper-->    					

{{-- Bottom Start --}}
    @include('admin.includes.bottom');
{{-- Bottom End --}}