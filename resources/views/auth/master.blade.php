   <link href="/css/auth.css" rel="stylesheet">
   <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
   <title>{{$title?$title:'Home'}}|{{config('app.name')}}</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   @stack('css')
   <section class="background-radial-gradient overflow-hidden">
       <style>
           .background-radial-gradient {
               background-color: hsl(218, 41%, 15%);
               background-image: radial-gradient(650px circle at 0% 0%,
                       hsl(218, 41%, 35%) 15%,
                       hsl(218, 41%, 30%) 35%,
                       hsl(218, 41%, 20%) 75%,
                       hsl(218, 41%, 19%) 80%,
                       transparent 100%),
                   radial-gradient(1250px circle at 100% 100%,
                       hsl(218, 41%, 45%) 15%,
                       hsl(218, 41%, 30%) 35%,
                       hsl(218, 41%, 20%) 75%,
                       hsl(218, 41%, 19%) 80%,
                       transparent 100%);
           }

           #radius-shape-1 {
               height: 220px;
               width: 220px;
               top: -60px;
               left: -130px;
               background: radial-gradient(#44006b, #ad1fff);
               overflow: hidden;
           }

           #radius-shape-2 {
               border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
               bottom: -60px;
               right: -110px;
               width: 300px;
               height: 300px;
               background: radial-gradient(#44006b, #ad1fff);
               overflow: hidden;
           }

           .bg-glass {
               background-color: hsla(0, 0%, 100%, 0.9) !important;
               backdrop-filter: saturate(200%) blur(25px);
           }

           .text-left {
               text-align: left;
           }

       </style>

       <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
           <div class="row gx-lg-5 align-items-center mb-5">
               <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <a href="{{route('passenger.index')}}"> <img width="400px"  src="{{asset('img/logo.png')}}" alt=""></a>
                   <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                       Affordable ticket<br />
                       <span style="color: hsl(218, 81%, 75%)">for your trip</span>
                   </h1>
                   <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                       Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                       Temporibus, expedita iusto veniam atque, magni tempora mollitia
                       dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                       ab ipsum nisi dolorem modi. Quos?
                   </p>
               </div>

               <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                   <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                   <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                   <div class="card bg-glass">
                       <div class="card-body px-4 py-5 px-md-5">
                         @if(isset($error)) 
                            <div class="alert alert-danger">
                                 <ul><li>{{ $error }};</li></ul>
                             </div>
                         @endif
                         @if ($errors->any())
                               <div class="alert alert-danger">
                                   <ul>
                                       @foreach ($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                       @endforeach
                                   </ul>
                               </div>
                           @endif
                           @yield('content')
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <script src="/js/app.js"></script>
   @stack('js')
