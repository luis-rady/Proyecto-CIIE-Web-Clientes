<html>
    <head>
    	<title>Calendar</title>

		<!-- CSS -->
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/css/bootstrap-combined.min.css" rel="stylesheet" />
		<link href="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.css" rel="stylesheet" />
		<link href="http://arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.print.css" rel="stylesheet" />
    <link href="Calendar.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<!-- SCRIPTS -->
    <script src='http://fullcalendar.io/js/fullcalendar-2.2.3/fullcalendar.min.js'></script>
    <script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div class="w3-display-container w3-red w3-padding-16">
			<h1>Calendar</h1>
      <a href="Home.php" class="w3-btn w3-hover-white w3-display-topleft w3-margin">Back to Home</a>

			<div class="w3-container w3-padding-16 w3-white w3-border w3-margin-left w3-margin-right">
        <div id='calendar'></div>

      </div>
		</div>

    <script>
    $(function () {
      var date = new Date();
      var y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title'
        },
        dayClick: function() {
        alert('a day has been clicked!'); },
        editable: true
      });
    });
    </script>


  </body>
</html>
