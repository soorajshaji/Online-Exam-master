 @extends('student.master')
 @section('content')

 <style>
           .success-animation { margin:50px auto;}

.checkmark {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #4bb71b;
    stroke-miterlimit: 10;
    box-shadow: inset 0px 0px 0px #4bb71b;
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    position:relative;
    top: 5px;
    right: 5px;
   margin: 0 auto;
}
.checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 2;
    stroke-miterlimit: 10;
    stroke: #4bb71b;
    fill: #fff;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;

}

.checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {
    0%, 100% {
        transform: none;
    }

    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0px 0px 0px 30px #4bb71b;
    }
}
 </style>

 <div>
   <hr style="border-color: mediumseagreen;">

   <div class="container">
     <div class="row">
       <div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info studentDash">
         <ul class="list-unstyled mt-5">
           <li>
             <a href="{{route('studentDash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
           </li><hr style="border-color: white;">
           <li>
             <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i> EXAMS</a>
             <ul class="dropdown-menu bg-success">
               <li class="dropdown-item"><a href="{{route('examlist')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
               <li class="dropdown-item"><a href="{{route('examresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Result</a></li>
             </ul>

           </li><hr style="border-color: white;">

         </ul>
       </div>

       <div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right studentDah" style="background-color: white;" >

         <div class="mt-3">
           <p class="text-primary">Home / <span class="text-white">Dashboard</p>
           <hr>
         </div>

         <div>
           <h3 class="text-info">Exam Status</h3>
         </div><hr>

         <!--
         <table class="table table-responsive-sm table-responsive-md table-striped table-bordered">
           <thead class="table-success">
             <tr>
               <th class="text-center">Total Questions</th>
               <th class="text-center">Wrong Answer</th>
               <th class="text-center">Correct Answer</th>
               <th class="text-center">Obtained marks</th>
             </tr>
           </thead>

           <tbody>
             <td class="text-center">{{count($e->questions)}}</td>
             <td class="text-center">{{$marks}}</td>
             <td class="text-center">{{count($e->questions)-$marks}}</td>
             <td class="text-center">1x{{$marks}} = {{$marks}}</td>
           </tbody>
         </table>
       -->
            <!--<div>
               <div class="card mx-auto mb-5" style="background-color: #26a69a;">
                   <img class="card-img-top ml-5 mt-2 mx-auto" src="{{asset('icon/icon.png')}}" style="height: 100px; width: 100px;" alt="Card image cap">
                   <div class="card-body">
                     <h6 class="card-title text-uppercase text-center">Exam title: <span style="color: #e0f2f1;">{{$e->examtitle}}</span></h6>
                     <ul class="list-unstyled">
                       <li class="card-text text-center">Total Questions: {{count($e->questions)}}</li>
                       <li class="card-text text-center">Wrong Answer: {{count($e->questions)-$marks}}</li>
                       <li class="card-text text-center">Correct Answer: {{$marks}}</li>
                       <li class="card-text text-center">Obtained marks: 1x{{$marks}} = {{$marks}}</li>
                     </ul>
                   </div>
               </div>
            </div><br>-->

            <div class="success-animation">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg>
            </div>





         </div>

       </div>

     </div>
   </div>

 @endsection
