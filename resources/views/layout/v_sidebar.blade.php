   <!-- Sidebar Menu -->


   
   <nav class="mt-2">


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

@if (auth()->user()->level==1)


           

   
           <li  class="nav-item" class="{{request()->is('/absensi') ?  'active' : ''}}" >
           <a href="/absensi" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             
               absensi kepegawaian
              
    
             </a>
             </li>
           
            
         <li   class="nav-item" class="{{request()->is('/cuti') ?  'active' : ''}}" >  
         <a href="/cuti" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
         
              cuti
            
  
             
            
           </a>
         </li>

         <li   class="nav-item" class="{{request()->is('/jabatan') ?  'active' : ''}}" >  
         <a href="/jabatan" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
       
              jabatan
            
   
             
            
           </a>
         </li>

         <li   class="nav-item" class="{{request()->is('/agama') ?  'active' : ''}}" >  
         <a href="/agama" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
  
             agama
            
  
             
            
           </a>
         </li>

         <li   class="nav-item" class="{{request()->is('/pegawai') ?  'active' : ''}}" >  
         <a href="/pegawai" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
   
           pegawai
            

            
           </a>
         </li>

         <li   class="nav-item" class="{{request()->is('/pegawai') ?  'active' : ''}}" >  
         <a href="/informasi" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
   
           informasi
            
   
             
            
           </a>
         </li>
          
          <li  class="nav-item" class="{{request()->is('/user') ?  'active' : ''}}"  >
          <a href="/user" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>

              user
            

             
            
           </a>
           </li>
          <li  class="nav-item" class="{{request()->is('/report') ?  'active' : ''}}" >
          
          <a href="/report" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
   
               report
            

             
            
           </a>
          
         </li>
        

     
         </li>

         <li  class="nav-item" class="{{request()->is('/logout') ?  'active' : ''}}" >
          
          <a href="/logout" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
   
               logout
            

             
            
           </a>
          
         </li>
        

     
         </li>


@else (auth()->user()->level==2)

           <li  class="nav-item" class="{{request()->is('/absensi1') ?  'active' : ''}}" >
           <a href="/absensi1" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             
               absensi kepegawaian
                </a>

                </li>

                <li  class="nav-item" class="{{request()->is('/cuti1') ?  'active' : ''}}" >
           <a href="/cuti1" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             
               cuti kepegawaian
                </a>

                </li>

             <li  class="nav-item" class="{{request()->is('/report1') ?  'active' : ''}}" >
          
          <a href="/report1" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
   
               report
            

             
            
           </a>
          
  
        
             </li>

             <li  class="nav-item" class="{{request()->is('/logout1') ?  'active' : ''}}" >
          
          <a href="/logout1" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
   
               logout
            

             
            
           </a>
          
         </li>
         
          
    @endif    
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->



   