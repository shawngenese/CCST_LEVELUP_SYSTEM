<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Register - CCST LEVELUP</title>
    <style>
       * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       }
    </style>
  </head>
  <body style="width: 100%;">
        <div class="navbar px-5 py-3 bg-dark">
          <div class="nav-logo">
            <h1 class="text-light">ADMIN</h1>
          </div>
          <div class="nav-button">
            <a class="btn btn-warning">LOGOUT</a>
          </div>
        </div>
    </div>
    <div class="container-fluid d-flex m-5">
      <form class="form-group bg-light d-flex flex-column p-5 w-50 rounded" style="box-shadow: 0px 5px 10px 1px rgba(0,0,0,0.2);">
        <h2>Create Quest</h2>
        <label for="">
          Title
          <input class="form-control" type="text">
        </label>
        <label for="">
          Description
          <input class="form-control" type="text">
        </label>
        <label for="">
          XP
          <input class="form-control" type="number">
        </label>
        <button class="btn btn-info">Add Quest</button>
      </form>
    </div>
    <div class="container">
        <table class="table rounded">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>XP</th>
              <th>LEVEL</th>
              <th>BADGE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Shawn</td>
              <td>shawn@gmai.com</td>
              <td>250 XP</td>
            <td>2</td>
            <td>NEWBIE</td>
          </tr>
        </tbody>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>