<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/svg+xml" href="/vite.svg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Main page that optimizes user's parties with multiple characters,
  by selecting the party format, the user can choose between st">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>POM</title>
<body>

  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
      <strong> POM </strong> | Party Optimizer
    </a>
  </nav>
  <div class="container-sm mx-4 mt-5 gap-10">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Options</label>
      </div>
      <select class="custom-select" id="inputGroupSelect01">
        <option selected="">Choose your party format </option>
        <option value="1">Final Fantasy</option>
        <option value="2">Chrono Trigger</option>
        <option value="3">Shin Megami Tensei: Persona</option>
      </select>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col align-self-center text-center p-2 text-white bg-primary mt-4 mx-4 gap-10">
        Insert Party Data
      </div>
      <div class="col align-self-center text-center p-2 text-white bg-success mt-4 mx-4 gap-10">
         Party Data Optimized
      </div>
    </div>
    <div class="row">
      <div class="col align-self-center text-left p-3 text-black bg-light mx-4">
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(238, 109, 109);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text" id = "textStr" placeholder="Fill the value">Strength (STR)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(238, 229, 109);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text" id = "textDef" placeholder="Fill the value">Defense (DEF)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(109, 118, 238); -webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text" id = "textMag" placeholder="Fill the value">Magic (MAG)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(169, 109, 238);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text" id = "textSpi" placeholder="Fill the value">Spirit (SPI)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(109, 238, 109);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text" id = "textSpd" placeholder="Fill the value">Speed (SPD)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(109, 238, 184);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text" id = "textLuk" placeholder="Fill the value">Luck (LUK)</label>
        </p>
        <button id="submitButton" class="btn btn-dark"> Confirm</button>
        <script>
          document.getElementById('submitButton').addEventListener('click', function() {
            const textStr = document.getElementById('textStr').value;
            const textDef = document.getElementById('textDef').value;
            const textMag = document.getElementById('textMag').value;
            const textSpi = document.getElementById('textSpi').value;
            const textSpd = document.getElementById('textSpd').value;
            const textLuk = document.getElementById('textLuk').value;

            const data = new FormData();
            data.append('textStr', textStr);
            data.append('textDef', textDef);
            data.append('textMag', textMag);
            data.append('textSpi', textSpi);
            data.append('textSpd', textSpd);
            data.append('textLuk', textLuk);
            textStr
            sendData(data);
          });
        
          function sendData(data) {
            fetch('http://localhost:8000/index.php', {
              method: 'POST',
              body: data
            })
            .then(response => response.text())
            .then(result => {
              console.log(result); // Handle the server response
            })
            .catch(error => {
              console.error(error); // Handle any errors
            });
          }
        </script>        
      </div>

      <div class="col align-self-center text-left p-3 text-black bg-light mx-4">
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(238, 109, 109);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text">Strength (STR)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(238, 229, 109);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text">Defense (DEF)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(109, 118, 238); -webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text">Magic (MAG)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(169, 109, 238);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text">Spirit (SPI)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(109, 238, 109);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text">Speed (SPD)</label>
        </p>
        <p>
          <span id="boot-icon" class="bi bi-circle-fill" style="font-size: 18px; color: rgb(109, 238, 184);-webkit-text-stroke: 4px rgb(76, 76, 85);"></span>
          <label><input class="input-group-sm mx-2" type="text">Luck (LUK)</label>
        </p>
        <button class="btn btn-danger text-light"> Clear</button>
      </div>
    </div>
  </div>
</body>
</html>