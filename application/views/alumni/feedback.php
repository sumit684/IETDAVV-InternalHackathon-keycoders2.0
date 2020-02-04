<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="<?=base_url();?>assets/css/main.css" rel="stylesheet" media="all">
  <style type="text/css">
      .questions {
        size: 20px;
        font-family: sans-serif;


    }
</style>
</head>
<body>

    <div class="container-fluid" style="background-image: url(<?=base_url();?>assets/img/happy.jpg); background-repeat: no-repeat; background-size: 100%; background-attachment: fixed; height: 100%;">
        <br>
        <br>
        <div class="container card card-body">
          <h2>Lets check your sentinments..</h2>
          <p>Answer these questions:</p>
          <br>
          <form method="POST" action="<?=base_url();?>/alumni/give_feedback">
            <div class="form-group">
              <label class="questions" for="q1">On a scale of 1 to 10, how happy are you at work?</label>
              <div>
              <textarea rows="3" cols="100">
            </textarea>
            </div>
              <!--  <div class="d-flex justify-content-center my-4">
                  <span class="font-weight-bold blue-text mr-2 mt-1">0</span>
                  <form class="range-field w-25">
                    <input class="border-0" type="range" min="0" max="10" name="q7" />
                </form>
                <span class="font-weight-bold blue-text ml-2 mt-1">10</span>
            </div> -->
        </div>

        <div class="form-group">
          <label class="questions" for="q2"> Do you feel like you have opportunities for growth and advancement?</label>
          <div>
            <textarea rows="3" cols="100"></textarea>
             <!--  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
                <input type="radio" name="q2" checked>YES
            </label>
            <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
              <input type="radio" name="q2">NO
          </label>
          <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
              <input type="radio" name="q2">MAYBE
          </label> -->
      </div>
  </div>

  <div class="form-group">
      <label class="questions" for="q3">How well does your team work together?</label>
      <div>
         <!--  <label class="radio-inline" style="padding-left: 5%; padding-right: 5%;">
            <input type="radio" name="q3" checked>Very Well
        </label>
        <label class="radio-inline" style="padding-left: 5%; padding-right: 5%;">
          <input type="radio" name="q3">Fairly Well
      </label>
      <label class="radio-inline" style="padding-left: 5%; padding-right: 5%;">
          <input type="radio" name="q3">Slightly Well
      </label>
      <label class="radio-inline" style="padding-left: 5%; padding-right: 5%;">
          <input type="radio" name="q3">Not Well
      </label> -->
      <textarea rows="3" cols="100"></textarea>
  </div>
</div>

<div class="form-group">
  <label class="questions" for="q4">Are you satisfied by the level of support offered by your co-workers?</label>
  <div>
     <!--  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
        <input type="radio" name="q2" checked>YES
    </label>
    <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q2">NO
  </label>
  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q2">MAYBE
  </label> -->
  <textarea rows="3" cols="100"></textarea>
</div>
</div>

<div class="form-group">
  <label class="questions" for="q5"> Does your team help you to complete your work?</label>
  <div>
     <!--  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
        <input type="radio" name="q5" checked>Always
    </label>
    <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q5">Sometimes
  </label>
  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q5">No
  </label> -->
  <textarea rows="3" cols="100"></textarea>
</div>
</div>
<div class="form-group">
  <label class="questions" for="q6"> Are you satisfied with your compensation and benefits?</label>
  <div>
     <!--  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
        <input type="radio" name="q6" checked>Yes
    </label>
    <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q6">Not Entirely
  </label>
  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q6">Not at all
  </label> -->
  <textarea rows="3" cols="100"></textarea>
</div>
</div>

<div class="form-group">
  <label class="questions" for="q7">On a scale of 1 to 10, how would you rate your work-life balance?</label>
 <!--  <div class="d-flex justify-content-center my-4">
      <span class="font-weight-bold blue-text mr-2 mt-1">0</span>
      <form class="range-field w-25">
        <input class="border-0" type="range" min="0" max="10" name="q7" />
    </form>
    <span class="font-weight-bold blue-text ml-2 mt-1">10</span>
</div> -->
<div>
    <textarea rows="3" cols="100"></textarea>
</div>
</div>

<div class="form-group">
  <label class="questions" for="q8">Have you accomplished your goals in the last six months? </label>
  <div>
      <!-- <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
        <input type="radio" name="q8" checked>Yes
    </label>
    <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q8">No
  </label>
  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q8">Still doing
  </label> -->
  <textarea rows="3" cols="100"></textarea>
</div>
</div>

<div class="form-group">
  <label class="questions" for="q9"> How strongly do you feel valued at work?</label>
  <div>
     <!--  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
        <input type="radio" name="q9" checked>Very Much
    </label>
    <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q9">Normal
  </label>
  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q9">Not at all
  </label> -->
  <textarea rows="3" cols="100"></textarea>
</div>
</div>

<div class="form-group">
  <label class="questions" for="q10">How frequently do you receive recognition from your manager?</label>
  <div>
      <!-- <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
        <input type="radio" name="q10" checked>Very Frequently
    </label>
    <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q10">Regularly
  </label>
  <label class="radio-inline" style="padding-left: 10%; padding-right: 10%;">
      <input type="radio" name="q10">Not at all
  </label> -->
  <textarea rows="3" cols="100"></textarea>
</div>
</div>
<br><br>
      <!-- <div class="form-group form-check">
          <label class="form-check-label">
             I agree on blabla.<input class="form-check-input" type="checkbox" name="remember" required>
        </label>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>