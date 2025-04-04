<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn SASS</title>
  <meta name="description" content="Learn SASS with examples and description.">
  <meta name="author" content="George Tourtsinakis">
  <meta name="keywords" content="sass,define sass,learn sass,what is scss,scss mixin,sass definition,what is sass,sass scss,definition of sass,sass css tutorial for beginners,syntactically awesome stylesheets,mixin scss,learn sass online,css sass tutorial ">

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/prism.css" rel="stylesheet" type="text/css">
  <link  href="css/main.min.css" rel="stylesheet" type="text/css" >
   <script defer src="javascript/jquery-2.2.4.min.js"></script>
  <script defer src="javascript/jquery.scrollTo.min.js"></script>
  <script defer  src="javascript/main.min.js"></script>
  <script defer src="javascript/bootstrap.min.js"></script>
  <script defer src="javascript/prism.js"></script>


  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

   <?php include_once("../analyticstracking.php") ?>
</head>

<body class="defaultTheme">

<nav id="navbar" >
	  <ul id="nav" class="navbar navbar-nav">
		<li ><a class="scroll topLinks" href="#main">Start</a></li>
		<li ><a class="scroll topLinks" href="#installation">Installation</a></li>

		<li class="dropdown"><a class="scroll topLinks" href="#" data-toggle="dropdown">Basic topics</a>
			<ul class="dropdown-menu">
				<li class="menuExtraList"><a class="scroll" href="#variables">Variables</a></li>
				<li class="menuExtraList"><a class="scroll" href="#partial">Partial</a></li>
				<li class="menuExtraList"><a class="scroll" href="#mixin">Mixin</a></li>
				<li class="menuExtraList"><a class="scroll" href="#importFonts">@import Fonts</a></li>
				<li class="menuExtraList"><a class="scroll" href="#media-queries">Media Queries</a></li>
		  </ul>
		</li>

			  <li class="dropdown"><a class="scroll topLinks" href="#" data-toggle="dropdown">Advanced topics</a>
				  <ul class="dropdown-menu">
					  <li class="menuExtraList"><a class="scroll" href="#calculations">Calculations</a></li>
					  <li class="menuExtraList"><a class="scroll" href="#functions">Functions</a></li>
					  <li class="menuExtraList"><a class="scroll" href="#inheritance">Inheritance</a></li>
					  <li class="menuExtraList"><a class="scroll" href="#extendVSmixin">@extend vs @mixin</a></li>
					  <li class="menuExtraList"><a class="scroll" href="#ifElse">@if and @else</a></li>
                      <li class="menuExtraList"><a class="scroll" href="#loops">Loops</a></li>
                      <li class="menuExtraList"><a class="scroll" href="#maps">Maps</a></li>
				  </ul>
			  </li>


		  <li class="topLinks"><a class=" topLinks" href="http://www.besmartbesimple.com">Back to beSmartbeSimple.com</a></li>
	  </ul>
	</nav>


	<a target="_blank"  href="https://github.com/georgetour/Mastering-SASS-v0.8"><img class="forkMe" src="images/fork-me-right-blue.png"></a>
<div id="main" role="main">

	<article id="content">
	  <h1 id="starting">Learn SASS. From Beginner to Master !</h1>
		<h4>In this article you will find examples with explanation so you can learn and master SASS.</h4>
		<h2>Click to change themes.</h2>
		<p>Easily achieved with SASS.</p>
		<div style="margin-bottom: 10px;padding: 5px">
			<button id="darkButton" class="darkButton">Dark Theme</button>
			<button id="lightButton" class="lightButton">Light Theme</button>
			<button id="defaultButton" class="defaultButton">Default</button>
		</div>
		<p>SASS is a preprocessor that makes CSS more powerful since you can work with variables, partial, mixin, nesting,arguments
		and many other amazing features that you find only in programming languages.
		</p>
		<p>In SASS we can use use SASS or SCSS syntax. Most people use SCSS syntax since it uses
		exactly the CSS syntax.
		</p>


		<section>
			<h2>Why you should use it?</h2>
			<p>As you master CSS and your projects become bigger you will notice that
			you 'll have some repeating stuff all over your CSS code. SASS will give
			you power and simplicity as I said above.
			</p>
			<p>For example let's say your client wants the color of some specific articles
			to be changed. Those articles have classes with many properties.<br>If you had stored the color in a variable thanks to SASS instead
				of changing it everywhere you just change the variable value .
			</p>
		</section>
		<section>
			<h2>Who should use it?</h2>
			<p>You should use it, if you believe you are in a pretty good level in CSS.</p>
			<p>Also if you want to work as front-end developer in a company, since many companies
			require it.
			</p>
		</section>

<section id="introduction">
      <div class="installation">
          <span id="installation" class="anchor"></span>
          <h3 >Installing SASS for sublime text</h3>
          <div id="sublime-install"></div>
          <h3 >Installing SASS for phpstorm with file watchers</h3>
          <div id="php-storm-install"></div>
          
      </div>

<!--Variables section-->
<div  class="featureBorder">
	<span id="variables" class="anchor"></span>
	<h3>Variables</h3>
	<p>In SASS we define a variable by adding the $ in front and then we call it normally as we would in a
	programming language COOL! So if the variable value changes it changes everywhere.
	No need for repeating.
	</p>
<pre ><code class="language-scss">//Variable :
$text-color : white;</code>
</pre>

<p>We now can use this variable :</p>
<pre><code class="language-css">body {
    font-family: sans-serif;
    color: $text-color;
}</code>
</pre>

</div>

<!--End Variables section-->

<!-- Partial -->
<div  class="featureBorder">
	<span id="partial" class="anchor"></span>
	<h3>Partial(separating content into smaller files)</h3>
	<p>Also we can use partial and get content from another underscored  scss file .We just put @import rule what to get.</p>
	We create a file that will hold all variables called : _variables.scss
	<p class="sublimeColor"> </p>
	<p>SCSS @import works like javascript require and PHP include.We call the file where we will use it like that:</p>

<pre><code class="language-css">@import "variables" ;</code>
		</pre>

</div>
<!--End Partial -->

<!--Mixin-->
<div  class="featureBorder">
	<span id="mixin" class="anchor"></span>
	<h3>Mixin</h3>
	<p>
	Mixin is a very important feature of SASS. We combine a lot of stuff together.
	We name it like this :
	</p>
<pre><code class="language-css">@mixin warning{
    background-color: orange;
    color: white ;
}</code>
</pre>

    <p>And we call it :</p>

<pre><code class="language-css">.warning-button{
    @include warning;
}</code>
</pre>

    <p>or to get multiple properties by this syntax</p>
<pre><code class="language-scss">@mixin large-text{
    font:{
    size: 40px;
    weight: bold ;
	}
}</code>
</pre>

</div>
<!--End Mixin-->

<!--Nested Mixin-->
<div class="featureBorder">
    <h3>Nested mixins and classes/tags</h3>
    <p>We can nest a mixin or multiple mixing inside other mixins.</p>

<pre><code class="language-scss">@mixin rounded{
    border-radius:6px;
    }

@mixin box{
    @include rounded;
    background-color: #000088;
}</code>
</pre>

<p>Another powerful feature is that you nest a class/tag inside class instead of :</p>

<pre><code class="language-scss">.navigation h2{
	color:white;
}</code>
</pre>

<p>You write :</p>
<pre><code class="language-scss">.navigation {
	h2 {
		color:white;
	}
}</code>
</pre>
<p>Also you can use &. for the direct class the tag has :</p>
<pre><code class="language-scss">
.navigation{
  padding:10px;
  background-color: $nav-bg-color;
  color:$white;

  h2{
    text-align: left;
    margin: 0;
    color:$white;

    &.site-name{
      display:none;
    }
    &.nav-title{
      display:block;
    }
  }</code>
</pre>
</div>
<!--End Nested mixin-->

<!--Mixin Arguments-->
<div class="featureBorder">
    <h3>Mixin Arguments</h3>
	<p>We can have mixins with arguments like in a programming language.</p>

<pre><code class="language-scss">@mixin rounded($radius) {
    border-radius:$radius;
}</code>
</pre>

    <p>
    And we take it by passing the parameter we want at parenthesis :
	</p>
<pre><code class="language-scss">@mixin box{
    @include rounded(5px);
	background-color: #000088;
}</code>
</pre>

    <p>Or a little more complicated with default values so you don't have to pass arguments :</p>

<pre><code class="language-scss">@mixin rounded($radius : 6px) {
    border-radius:$radius;
}

@mixin box($radius : 6px, $border :1px solid black){
    @include rounded($radius);
	background-color: #000088;
    border: $border;
}</code>
</pre>

    <p>And if we call it we can only pass the argument we want and the other will be our default :</p>

<pre><code class="language-scss">#header{
    @include box($border :1px solid pink);
}</code>
</pre>

</div>
<!--End Mixin Arguments-->

<!-- Variable argument/arglist -->
<div id="arglist" class="featureBorder">
    <h3>Variable argument/arglist</h3>
	<p>With the syntax below we don't predefine how many arguments
	and we can pass as many as we want.Check the three dots after the argument.
	 </p>

<pre><code class="language-scss">@mixin box-shadow($shadows...){
    box-shadow: $shadows;
	-moz-box-shadow: $shadows;
	-webkit-box-shadow: $shadows;
}</code>
</pre>

    <p>And it works like this:</p>

<pre><code class="language-scss">
$shadow1 : 10px 10px 5px #888888;
$shadow2 : -5px 5px 3px green;

#header{
    @include box-shadow($shadow1,$shadow2);
}</code>
</pre>

</div>
<!--End Variables arguments-->

<!--Browser hacks with mixin -->
<div class="featureBorder">

    <h3>Browser hacks with mixin</h3>
	<p>Using mixin you can apply specific attributes to each browser with browser hacks.</p>

<pre><code class="language-scss">@mixin apply-to-ie-6{
    * html{
	@content ;
    }
}</code>
</pre>

    <p>So we are taking the mixin and we will apply it only to ie6.</p>

<pre><code class="language-scss">@include apply-to-ie-6{
    body{
        color: #000088;
	}
}</code>
</pre>
    <a href="https://css-tricks.com/snippets/css/browser-specific-hacks/">Find all the browser hacks here</a>
</div>
<!-- End Browser hacks with mixin -->

<!--Switching Themes with mixin-->
<div class="featureBorder">
    <span   class="anchor"></span>
    <h3>Switching themes with mixin</h3>
    <p> As you saw at the top with button click you can switch themes.
    Let' s see the code :
    </p>
    <p>First, our mixins :</p>

<pre><code class="language-scss">@mixin dark-theme{
    //Variables for dark-theme
    text-color: white;
    $theme-color:  rgb(39,40,34);
    $footer-color : black;
    $menu-item-color: white;
    $navbar-color:black;

    //Where To
    background-color: $theme-color;
    color: $text-color;
    #navbar{
    background-color: $navbar-color;
    }
    .dropdown-menu{
    background-color: $navbar-color;
    }
    #footer{
    background-color: $footer-color;
    }
    }

    @mixin light-theme{
    //Variables for light-theme
    $text-color: black;
    $theme-color: white;
    $footer-color : #53c653;
    $menu-item-color: white;
    $navbar-color:   #53c653;

    //Where To
    background-color: $theme-color;
    color: $text-color;
    #navbar{
    background-color: $navbar-color;
    }
    .dropdown-menu{
    background-color: $navbar-color;
    }
    #footer{
    background-color: $footer-color;
    color: white;
    }
    }

    @mixin default-theme{
    //Default Colors
    $text-color: black;
    $theme-color: white;
    $footer-color:#1a1aff;
    $menu-item-color: white;
    $navbar-color:#1a1aff;

    //Where To
    background-color: $theme-color;
    color: $text-color;
    #navbar{
    background-color: $navbar-color;
    }
    .dropdown-menu{
    background-color: $navbar-color;
    }
    #footer{
    background-color: $footer-color;
    color: white;
    }
    }</code>
</pre>

              <p>Then we will add our mixins to classes :</p>
<pre><code class="language-scss">.darkTheme{
    @include dark-theme;
    }

    .lightTheme{
    @include light-theme;
    }

    .defaultTheme{
    @include default-theme;
    }</code>
</pre>

              <p>Finally the jQuery code for the button clicks :</p>
<pre><code class="language-javascript">//With those clicks we are removing the previous classes for themes
    //and we add the class we want for theme
    $('#darkButton').click(function() {
    $('body').removeClass('lightTheme defaultTheme').addClass('darkTheme');
    });

    $('#lightButton').click(function() {
    $('body').removeClass('darkTheme defaultTheme').addClass('lightTheme');
    });

    $('#defaultButton').click(function() {
    $('body').removeClass('darkTheme lightTheme').addClass('defaultTheme');
    });
</code>
</pre>
</div><!--End Switching themes-->

<!--@import fonts-->
<div  class="featureBorder">
    <span  id="importFonts" class="anchor"></span>
	<h3>@import fonts</h3>
	<p>We create a mixin that will have one argument and it's gonna @import from url the font.</p>
	<p>Using interpolation with #{$variableHere} only.Can only be used with import. </p>

<pre><code class="language-scss">@mixin google-fonts($font){
    $font:unquote($font);
	@import url(https://fonts.googleapis.com.css?family=<span>#{$font}</span>);
}</code>
</pre>

    <p>Then we will store to variables the fonts :</p>

<pre><code class="language-scss">$text-font: "Alegreya Sans", Arial, sans-serif;
$headline-font : "Titillium Web", Georgia, serif;</code>
</pre>

    <p>Finally we will call the mixins two times and pass the parameters.
    We then insert the font-family at h1, h2, h3, h4 with the variable :
	</p>

<pre><code class="language-scss">@include google-fonts("Alegreya+Sans");
@include google-fonts("Titillium+Web");

h1, h2, h3, h4 {
    font-family: $headline-font;
}</code>
</pre>

</div>
<!--End import fonts-->

<!--@media -->
<div  class="featureBorder">
    <span  id="media-queries" class="anchor"></span>
	<h3>Media queries</h3>
	<p>Same syntax as CSS media queries but more powerful since we can nest them where we want.</p>

<pre><code class="language-scss">#main{
    width: $content-width;
	@media only screen and (max-width: 960px){
		width: auto;
		max-width: $content-width;
	}
}</code>
</pre>

</div>
<!--End media queries-->

<!--Using mixins for multiple media queries-->
<div class="featureBorder">
    <h3>Using mixins for multiple media queries</h3>
	<p>We can use mixins with multiple media queries so if we want to change
    something everywhere we can do it really easily.
    </p>

<pre><code class="language-scss">@mixin xsmall-screens{
    @media only screen and (max-width:320px){
	    @content;
	}
}

@mixin small-screens{
    @media only screen and (max-width:480px){
		@content;
	}
}

@mixin medium-screens{
	@media only screen and (max-width:680px){
		@content;
	}
}

@mixin large-screens{
	@media only screen and (max-width:960px){
		@content;
	}
}</code>
</pre>
    <p>And we call the mixin we want where we want simple like that:</p>

<pre><code class="language-scss">body{
    @include large-screens{
		font-size: 120%
	}
}</code>
</pre>

</div>
<!--End multiple media queries-->

<!--Using calculations with SASS-->
<div  class="featureBorder">
	<span id="calculations" class="anchor"></span>
    <h3>Using calculations with SASS</h3>
	<p>In SASS we can use arithmetic calculations.But to do so it has to be
	CSS syntax  else it won't work correctly.Also you can
	do calculations between different types but they must be compatible
	each other.
	</p>
	<p>Open your command prompt and type sass --interactive.</p>
	<img style="width: 700px" src="images/sass%20calculations.jpg">
	<p>In some calculations you must put parenthesis or make them with variables.Also some units don't
	work together.
    </p>

</div>
<!--End Using calculations with SASS-->

<!-- SASS functions-->
<div class="featureBorder">
	<span  id="functions" class="anchor"></span>
	<h3>SASS functions</h3>
	<p>In CSS we already have some functions which you probably know like
	rgb, rgba, hsl and hsla. SASS gives us more power with more functions and
	the ability to create our own. 4 of the most used ones are darken, lighten, transparentize and opacify.
	</p>
	<p>With the code below we are using the darken function and we are
	saying make the $link-color darker by 15% when we hover on it.
	</p>

<pre><code class="language-scss">a{
    color: $link-color;

	&:hover{
		color: darken($link-color,15%);
	}
}</code>
</pre>

    <p>Lighten function:</p>

<pre><code class="language-scss">@mixin warning{
    background-color: orange;
	color: white ;

	&:hover{
		background-color: lighten(orange,30%);
	}
}</code>
</pre>

    <p>Hover on the orange button below to see what we did easily with the above mixin.</p>
    <button class="warning-button">Created with mixin</button>
    <p>Also we have transparentize and opacify functions.Opacity is just the opposite of transperency.
    If something is 100% opaque,then it's 0% transperent.
    </p>

<pre><code class="language-scss">#main-menu {
    a{
        color:$menu-item-color;
		padding: 6px 8px;
		border-bottom: 1px solid transparentize(#fefefe,1);
		transition: border-bottom 0.5s;
		transition-timing-function: ease-in-out;

		&:hover{
			border-bottom: 1px solid opacify(#fefefe,0.5);
		}
	}
}</code>
</pre>

    <p>Hover at menu bar at top to see how it works.</p>
</div>
<!--End SASS functions-->

<!--Creating our own SASS functions-->
<div class="featureBorder">
	<h3>Creating our own SASS functions</h3>
	<p>Just create a file _functions.scss and call it at main.scss @import "functions" ; .
	Then like mixins by saying @function name and we return value with @return.Let's see them in action :
	</p>
    <p> Here with this function we will have em if we give pixels :</p>

<pre><code class="language-scss">@function em($pixels,$context:16px){
	@return ($pixels/$context)*1em;
}</code>
</pre>

    <p>A function that has default 12 columns 100% page
	width and 1% gap between the columns and return equally split columns.
    </p>

<pre><code class="language-scss">@function col-width($columns:12,$page-width:100%,$gap:1%){
	@return ($page-width - $gap*($columns)) / $columns;
}</code>
</pre>

    <p>Below we have at main.scss six equally split columns by using the function col-width we created:</p>

<pre><code class="language-scss">.sidebar {
	display: inline-block;
	width:2 * col-width();
	background-color: lightgray;
}</code>
</pre>

<div class="alignCenter">
	<aside class="sidebar">
        <div>Column 1</div>
		<ul>
		<li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
		<li>Item 4</li>
		</ul>
    </aside>

    <aside class="sidebar">
        <div>Column 2</div>
		<ul>
		<li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
		<li>Item 4</li>
		</ul>
    </aside>

    <aside class="sidebar">
        <div>Column 3</div>
        <ul>
        <li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
		<li>Item 4</li>
		</ul>
    </aside>

    <aside class="sidebar">
        <div>Column 4</div>
		<ul>
		<li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
		<li>Item 4</li>
		</ul>
    </aside>

    <aside class="sidebar">
        <div>Column 5</div>
        <ul>
        <li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
		<li>Item 4</li>
		</ul>
    </aside>

    <aside class="sidebar">
        <div>Column 6</div>
		<ul>
        <li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
		<li>Item 4</li>
		</ul>
    </aside>
</div>

</div><!--End Creating SASS functions-->

<!--Inheritance with @extend-->
<div  class="featureBorder">
    <span  id="inheritance" class="anchor"></span>
	<h3>Inheritance with @extend</h3>
	<p>Sometimes we need to have a class that also has something similar with another class. We need to
	to remember using both classes or more to achieve that.SASS makes that easy with inheritance
	by using @extend inheritFrom.
	</p>

<pre><code class="language-scss">.error{
	color: red;
}

.critical-error{
    @extend .error;
	border: 1px solid red;
	font-weight: bold;
}</code>
</pre>

    <p>Or we can use any combination we want for example @extend + @include, inheritance and mixin :</p>

<pre><code class="language-scss">.cta-button{
	@extend .warning-button;
	@include rounded;
}</code>
</pre>

    <button class="cta-button">extend+include</button>
	<h4>Side note for extend :</h4>
	<p>You can't have extend inside a media query if the class is NOT
	in the same media query.
	</p>
	<p class="error">Wrong</p>

<pre><code class="language-scss">.cta-button{
	@extend .warning-button;
	@include rounded;
}

@media screen and (min-width: 960px) {
	.super-cta-button{
		@extend .cta-button;
	}
}</code>
</pre>

    <p>Correct</p>

<pre><code class="language-scss">@media screen and (min-width: 960px) {
	.foo{
		border-bottom-color: blue;
	}
	.super-cta-button{
		@extend .foo;
	}
}</code>
</pre>

</div><!--End Inheritance with extend -->

<!--@extend only selectors-->
<div class="featureBorder">
    <h3>@extend only selectors</h3>
	<p> We can use selector that is not going to be generated in CSS but only in SASS.
	We use that if we don't want to use this class anywhere in CSS but only to extend it.
	Instead of using . or # we use % at start.
	</p>

<pre><code class="language-scss">%highlight{
	font-style: italic;
}

.sub-title{
	@extend %highlight
}</code>
</pre>
    <p>Also we can say to SASS if this class exists use it else do nothing with this syntax :</p>

<pre><code class="language-scss">.sub-title{
	@extend %highlight;
	@extend .doIExist !optional;
}</code>
</pre>

</div><!--End @extend only selectors-->

<!--extend vs mixin-->
<div class="featureBorder">
    <span  id="extendVSmixin" class="anchor"></span>
    <h3>@extend vs @mixin</h3>
	<p> A lot of people say that they work almost the same so why to use each of them?
	That's true but let's see what code @extend generates and what @mixin at CSS.
    </p>
    <p>SASS code and @extend</p>

<pre><code class="language-scss">.error{
	color: red;
}
.critical-error{
    @extend .error;
	border: 1px solid red;
	font-weight: bold;
}</code>
</pre>

    <p>Generated code at CSS :</p>
<pre><code class="language-scss">.error, .critical-error {
	color: red;
}

.critical-error{
	border: 1px solid red;
	font-weight: bold;
}</code>
</pre>

    <p>SASS code and @mixin :</p>
<pre><code class="language-scss">@mixin warning-button{
    @include warning;
}

.warning-button{
	@include warning-button;
}

.cta-button{
    @include warning-button;
}</code>
</pre>

    <p>Generated at CSS with @include :</p>
<pre><code class="language-scss">.warning-button {
    background-color: orange;
    color: white;
}

.warning-button:hover {
    background-color: #ffdb99;
}

.cta-button {
    background-color: orange;
	color: white;
}

.cta-button:hover {
    background-color: #ffdb99;
}</code>
</pre>

    <p>Conclusion @extend too many selectors but not replicated styles. On the other side
	@mixin fewer selectors but duplicated styles. Don't forget that @extend has some limitations
	as we said above at inheritance. Though @mixin generates more code
	with gzipping you won't have any performance problems but choose what is more comfortable for you.
    </p>

</div><!--End @extend vs @mixin-->

<!--if and else directives-->
<div class="featureBorder">
    <span  id="ifElse" class="anchor"></span>
    <h3>@if and @else directives</h3>
	<p> In SASS we have if and else directives that work exactly like
	programming languages. If you are not familiar with these conditions
	you can understand it below.
	</p>
	<p>We are setting a variable $contrast : high. If $contrast == high then color: black. Else
        if $contrast == low then color #999. In all other cases color: $text-color .
	</p>

<pre><code class="language-scss">$contrast : high;
body {
	@if ($contrast==high){
		color : black;
	}
	@else if $constrast == low{
		color : #999;
	}
	@else{
		olor:$text-color;
	}
}</code>
</pre>

</div><!--End if and else directives-->

<!--Loops-->
<div class="featureBorder">
    <span  id="loops" class="anchor"></span>
    <h3>@for loops</h3>
     <p>If you are familiar with programming languages you probably understand how loops
         work. In any case a loop is fundamental for all programming languages.
     </p>
      <p>If you had for example 10 clients and wanted to see on screen all their names
          instead of showing one by one manually you just create a loop that will
         search and show all of them.
      </p>
    <p>Let's see it in SASS how it works :</p>
    <p>So in our main.scss file we are saying for variable $i start from 1 though 6 which will count 1,2,3,4,5,6
    create classes .textsize-1,.textsize-2,.textsize-3,.textsize-4,.textsize-5,.textsize-6
        with font-size increment by 5px for each class.
    </p>

<pre><code class="language-scss">@for $i from 1 through 6 {
    .textsize-#{$i}{
    font-size: $i * 5px;
    }
}</code>
</pre>

    <p>And the result in CSS will be :</p>
<pre><code class="language-scss">.textsize-1 {
    font-size: 5px; }

.textsize-2 {
    font-size: 10px;
}

.textsize-3 {
    font-size: 15px;
}

.textsize-4 {
    font-size: 20px;
}

.textsize-5 {
    font-size: 25px;
}

.textsize-6 {
    font-size: 30px;
}</code>
</pre>
    <p>See that with three lines in SASS we created 12 lines in our CSS.</p>
</div><!--End Loops-->

<!--each loops-->
<div class="featureBorder">
    <h3>@each loops with lists</h3>
    <p>Each loops are the most common used in SASS. We use them with lists, which
    in SASS is a variable that has more than one values separated by commas.
    </p>
<pre><code class="language-scss">$images: cat, dog, bird;
@each $image in $images{
    .#{$image}-animal{
    background-image: url('images/#{$image}.png');
    }
}</code>
</pre>

    <p>CSS result :</p>
<pre><code class="language-scss">.cat-animal {
    background-image: url("images/cat.png");
}

.dog-animal {
    background-image: url("images/dog.png");
}

.bird-animal {
    background-image: url("images/bird.png");
}</code>
</pre>
</div><!--End each loops-->

<!--Maps-->
<div  class="featureBorder">
    <span  id="maps" class="anchor"></span>
    <h3>Maps with each loop(they are like associative arrays/dictionaries)</h3>
    <p>After version 3 SASS was added map data structure. In simple words map is
        a box, container whatever you want to call it that you have keys in it with
        values.
    </p>
    <p>Imagine you have a box that you store your keys.
    Inside we have 3 keys with names for 3 different purposes. </p>
<pre><code class="language-scss">//Name of the box
$map : (
    //Key  / Value
    garage : blue,
    house : red,
    cellar : green
);</code>
</pre>
    <p>So let's say your house is ultra futuristic and by writing HTML/CSS you
     can open doors when you add the correct color to a class :
    </p>
<pre><code class="language-scss">.garage{
    color : map-get($map,garage);
}
.house{
    color : map-get($map,house);
}

.cellar{
    color : map-get($map,cellar);
}</code>
</pre>
    <p>If we wanted to open all your doors in your amazing house we will do :</p>
<pre><code class="language-scss">@each $key, $keyColor in $map{
    .#($key){
        color: $keyColor;
    }
}</code>
</pre>
    <p>And at CSS with the final loop the result would be :</p>
<pre><code class="language-scss">.garage {
    color: blue;
}

.house {
    color: red;
}

.cellar {
    color: green;
}</code>
</pre>

</div><!--End maps -->

<!--while loops-->
<div class="featureBorder">
    <h3>@while loops</h3>
    <p>While loop is another kind of loop that says as long as the condition
    is true continue the loop. </p>
    <p>Below we have $j : 2 and we are saying
    while $j <= 10 increase width by $j * 10% and $j by 2. So when we reach at
    $j : 10 the loop will stop.
    </p>
    <p class="label-danger">WARNING!If you don't increase $j also the loop won't stop.</p>
<pre><code class="language-scss">$j : 2;
@while $j <= 10{
    .picture-#{$j}{
    width: $j *10%;
    }
    $j: $j + 2;
}</code>
</pre>

    <p>CSS result :</p>
<pre><code class="language-scss">.picture-2 {
    width: 20%;
}

.picture-4 {
    width: 40%;
}

.picture-6 {
    width: 60%;
}

.picture-8 {
    width: 80%;
}

.picture-10 {
    width: 100%;
}</code>
</pre>
</div><!--End each loops-->

</section>
</article>

    <section style="margin-top:30px;" >
        <div style="width: 250px;display: inline-block">
        <img style="width:200px" src="images/me_smiling-compressor.jpg" alt="George Tourtsinakis">
        </div>
        <div  style="display: inline-block; width: 400px;vertical-align: top">I'm George Tourtsinakis a Full Stack Developer.
        I hope you enjoyed this article and feel free to contact me at www.besmartbesimple.com.
        </div>
    </section>


</div><!--End main-->

  <footer id="footer">
	<div>Created by George Tourtsinakis and it's open source so do anything you want.</div>
	 <div>Find me at : <a  href="http://www.besmartbesimple.com/about.php">www.beSmartbeSimple.com</a></div>

  </footer>
</body>
</html>