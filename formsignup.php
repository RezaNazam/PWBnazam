<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN UP</title>
    <link href="signup.css" rel="stylesheet" />
  </head>

  <!-- Pake CSS Eksternal -->

  <body>
    <h1>Buat Account baru</h1>
    <h3>Sign up Form</h3>
    <form action="udahlogin.php" method="get">
      <label for="fname"><strong>First name:</strong></label>
      <br />
      <input type="text" id="fname" name="fname" required /><br /><br />
      <label for="lname"><strong>Last name:</strong></label>
      <br />
      <input type="text" id="lname" name="lname" required /><br /><br />

      <div class="gender-container">
        <p><strong>Gender:</strong></p>
        <label for="male">
          <input type="radio" id="male" name="Gender" value="Male" required />
          Male
        </label>
        <label for="female">
          <input type="radio" id="female" name="Gender" value="Female" required />
          Female
        </label>
        <label for="walmart-bag">
          <input type="radio" id="walmart-bag" name="Gender" value="Walmart Bag" required />
          Walmart Bag
        </label>
        <label for="croissant">
          <input type="radio" id="croissant" name="Gender" value="Croissant" required />
          Croissant </label
        ><br />
      </div>

      <p><strong>Nationality:</strong></p>
      <select id="Nationality" name="Nationality" required>
        <option value="Choose">Choose</option>
        <option value="Indo">Indonesia</option>
        <option value="mamarika">Mamarika</option>
        <option value="mamarika">Singapore</option>
        <option value="other">other</option>
      </select>

      <br /><br />

      <div class="language-container">
        <p><strong>Bahasa yang dikuasai:</strong></p>
        <label for="bahasa1">
          <input type="checkbox" id="bahasa1" name="bahasa[]" value="Indonesia" required />
          Indonesia </label
        ><br />
        <label for="bahasa2">
          <input type="checkbox" id="bahasa2" name="bahasa[]" value="Germany" />
          Germany </label
        ><br />
        <label for="bahasa3">
          <input type="checkbox" id="bahasa3" name="bahasa[]" value="Mandarin" />
          Mandarin </label
        ><br /><br />
      </div>

      <label for="bio"> <strong>Bio</strong></label>
      <br />
      <textarea name="message" rows="10" cols="30" id="bio"></textarea>
      <br /><br />

      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
