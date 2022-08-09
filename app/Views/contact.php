
<link rel="stylesheet" href="<?=base_url()?>/resources/css/style.css">

 <div class="container">
 <!---heading---->
  <header class="heading"> Contact Us</header><hr></hr>
  <!---Form starting----> 
  <div class="row ">
    <div>
      <?= \Config\Services::validation()->listErrors(); ?>
    </div>

  <form action="<?=base_url()?>/contact/create" method="post" accept-charset="utf-8">
   <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4">
                     <label class="firstname">First Name :</label> </div>
             <div class="col-xs-8">
                 <input type="text" name="name_of_contact" id="fname" placeholder="Enter your First Name" class="form-control ">
             </div>
          </div>
     </div>
    
     <!-----For email---->
     <div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4">
                 <label class="mail" >Email :</label></div>
           <div class="col-xs-8"  >  
                <input type="email" name="email"  id="email"placeholder="Enter your email" class="form-control" >
             </div>
         </div>
     </div>

     <div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4">
                 <label class="mail" >Message :</label></div>
           <div class="col-xs-8">  
            <textarea name="message" class="form-control"></textarea>
             </div>
         </div>
     </div>
      <div class="col-sm-12">
         <div class ="row">
         <div class="col-sm-12">
             <button type="submit" id="send_form" class="btn btn-warning">Submit</button>
       </div>
     </div>
    </div>  

    </form>
      
         
     
</div>