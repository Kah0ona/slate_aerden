<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build --> 
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->
     
<script>
		var buildBandenMaat = function(item){
			var props = item.ProductProperty;
			var width = props[0].propertyValue;
			var ar = props[1].propertyValue;
			var speed = props[2].propertyValue.substring(0,2);
			var inch = props[3].propertyValue;
			var draag = props[4].propertyValue;

			var res = draag.match(/[0-9]+/g); //only match numeric part

			return width+"/"+ar+" R"+inch+" "+res+speed;
		}
		var myCustomRenderer_1 = function(jsonObj){
			var target = $(this.settings.target_elt);

			var currentHeader = $('.filter_search_results_'+this.id+' tr').first();

			var str = "";
			str += "<h3>Zoekresultaten</h3>";
			str += "<table class='filter_search_results filter_search_results_"+this.id+"'>";

			if(currentHeader != null && currentHeader.children('th').size() != 0){
				str += "<tr>"+currentHeader.html()+"</tr>";
			} else {
				str += "<tr><th></th><th data-sortkey='productName' data-title='Naam'  data-sortable='true'>Naam</th><th>Merk</th>";
				str += "<th>Bandenmaat</th>";
				str += "<th>Type</th>";
				str += "<th>Energie</th>";
				str += "<th>Grip</th>";
				str += "<th>Geluid</th>";
				str += "<th data-sortkey='productPrice' data-title='Prijs' data-sortable='true'>Prijs</th><th>#</th><th></th></tr>";
			}
			for(var i = 0; i < jsonObj.length; i++){
				var item = jsonObj[i];
				this.logger(item);
				str += "<tr>";
				str += " <td><img src='"+this.settings.base_url+"/uploads/Product/"+item.imageDish+"' /></td>";
				str += " <td><a href='/products/"+item.Product_id+"'>"+this.getEmptyStringIfNull(item.brand)+"</a></td>";
				str += " <td><a href='/products/"+item.Product_id+"'>"+item.productName+"</a></td>";
				var j = 0;

				//bandenmerk
				str += "<td>"+buildBandenMaat(item)+"</td>";
				str += "<td>"+item.ProductProperty[5].propertyValue+"</td>";//type
				str += "<td>"+item.ProductProperty[6].propertyValue+"</td>";//energie
				str += "<td>"+item.ProductProperty[7].propertyValue+"</td>";//grip
				str += "<td>"+item.ProductProperty[9].propertyValue+" dB</td>";//decibel

				str += " <td>&euro; "+this.formatEuro(item.productPrice)+"</td>";
				str += " <td><input id='filter_quantity_"+item.Product_id+"' type='text' class='filter_quantity' value='1'/></td>";
				str += " <td><a href='#' data-productid='"+item.Product_id+"' class='filter_addtocart'>Voeg toe</a></td>";

				str += "</tr>";
			}
			str += "</table>";
			return str;
		}

	</script>	
    <!-- Wordpress head function -->
	<?php wp_head(); ?>

  </head> 
<body <?php body_class(); ?> >
<div class="Header-wrap">
    <!-- <div class="Header-gradient"> -->
        <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-bg.png" />-->
        <div class="u-gridContainer">
          <div class="Logo-img">
            <!-- <a href="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-aerden.png" /></a> -->
           </div>
        </div>
    <!-- </div> -->
</div>

<div class="Menu-wrap">
    <div class="u-gridContainer">   
        <div class="u-gridRow">
                <a class="Navigation-menuToggle" id="js-navCollapse">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-menu2"></use>
                    </svg>
                </a>
             <?php include 'includes/navigation.php'; ?>
		</div>
    </div>
</div>
