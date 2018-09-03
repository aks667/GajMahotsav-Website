
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->
<title>GajMahotsav Registration</title>
 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</head>
<body background="images/1.jpg">
    <style>
        .row {
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0px;
}
label {
    font-size: .8rem;
    color: #505050;
    font-weight:500;
}
small {
    font-size: 75%;
    color: red;
}
.input-field>label {
    color: #505050;
}
.al{
    font-size:15px;
    color:red;
}
.cal{
    font-size:12px;
}
@media only screen and (min-width: 993px){
.container {
    width: 75%;
}
}
    </style>
	<div class="container" style="min-height:500px;">
<div class="container" id="regBox">
 <div id='loadingmessage' style="display:none;align:center;margin: 0px; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(102, 102, 102); z-index: 30001; opacity: 0.8;">
<p style="position: absolute; color: White; top: 40%; left: 45%;">
             <img src='images/loader.gif'/></p></div>
	<div id="register-page" class="row">
	    
		<div class="col s12 z-depth-6 card-panel">
		    	<h4 style="text-align:center;color:#545454;">Registration Form</h4>	
	 
			<form class="register-form" onSubmit="return false;" v-on:submit="handelSubmit($event);">   
			 <p style="color:red">{{response.message}}</p>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="mdi-social-person-outline prefix"></i>
						<input id="user_name" name="name" type="text" class="validate" v-model="name" required="">
						<label for="user_name" class="center-align">Name <small>*</small></label>
					</div>
				</div>

				<div class="row margin">
					<div class="input-field col s12">
						<i class="mdi-communication-email prefix"></i>
						<input id="user_email" name="email" type="email" class="validate" v-model="email" required="">
						<label for="user_email" class="center-align">Email <small>*</small></label>
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="mdi-action-lock-outline prefix"></i>
						<input id="user_passw" name="phone" type="text" class="validate" v-model="phone" minlength="10" maxlength="10" required="">
						<label for="user_passw">Phone <small>*</small></label>
					</div>
				</div>
						 	<div class="row margin">
					<div class="input-field col s12">
						<i class="mdi-action-lock-outline prefix"></i>
						<input id="user_desig" name="desig" type="text" class="validate" v-model="type" required="">
						<label for="user_desig">I am a (Your designation) <small>*</small></label>
					</div>
				</div>
 
					<!--div class="row margin">
					<div class="input-field col s12">
						<i class="mdi-action-lock-outline prefix"></i>
					
    <select v-model="type">
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Student</option>
      <option value="2">Media person</option>
      <option value="3">Govt. Official</option>
      <option value="4">NGO</option>
      <option value="5">Others</option>
    </select>
    <label>I am a</label>
					</div>
				</div-->
		<div class="input-field col s12">
				     	<div class="row margin"><i class="mdi-communication-email prefix"></i>
				     	<label for="user_name" style="font-size:15px;">Choose Dates <small>*</small></label>
		<div v-for="(val, key) in list1">
		 <p><i class="mdi-action-lock-outline prefix"></i>
     
	<label><a class="al">Aug 12&nbsp;</a>
    <input type="radio" :checked="selected1===val" :id="val" @click="uncheck1(val)" :key="'input' + key" class="alert"  required>
    <span :for="val" :key="'label' + key"><i class="cal"> Gaja Shastra, Bala Gaja, Airavat, Gajotsva, Gajayatra, Gaja Gamini</i></span>
    </label>
    </p>
  </div>		
		 <div v-for="(val, key) in list2">
		 <p><i class="mdi-action-lock-outline prefix"></i>
     
	<label><a class="al">Aug 13&nbsp;</a>
    <input type="radio" :checked="selected2===val" :id="val" @click="uncheck2(val)" :key="'input' + key" class="alert"  required>
    <span :for="val" :key="'label' + key"><i class="cal"> Gaja Shastra, Bala Gaja, Airavat, Gajotsva, Gajayatra, Gaja
Gamini, Gaja Sutra , Gaja Dharma</i></span>
    </label>
    </p>
  </div>
   <div v-for="(val, key) in list3">
		 <p><i class="mdi-action-lock-outline prefix"></i>
     
	<label><a class="al">Aug 14&nbsp;</a>  
    <input type="radio" :checked="selected3===val" :id="val" @click="uncheck3(val)" :key="'input' + key" class="alert" required>
    <span :for="val" :key="'label' + key"><i class="cal">Gaja Shastra, Bala Gaja, Airavat, Gajotsva, Gajayatra, Gaja
Gamini, Gaja Sutra , Gaja Dharma</i></span>
    </label>
    </p>
  </div>
   <div v-for="(val, key) in list4">
		 <p><i class="mdi-action-lock-outline prefix"></i>
     
	<label><a class="al">Aug 15&nbsp;</a>	     
    <input type="radio" :checked="selected4===val" :id="val" @click="uncheck4(val)" :key="'input' + key" class="alert" required>
    <span :for="val" :key="'label' + key"><i class="cal">Gaja Shastra, Airavat, Gajotsva, Gajayatra, Gaja
Gamini, Gaja Dharma</i></span>
    </label>
    </p>
  </div>
   <div v-for="(val, key) in list5">
		 <p><i class="mdi-action-lock-outline prefix"></i>
     
	<label><a class="al">All Days</a>
    <input type="radio" :checked="selected5===val" :id="val" @click="uncheck5(val)" :key="'input' + key"  required>
    <span :for="val" :key="'label' + key">All Days</span>
    </label>
    </p>
  </div>
  </div></div>
		 <p style="color:red">{{response.message}}</p>			
				<div class="row">
					<div class="input-field col s12">
						<button type="submit" class="btn waves-effect waves-light col s12">Register Now</button>
					</div>
				
				</div>
			</form>
		</div>
	</div>
		
		  <p class="copyright-text" style="padding-left:250px;">Designed & Maintained By <a href="http://www.leopardtechlabs.com"> Leopard Tech Labs</a></p>
		
</div>	
</div>
<script>

window.onload = function(){
document.querySelectorAll("INPUT[type='radio']").forEach(function(rd){rd.addEventListener("mousedown",
	function(){
		if (this.checked) {this.onclick=function(){this.checked=false}} else{this.onclick=null}
	})})}

regBox = new Vue({
el: "#regBox",
  data: {
   name : '',
   email: '',
   phone: '',
   persons: 'media',
   date: '',
   count:'',
   counts: '',
   type: '',
   response:{
       message : ''
   },
    list1: ['yes'],
    selected1: 'no',
    list2: ['yes'],
    selected2: 'no',
    list3: ['yes'],
    selected3: 'no',
    list4: ['yes'],
    selected4: 'no',
    list5: ['yes'],
    selected5: 'no',
  },
  mounted: function () {
			var vm = this;

			$.ajax({
				url: "count.php",
				method: "GET",
				dataType: "JSON",
				success: function (e) {
					if (e.status) {
					    vm.count = e.count;
					    vm.counts = e.counts;
					    console.log(vm.count);
					}
				}
			});
  },
  methods: {
       uncheck2: function (val) {
      if (val === this.selected2) {
        this.selected2 = 'no'
      } else {
        this.selected2 = val
      }
    },
       uncheck1: function (val) {
      if (val === this.selected1) {
        this.selected1 = 'no'
      } else {
        this.selected1 = val
       
      }
    },
     uncheck3: function (val) {
      if (val === this.selected3) {
        this.selected3 = 'no'
      } else {
        this.selected3 = val
      }
    },
     uncheck4: function (val) {
      if (val === this.selected4) {
        this.selected4 = 'no'
      } else {
        this.selected4 = val
        
      }
    },
     uncheck5: function (val) {
      if (val === this.selected5) {
        this.selected5 = 'no',
        $(".alert").attr('disabled', false);
      } else {
        this.selected5 = val,
        this.selected1 = 'no',
        this.selected2 = 'no',
        this.selected3 = 'no',
        this.selected4 = 'no',
         $(".alert").attr('disabled', true);
      }
    },
     handelSubmit: function(e) {
        
           var vm = this;
           data = {};
           data['name'] = this.name;
           data['email'] = this.email;
           data['phone'] = this.phone;
           data['day1'] = this.selected1;
           data['day2'] = this.selected2;
           data['day3'] = this.selected3;
           data['day4'] = this.selected4;
           data['all'] = this.selected5;
           data['type'] = this.type;
            $('#loadingmessage').show(); 
            $.ajax({
              url: 'reg.php',
              data: data,
              type: "POST",
              dataType: 'json',
              success: function(e) {
                  $('#loadingmessage').hide();
              if(e.status === true){
          
            window.location.href = "confirm.php";
             }
              else {
               vm.response = e;
                console.log(vm.response);
                alert("Failed");
                
              }
          }
            });
            return false;
},


},
});

</script>
</body></html>

 