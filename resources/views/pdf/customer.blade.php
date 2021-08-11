
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="content-type" content="text-html; charset=utf-8">
	<style type="text/css">
	
	
	    
        
	
	
		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed,
		figure, figcaption, footer, header, hgroup,
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font: inherit;
			font-size: 100%;
			vertical-align: baseline;
		}

		html {
			line-height: 1;
		}

		ol, ul {
			list-style: none;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		caption, th, td {
			text-align: left;
			font-weight: normal;
			vertical-align: middle;
		}

		q, blockquote {
			quotes: none;
		}
		q:before, q:after, blockquote:before, blockquote:after {
			content: "";
			content: none;
		}

		a img {
			border: none;
		}

		article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
			display: block;
		}


		body  {
      font-family: DejaVu Sans, sans-serif;
			font-weight: 300;
			font-size: 6.5px;
			margin: 0;
			padding: 0;
		}
		body a {
			text-decoration: none;
			color: inherit;
		}
		body a:hover {
			color: inherit;
			opacity: 0.7;
		}
		body .container {
			min-width: 500px;
			margin: 0 auto;
			padding: 0 20px;
		}
		body .clearfix:after {
			content: "";
			display: table;
			clear: both;
		}
		body .left {
			float: left;
		}
		body .right {
			float: right;
		}
		body .helper {
			display: inline-block;
			height: 100%;
			vertical-align: middle;
		}
		body .no-break {
			page-break-inside: avoid;
		}

		header {
			margin-top: 20px;
			margin-bottom: 50px;
		}
		header figure {
			float: left;
			width: 60px;
			height: 60px;
			margin-right: 10px;
			background-color: #8BC34A;
			border-radius: 50%;
			text-align: center;
		}
		header figure img {
			margin-top: 13px;
		}
		header .company-address {
			float: left;
			max-width: 150px;
			line-height: 1.7em;
		}
		header .company-address .title {
			color: #8BC34A;
			font-weight: 400;
			font-size: 1.5em;
			text-transform: uppercase;
		}
		header .company-contact {
			float: right;
			height: 60px;
			padding: 0 10px;
			background-color: #8BC34A;
			color: white;
		}
		header .company-contact span {
			display: inline-block;
			vertical-align: middle;
		}
		header .company-contact .circle {
			width: 20px;
			height: 20px;
			background-color: white;
			border-radius: 50%;
			text-align: center;
		}
		header .company-contact .circle img {
			vertical-align: middle;
		}
		header .company-contact .phone {
			height: 100%;
			margin-right: 20px;
		}
		header .company-contact .email {
			height: 100%;
			min-width: 100px;
			text-align: right;
		}

		section .details {
			margin-bottom: 100px;
		}
		section .details .client {
			width: 100%;
			line-height: 20px;
		}
		section .details .client .name {
			color: #8BC34A;
		}
		section .details .data {
			width: 100%;
			text-align: right;
		}
		section .details .title {
			margin-bottom: 10px;
			color: #8BC34A;
			font-size: 3em;
			font-weight: 400;
			text-transform: uppercase;
		}
		section table {
			width: 100%;
			border-collapse: collapse;
			border-spacing: 0;
			font-size: 0.9166em;
		}
		section table .qty, section table .unit, section table .total {
			width: 15%;
		}
		section table .desc {
			width: 55%;
		}
		section table thead {
			display: table-header-group;
			vertical-align: middle;
			border-color: inherit;
		}
		section table thead th {
			padding: 5px 10px;
			background: #8BC34A;
			border-bottom: 5px solid #FFFFFF;
			border-right: 4px solid #FFFFFF;
			text-align: right;
			color: white;
			font-weight: 400;
			text-transform: uppercase;
		}
		section table thead th:last-child {
			border-right: none;
		}
		section table thead .desc {
			text-align: left;
		}
		section table thead .qty {
			text-align: center;
		}
		section table tbody td {
			padding: 10px;
			background: #E8F3DB;
			color: #777777;
			text-align: right;
			border-bottom: 5px solid #FFFFFF;
			border-right: 4px solid #E8F3DB;
		}
		section table tbody td:last-child {
			border-right: none;
		}
		section table tbody h3 {
			margin-bottom: 5px;
			color: #8BC34A;
			font-weight: 600;
		}
		section table tbody .desc {
			text-align: left;
		}
		section table tbody .qty {
			text-align: center;
		}
		section table.grand-total {
			margin-bottom: 45px;
		}
		section table.grand-total td {
			padding: 5px 10px;
			border: none;
			color: #777777;
			text-align: right;
		}
		section table.grand-total .desc {
			background-color: transparent;
		}
		section table.grand-total tr:last-child td {
			font-weight: 600;
			color: #8BC34A;
			font-size: 1.18181818181818em;
		}

		footer {
			margin-bottom: 20px;
		}
		footer .thanks {
			margin-bottom: 40px;
			color: #8BC34A;
			font-size: 1.16666666666667em;
			font-weight: 600;
		}
		footer .notice {
			margin-bottom: 25px;
		}
		footer .end {
			padding-top: 5px;
			border-top: 2px solid #8BC34A;
			text-align: center;
		}
	</style>
</head>

<body>
	<header class="clearfix">
		<div class="container">
			<figure>
				<img class="logo" src="data:image/svg+xml;charset=utf-8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjM5cHgiIGhlaWdodD0iMzFweCIgdmlld0JveD0iMCAwIDM5IDMxIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDwhLS0gR2VuZXJhdG9yOiBTa2V0Y2ggMy40LjEgKDE1NjgxKSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5ob21lNDwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPgogICAgICAgIDxnIGlkPSJJTlZPSUNFLTEiIHNrZXRjaDp0eXBlPSJNU0FydGJvYXJkR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC00Mi4wMDAwMDAsIC00NS4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIj4KICAgICAgICAgICAgPGcgaWQ9IlpBR0xBVkxKRSIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzAuMDAwMDAwLCAxNS4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJob21lNCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIuMDAwMDAwLCAzMC4wMDAwMDApIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj4KICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMzguMjc5MzM1LDE0LjAzOTk1MiBMMzIuMzc5MDM3OCw5LjAxMjMzODM1IEwzMi4zNzkwMzc4LDMuMjA0MzM2NzQgQzMyLjM3OTAzNzgsMi4xNTQ0MTY1MyAzMS4zODA1NTkyLDEuMzAzMjk3MjggMzAuMTQ2MDE3NiwxLjMwMzI5NzI4IEMyOC45MTQ2MTk2LDEuMzAzMjk3MjggMjcuOTE2MTQxMSwyLjE1NDQxNjUzIDI3LjkxNjE0MTEsMy4yMDQzMzY3NCBMMjcuOTE2MTQxMSw1LjIwOTMzODY1IEwyMy41MjI2OTc3LDEuNDY1NzY5OTggQzIxLjM1MDM4NzksLTAuMzgzODc0MjAyIDE3LjU3MzY3NTEsLTAuMzgwNjA5NjggMTUuNDA2NjcsMS40NjkwMzQ1IEwwLjY1MzA3ODA4NiwxNC4wMzk5NTIgQy0wLjIxNzU5NDQ1OCwxNC43ODM1MDk1IC0wLjIxNzU5NDQ1OCwxNS45ODY3Nzg1IDAuNjUzMDc4MDg2LDE2LjcyODk5NjYgQzEuNTI0NjM0NzYsMTcuNDcyNTU0MSAyLjkzOTQ0MDgxLDE3LjQ3MjU1NDEgMy44MTAxMTMzNSwxNi43Mjg5OTY2IEwxOC41NjIxMzM1LDQuMTU4MDc5MTUgQzE5LjA0MzAwMjUsMy43NTA2ODM2NSAxOS44ODk5MDE4LDMuNzUwNjgzNjUgMjAuMzY4MDIwMiw0LjE1NjgyMzU2IEwzNS4xMjIyOTk3LDE2LjcyODk5NjYgQzM1LjU2MDE0MTEsMTcuMTAwNzMzNSAzNi4xMzA0MDU1LDE3LjI4NTgwNjcgMzYuNzAwNjcsMTcuMjg1ODA2NyBDMzcuMjcyMDE1MSwxNy4yODU4MDY3IDM3Ljg0MzQ1ODQsMTcuMTAwNzMzNSAzOC4yNzk3MjgsMTYuNzI4OTk2NiBDMzkuMTUwNzkzNSwxNS45ODY3Nzg1IDM5LjE1MDc5MzUsMTQuNzgzNTA5NSAzOC4yNzkzMzUsMTQuMDM5OTUyIEwzOC4yNzkzMzUsMTQuMDM5OTUyIFoiIGlkPSJGaWxsLTEiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMjAuMjQxMzkyOSw3Ljc2Njk2NTM5IEMxOS44MTI3ODU5LDcuNDAyMDA4NjcgMTkuMTE4OTM5NSw3LjQwMjAwODY3IDE4LjY5MTUxMTMsNy43NjY5NjUzOSBMNS43MTQyMzY3OCwxOC44MjEzMDM2IEM1LjUwOTMxNDg2LDE4Ljk5NTU3ODggNS4zOTMzOTU0NywxOS4yMzM5NzI1IDUuMzkzMzk1NDcsMTkuNDgyNDEwOSBMNS4zOTMzOTU0NywyNy41NDUzNTk2IEM1LjM5MzM5NTQ3LDI5LjQzNzE5MTQgNy4xOTM1ODQzOCwzMC45NzEwMTQxIDkuNDEzODMzNzUsMzAuOTcxMDE0MSBMMTUuODM4NzE1NCwzMC45NzEwMTQxIEwxNS44Mzg3MTU0LDIyLjQ5MjU1MDUgTDIzLjA5MjUxODksMjIuNDkyNTUwNSBMMjMuMDkyNTE4OSwzMC45NzEwMTQxIEwyOS41MTc4OTE3LDMwLjk3MTAxNDEgQzMxLjczODE0MTEsMzAuOTcxMDE0MSAzMy41MzgyMzE3LDI5LjQzNzE5MTQgMzMuNTM4MjMxNywyNy41NDUzNTk2IEwzMy41MzgyMzE3LDE5LjQ4MjQxMDkgQzMzLjUzODIzMTcsMTkuMjMzOTcyNSAzMy40MjMwOTgyLDE4Ljk5NTU3ODggMzMuMjE3NDg4NywxOC44MjEzMDM2IEwyMC4yNDEzOTI5LDcuNzY2OTY1MzkgWiIgaWQ9IkZpbGwtMyI+PC9wYXRoPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" alt="">
			</figure>
            	<section>
				<div class="container">
			<div class="details clearfix">
		<div class="data right">
			<div class="data right">
					<div class="title">صحيفة الاحرار</div>
				
		</div>
   
     </div>
		</div>
        	</section>
	
	</header>
	 @foreach($topic as $data)

	<section>
	
	
	
		<div class="container">
			<div class="details clearfix">
				
				<div class="data right">
					<div class="title">   {{$data->t_address}}   <br><br><br> </div> 
          <div class="title">   {{$data->t_body}}    </div>
          	
				</div>
			</div>

			
            
            
            
            
            

	
  
		

	</section>

  



		@endforeach

</body>

</html>
