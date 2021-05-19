<select name="cars" id="cars">
  <option value="3">3 Stands</option>
  <option value="4">4 Stands</option>
  <option value="5">5 Stands</option>
  <option value="6">6 Stands</option>
  <option value="7">7 Stands</option>
  <option value="8">8 Stands</option>
  <option value="9">9 Stands</option>
  <option value="10">10 Stands</option>
  <option value="11">11 Stands</option>
  <option value="12">12 Stands</option>
  <option value="13">13 Stands</option>
  <option value="14">14 Stands</option>
  <option value="15">15 Stands</option>
  <option value="16">16 Stands</option>
  <option value="17">17 Stands</option>
  <option value="18">18 Stands</option>
  <option value="19">19 Stands</option>
  <option value="20">20 Stands</option>
</select>

<button type="button" onclick="seeHall();">See Hall</button> 

<script>
function seeHall(){
    var e = document.getElementById("cars");
    window.location.href = "/exhibition/layouts/"+e.value;
}
</script>