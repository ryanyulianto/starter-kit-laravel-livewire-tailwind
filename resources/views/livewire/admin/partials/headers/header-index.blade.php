 <!--  Header Start -->
 <header class="left-0 bg-white/70 backdrop-blur-sm  lg:pl-[300px] fixed z-20  full-container w-full  text-sm  py-4">
     <div class="container w-full ">

         <!-- ========== HEADER ========== -->

         <nav class="flex items-center justify-between w-full " aria-label="Global">
             <ul class="flex items-center gap-4 icon-nav">
                 <li class="relative lg:hidden">
                     <a class="text-xl cursor-pointer icon-hover text-heading" id="headerCollapse"
                         data-hs-overlay="#application-sidebar-brand" aria-controls="application-sidebar-brand"
                         aria-label="Toggle navigation" href="javascript:void(0)">
                         <i class="relative text-gray-600 ti ti-menu-2 z-1 dark:text-accentDark-5"></i>
                     </a>
                 </li>
                 <li class="relative">
                     <div class="hs-dropdown relative inline-flex [--placement:bottom-left] sm:[--trigger:click]">
                         <div
                             class="relative inline-flex text-gray-600 hs-dropdown-toggle icon-hover dark:text-accentDark-4">
                             <i class="ti ti-bell-ringing text-xl md:text-2xl relative z-[1]"></i>
                             {{-- @if ($countNotif > 0)
                                 <div
                                     class="absolute inline-flex items-center justify-center  text-white text-[11px] font-medium  bg-blue-600 w-2 h-2 rounded-full -top-[1px] -right-[6px]">
                                 </div>
                             @endif --}}
                         </div>
                         <div class="bg-white hs-dropdown-menu transition-[opacity,margin] border border-border-1 rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max   w-[400px] hidden z-[12] relative"
                             aria-labelledby="hs-dropdown-custom-icon-trigger">
                             <div>
                                 <h3 class="px-6 py-3 text-base font-semibold text-gray-600">Notifikasi
                                 </h3>
                                 {{-- <livewire:partials.notifications /> --}}
                             </div>
                         </div>
                     </div>
                 </li>
             </ul>
             <div class="flex items-center gap-4 sm:gap-8 ">
                 {{-- <div class="flex items-center gap-4">
                     <x-admin.command />
                 </div> --}}
                 <livewire:admin.partials.headers.user-menu/>

             </div>
         </nav>

         <!-- ========== END HEADER ========== -->
     </div>
 </header>
 <!--  Header End -->
