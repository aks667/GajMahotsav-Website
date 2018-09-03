<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<title>Gaja Sutra Registration Form</title>
</head>
<div id="regBox" style="padding-top:50px;">
<body class="wide">
<font color="red">&emsp;&emsp;&emsp;TOTAL COUNT : {{counts}} &emsp;&emsp;&emsp;</font> <font color="blue">VERIFIED : {{count}}</font> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl. No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Day1</th>
      <th scope="col">Day2</th>
      <th scope="col">Day3</th>
      <th scope="col">Day4</th>
      <th scope="col">All Days</th>
      <th scope="col">Type</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(da,index) in data">
<td>{{index+1}}</td>
<td>{{da.name}}</td>
<td><i>{{da.email}}</i></td>
<td>{{da.phone}}</td>
<td><i>{{da.day1}}</i></td>
<td><i>{{da.day2}}</i></td>
<td><i>{{da.day3}}</i></td>
<td><i>{{da.day4}}</i></td>
<td><i>{{da.alldays}}</i></td>
<td>{{da.type}}</td>
<td><h6>{{da.confirm}}</h6></td>
    </tr>
  </tbody>
</table>
<button onclick="myFunction()" class="btn btn-danger">Print this page</button>
</div>
<script>
function myFunction() {
    window.print();
}
</script>
<script>
regBox = new Vue({
el: "#regBox",
  data: {
    data:[],
    count: '',
    counts: '',
  },
  mounted: function () {
			var vm = this;

			$.ajax({
				url: "display.php",
				method: "GET",
				dataType: "JSON",
				success: function (e) {
					if (e.status) {
					    vm.data = e.data;
					    console.log(vm.data);
					    setTimeout(function(){
   window.location.reload(1);
}, 200000);
					}
				}
			});
				$.ajax({
				url: "count.php",
				method: "GET",
				dataType: "JSON",
				success: function (e) {
					if (e.status) {
					    vm.count = e.count;
					    vm.counts = e.counts;
					    console.log(vm.data);
	
					}
				}
			});
  },
});

</script>

</body>
</html>
