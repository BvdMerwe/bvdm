<!DOCTYPE HTML>
<html>
	<head>
		<title>Bernardus van der Merwe - Web designer</title>
		<style type="text/css">
			body{
                font-family: Verdana, MS Sans Serif; 
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-color: #666666;
            }
			table{
                color: white;
                font-size: 12pt;
                max-width: 800px;
            }
			a:link{
                color: #c9c9c9;
                text-decoration: none;
            }
			a:visited{
                color: #c9c9c9;
            }
			a:active{
                color: #c9c9c9;
                text-decoration: underline;
            }
			a:hover{
                color: #c9c9c9;
                text-decoration: underline;
            }
            #bottom{
                position: relative;
                max-width: 800px;
                min-width: 800px;
                text-align: center;
                margin: 0 auto;
                font-size: 10pt;
                color: #c9c9c9;
            }
		</style>
        <meta name="description" content="Bernard van der Merwe is a student at the University of Pretoria, South Africa, and is currently busy completing a degree in Multimedia.">
        <meta name="keywords" content="Bernard van der Merwe, Bernardus, contact page, Web designer, South Africa">
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
		
	<body background="camera.png" >
		<!--Bernard van der Merwe 12057232-->
		
		<center><table border=0 cellpadding=20>
			<tr>
				<td><center><h1>Bernardus van der Merwe</h1><br/>
				<img src="image1.jpg" alt="Myself" height=200px /><br/>
				<a href="mailto:barny.vdm@gmail.com">barny.vdm@gmail.com</a><br/>
                    Portfolio to be added later.</center><br/>
			</tr>
		</table></center>
		
		<br/>
		<hr/>
		<br/>
		
		<center><table  cellpadding=10>
            <tr>
                <td><h2>Why does this site exist?</h2><a href="#top">[To Top]</a></td>
            </tr>
            <tr>
                <td><p>This site was a silly assignment we had to do in first year. It is just a temporary landing page until I get my Portfolio site up and running.</p></td>
            </tr>
			<tr>
				<td><h2>Who am I?</h2><a href="#top">[To Top]</a></td>
			</tr>
			<tr>
				<td><p>I am a motivated student currently studying Multimedia. I feel the need to excell in all fields <br/>
				and try my best at everything I do.</p><hr/></td>
			</tr>
			<tr>
				<td><h2>Where do I come from?</h2><a href="#top">[To Top]</a></td>
			</tr>
			<tr>
				<td>
					<ul>
						<li>
							Age: <?php 
                                $birthDate = "04/26/1993";
                                //explode the date to get month, day and year
                                $birthDate = explode("/", $birthDate);
                                //get age from date or birthdate
                                $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2]));
                                echo $age; 
                                ?><br/>
						</li>
						<li>
							Hometown: Kempton Park, South Africa<br/>
						</li>
						<li>
							Date Of Birth: 26/04/1993<br/>
						</li>
					</ul>
					<hr/>
				</td>
			</tr>
			<tr>
				<td><h2>My Five Favourite things to do:</h2><a href="#top">[To Top]</a></td>
			</tr>
			<tr>
				<td>
					<ol>
						<li>Sleeping</li>
						<li>Socialising</li>
						<li>Browsing the Internet</li>
						<li>Eating</li>
						<li>Creating things digitally</li>
					</ol>
					<hr/>
				</td>
			</tr>
			<tr>
				<td><h2>My Favourite websites:</h2><a href="#top">[To Top]</a></td>
			</tr>
			<tr>
				<td>
					<ul>
						<li><a href="http://www.reddit.com" target="_blank">Reddit</a></li>
						<li><a href="http://www.memebase.com" target="_blank">Memebase</a></li>
						<li><a href="http://www.facebook.com" target="_blank">Facebook</a></li>
						<li><a href="http://www.twitter.com" target="_blank">Twitter</a></li>
						<li><a href="http://www.youtube.com" target="_blank">YouTube</a></li>
					</ul>
					<hr/>
				</td>
			</tr>
		</table></center>
		
		
		<div id = "bottom">
            © 2013 Copyright Bernardus van der Merwe. All Rights Reserved. <br/>
            Site powered by: <a href="http://www.000webhost.com/" target="_blank"><img src="http://www.000webhost.com/images/80x15_powered.gif" alt="Web Hosting" width="80" height="15" border="0" /></a>
        </div>
	</body>
</html>