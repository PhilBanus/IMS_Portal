<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta name="viewport" content="width=device-width" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Favicon and title -->
  <link rel="icon" href="path/to/fav.png">
    <title>{{env('App_Name')}}</title>
  
   <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon.min.css" rel="stylesheet" />	
<link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />

	
	



   <link href="{{asset('/FA/css/all.min.css')}}" rel="stylesheet" />

	
	<style>
		
@font-face {
  font-family: 'icomoon';
  src:  url('fonts/icomoon.eot?t0cupg');
  src:  url('fonts/icomoon.eot?t0cupg#iefix') format('embedded-opentype'),
    url('fonts/icomoon.ttf?t0cupg') format('truetype'),
    url('fonts/icomoon.woff?t0cupg') format('woff'),
    url('fonts/icomoon.svg?t0cupg#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
  font-display: block;
}

[class^="icon-"], [class*=" icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'icomoon' !important;
  speak: never;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-HUK-Icon .path1:before {
  content: "\e900";
  color: rgb(2, 74, 148);
}
.icon-HUK-Icon .path2:before {
  content: "\e901";
  margin-left: -1em;
  color: rgb(255, 255, 255);
}
.icon-HUK-Icon .path3:before {
  content: "\e902";
  margin-left: -1em;
  color: rgb(255, 255, 255);
}
		
		
		body{
			font-family:Helvetica-Bold, Helvetica
		}
		:root{
			--primary-color: #024a94;                                     /* Before: var(--blue-color) */

		}
		
		.table-sm td, .table-sm th{
			padding: 5px !important
		}
		
		.icon-HUK-Icon .path1:before {
  content: "\e900";
  color: #024a94;
}
.icon-HUK-Icon .path2:before {
  content: "\e901";
  color: #fff;
  margin-left: -1em;
}
.icon-HUK-Icon .path3:before {
  content: "\e902";
  color: #fff;
  margin-left: -1em;
}
		
	
	</style>


<!-- Halfmoon JS -->
<script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
</head>
<body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-dm-shortcut-enabled="true" data-set-preferred-mode-onload="true">
  <!-- Modals go here -->
  <!-- Reference: https://www.gethalfmoon.com/docs/modal -->

  <!-- Page wrapper start -->
  <div class="page-wrapper with-navbar">

    <!-- Sticky alerts (toasts), empty container -->
    <!-- Reference: https://www.gethalfmoon.com/docs/sticky-alerts-toasts -->
    <div class="sticky-alerts"></div>

    <!-- Navbar start -->
    <nav class="navbar">
		
		
		<a href="#" class="navbar-brand w-auto h-full p-0 m-0">
			
			
<svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-three-quarter HOCHTIEF" viewBox="0 0 411 119.36" preserveAspectRatio="">
	<defs>
		<style>.cls-1{fill:#024a94;}.cls-2{fill:#fff;}.cls-3{fill:none;stroke:#024a94;stroke-miterlimit:10;}.cls-4{font-size:61.72px;font-family:Helvetica-Bold, Helvetica;font-weight:700;}
		</style>
	</defs>
	<g id="Layer_2" data-name="Layer 2">
		<g id="Layer_1-2" data-name="Layer 1">
			<rect class="cls-1" x="0.94" y="13.2" width="76.47" height="76.47"></rect>
			<polygon class="cls-2" points="73.06 62.6 50.4 62.6 50.4 67.11 27.48 67.1 27.48 62.6 4.99 62.6 4.99 78.74 73.06 78.74 73.06 62.6"></polygon>
			<polygon class="cls-2" points="39.03 19.63 5.19 60.19 27.59 60.19 39.03 46.04 50.4 60.19 72.87 60.19 39.03 19.63"></polygon>
			<line class="cls-3" y1="0.5" x2="411" y2="0.5"></line>
			<line class="cls-3" y1="102.37" x2="411" y2="102.37"></line>
			<text class="cls-4 text-white-dm text-very-dark-lm" transform="translate(95.7 89.67)">HOCHTIEF</text>
		</g>
	</g>
			</svg>
		
		</a>
		
      <!-- Reference: https://www.gethalfmoon.com/docs/navbar -->
		

		
	
      <!-- Navbar form (inline form) -->
     
      <!-- Navbar content (with the dropdown menu) -->
 
      <div class="navbar-content ml-auto justify-content-end w-full d-flex "> 
		  <!-- d-md-none = display: none on medium screens and up (width > 768px), ml-auto = margin-left: auto -->
		 <input class="form-control mr-5 search  w-full w-md-half d-none d-md-block bg-light-lm  text-primary-lm border-transparent" type="text" placeholder="search docs" id="search-documents">
		  
			<button id="ChangeView" class="btn btn-action mr-5 text-primary-lm border-transparent bg-light-lm " data-toggle="tooltip" data-title="Change View" data-placement="bottom" type="button">
                    <i class="fa fa-binoculars" aria-hidden="true"></i>
                </button>
			<button class="btn btn-action mr-5 text-primary-lm border-transparent bg-light-lm " data-toggle="tooltip" data-title="IMS Map" data-placement="bottom" type="button">
                    <i class="fa fa-map" aria-hidden="true"></i>
                </button>
			<button class="btn btn-action mr-5  text-primary-lm border-transparent bg-light-lm " data-toggle="tooltip" data-title="IMS Register" data-placement="bottom" type="button">
                    <i class="fa fa-file-excel" aria-hidden="true"></i>
                </button>
			<button class="btn btn-action mr-5  text-primary-lm border-transparent bg-light-lm " data-toggle="tooltip" data-title="Admin Functions" data-placement="bottom" type="button">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                </button>
		  <button class="btn btn-action mr-5  text-primary-lm border-transparent bg-light-lm " data-toggle="tooltip" data-title="Toggle Dark/Light Mode" data-placement="bottom" type="button" onclick="halfmoon.toggleDarkMode()" aria-label="Toggle dark mode">
                    <i class="fa fa-moon" aria-hidden="true"></i>
                </button>
     
      </div>
		
		
    </nav>
    <!-- Navbar end -->

    <!-- Content wrapper start -->
    <div class="content-wrapper w-full  bg-light-lm">
		
		
		
		 <div class="container-fluid">
		
			 <div class="d-block d-md-none p-5 w-full">
			 <input class="form-control search" type="text" placeholder="search docs" id="search-documents">
		  </div>
        <!-- First comes a content container with the main title -->
        <div class="content text-center w-full p-0 m-0 mt-10">
          <h1 class="content-title font-weight-bold font-size-28 text-primary-lm mb-0">  Integrated Management System Portal  </h1>
          <p class="font-weight-bold">This is our way!</p>
        </div>
			 
			   </div>
      <!--
        Add your page's main content here
        Examples:
        1. https://www.gethalfmoon.com/docs/content-and-cards/#building-a-page
        2. https://www.gethalfmoon.com/docs/grid-system/#building-a-dashboard
      -->
		
		
			 <div id="View-1" class="p-5 d-none w-100 w-md-half mx-auto">
				 @php
				 $pools = new \App\Models\IMS();
				 
				 @endphp
				 {!! $pools->Children(config('ims.master_pool')) !!}
			
			 
				 
				 </div>
	
		
			 <div id="View-2" class="p-5 d-none">
				 @php
				 $pools = new \App\Models\IMS();
				 
				 @endphp
				 {!! $pools->View2Children(config('ims.master_pool'), '') !!}
			
			 
				 
				 </div>
			 
 
    <!-- Content wrapper end -->
	  


  </div>
  <!-- Page wrapper end -->
	
	
	</div>
	
		  <div class="position-fixed bottom-0 w-full p-0 bg-white-lm bg-dark-dm" id="footer">
	  <div class="position-sm-absolute  right-sm-0 h-full  w-full w-sm-half  d-sm-flex  align-items-center"><div class="text-center w-full font-size-12 pt-5">To help us improve the IMS portal please send feedback to <a href="mailti:hsqe@hochtief.co.uk">hsqe@hochtief.co.uk</a></div></div>
	  <img class="position-relative float-sm-left w-full w-sm-half" src="{{asset('/images/values.svg')}}" alt="">
	  </div>
	<script>
		
		$.get('api/cookie').done(function(result){
		
				$('#View-'+result).removeClass('d-none');
		
		})
		
		
		$('#ChangeView').on('click',function(){
			$.get('api/cookie',{cookieSet: true}).done(function(result){
				$('#View-1, #View-2').addClass('d-none');
				$('#View-'+result).removeClass('d-none');
		
		})
		})

		var Dark = $('body').prop('class');
		var Darkmode = ~Dark.indexOf("dark-mode")
		
				
		
			var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
		

		if(isIE11 && Darkmode){
			$('.HOCHTIEF').replaceWith("	<img src='{{asset('/images/HochtiefInvert.svg')}}' class='h-three-quarter HOCHTIEF' alt=''>")
		}
		if(isIE11 && !Darkmode){
			$('.HOCHTIEF').replaceWith("	<img src='{{asset('/images/Hochtief.svg')}}' class='h-three-quarter HOCHTIEF' alt=''>")
		}
			
		
	
		var $div = $("body");
var observer = new MutationObserver(function(mutations) {
  mutations.forEach(function(mutation) {
    if (mutation.attributeName === "class") {
      var attributeValue = $(mutation.target).prop(mutation.attributeName);
      console.log("Class attribute changed to:", attributeValue);
		
		if (~attributeValue.indexOf("dark-mode")){
			$('.cls-4').css('fill','#fff')
			$('.cls-3').css('stroke','#fff')
			$('.cls-2').css('fill','#024a94')
			$('.cls-1').css('fill','#fff')
			$('nav').css('background-color','#024a94')
			
		if(isIE11){
			$('.HOCHTIEF').replaceWith("	<img src='{{asset('/images/HochtiefInvert.svg')}}' class='h-three-quarter HOCHTIEF' alt=''>")
		}
			
			
		}else{
			$('.cls-4').css('fill','#000')
			$('.cls-3').css('stroke','#024a94')
			$('.cls-2').css('fill','#fff')
			$('.cls-1').css('fill','#024a94')
		//	$('svg').css('padding','2% 2% 1% 1%')
			$('nav').css('background-color','transparent')
			
			if(isIE11){
			$('.HOCHTIEF').replaceWith("	<img src='{{asset('/images/Hochtief.svg')}}' class='h-three-quarter HOCHTIEF' alt=''>")
		}
		}
		
    }
  });
});
observer.observe($div[0], {
  attributes: true
});

		
		
		document.addEventListener("DOMContentLoaded", function () {
    // Getting the repository search input
    var searchRepoInputElem = document.getElementById("search-documents");

    // Handle keydown events (overridden)
    halfmoon.keydownHandler = function(event) {
      event = event || window.event;
      // Shortcuts are triggered only if no input, textarea, or select has focus
      if (!(document.querySelector("input:focus") || document.querySelector("textarea:focus") || document.querySelector("select:focus"))) {
        // Focus the repository search input when [/] is pressed
        if (event.which == 70 && event.ctrlKey) {
          searchRepoInputElem.focus();
          event.preventDefault();
        }
      }
      // You can handle other keydown events here using if or else-if statements
    }
  });

		
		$('.search:hidden').attr('id','searcher')
		
		$('.search').on('show',function(){
			$(this).attr('id','search-documents')
		});
		$('.search').on('hide',function(){
			$(this).attr('id','searcher')
		});

		
		if(isIE11){
			
			checkCollapse();
			
			
			$('.collapse-panel').on('click',function(){
				if($(this)[0].hasAttribute('open')){
					$(this).removeAttr('open');
				}else	{
					$(this).attr('open',true);
				};
				
				checkCollapse();
			})
		
			
			function checkCollapse(){
			
					$('.collapse-panel').each(function(){
				
				if($(this)[0].hasAttribute('open')){
					$(this).children('.collapse-content').show();
				}
				
				
				if(!$(this)[0].hasAttribute('open')){
					$(this).children('.collapse-content').hide();
				}
				
			
			})
			
				
			}
			
			
		}
		
		
		adjustPadding()
		
		$(window).on('resize', function(){
   adjustPadding()
});
		
		
		function adjustPadding(){
			
			var height = $('#footer').height();
			
			$('.content-wrapper').css('padding-bottom',height)
			
			
		}
	
		
		$('.modal').each(function(){
			$('body').append('<div class="modal" id="'+$(this).attr('id')+'" tabindex="-1" role="dialog">'+$(this).html()+'</div>');
			$(this).remove();
		})
		
		$('.modal').each(function(){
			
			$(this).find('.modal').remove();
			
		});
		
		
	</script>

  <!-- Halfmoon JS -->
</body>
</html>
