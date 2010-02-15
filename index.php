<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>jQuery SelectSearch plugin</title>
		<style type="text/css">
			html, body, div, span, applet, object, iframe,
			h1, h2, h3, h4, h5, h6, p, blockquote, pre,
			a, abbr, acronym, address, big, cite, code,
			del, dfn, em, font, img, ins, kbd, q, s, samp,
			small, strike, strong, sub, sup, tt, var,
			dl, dt, dd, ol, ul, li,
			fieldset, form, label, legend,
			table, caption, tbody, tfoot, thead, tr, th, td {
				margin: 0;
				padding: 0;
				border: 0;
				outline: 0;
				font-weight: inherit;
				font-style: inherit;
				font-size: 100%;
				font-family: inherit;
				vertical-align: baseline;
			}
			/* remember to define focus styles! */
			:focus {
				outline: 0;
			}
			body {
				line-height: 1;
				color: black;
				background: white;
			}
			ol, ul {
				list-style: none;
			}
			/* tables still need 'cellspacing="0"' in the markup */
			table {
				border-collapse: separate;
				border-spacing: 0;
			}
			caption, th, td {
				text-align: left;
				font-weight: normal;
			}
			blockquote:before, blockquote:after,
			q:before, q:after {
				content: "";
			}
			blockquote, q {
				quotes: "" "";
			}
			
			
			
			body {
				font-family: Helvetica;
				padding: 40px;
				background: #F9F9F9;
			}
			
			h1 {
				font-size: 1.5em;
				font-weight: 700;
				border-bottom: 1px solid #ddd;
				padding: 5px;
				margin-bottom: 15px;
			}
			
			h2 {
				font-size: 1.2em;
				font-weight: 700;
				border-bottom: 1px solid #eee;
				padding: 5px;
				margin-bottom: 8px;
			}
			
			p {
				margin-bottom: 15px;
			}
			
			div {
				padding: 10px;
			}
			
			.hover {
				padding: 10px;
				border: 1px solid #ddd;
				background: #eee;
			}
			
			.message {
				background: #F5FF92;
				padding: 5px;
				display: none;
			}
			
			.hide {
				display: none;
				font-size: 0!important;
				color: #fff;
			}
			
			select {
				padding: 3px;
				margin-top: 10px;
				height: 120px;
				width: 250px;
			}
			
			label {
				display: block;
			}
			label span { display: block; }
			
		</style>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"></script>
		<script src="selectSearch.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function () {
				$('select').selectSearch();
			});
		</script>
	</head>
	<body>
		<h1>search select</h1>
		<form method="post">
			<select multiple="multiple">
<<<<<<< HEAD
				<option value="">abcdef</option>
				<option value="">abc</option>
				<option value="">abcd</option>
				<option value="">abcde</option>
				<option value="">e</option>
				<option value="">f</option>
				<option value="">g</option>
=======
				<option value="">Option (1)</option>
>>>>>>> 4caca1555559dd46f83738521d0a5e5f054ee611
				<option value="">hey hey ∆ÿ¯¯≈≈ ((//34)</option>
				<option value="">Random</option>
				<option value="">Hello World</option>
				<option value="">%&$#"!"%(</option>
				<option value="">????</option>
				<option value="">What are you doing?</option>
				<option value="">WHAT HAVE YOU DOOOONE? WHHAAAAT HAAAAVE YOUUU DOOOOONE!</option>
			</select>
			<input type="submit" name="sent" value="send" />
		</form>
	</body>
</html>
