
<div class="container">
  <h2>Clientes Cadastrados</h2>
  <p>.....</p>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Register Data</th>
      </tr>
    </thead>
    <tbody>

      <?php
      foreach ($clientes as $cliente) {
        //echo "Nome Cliente: ".$cliente['name']." Email: ".$x['email']."</br>";
        echo "<tr>
        <td>$cliente[name]</td>
        <td>$cliente[email]</td>
        <td>$cliente[reg_date]</td>
        </tr>";
      }
      ?>

    </tbody>
  </table>
</div>
