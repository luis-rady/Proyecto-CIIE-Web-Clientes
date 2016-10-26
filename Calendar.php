<html>
    <head>
    	<title>Calendar</title>

		<!-- CSS -->
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/css/bootstrap-combined.min.css" rel="stylesheet" />
		<link href="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.css" rel="stylesheet" />
		<link href="http://arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.print.css" rel="stylesheet" />
    <link href="Calendar.css" rel="stylesheet" />
		<!-- SCRIPTS -->
        <script src='http://fullcalendar.io/js/fullcalendar-2.2.3/fullcalendar.min.js'></script>
    <script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js" type="text/javascript"></script>
		<script class="cssdesk" src="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div class="container">
			<h1>Date</h1>

			<div id='calendar'></div>
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
