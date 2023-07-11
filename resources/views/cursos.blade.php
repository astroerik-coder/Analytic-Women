<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Servicios</title>
  <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
  <!-- Enlace al archivo CSS de Tailwind -->
  <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
  <!--Enlace del archivo de los iconos-->
  <script src="https://kit.fontawesome.com/2655b6ac6f.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Barra de navegación -->
  @component('layouts.components.navbar')@endcomponent
  <!--Formulario de contactos-->
  <!-- Tailwind Play: https://play.tailwindcss.com/qIqvl7e7Ww  -->

  
 

<!-- ====== Cards Section Start -->

<section class="flex justify-center pt-10 lg:pt-[50px] pb-10 lg:pb-10 bg-[#d8e2dc]">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            @foreach ($servicios as $servicio)
            <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                <div class="bg-white rounded-lg overflow-hidden mb-10">
                    <img src="{{$servicio->imagen_ser}}" alt="image" class="w-full" />
                    <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                        <h3>
                            <a href="javascript:void(0)" class="font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">
                                {{$servicio->nombre_ser}}
                            </a>
                        </h3>
                        <p class="text-base text-body-color leading-relaxed mb-7">
                            {{ $servicio->descripcion_ser}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
</html>




<br><br><br><br>

<div class="gallery rounded mx-auto m-5 bg-white mt-5" style="width:1000px;">
    <div class="top flex p-2 border-b select-none">
      <div class="heading text-gray-800 w-full pl-3 font-semibold my-auto"></div>
      <div class="buttons ml-auto flex text-gray-600 mr-1">
        <svg action="prev" class="w-7 rounded-l-lg p-1 cursor-pointer border-r-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path action="prev" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        <svg action="next" class="w-7 rounded-r-lg p-1 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path action="next" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
      </div>
    </div>
    <div class="content-area w-full h-120 overflow-hidden">
      <div class="platform shadow-xl h-full flex">
        <!-- frame start -->
        @foreach ($cursos as $curso)
        <div class="each-frame border-box flex-none h-full" title="Cursos"> <!-- title shows in top -->
          <!-- this is full editable area -->
          <div class="main flex w-full p-8"> 
            <div class="sub w-4/8 my-auto">
              <img class="w-full p-8" src="{{$curso->imagen_curso}}" alt="">
            </div>
            <div class="sub w-full my-auto">
              <h1 class="text-4xl text-blue-500 font-bold md:text-5xl mb-4"> {{$curso->nombre_curso}}</h1>
              <p class="text-lg mb-4"> {{ $curso->descripcion_curso}}</p>
              <h1 class="text-4xl text-gray-700 font-bold md:text-3xl mb-4">${{ $curso->precio_curso}}</h1>
              <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-xl transition bg-gray-700 shadow-xl hover:bg-gray-600 active:bg-gray-700 focus:bg-gray-600 sm:w-max">
                 <span class="block text-white font-semibold">
                    Inscribete
                 </span>
              </button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <style>
    .platform {
      position: relative;
      transition: right 0.3s;
    }
    .body {
      background-color: white !important;
    }
  </style>
  
  <script>
    function gallery() {
      this.index = 0;
      this.load = function () {
        this.rootEl = document.querySelector(".gallery");
        this.platform = this.rootEl.querySelector(".platform");
        this.frames = this.platform.querySelectorAll(".each-frame");
        this.contentArea = this.rootEl.querySelector(".content-area");
        this.width = parseInt(this.rootEl.style.width);
        this.limit = { start: 0, end: this.frames.length - 1 };
        this.frames.forEach((each) => {
          each.style.width = this.width + "px";
        });
        this.goto(this.index);
      };
      this.set_title = function () {
        this.rootEl.querySelector(".heading").innerText = this.frames[this.index].getAttribute("title");
      };
      this.next = function () {
        if (this.index === this.limit.end) {
          this.index = this.limit.start;
        } else {
          this.index++;
        }
        this.platform.style.right = this.width * this.index + "px";
        this.set_title();
      };
      this.prev = function () {
        if (this.index === this.limit.start) {
          this.index = this.limit.end;
        } else {
          this.index--;
        }
        this.platform.style.right = this.width * this.index + "px";
        this.set_title();
      };
      this.goto = function (index) {
        this.platform.style.right = this.width * index + "px";
        this.index = index;
        this.set_title();
      };
      this.load();
    }
    var G = new gallery();
    G.rootEl.addEventListener("click", function (t) {
      var val = t.target.getAttribute("action");
      if (val == "next") {
        G.next();
      }
      if (val == "prev") {
        G.prev();
      }
      if (val == "goto") {
        let rv = t.target.getAttribute("goto");
        rv = rv == "end" ? G.limit.end : rv;
        G.goto(parseInt(rv));
      }
    });
    document.addEventListener("keyup", function (t) {
      var val = t.keyCode;
      if (val == 39) {
        G.next();
      }
      if (val == 37) {
        G.prev();
      }
    });
  
    // run G.load() if new data loaded with ajax
  </script>





                     









   


