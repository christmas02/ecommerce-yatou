<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="{{asset('/winner/jeux/css/main.css')}}" rel="stylesheet" />
  </head>
  <body>
    <div class="s003">
      <form>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="input-select">
                <input id="search" type="text" placeholder="+ 225 00 00 00 00" />
            </div>
          </div>
          <div class="input-field second-wrap">
            <input id="search" type="text" placeholder="boris@exemple.com" />
          </div>
          <div class="input-field third-wrap">
			<input type="submit" class="btn-search" value="Participer">
          </div>
        </div>
      </form>
    </div>
    <script src="{{asset('/winner/jeux/js/extention/choices.js')}} "></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
