<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="placement.css">
</head>
<body>
    <div class = "placement">
        <!-- heading of placemnet prepation--> 
        <div class = "navbar" id = "header">
          <ul>
            <li>
              <h1><a href = ""> Placment Prepation from YouTube </a></h1>
            </li>
          </ul>
        </div>
      </div>
  
    <div class=" container">
    <form class="form"  method="post" action="index.php">
      <div class="row">
        <div class="col-25">
          <label for="name">Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="name" placeholder="Your name.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email" placeholder="Your email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="feedback">Your Feedback</label>
        </div>
        <div class="col-75">
          <select id="feedback" name="feedback">
            <option value="Good">Good</option>
            <option value="Average">Average</option>
            <option value="bad">Bad</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="suggestion">Give your Suggestions</label>
        </div>
        <div class="col-75">
          <textarea id="suggestion" name="suggestion" placeholder="Write something.." style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>

  <footer class="container footer my-auto">
    <p><center><h4>Designed By Shefali 😍</h4></center></p>
    </footer>
  
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script

  </body>
  </html>