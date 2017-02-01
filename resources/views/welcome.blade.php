<!DOCTYPE HTML>
<html>
<head>
<title>Page Personnel</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{{ Html::style('css/style.css')}}
{{ Html::style('css/form.css')}}
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
{{ Html::script('js/jquery1.min.js')}}
<!-- start menu -->
{{ Html::style('css/megamenu.css')}}
{{ Html::script('js/megamenu.js')}}
{{ Html::script('js/all.js')}}
<!--start slider -->
    {{ Html::style('css/fwslider.css')}}
    {{ Html::script('js/jquery-ui.min.js')}}
    {{ Html::script('js/css3-mediaqueries.js')}}
    {{ Html::script('js/fwslider.js')}}
<!--end slider -->
<script src=""></script>
{{ Html::script('js/jquery.easydropdown.js')}}
</head>
<body>
  <div class="header-top">
  <div class="wrap">
     <div class="header-top-left">
          <div class="box">
            <select tabindex="4" class="dropdown" id="sucursal">
            <option value="" class="label" value="">{{(Request::segment(1)!='')?$estados->where('abreviatura', Request::segment(1))->first['nombre']:'Sucursal:'}}</option>
            @foreach ($estados as $key => $val)
              <option value="{{$val['abreviatura']}}">{{$val['nombre']}}</option>
            @endforeach
            </select>
         </div>
           <div class="clear"></div>
      </div>
   <div class="clear"></div>
 </div>
</div>

	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
        <ul class="megamenu skyblue">
			<li class="active grid"><a href="{{URL::to('/')}}">Inicio</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	    <ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>No Products</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
	    <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
                    <img src="images/banner.jpg" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">Alienware</h4>
                        <!-- /Text title -->

                        <!-- Text description -->
                        <p class="description">Las Mejores Laptops</p>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="images/banner1.jpg" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Monitores</h4>
                        <p class="description">Las mejores definiciones</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
      @foreach ($productos as $key => $val)
        <h2 class="head">{{$val->nombre}}</h2>
          @foreach ($val['productos'] as $key2 => $val2)
            <div class="top-box">
            <div class="col_1_of_3 span_1_of_3">
              <a href="single.html">
                <div class="inner_content clearfix">
                  <div class="product_image">
                    <img src="images/{{$val2->image}}" alt="" height="200" width="200"/>
                  </div>
                  <div class="sale-box"><span class="on_sale title_shop">{{$val2['pivot']->cantidad}}</span></div>
                  <div class="price">
                    <div class="cart-left">
                      <p class="title">{{$val2->nombre}}</p>
                      <div class="price1">
                        <span class="actual">{{$val2->precio}}</span>
                      </div>
                    </div>
                    <div class="cart-right"> </div>
                    <div class="clear"></div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
          <div class="clear"></div>
        </div>
      @endforeach
		  </div>
	   <div class="clear"></div>
	</div>
	</div>
	</div>
   <div class="footer">
		<div class="footer-bottom">
			<div class="wrap">
	             <div class="copy">
			        <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		         </div>
				<div class="f-list2">
			    </div>
			    <div class="clear"></div>
		      </div>
	     </div>
	</div>
</body>
</html>
