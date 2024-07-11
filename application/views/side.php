<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Page MAULANA</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }
  #sidebar {
    background-color: #555;
    color: white;
    width: 200px;
    height: 100vh;
    padding: 20px;
    position: fixed;
    height: calc(100% - 40px);
  }
  ul {
    list-style-type: none; 
    padding: 0;
  }
  li {
    margin-bottom: 10px; 
    display: flex;
    align-items: center;
  }
  .bi {
    margin-right: 10px;
  }
</style>
</head>
<body>
  <div id="sidebar">
    <ul>
      <li><i class="bi bi-house"></i> Dashboard</li>
      <li><i class="bi bi-card-checklist"></i> Administration</li>
      <li><i class="bi bi-box-arrow-in-left"></i> Logout</li>
    </ul>
  </div>
</body>
</html>
