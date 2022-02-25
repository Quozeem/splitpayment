<!DOCTYPE html>
<html>
  <head>
    <base target="_top">
    <img src="https://www.artusmode.com/wp-     content/uploads/2014/06/geotabC7EC4363A3736759998B3CE5.jpg" alt="Geotab Logo" style="width:250px; height:75px; position: relative; bottom: 9px; left: 70px;">
  </head>
  <body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ssl.gstatic.com/docs/script/css/add-ons1.css">
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/cupertino/jquery-ui.css">

<script>
//When the metadata has been successfully saved as document properties
//  close the metadata form panel

function onSave() {google.script.host.close()}
</script>

<div>
Department ID: <select id = "drop" style="margin-bottom: 0.25cm;">
  <option value="#001">#001---Law</option>
  <option value="#002">#002---Sales</option>
  <option value="#003">#003---Tech</option>
</select>
<input
  type="button"
  style="position:relative; left:60px;"
  id="set_dep"
   value="Set Department"
   onclick="     google.script.run.description(document.getElementById('drop').value)"
  />
</div>

<div style="overflow: hidden; padding-right: .5em;">
Date:<input type="text" id = "date" style="margin-left: 60px; margin-bottom: 0.25cm;"/>
 <input
  type="button"
  id="set_date"
  value="Set Date"
  onclick="   google.script.run.submitDates(document.getElementById('date').value)"
  />
</div>

<div>
Additional Tag: <input type="text" id="metadata" style="overflow: hidden;  padding-right: .5em; margin-bottom: 0.25cm;" onkeydown="if(event.keyCode == 13) document.getElementById('set_tag').click();"/>
<input
    type="button"
    id="set_tag"
    value="Set Tag"
     onclick="google.script.run.submitDates(document.getElementById('metadata').value    ); clearFields();"
    />

  <input
    type="button"
    value="Close"
    onclick="google.script.host.close()"
   />
  <input
  type="button"
  value="Clear"
  onclick="google.script.run.clear()"
  />

 </div>

<script type="text/javascript">
function clearFields() {
    document.getElementById("metadata").value="";
}
</script>

<script>
    $("#date").datepicker({
     showWeek: true,
     firstDay: 0,
     });
</script>

  </body>
</html> 