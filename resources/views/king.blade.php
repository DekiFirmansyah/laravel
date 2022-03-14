<!--
    <!DOCTYPE html> 

    Free  Template by Mohamed Sobhy
    https://www.facebook.com/Mido.HHH
-->
@extends('layouts.pasta')


<!--============ Navigation ============-->
@section('header')
<div class="headerwrapper">
	<div id="header" class="container">
		<div class="logo"> <a href="#"><img src="{{ asset('king-of-pasta/images/LOGO.png') }}" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <li><a href="#navigations">HOME</a></li>
                <li> <a href="#slider">ABOUT</a></li>
                <li><a href="#map">LOCATONS</a></li>
                <li><a href="#bestdishes">MENU</a></li>
                <li><a href="#contactus">CONTACT</a></li>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->
@endsection


<!--============ Slider ============-->

@section('sidebar')
<div class="sliderwrapper">
      <div id="slider" class="container">
           <div class="slider">
      			<ul class="slides">
    		 	 	  <li class="slide">
                      	<h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                         the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                          type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                           also the leap into 
                         electronic typesetting</p>
                      <img src="{{ asset('king-of-pasta/images/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slide1img"> 
                      </li>
      			 	  <li class="slide">
                      	<h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                         the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                          type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                           also the leap into 
                         electronic typesetting</p>
                      <img src="{{ asset('king-of-pasta/images/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
     			 	  <li class="slide">
                      	<h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                         the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                          type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                           also the leap into 
                         electronic typesetting</p>
                      <img src="{{ asset('king-of-pasta/images/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
        		  </ul>
            </div>
      </div> <!-- End of Slider-->
</div> <!-- end of sliderwrapper-->
@endsection


<!--============ Best Dishes ============-->
@section('content')
<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">
       
		 <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
      <div class="slider">
      		    <ul class="slides">
          	 	 <li class="slide">
                    <div class="item">
                          <img src="{{ asset('king-of-pasta/images/thumb1.png') }}" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Capellini</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="{{ asset('king-of-pasta/images/thumb2.jpg') }}" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Pillus</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="{{ asset('king-of-pasta/images/thumb3.png') }}" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Fusilli</h3>
                      </div> <!-- end of item-->
                  </li>
                   <li class="slide">
                    <div class="item">
                          <img src="{{ asset('king-of-pasta/images/thumb1.png') }}" width="226" height="225" alt="sliderimg" > 
                          <h3>Pasta Capellini</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="{{ asset('king-of-pasta/images/thumb2.jpg') }}" width="226" height="225" alt="sliderimg"> 
                          <h3>Pasta Pillus</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="{{ asset('king-of-pasta/images/thumb3.png') }}" width="226" height="225" alt="sliderimg"> 
                          <h3>Pasta Fusilli</h3>
                      </div> <!-- end of item-->
                  </li>
                   
        </ul>
      </div> <!-- end of slider-->
    </div> <!-- end of besth dishes-->
</div> <!-- end of bestdishes wrapper-->

<!--============ BOOK ONLINE ============-->

<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> BOOK ONLINE</h3>
    <form >
    <input type="text" class="name wow zoomIn" placeholder="Your Name" >
    <input type="text" class="email wow zoomIn" placeholder="Your E-MAIL">
    <input type="text" class="from wow zoomIn" placeholder="09-06-2014">
    <input type="text" class="to wow zoomIn" placeholder="09-06-2014">
    <input type="text" class="persons wow zoomIn" placeholder="Number of persons">
    
   
    
    <button class="booknow wow fadeInUp"> BOOK NOW </button>
    
    </form>
    
    
    </div>
</div> <!-- end of book online wrapper-->



<!--============ MAP ============-->

<div class="mapwrapper">
    <div id="map" class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3453.66325428613!2d31.24094885319519!3d30.046517359733745!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1403554513536"   class="googlemap"></iframe>
    
    
    </div> <!-- end of map id-->

</div>    <!-- end of map wrapper-->



<!--============ Contact us ============-->


<div class="contactwrapper">
  <div id="contactus" class="container">
        <h3 class="wow fadeInUp" data-wow-delay="0.3s">CONTACT US</h3>
        <div class="staff">
       	  <ul>
                  <li><img src="{{ asset('king-of-pasta/images/char3.png') }}" width="163" height="163" class="myimage wow fadeIn" title="mido" alt="1">
                  
                  
            </li>
                  <li><img src="{{ asset('king-of-pasta/images/char4.png') }}" width="163" height="163" class="myimage2 wow fadeIn" data-wow-delay="0.8s"
                   alt="1"></li> 
                  <li><img src="{{ asset('king-of-pasta/images/char5.png') }}" width="163" height="163" class="myimage3 wow fadeIn" 
                  data-wow-delay="0.8s" 
                  alt="1"></li>
                  <li><img src="{{ asset('king-of-pasta/images/char6.png') }}" width="163" height="163" class="myimage4 wow fadeIn" alt="1"
                   data-wow-delay="0.8s"
                  ></li>
                  <li><img src="{{ asset('king-of-pasta/images/char1.png') }}" width="163" height="163" class="myimage5 wow fadeIn" alt="1"
                  data-wow-delay="0.8s"></li>
                  <li><img src="{{ asset('king-of-pasta/images/char2.png') }}" width="163" height="163" class="myimage6 wow fadeIn" alt="1"
                  data-wow-delay="0.8s"
                  ></li>
             </ul>   
             
         </div>   
      <!--end of .staff-->
        
    <img src="{{ asset('king-of-pasta/images/pop1.png') }}" width="486" height="137" class="firstpop" alt="pop">
    <img src="{{ asset('king-of-pasta/images/popup2.png') }}" width="487" height="137"  class="secondpop" alt="pop">
    <img src="{{ asset('king-of-pasta/images/popup3.png') }}" width="487" height="137"  class="thirdpop" alt="pop">
    <img src="{{ asset('king-of-pasta/images/popup4.png') }}" width="487" height="137"  class="fourthpop" alt="pop">  
    <img src="{{ asset('king-of-pasta/images/popup6.png') }}" width="487" height="137"  class="fifthpop" alt="pop">  
    <img src="{{ asset('king-of-pasta/images/popup7.png') }}" width="487" height="137"  class="sixthpop" alt="pop">  
    
    
    </div> 
    <!--contactus class-->
</div> <!-- end of contact wrapper-->
@endsection

<!--============ FOOTER ============-->

@section('footer')
<div class="footerwrapper">
    <footer class="container">
    	<div class="customerreview">
       		 <h2>Customer Reviews</h2>
          <div class="review">
        	<p><strong>&#8220; </strong>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor 
            aliquet. Aenean 			            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
             nec sagittis sem nibh id elit.
             Duis sed odio sit amet nibh vulputate  a ornare odio. Sed non  mauris vitae erat consequat  
            <strong>&#8221;</strong></p>
             
             <h4>- JOHN ALVES</h4>
            
            
        	</div> <!-- end of review-->
             
              <div class="clearfix"></div>
              <div class="line"></div>
              
          <div class="review">
        	<p><strong>&#8220; </strong>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor 
            aliquet. Aenean 			            sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
             nec sagittis sem nibh id elit.
             Duis sed odio sit amet nibh vulputate  a ornare odio. Sed non  mauris vitae erat consequat  
            <strong>&#8221;</strong></p>
             
             <h4>- CATHREINE JOHNES</h4>
            
            
        	</div> <!-- end of review-->
             
              
              
            
            
        </div>
        <div class="socialize">
        
      <h2>Socialize</h2>
        <div class="socialimgs">
          <a href="https://www.facebook.com/Mido.HHH"><img src="{{ asset('king-of-pasta/images/fb.png') }}" width="68" height="68" class="facebook"
           alt="fb"></a>
        <a href="https://twitter.com/Mido_A7X"><img src="{{ asset('king-of-pasta/images/twitter.png') }}" width="68" height="68" class="twitter"
        alt="twitter"></a>
        <a href="#"><img src="{{ asset('king-of-pasta/images/youtube.png') }}" width="68" height="69" class="youtube" alt="youtube"></a>
        <a href="#"><img src="{{ asset('king-of-pasta/images/g+.png') }}" width="68" height="68" class="google" alt="g+"></a>
          <a href="#"><img src="{{ asset('king-of-pasta/images/message.png') }}" width="68" height="68" class="message" alt="message"></a>
      </div> <!--end of social imgs-->
      
       </div>
      
      
<div class="sendfeedback">
  	  <h2>Send Feedback</h2>
            <form>
            <h6>Your Name:</h6>
            <input type="text" class="yourname" >
             <h6>Mobile Number :</h6>
            <input type="text" class="mobilenumber">
             <h6>Message :</h6>
            <textarea></textarea>
            
            <button>SUBMIT </button>
            
            
            
            </form>
        
        </div> <!-- end of feedback-->
        
    
    
    
    </footer> <!-- end of footer-->

</div> <!-- end of footer-->
@endsection