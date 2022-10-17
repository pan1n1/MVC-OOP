<main>
<?php echo $data["title"]; ?>
<style>
  main {
    margin: 0 auto;
    width: 80%;
  }

  table{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
  }

  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }

  td, th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2;}

  tr:hover {background-color: #ddd;}

</style>

<a href="<?=URLROOT?>/RichestPeople/create">Nieuw record</a>

<p><button onclick="sortTable()">Sort</button></p>
<table id='table'>
  <thead>
    <th>id</th>
    <th>Naam</th>
    <th>Vermogen</th>
    <th>Leeftijd</th><!-- oi hoe gaat ie schat-->
    <th>Bedrijf</th>
    <th>Update</th>
    <th>Delete</th>
  </thead>
  <tbody><!-- called from controllers -->
    <?=$data['RichestPeople']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>
</main>




<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("table");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>