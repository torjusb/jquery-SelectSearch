( function ($) {
	$.fn.selectSearch = function () {
		return this.each( function () {
			var $select = $(this),
				$options = $select.children(),
				$form = $select.parent('form'),
				$search = $('<input type="text" />');
			
			// Object that contains any unmatched element	
			var hidden = {};
			
			// Insert search input into the dom
			$select.before($search);
			$search.wrap('<label class="select-searcher">').before('<span>Søk</span>');
		
			$search.bind('keyup change', function () {
				var $this = $(this),
					value = escape($this.val().toLowerCase()),
					regex = new RegExp('^' + value, 'i');
				
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
			});
			
			// Insert all the hidden elements into the select on submit
			$form.submit ( function () {
				for (var i in hidden) {
					hidden[i].prependTo($select);
				}
			});
		});		
	};
})(jQuery);