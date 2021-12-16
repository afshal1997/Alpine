<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="assets/js/customScript.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
//     $(document).ready(function(){
  
//   $(function () {
// 	$('.startDate').datepicker({
//   format: 'dd/mm/yyyy' 
//   });
//   });
	
  
// });
const selectElement = document.querySelector('.startDate');

selectElement.onkeypress = function(event){
    if(event.target.value.length===2){
        event.target.value=event.target.value+'/'
    }
    if(event.target.value.length===5){
        event.target.value=event.target.value+' '
    }
};
</script>