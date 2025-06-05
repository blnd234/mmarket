<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">  
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles()
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap');

   *{
      color: snow;
       font-family: "Noto Kufi Arabic", sans-serif;
       font-optical-sizing: auto;
       font-weight: 500;
       font-style: normal;
   }
   .sl{
     transition: all 0.2s; 
     padding: 10px
   }
   .sl:hover{
      background-color: #393E46 !important;
      border-radius: 5px;
   }
</style>

<body>

   <button class="btn mt-2" style="background-color: #393E46;color:snow; position: fixed; left:10px; top: 0;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars-staggered"></i></button>

   <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
      <div class="offcanvas-header bg-dark text-white">
         <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" >Backdrop with scrolling</h5>
         <button type="button" class="btn-close" style="filter: invert(1) brightness(200%);" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
      <div class="offcanvas-body bg-dark">
         <a href="./" wire:navigate class="text-decoration-none text-light">
            <div class="sl inputs d-flex align-items-center py-2">
               <i class="fa-solid fa-house fa-lg"></i>
               <p class="ms-2 mb-0">سەرەکی</p>
            </div>
         </a>

         <a href="./sell" wire:navigate class="text-decoration-none text-light">
            <div class="sl inputs d-flex align-items-center py-2">
               <i class="fa-brands fa-sellsy fa-lg"></i>
               <p class="ms-2 mb-0">فڕۆشراوەکان</p>
            </div>
         </a>
      </div>
   </div>

   @yield('welcome')
   @yield('sell')

    @livewireScripts()
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
