<?php
// Start the buffering //
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <title>Newsletter de l'Échangeur</title>
    <style type="text/css">

    @font-face {
		    font-family: 'LMDLD';
		    src: url('/theatre-lechangeur/v2/assets/fonts/LMDLD.woff2') format('woff2'),
		        url('/theatre-lechangeur/v2/assets/fonts/LMDLD.woff') format('woff');
		    font-weight: normal;
		    font-style: normal;
		}

		@font-face {
		    font-family: 'Bebas';
		    src: url('/theatre-lechangeur/v2/assets/fonts/BebasNeue.woff2') format('woff2'),
		        url('/theatre-lechangeur/v2/assets/fonts/BebasNeue.woff') format('woff');
		    font-weight: normal;
		    font-style: normal;
		}

		@font-face {
		    font-family: 'Avenir';
		    src: url('/theatre-lechangeur/v2/assets/fonts/AvenirNextLTPro-Cn.woff2') format('woff2'),
		        url('/theatre-lechangeur/v2/assets/fonts/AvenirNextLTPro-Cn.woff') format('woff');
		    font-weight: normal;
		    font-style: normal;
		}

	    * { margin: 0; padding: 0; font-size: 100%; font-family: 'Avenir', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; line-height: 1.65; }

			img { max-width: 100%; margin: 0 auto; display: block; }

			body, .body-wrap { width: 100% !important; height: 100%; background: #FFF; }

			.content a { color: #3F3F3F; text-decoration: none; text-transform: uppercase; font-family: "Bebas", sans-serif; letter-spacing: 0.02em; border-left: 4px solid #fff200;padding: 2px 10px; display: block;}

			a:hover { text-decoration: underline; }

			.text-center { text-align: center; }

			.text-right { text-align: right; }

			.text-left { text-align: left; }

			.button { display: inline-block; color: white; background: #71bc37; border: solid #71bc37; border-width: 10px 20px 8px; font-weight: bold; border-radius: 4px; }

			.button:hover { text-decoration: none; }

			h1, h2, h3, h4, h5, h6 { margin:0; line-height: 1.2; }

			h1 { font-size: 32px; font-family: "LMDLD";font-weight: 500; color: #3F3F3F;}

			h2 { font-size: 25px; color: #000; font-weight:normal; font-family: "Bebas", sans-serif; letter-spacing: 0.02em; margin-top:20px;}

			h2+p{
				margin-top: 20px;
			}

			h3 { font-size: 19px; color: #3F3F3F; font-weight:normal; font-family: "Bebas", sans-serif; letter-spacing: 0.02em; margin-bottom:10px; letter-spacing: 0.02em;}

			h4 { font-size: 19px; text-transform: uppercase; font-family: "Bebas", sans-serif;font-weight: normal; letter-spacing: 0.02em;}

			h5 { font-size: 16px; }

			p, ul, ol { font-size: 16px; font-weight: normal; margin-bottom: 20px; }

			.container { display: block !important; clear: both !important; margin: 0 auto !important; max-width: 580px !important; }

			.container table { width: 100% !important; border-collapse: collapse; }

			.container .preview { font-size: 12px; text-decoration: underline; padding: 10px 0;}
			.container .masthead { background: rgb(255, 242, 0);}

			.container .content { background: white; padding: 30px 0; }

			.container .content > section { border-bottom: 4px solid rgb(255, 242, 0); margin-bottom: 30px; padding-bottom: 10px}

			.container .content.footer { background: none; }

			.container .content.footer p { margin-bottom: 0; color: #888; text-align: center; font-size: 14px; }

			.container .content.footer a { color: #888; text-decoration: none; font-weight: bold; }

			.container .content.footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>
<table class="body-wrap">
	<tr>
		<td class="container">
			<table>
				<tr>
					<td align="center" class="preview">
						<a href="<?= $page->url()?>" title="<?= $page->title()?>">
							Afficher la newsletter dans votre navigateur
						</a>
					</td>
				</tr>
				<tr>
					<td align="center" class="masthead">
						<?php $logo = $site->logo()->toFile();?>
						<a href="<?= $site->url()?>" title="<?= $site->title()?>">
							<img src="<?= $logo->url() ?>" alt="<?= $site->title()?>">
						</a>
					</td>
				</tr>
				<tr>
					<td class="content">
						<?php 
							foreach($page->mybuilder()->toBuilderBlocks() as $block):
							  snippet('blocks/' . $block->_key(), array('data' => $block));
							endforeach;
						?>
					</td>
				</tr>
    </tr>
    <tr>
			<td class="container">
        <table>
          <tr>
            <td class="content footer" align="center">

						</td>
					</tr>
				</table>

			</td>
		</tr>
</table>
</body>
</html>

<?php

// Get the content that is in the buffer and put it in your file //
file_put_contents($page->root().'/'.Str::slug($page->title()).'.html', ob_get_contents());
?>