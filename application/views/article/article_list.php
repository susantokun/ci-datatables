<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Tutorial DataTables CodeIgniter | SUSANTOKUN</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/vendor/semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<style media="screen">
  .ui.center.header {
    padding-top: 50px;
  }

</style>

<body>
  <h1 class="ui center aligned header">Tutorial DataTables CodeIgniter | SUSANTOKUN</h1>

  <div class="ui container">
    <table class="ui celled table" style="width:100%" id="table_id">
      <thead>
        <tr>
          <th colspan="3">
            <h4>Data Articles</h4>
          </th>
        </tr>
        <tr>
          <th style="text-align:center">No</th>
          <th>Title</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
        foreach ($articles as $row): ?>
        <tr>
          <td style="text-align:center">
            <?=$no++?>
          </td>
          <td>
            <?=$row->title?>
          </td>
          <td>
            <?=$row->description?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script type="text/javascript" src="<?=base_url('assets')?>/vendor/semantic/dist/semantic.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('#table_id').DataTable({
        "order": []
      });
    });

  </script>
</body>

</html>
