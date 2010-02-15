( function ($) {
	$.fn.selectSearch = function (options) {
		
		// Metatable : __index
		options = $.extend({}, $.fn.selectSearch.defaults, options);

		return this.each( function () {
			var $select = $(this),
				$form = $select.parent('form');
				
			var $options;
			if (options.cache) {
				$options = $select.children();
			}
			
			// Object that contains any unmatched element	
			var hidden = {};
			
			// Insert search input into the dom
			var $searchHtml = $(options.searchHtml),
				$search = $searchHtml.find('input[type="text"]');

			$select[options.position]($searchHtml);
			
			$search.bind('keyup', function () {
				var $this = $(this),
					value = escape($this.val().toLowerCase()),
					regex = new RegExp('^' + value, 'i');
				
				// Collect children if cache is false
				if (!options.cache) {
					$options = $select.children();
				}
							
				// Loop trough hidden objects
				for (var i in hidden) {
					var $obj = hidden[i],
						text = escape($obj.text().toLowerCase());
					
					// Insert matched elements back into the select
					if (text.match(regex)) {
						$obj.prependTo($select);
						$obj = null;
					}	
				}		
				
				
				// Loop trough select						
				$options.each( function (i) {
					var $opt = $(this),
						text = escape($opt.text().toLowerCase());
					
					// Remove unmatched
					if (!text.match(regex)) {
						$opt.detach();
						hidden[i] = $opt;
					}
					
				});			
				
				if (options.sort) {				
					var $sortChilds = $select.children();
					$sortChilds.sort(options.sortFunc);				
	
					$select.empty();
					$sortChilds.each( function () {;
						$(this).appendTo($select);
					});
				}
			});
			
			// Insert all the hidden elements into the select on submit
			$form.submit ( function () {
				for (var i in hidden) {
					hidden[i].prependTo($select);
				}
			});
		});		
	}
	
	$.fn.selectSearch.defaults = {
		cache : false,
		position : 'before',
		searchHtml : '<label><span>Search</span><input type="text" /></label>',
		sort : true,
		sortFunc : function (a, b) {
			return $(a).text().toLowerCase() > $(b).text().toLowerCase();
		}
	}
})(jQuery);